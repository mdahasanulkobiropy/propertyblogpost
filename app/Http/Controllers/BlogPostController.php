<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogPostImage;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function index(){

        $blogcategories = BlogCategory::all();
        $blogtags = BlogTag::all();
        $blogposts = BlogPost::all();
        return view('backend.pages.blogpost.index', compact('blogcategories', 'blogtags', 'blogposts'));
    }

    public function add(Request $request){

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

    public function edit($id){

        $blogpost = BlogPost::find($id);
        $blogcategories = BlogCategory::all();
        $blogtags = BlogTag::all();

        return view('backend.pages.blogpost.edit', compact('blogpost', 'blogcategories', 'blogtags'));

    }

    public function update(Request $request, $id){

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


    public function delete($id){

        $blogpost = BlogPost::find($id);

        BlogPostImage::where('blogpost_id', $blogpost->id)->get()->each->delete();

        $blogpost->delete();

        return back();
    }

    public function details($id){

        $blogpost = BlogPost::find($id);

        return view('backend.pages.blogpost.betails', compact('blogpost'));
    }
}
