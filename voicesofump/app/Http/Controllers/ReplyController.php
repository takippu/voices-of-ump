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
                return redirect()->back()->with('message', 'noreply');
            }

            $post = $request->comment_parent_id;
            if($post){

                Reply::create([
                    'comment_parent_id' => $post,
                    'user_id' => Auth::user()->id,
                    'reply' => $request->reply
                ]);
                return redirect()->back()->with('message', 'successreply' );
            }else{
                return redirect()->back()->with('message', 'errorreply' );

            }
        }else{
            return redirect()->back()->with('message', 'autherrorreply' );
        }
    }
    public function destroy($post,$reply)
    {
        $reply = Reply::find($reply);
        $reply->delete();
        return redirect()->back()
        ->with('success-delete', 'delete successfully');

    }
}
