<?php

namespace App\Http\Controllers;

use App\Models\IndexAllText;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexAllTextController extends Controller
{

    //index method
    public function index(){
        $indexalltexts = IndexAllText::all();
        return view('backend.pages.indexalltext.index', compact('indexalltexts'));
    }

    //edit method
    public function edit($id){

        $indexalltext = IndexAllText::find($id);
        return view('backend.pages.indexalltext.edit', compact('indexalltext'));
    }

    //update method

    public function update(Request $request, $id){

        $indexalltext = IndexAllText::find($id);

        $indexalltext->update($request->except('_token')+['created_at' => Carbon::now()]);
        $indexalltext->save();

        return to_route('admin.indexalltext');
    }
}
