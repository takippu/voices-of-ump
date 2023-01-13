<?php

namespace App\Http\Controllers;

use App\Http\Middleware\onlyAdmin;
use App\Models\ConfessionPost;
use App\Models\Like;
use App\Models\PetitionPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConfessionPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() //this is to set middleware to only edit pages
    {
        $this->middleware('adminAllowed')->only('edit');
    }
    public function index()
    {
        //get all post
        //$getPost = ConfessionPost::all();
        //return $getPost;
    /**        
     * $getPost = ConfessionPost::all();
        return view('confessions.index', [
            'confessions' => $getPost,
        ]);
     */
        $getPost = ConfessionPost::latest()->paginate(9);
        return view('confessions.index', [
            'confessions' => $getPost,
        ]);
    }
 /** to display posts at welcome page */
    public function indexAtWelcome(){
        $getPost = ConfessionPost::all();
        $getPost2 = PetitionPost::all();
        return view('welcome', [
            'confessions' => $getPost,
            'petitions' => $getPost2,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('confessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** 
        if (!$request->has('image')) {
            return response()->json(['message' => 'Missing file'], 422);
        }else{
            return response()->json(['message' => 'not miss file'], 422);

        }
        */
        //check auth or guest
        if(Auth::check()){
            if($request->hasFile('image')){

                //security purpose
                $request->validate([
                    'image' => ['required', 'mimes:jpg,jpeg,png']
                ]);
    
                ConfessionPost::create([
                    'title' => $request->title,
                    'content' => $request->content,
                    'user_id' => auth()->id(),
                    'image_path' => $this->storeImage($request)
                ]);
    
    
    
            }else{
                ConfessionPost::create([
                    'title' => $request->title,
                    'content' => $request->content,
                    'user_id' => auth()->id(),
                    
                ]);
            }
            
    
                
         
    
            
        }else{
            if($request->hasFile('image')){

                //security purpose
                $request->validate([
                    'image' => ['required', 'mimes:jpg,jpeg,png']
                ]);
    
                ConfessionPost::create([
                    'title' => $request->title,
                    'content' => $request->content,
                    'user_id' => '0',
                    'image_path' => $this->storeImage($request)
                ]);
    
    
    
            }else{
                ConfessionPost::create([
                    'title' => $request->title,
                    'content' => $request->content,
                    'user_id' => '0',
                    
                ]);
            }
        }

        return redirect()->back()->with('message', 'done');


        //ConfessionPost::create($request->validated());
        //return redirect()->route('confessions.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConfessionPost  $confessionPost
     * @return \Illuminate\Http\Response
     */
    public function show(ConfessionPost $confessionPost)
    {   

        $confessionPost->addViews();//add views

        if(Auth::check()){ 
                //check if user already like or not
                $user = DB::table('likes')->where('user_id', Auth::user()->id)->first();
                $post = DB::table('likes')->where('post_id', $confessionPost->id)->first();
                if ($user && $post){
                    return view('confessions.show', [
                        'confessions' => $confessionPost,
                        'message' => 'dahlike', //if already like return message
                    ]);
                }else{
                    return view('confessions.show', [
                        'confessions' => $confessionPost,
                        'message' => 'belumlike', //if not yet like return message
                    ]);
                }
        }else{ //guest
                return view('confessions.show', [
                    'confessions' => $confessionPost,
                    'status'    => 'guest', //send some message
                ]);

        }

        
       


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConfessionPost  $confessionPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ConfessionPost $confessionPost)
    {
        //

        return view('confessions.edit', [
            'confessions' => $confessionPost,
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConfessionPost  $confessionPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfessionPost $confessionPost)
    {
        //
        $confessionPost->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect('/confessions/'. $confessionPost->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConfessionPost  $confessionPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConfessionPost $confessionPost)
    {
        //
        $confessionPost->delete();
        return redirect()->back()
        ->with('success-delete', 'deletesuccess');

    }

    private function storeImage($request){

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();
        
        return $request->image->move($newImageName);
    }

}
