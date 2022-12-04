<?php

namespace App\Http\Controllers;

use App\Models\PetitionPost;
use Illuminate\Http\Request;

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
        //
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
}
