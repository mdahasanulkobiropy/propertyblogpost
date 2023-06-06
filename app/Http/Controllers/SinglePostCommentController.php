<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\SingleAgentComment;
use App\Models\SinglePostComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SinglePostCommentController extends Controller
{

    public function index(){

        return view();
    }

    public function add(Request $request){



        $singlepostcomment = new SinglePostComment();

        $user_id = Auth::user()->id;
        $singlepostcomment->user_id = $user_id;
        $singlepostcomment->blogpost_id = $request->blogpost_id;
        $singlepostcomment->comment = $request->comment;
        $singlepostcomment->save();

        $singleblog = BlogPost::find($singlepostcomment->blogpost_id);
        $comments = SinglePostComment::all();
        $user = User::find($singlepostcomment->user_id);

        $view = view('frontend.pages.blog.singleblogcomment', compact('singleblog', 'comments', 'user'))->render();
        return response()->json([
            'success' => 'Comment Succesfully Done',
            'commentall' => $view,
        ]);
    }
}
