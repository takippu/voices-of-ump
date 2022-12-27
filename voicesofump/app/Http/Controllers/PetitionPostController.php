<?php

namespace App\Http\Controllers;

use App\Models\PetitionPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetitionPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getPost = PetitionPost::all();
        return view('petitions.index', [
            'petitions' => $getPost,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check auth or guest
        if(Auth::check()){
            if($request->hasFile('image')){

                //security purpose
                $request->validate([
                    'image' => ['required', 'mimes:jpg,jpeg,png']
                ]);
    
                PetitionPost::create([
                    'title' => $request->title,
                    'content' => $request->content,
                    'signature_goals' => $request->goals,
                    'user_id' => auth()->id(),
                    'image_path' => $this->storeImage($request),
                ]);
    
    
    
            }else{
                PetitionPost::create([
                    'title' => $request->title,
                    'content' => $request->content,
                    'signature_goals' => $request->goals,
                    'user_id' => auth()->id(),
                    
                ]);
            }
            
    
                
         
    
            
        }else{
            return redirect()->back()->with('message', 'autherror');
        }

        return redirect()->back()->with('message', 'done');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetitionPost  $petitionPost
     * @return \Illuminate\Http\Response
     */
    public function show(PetitionPost $petitionPost)
    {
        return view('petitions.show', [
            'petitions' => $petitionPost,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetitionPost  $petitionPost
     * @return \Illuminate\Http\Response
     */
    public function edit(PetitionPost $petitionPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PetitionPost  $petitionPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetitionPost $petitionPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetitionPost  $petitionPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetitionPost $petitionPost)
    {
        //
    }
    
    private function storeImage($request){

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();
        
        return $request->image->move($newImageName);
    }

}
