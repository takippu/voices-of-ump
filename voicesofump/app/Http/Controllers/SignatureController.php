<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignatureController extends Controller
{
    public function store(Request $request){
        if(Auth::check()){

            $post = $request->post_id;
            $opinion = $request->message;
            $anon = $request->anon;
            if($post){

                $signature = Signature::create([
                    'post_id' => $post,
                    'user_id' => Auth::user()->id,

                ]);
                $signature_id = $signature->id;

                $this->insertOpinion($post, $opinion, $signature_id,$anon);

                return redirect()->back()->with('message', 'signed' );
            }else{
                return redirect()->back()->with('message', 'failedsign' );

            }
        }else{
            return redirect()->back()->with('message', 'autherrorsign' );
        }
    }
    public function insertOpinion($post,$opinion,$signature_id,$anon){
        Opinion::create([
            'post_id' => $post,
            'signature_id' => $signature_id,
            'opinion' => $opinion,
            'anon' => $anon,
        ]);
    }
}
