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

    public function manageUser(){

        $getallUsers = User::paginate(10);
        return view('dashboard.adminComponents.manage-users', [
            'get_all_users' => $getallUsers,
        ]);

    }
    
    public function banUser($id){
        $getUser = DB::table('users')
        ->where('id', '=', $id)
        ->get();

        User::where('id', $id)->update(array('blocked_at' => now()));

        return back()->with('message', 'successban');
    }
    public function unbanUser($id){
        $getUser = DB::table('users')
        ->where('id', '=', $id)
        ->get();

        User::where('id', $id)->update(array('blocked_at' => NULL));

        return back()->with('message', 'successunban');
    }


    
}
