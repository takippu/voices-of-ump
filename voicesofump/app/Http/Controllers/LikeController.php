<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LikeController extends Controller
{
    public function store(Request $request){
        if(Auth::check()){

            $post = $request->postID;
            if($post){

                Like::create([
                    'post_id' => $post,
                    'user_id' => Auth::user()->id,
                    'likes' => '1',
                ]);
                return redirect()->back()->with('message', 'successlikes' );
            }else{
                return redirect()->back()->with('message', 'failedlikes' );

            }
        }else{
            return redirect()->back()->with('message', 'autherrorlikes' );
        }
    }

    public function destroy($post,$likes)
    {
        $like = Like::find($likes);
        $like->delete();
        return redirect()->back()
        ->with('success-delete', 'deletedlikes');

    }
}
