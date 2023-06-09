<?php

namespace App\Http\Controllers;

use App\Models\BlogPostText;
use Illuminate\Http\Request;

class BlogPostTextController extends Controller
{

    ///index method
    public function index(){

        $blogpostfrontendtexts = BlogPostText::all();

        return view('backend.pages.blogpostfrontendtext.index', compact('blogpostfrontendtexts'));
    }

     ///edit method
    public function edit($id){

        $blogpostfrontendtext = BlogPostText::find($id);



        return view('backend.pages.blogpostfrontendtext.edit', compact('blogpostfrontendtext'));
    }

     ///update method
    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'featured' => 'required',
            'search' => 'required',
            'category' => 'required',
            'tag' => 'required',
            'subscribe_title' => 'required',
            'subscribe_sub_title' => 'required',
            'subscribe_button' => 'required',
        ]);

        $blogpostfrontendtext = BlogPostText::find($id);
        $blogpostfrontendtext->update($request->except('_token'));

        if($request->file('image') != ''){

            $image = $request->file('image');
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/blogpost');
            $image->move($location, $filename);
            $blogpostfrontendtext->subscribe_image = $filename;
        }
        $blogpostfrontendtext->save();

        return to_route('admin.blogpost.text');
    }
}
