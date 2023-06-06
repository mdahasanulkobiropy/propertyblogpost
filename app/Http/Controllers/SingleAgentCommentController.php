<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\SingleAgentComment;
use App\Models\SingleAgentCommentReply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleAgentCommentController extends Controller
{

    public function add(Request $request){

        if($request->comment == ''){

            return response([
                'errorComment' => 'Fill Up The Comment Field!'
            ]);
        }

        $user_id = Auth::user()->id;

        $sngleagentcomment = new SingleAgentComment();

        $sngleagentcomment->agent_id = $request->agent_id;
        $sngleagentcomment->user_id = $user_id;
        $sngleagentcomment->comment = $request->comment;

        $sngleagentcomment->save();

        $comments = SingleAgentComment::all();
        $agent = User::find($sngleagentcomment->agent_id);

        $view = view('frontend.pages.agents.agentcomment', compact('comments', 'agent'))->render();

        return response()->json([
            'success' => 'Comment Successfully Done!',
            'commentall' => $view,
        ]);

        // $view = view('frontend.pages.agents.agentcomment', compact('comments', 'users', 'agents'))->render();

    }
}
