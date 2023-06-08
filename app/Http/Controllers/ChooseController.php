<?php

namespace App\Http\Controllers;

use App\Models\Choose;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ChooseController extends Controller
{
    //choose index method
    public function index(){

        $chooses = Choose::all();
        return view('backend.pages.choose.index', compact('chooses'));
    }

    //choose edit method
    public function edit($id){

        $choose = Choose::find($id);

        return view('backend.pages.choose.edit', compact('choose'));

    }

    //choose update method

    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'sub_Title' => 'required',
            'button_text' => 'required',
        ]);

        $choose = Choose::find($id);

        $choose->update($request->except('_token')+['created_at' => Carbon::now()]);
        if($request->file('image') != ''){
            $image = $request->file('image');
            $filename = rand().time().".". $image->extension();
            $location = public_path('backend/upload/image/choose');
            $image->move($location, $filename);
            $choose->image =  $filename;
        }

        $choose->save();

        return to_route('admin.choose');

    }
}
