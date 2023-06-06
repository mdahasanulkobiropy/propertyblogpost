<?php

namespace App\Http\Controllers;

use App\Models\PropertyFrontendText;
use Illuminate\Http\Request;

class PropertyFrontendTextController extends Controller
{

    public function index(){

        $propertyfrontendtexts = PropertyFrontendText::all();

        return view('backend.pages.propertyfrontendtext.index', compact('propertyfrontendtexts'));
    }
    public function edit($id){

        $propertyfrontendtext = PropertyFrontendText::find($id);

        return view('backend.pages.propertyfrontendtext.edit', compact('propertyfrontendtext'));
    }
    public function update(Request $request, $id){

        $propertyfrontendtext = PropertyFrontendText::find($id);
        $propertyfrontendtext->update($request->except('_token'));

        return to_route('admin.property.text');
    }
}
