<?php

namespace App\Http\Controllers;

use App\Models\AgentText;
use Illuminate\Http\Request;

class AgentTextController extends Controller
{

    //index method agenttext
    public function index(){

        $agenttexts = AgentText::all();

        return view('backend.pages.agenttext.index', compact('agenttexts'));
    }

    //edit method agenttext
    public function edit($id){

        $agenttext = AgentText::find($id);

        return view('backend.pages.agenttext.edit', compact('agenttext'));
    }
    //update method agenttext
    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'find_title' => 'required',
            'name' => 'required',
            'location' => 'required',
        ]);

        $agenttext = AgentText::find($id);
        $agenttext->update($request->except('_token'));

        if($request->file('image') != ''){

            $image = $request->file('image');
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/agent');
            $image->move($location, $filename);
            $agenttext->image = $filename;
        }
        $agenttext->save();

        return to_route('admin.agenttext');
    }
}
