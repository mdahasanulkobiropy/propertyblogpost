<?php

namespace App\Http\Controllers;

use App\Models\ChooseItem;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChooseItemController extends Controller
{

    public function index(){
        $chooseitems = ChooseItem::all();
        return view('backend.pages.chooseitem.index', compact('chooseitems'));
    }

    public function add(Request $request){

        $request->validate([
            'title' => 'required',
            'sub_title_part1' => 'required',
            'sub_title_part2' => 'required',
            'button_text' => 'required',
            'image' => 'required|image',
            'route' => 'required',
        ]);

        $chooseitem = ChooseItem::create($request->except('_token')+['created_at' => Carbon::now()]);

        $image = $request->file('image');
        $filename = rand().time().".". $image->extension();
        $location = public_path('backend/upload/image/choose/chooseitem');
        $image->move($location, $filename);
        $chooseitem->image = $filename;

        $chooseitem->save();

        return back();
    }

    public function edit($id){

        $chooseitem = ChooseItem::find($id);

        return view('backend.pages.chooseitem.edit', compact('chooseitem'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'sub_title_part1' => 'required',
            'sub_title_part2' => 'required',
            'button_text' => 'required',
            'route' => 'required',
        ]);

        $chooseitem=ChooseItem::find($id);
        $chooseitem->update($request->except('_token')+['created_at' => Carbon::now()]);

        if($request->file('image') != ''){
            $image = $request->file('image');
            $filename = rand().time().".". $image->extension();
            $location = public_path('backend/upload/image/choose/chooseitem');
            $image->move($location, $filename);
            $chooseitem->image = $filename;
        }

        $chooseitem->save();

        return to_route('admin.chooseitem');
    }

    public function delete($id){

        $chooseitem = ChooseItem::find($id);

        $chooseitem->delete();

        return back();
    }
}
