<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\ConfessionPost;
use App\Models\Like;
use App\Models\PetitionPost;
use App\Models\Signature;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $getPostfromUser = ConfessionPost::all();
        $getCommentfromUser = Comment::all();
        $getPetitionfromUser = PetitionPost::all();
        $getLikesfromUser = Like::all();
        $getSignaturesFromUser = Signature::all();
        $opinioncount = DB::table('opinions')->whereNotNull('opinion')->count();
        return view('dashboard.index', [
            'confessions_from_user' => $getPostfromUser,
            'comments_from_user' => $getCommentfromUser,
            'petitions_from_user' => $getPetitionfromUser,
            'likes_from_user' => $getLikesfromUser,
            'signatures_from_user'=>$getSignaturesFromUser,
            'opinionCount' => $opinioncount,
        ]);
    }

    public function managePosts(){

        $getPostfromUser = ConfessionPost::oldest()->paginate(5, ['*'], 'confessions');
        $getPetitionfromUser = PetitionPost::oldest()->paginate(5, ['*'], 'petitions');
        $getPostforUser = ConfessionPost::all();
        $getPetitionforUser = PetitionPost::all();
        return view('dashboard.posts', [
            'confessions_from_user_for_admin' => $getPostfromUser,
            'petitions_from_user_for_admin' => $getPetitionfromUser,
            'confessions_from_user' => $getPostforUser,
            'petitions_from_user' => $getPetitionforUser,
        ]);

    }

    
    public function createAdmin(){

        return view('dashboard.adminComponents.create-admin');
    }
    public function storeAdmin(Request $request){

        User::create([
            'name' => $request->name . '(Admin)',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'roles' => $request->roles,
        ]);

        return back()->with('message','add-success');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    
}
