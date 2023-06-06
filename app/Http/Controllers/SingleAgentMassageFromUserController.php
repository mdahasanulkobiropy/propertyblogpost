<?php

namespace App\Http\Controllers;

use App\Models\SingleAgentMassageFromUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SingleAgentMassageFromUserController extends Controller
{

    public function add(Request $request){

        $user_id = Auth::user()->id;

        $massagefromuser = new SingleAgentMassageFromUser();
        $massagefromuser->email = $request->email;
        $massagefromuser->phone = $request->phone;
        $massagefromuser->status_id = $request->status_id;
        $massagefromuser->agent_id = $request->agent_id;
        $massagefromuser->user_id = $user_id;
        $massagefromuser->save();

        return response()->json([
            'success' => 'Your Massage Successfully Sent!'
        ]);
    }

    public function mymassage(){

        $user_id = Auth::user()->id;

        $mymassages = SingleAgentMassageFromUser::where('user_id', $user_id)->get();

        return view('backenduser.pages.massage.index', compact('mymassages'));

    }
}
