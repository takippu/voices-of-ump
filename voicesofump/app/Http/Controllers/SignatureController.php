<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignatureController extends Controller
{
    public function store(Request $request){
        if(Auth::check()){

            $post = $request->postID;
            if($post){

                Signature::create([
                    'post_id' => $post,
                    'user_id' => Auth::user()->id,
                ]);
                return redirect()->back()->with('message', 'signed' );
            }else{
                return redirect()->back()->with('message', 'failedsign' );

            }
        }else{
            return redirect()->back()->with('message', 'autherrorsign' );
        }
    }
}
