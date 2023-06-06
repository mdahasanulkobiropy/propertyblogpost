<?php

namespace App\Http\Controllers;

use App\Models\Featured;
use Illuminate\Http\Request;

class FeaturedController extends Controller
{

    //featured index method
    public function index(){
        $featureds = Featured::all();
        return view('backend.pages.featured.index', compact('featureds'));
    }


     //featured store/add method

    public function add(Request $request){

        $featured = new Featured();

        $featured->title = $request->title;
        $featured->save();
        return back();
    }

     //featured edit method
    public function edit($id){
        $featured = Featured::find($id);
        return view('backend.pages.featured.edit', compact('featured'));
    }

     //featured update method

    public function update(Request $request,  $id){

        $featured = Featured::find($id);

        $featured->title = $request->title;
        $featured->save();

        return to_route('admin.featured');
    }


    //featured Delete method

    public function delete($id){

        $featured = Featured::find($id);
        
        $featured->delete();

        return to_route('admin.featured');
    }
}
