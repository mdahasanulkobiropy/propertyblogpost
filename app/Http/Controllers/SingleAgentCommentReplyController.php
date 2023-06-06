<?php

namespace App\Http\Controllers;

use App\Models\SingleAgentCommentReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleAgentCommentReplyController extends Controller
{

    public function add(Request $request){


        if($request->reply ==''){
            return response()->json([
                'replyError' => 'Fill The ReplY Feild',
            ]);
        }

        $user_id = Auth::user()->id;

        $reply = new SingleAgentCommentReply();

        $reply->comment_id = $request->comment_id;
        $reply->user_id = $user_id;
        $reply->reply = $request->reply;

        $reply->save();
        return response()->json([
            'success' => 'Successfully Store Feild',

        ]);

    }

}
