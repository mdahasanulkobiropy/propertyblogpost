<?php

namespace App\Http\Controllers;

use App\Models\PropertyParkingspace;
use Illuminate\Http\Request;

class PropertyParkingspaceController extends Controller
{
    //index method parkingspace
    public function index(){

        $parkingspaces = PropertyParkingspace::paginate(7);
        return view('backend.pages.propertyparking.index', compact('parkingspaces'));
    }

    // add/store method parkingspace

    public function add(Request $request){

        $request->validate([
            'parkingspace' => 'unique:property_parkingspaces,parkingspace'
        ]);

        $parkingspace = PropertyParkingspace::create($request->except('_token'));

        return back();
    }

     // edit method parkingspace
    public function edit($id){

        $parkingspace = PropertyParkingspace::find($id);

        return view('backend.pages.propertyparking.edit', compact('parkingspace'));
    }

     // update method parkingspace
    public function update(Request $request, $id){



        $parkingspace = PropertyParkingspace::find($id);
        if($request->parkingspace == $parkingspace->parkingspace){
            $parkingspace->update($request->except('token'));
        }

        else{
            $request->validate([
                'parkingspace' => 'unique:property_parkingspaces,parkingspace'
            ]);

            $parkingspace->update($request->except('token'));
        }

        return to_route('admin.parkingspace');
    }

    public function delete($id){

        $parkingspace = PropertyParkingspace::find($id);
        $parkingspace->delete();

        return to_route('admin.parkingspace');
    }
}
