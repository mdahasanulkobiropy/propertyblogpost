<?php

namespace App\Http\Controllers;

use App\Models\PropertyBedroom;
use Illuminate\Http\Request;

class PropertyBedroomController extends Controller
{
     //index method bedroom
     public function index(){

        $bedrooms = PropertyBedroom::paginate(7);
        return view('backend.pages.propertybedroom.index', compact('bedrooms'));
    }

    // add/store method bedroom

    public function add(Request $request){

        $request->validate([
            'bedroom' => 'unique:property_bedrooms,bedroom'
        ]);

        $bedroom = PropertyBedroom::create($request->except('_token'));

        return back();
    }

     // edit method bedroom
    public function edit($id){

        $bedroom = PropertyBedroom::find($id);

        return view('backend.pages.propertybedroom.edit', compact('bedroom'));
    }

     // update method bedroom
    public function update(Request $request, $id){

        $bedroom = PropertyBedroom::find($id);

        if($request->bedroom == $bedroom->bedroom){

            $bedroom->update($request->except('token'));
        }

        else{

            $request->validate([
                'bedroom' => 'unique:property_bedrooms,bedroom'
            ]);

            $bedroom->update($request->except('token'));
        }


        return to_route('admin.bedroom');
    }

    public function delete($id){

        $bedroom = PropertyBedroom::find($id);
        $bedroom->delete();

        return to_route('admin.bedroom');
    }
}
