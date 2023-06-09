<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogPostImage;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    ////index method
    public function index(){

        $blogcategories = BlogCategory::all();
        $blogtags = BlogTag::all();
        $blogposts = BlogPost::all();
        return view('backend.pages.blogpost.index', compact('blogcategories', 'blogtags', 'blogposts'));
    }

    ////add method
    public function add(Request $request){


        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'middle_title' => 'required',
            'middle_des1' => 'required',
            'middle_des2' => 'required',
            'middle_url' => 'required',
            'next_middle_title' => 'required',
            'next_middle_des1' => 'required',
            'next_middle_des2' => 'required',
            'next_middle_des3' => 'required',
            'next_middle_des4' => 'required',
            'images' => 'required',
            'final_title' => 'required',
            'final_des' => 'required',
            'blogtag_id' => 'required',
            'blogcategory_id' => 'required',
        ]);

        $blogpost =BlogPost::create($request->except('_token'));

        $image = $request->file('image');
        $filename = rand().time().".".$image->extension();
        $location = public_path('backend/upload/blogpost');
        $image->move($location, $filename);
        $blogpost->image = $filename;
        $blogpost->save();

        foreach($request->file('images') as $images){

            $blogpostimage =new BlogPostImage();
            $blogpostimage->blogpost_id = $blogpost->id;
            $filename = rand().time().".".$images->extension();
            $location = public_path('backend/upload/blogpost/other');
            $images->move($location, $filename);
            $blogpostimage->blogpost_image = $filename;
            $blogpostimage->save();
        }

        return back();

    }

     ////edit method
    public function edit($id){

        $blogpost = BlogPost::find($id);
        $blogcategories = BlogCategory::all();
        $blogtags = BlogTag::all();

        return view('backend.pages.blogpost.edit', compact('blogpost', 'blogcategories', 'blogtags'));

    }

     ////update method
    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'middle_title' => 'required',
            'middle_des1' => 'required',
            'middle_des2' => 'required',
            'middle_url' => 'required',
            'next_middle_title' => 'required',
            'next_middle_des1' => 'required',
            'next_middle_des2' => 'required',
            'next_middle_des3' => 'required',
            'next_middle_des4' => 'required',
            'final_title' => 'required',
            'final_des' => 'required',
            'blogtag_id' => 'required',
            'blogcategory_id' => 'required',
        ]);

        $blogpost = BlogPost::find($id);

        $blogpost->update($request->except('_token'));

        if($request->file('image') != ''){
            $image = $request->file('image');
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/blogpost');
            $image->move($location, $filename);
            $blogpost->image = $filename;
            $blogpost->save();
        }

        if($request->file('images') != ''){
            $image = BlogPostImage::where('blogpost_id', $blogpost->id)->get()->each->delete();
            foreach($request->file('images') as $images){


                $blogpostimage = new BlogPostImage();
                $blogpostimage->blogpost_id = $blogpost->id;
                $filename = rand().time().".".$images->extension();
                $location = public_path('backend/upload/blogpost/other');
                $images->move($location, $filename);
                $blogpostimage->blogpost_image = $filename;
                $blogpostimage->save();
            }
        }

        return to_route('admin.blogpost');

    }

    ////delete method
    public function delete($id){

        $blogpost = BlogPost::find($id);

        BlogPostImage::where('blogpost_id', $blogpost->id)->get()->each->delete();

        $blogpost->delete();

        return back();
    }

     ////details method

    public function details($id){

        $blogpost = BlogPost::find($id);

        return view('backend.pages.blogpost.betails', compact('blogpost'));
    }
}
