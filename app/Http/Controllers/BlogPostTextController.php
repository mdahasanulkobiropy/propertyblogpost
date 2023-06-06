<?php

namespace App\Http\Controllers;

use App\Models\BlogPostText;
use Illuminate\Http\Request;

class BlogPostTextController extends Controller
{
    public function index(){

        $blogpostfrontendtexts = BlogPostText::all();

        return view('backend.pages.blogpostfrontendtext.index', compact('blogpostfrontendtexts'));
    }
    public function edit($id){

        $blogpostfrontendtext = BlogPostText::find($id);



        return view('backend.pages.blogpostfrontendtext.edit', compact('blogpostfrontendtext'));
    }
    public function update(Request $request, $id){

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
