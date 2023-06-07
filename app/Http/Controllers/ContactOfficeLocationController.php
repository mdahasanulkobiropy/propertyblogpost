<?php

namespace App\Http\Controllers;

use App\Models\ContactOfficeLocation;
use Illuminate\Http\Request;

class ContactOfficeLocationController extends Controller
{

    /////////////////////////////////////////
    /// index method
    /////////////////////////////////////////
    public function index(){

        $office = ContactOfficeLocation::all();

        return view('backend.pages.contactlocation.index', compact('office'));
    }

    /////////////////////////////////////////
    /// add method
    /////////////////////////////////////////
    public function add(Request $request){

        $request->validate([

            'city_name' => 'required',
            'floor_position' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);

        $office = ContactOfficeLocation::create($request->except('_token'));

        return back();
    }
    /////////////////////////////////////////
    /// edit method
    /////////////////////////////////////////
    public function edit($id){

        $office = ContactOfficeLocation::find($id);

        return view('backend.pages.contactlocation.edit', compact('office'));

    }

    /////////////////////////////////////////
    /// update method
    /////////////////////////////////////////
    public function update(Request $request, $id){

        $request->validate([

            'city_name' => 'required',
            'floor_position' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        $office = ContactOfficeLocation::find($id);

        $office->update($request->except('_token'));

        return to_route('admin.contact.location');
    }

    /////////////////////////////////////////
    /// delete method
    /////////////////////////////////////////
    public function delete($id){

        $office = ContactOfficeLocation::find($id);

        $office->delete();

        return back();

    }



}
