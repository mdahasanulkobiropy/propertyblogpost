<?php

namespace App\Http\Controllers;

use App\Models\PropertyFrontendText;
use Illuminate\Http\Request;

class PropertyFrontendTextController extends Controller
{

    //index method
    public function index(){

        $propertyfrontendtexts = PropertyFrontendText::all();

        return view('backend.pages.propertyfrontendtext.index', compact('propertyfrontendtexts'));
    }

    //edit method
    public function edit($id){

        $propertyfrontendtext = PropertyFrontendText::find($id);

        return view('backend.pages.propertyfrontendtext.edit', compact('propertyfrontendtext'));
    }

    //update method
    public function update(Request $request, $id){

        $request->validate([
            'price' => 'required',
            'bed' => 'required',
            'bath' => 'required',
            'type' => 'required',
            'area' => 'required',
            'buttontext' => 'required',
        ]);

        $propertyfrontendtext = PropertyFrontendText::find($id);
        $propertyfrontendtext->update($request->except('_token'));

        return to_route('admin.property.text');
    }
}
