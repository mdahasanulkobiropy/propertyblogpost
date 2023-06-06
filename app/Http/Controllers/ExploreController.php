<?php

namespace App\Http\Controllers;

use App\Models\Explore;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(){

        $explores = Explore::all();

        return view('backend.pages.explore.index', compact('explores'));
    }


    //status store/add method
    public function add(Request $request){

        $explore = new Explore();

        $explore->title = $request->title;
        $explore->save();

        return back();
    }

    //status edit method

    public function edit($id){

        $explore = Explore::find($id);

        return view('backend.pages.explore.edit', compact('explore'));
    }

    public function update(Request $request, $id){

        $explore = Explore::find($id);

        $explore->title = $request->title;
        $explore->save();

        return to_route('admin.explore');
    }

    public function delete($id){

        $explore = Explore::find($id);
        $explore->delete();

        return back();

    }
}
