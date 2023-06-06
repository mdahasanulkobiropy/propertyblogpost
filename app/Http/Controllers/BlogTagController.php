<?php

namespace App\Http\Controllers;

use App\Models\BlogTag;
use Illuminate\Http\Request;

class BlogTagController extends Controller
{
       //index method blogtag
       public function index(){

        $blogtags = BlogTag::all();
        return view('backend.pages.blogtag.index', compact('blogtags'));
    }

    // add/store method blogtag

    public function add(Request $request){

        $blogtag = BlogTag::create($request->except('_token'));
        return back();
    }

     // edit method blogcategory
    public function edit($id){

        $blogtag = BlogTag::find($id);

        return view('backend.pages.blogtag.edit', compact('blogtag'));
    }

     // update method blogtag
    public function update(Request $request, $id){

        $blogtag = BlogTag::find($id);

        $blogtag->update($request->except('token'));

        return to_route('admin.blogtag');
    }

    public function delete($id){

        $blogtag = BlogTag::find($id);
        $blogtag->delete();
        
        return to_route('admin.blogtag');
    }
}
