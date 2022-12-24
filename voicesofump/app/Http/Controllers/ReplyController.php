<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReplyController extends Controller
{
    public function store(Request $request){
        if(Auth::check()){
            $validator = Validator::make($request->all(),[
                'reply' => 'required|string'
            ]);

            if($validator->fails()){
                return redirect()->back()->with('message', 'Comment is neeed');
            }

            $post = $request->comment_parent_id;
            if($post){

                Reply::create([
                    'comment_parent_id' => $post,
                    'user_id' => Auth::user()->id,
                    'reply' => $request->reply
                ]);
                return redirect()->back()->with('message', 'success ' );
            }else{
                return redirect()->back()->with('message', 'error post ' );

            }
        }else{
            return redirect()->back()->with('message', 'login first' );
        }
    }
}
