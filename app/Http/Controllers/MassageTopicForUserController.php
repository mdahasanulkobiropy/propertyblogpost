<?php

namespace App\Http\Controllers;

use App\Models\MassageTopicForUser;
use Illuminate\Http\Request;

class MassageTopicForUserController extends Controller
{

    ////////////////////////////
    ////index method
    /////////////////////////
    public function index(){

        $topic = MassageTopicForUser::all();

        return view('backend.pages.massagetopic.index', compact('topic'));
    }

    ////////////////////////////
    ////add method
    /////////////////////////
    public function add(Request $request){

        $request->validate([
            'topic' => 'required'
        ]);

        $topic = MassageTopicForUser::create($request->except('_token'));

        return back();

    }

    ////////////////////////////
    ////edit method
    /////////////////////////
    public function edit($id){

        $topic = MassageTopicForUser::find($id);

        return view('backend.pages.massagetopic.edit', compact('topic'));

    }

    ////////////////////////////
    ////update method
    /////////////////////////
    public function update(Request $request, $id){

        $request->validate([
            'topic' => 'required'
        ]);

        $topic = MassageTopicForUser::find($id);

        $topic->update($request->except('_token'));

        return to_route('admin.contact.topic');

    }

    ////////////////////////////
    ////delete method
    /////////////////////////
    public function delete($id){

        $topic = MassageTopicForUser::find($id);

        $topic->delete();

        return back();

    }
}
