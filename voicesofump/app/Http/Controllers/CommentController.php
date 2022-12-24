<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\ConfessionPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request){
        if(Auth::check()){
            $validator = Validator::make($request->all(),[
                'comment' => 'required|string'
            ]);

            if($validator->fails()){
                return redirect()->back()->with('message', 'nocomment');
            }

            $post = $request->postID;
            if($post){

                Comment::create([
                    'post_id' => $post,
                    'user_id' => Auth::user()->id,
                    'comment' => $request->comment
                ]);
                return redirect()->back()->with('message', 'success' );
            }else{
                return redirect()->back()->with('message', 'errorpost' );

            }
        }else{
            return redirect()->back()->with('message', 'autherror' );
        }
    }
    public function destroy($post,$comment)
    {
        $comm = Comment::find($comment);
        $comm->delete();
        return redirect()->back()
        ->with('success-delete', 'delete successfully');

    }
}
