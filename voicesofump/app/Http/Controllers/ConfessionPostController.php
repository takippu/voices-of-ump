<?php

namespace App\Http\Controllers;

use App\Models\ConfessionPost;
use Illuminate\Http\Request;

class ConfessionPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all post
        //$getPost = ConfessionPost::all();
        //return $getPost;

        $getPost = ConfessionPost::all();
        return view('confessions.index', [
            'confessions' => $getPost,
        ]);
    }

    public function indexAtWelcome(){
        $getPost = ConfessionPost::all();
        return view('welcome', [
            'confessions' => $getPost,
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
        //
        return view('confessions.show', [
            'confessions' => $confessionPost,
        ]);
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
        return redirect()->route('confessions.index')
        ->with('success-delete', 'delete successfully');

    }

    private function storeImage($request){

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();
        
        return $request->image->move($newImageName);
    }
}
