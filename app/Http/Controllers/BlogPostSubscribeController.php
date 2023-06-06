<?php

namespace App\Http\Controllers;

use App\Models\BlogPostSubscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostSubscribeController extends Controller
{

    public function subscribe(Request $request){

        if($request->email == ''){
            return response()->json([
                'emailerror' => 'Fill Up The Email Field!'
            ]);
        }

;
        if(BlogPostSubscribe::where('email', $request->email)->exists()){
            return response()->json([
                'duplicateerror' => 'This email alredy exist!'
            ]);
        }


        $user = Auth::user()->id;
        $subscriber = new BlogPostSubscribe();
        $subscriber->user_id = $user;
        $subscriber->email = $request->email;
        $subscriber->save();
        return response()->json([
            'success' => "Successfully Subscribe.",
        ]);

    }
}
