<?php

namespace App\Http\Controllers;

use App\Models\MassageFromUserToAdmin;
use Illuminate\Http\Request;

class MassageFromUserToAdminController extends Controller
{

    public function index(){

        $message = MassageFromUserToAdmin::all();

        return view('backend.pages.massagetopic.massage', compact('message'));
    }

    public function add(Request $request){

        // return response()->json([
        //     'success' => 'success'
        // ]);

        $message = new MassageFromUserToAdmin();

        $message->name = $request->name;
        $message->email = $request->email;
        if($request->phone != ''){
            $message->phone = $request->phone;
        }
        $message->message = $request->message;
        $message->topic_id = $request->topic_id;

        $message->save();

        return response()->json([
            'success' => 'Successfully send your message!'
        ]);
    }
}
