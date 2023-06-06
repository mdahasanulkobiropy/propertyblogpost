<?php

namespace App\Http\Controllers;

use App\Models\PropertyBathroom;
use Illuminate\Http\Request;

class PropertyBathroomController extends Controller
{

     //index method bathroom
     public function index(){

        $bathrooms = PropertyBathroom::paginate(7);
        return view('backend.pages.propertybathroom.index', compact('bathrooms'));
    }

    // add/store method bathroom

    public function add(Request $request){

        $request->validate([
            'bathroom' => 'unique:property_bathrooms,bathroom'
        ]);

        $bathroom = PropertyBathroom::create($request->except('_token'));

        return back();
    }

     // edit method bathroom
    public function edit($id){

        $bathroom = PropertyBathroom::find($id);

        return view('backend.pages.propertybathroom.edit', compact('bathroom'));
    }

     // update method bathroom
    public function update(Request $request, $id){



        $bathroom = PropertyBathroom::find($id);
        if($request->bathroom == $bathroom->bathroom){
            $bathroom->update($request->except('token'));
        }

        else{
            $request->validate([
                'bathroom' => 'unique:property_bathrooms,bathroom'
            ]);

            $bathroom->update($request->except('token'));
        }

        return to_route('admin.bathroom');
    }

    public function delete($id){

        $bathroom = PropertyBathroom::find($id);
        $bathroom->delete();

        return to_route('admin.bathroom');
    }
}
 