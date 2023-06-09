<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //////////////////////////////////////////////////////////
    //////////  admin part start
    ///////////////////////////////////////////////////////

    ///////////////////////////////////
    //// index method
    ///////////////////////////////////
    public function index(){

        $contact = Contact::all();
        return view('backend.pages.contact.index', compact('contact'));
    }

    ///////////////////////////////////
    //// edit method
    ///////////////////////////////////
    public function edit($id){

        $contact = Contact::find($id);

        return view('backend.pages.contact.edit', compact('contact'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'office_title' => 'required',
            'massage_title' => 'required',
            'map_title' => 'required',
        ]);

        $contact = Contact::find($id);

        $contact->update($request->except('_token'));

        if($request->file('image')){
            $image = $request->file('image');
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/image/contact');
            $image->move($location, $filename);
            $contact->image = $filename;
            $contact->save();
        }

        return to_route('admin.contact');
    }
}
