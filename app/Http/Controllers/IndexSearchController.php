<?php

namespace App\Http\Controllers;

use App\Models\IndexSearch;
use Illuminate\Http\Request;

class IndexSearchController extends Controller
{

    //index method indexsearch
    public function index(){

        $indexsearchs = IndexSearch::all();

        return view('backend.pages.indexsearch.index', compact('indexsearchs'));
    }


    //edit method indexsearch
    public function edit($id){

        $indexsearch = IndexSearch::find($id);

        return view('backend.pages.indexsearch.edit', compact('indexsearch'));
    }
    //edit method indexsearch
    public function update(Request $request, $id){

        $indexsearch = IndexSearch::find($id);
        $indexsearch->update($request->except('_token'));

        if($request->file('image') != ''){

            $image = $request->file('image');
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/image/indexsearch');
            $image->move($location, $filename);
            $indexsearch->image = $filename;
        }

        $indexsearch->save();

        return to_route('admin.indexsearch');
    }
}
