<?php

namespace App\Http\Controllers;

use App\Models\PropertyCountroom;
use Illuminate\Http\Request;

class PropertyCountroomController extends Controller
{
      //index method countroom
      public function index(){

        $countrooms = PropertyCountroom::paginate(7);
        return view('backend.pages.propertycountroom.index', compact('countrooms'));
    }

    // add/store method countroom

    public function add(Request $request){

        $request->validate([
            'countroom' => 'required|unique:property_countrooms,countroom'
        ]);

        $countroom = PropertyCountroom::create($request->except('_token'));

        return back();
    }

     // edit method countroom
    public function edit($id){

        $countroom = PropertyCountroom::find($id);

        return view('backend.pages.propertycountroom.edit', compact('countroom'));
    }

     // update method countroom
    public function update(Request $request, $id){

        $request->validate([
            'bedroom' => 'required|unique:property_countrooms,countroom,'. $id,
        ]);

        $countroom = PropertyCountroom::find($id);

        $countroom->update($request->except('token'));



        return to_route('admin.countroom');
    }

    public function delete($id){

        $countroom = PropertyCountroom::find($id);
        $countroom->delete();

        return to_route('admin.countroom');
    }
}
