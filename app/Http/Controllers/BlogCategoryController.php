<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{

    //index method blogcategory
    public function index(){

        $blogcategories = BlogCategory::all();
        return view('backend.pages.blogcategory.index', compact('blogcategories'));
    }

    // add/store method blogcategory

    public function add(Request $request){



        $blogcategory = BlogCategory::create($request->except('_token'));

        // $blogcategory->save();

        return back();
    }

     // edit method blogcategory
    public function edit($id){

        $blogcategory = BlogCategory::find($id);

        return view('backend.pages.blogcategory.edit', compact('blogcategory'));
    }

     // update method blogcategory
    public function update(Request $request, $id){

        $blogcategory = BlogCategory::find($id);

        $blogcategory->update($request->except('token'));

        return to_route('admin.blogcategory');
    }

    public function delete($id){

        $blogcategory = BlogCategory::find($id);
        $blogcategory->delete();

        return to_route('admin.blogcategory');
    }
}
