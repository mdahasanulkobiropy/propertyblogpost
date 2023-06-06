<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{

    //Amenity index method
    public function index(){

        $amenities = Amenity::all();

        return view('backend.pages.amenity.index', compact('amenities'));
    }


    //Amenity add/store method
    public function add(Request $request){

        $amenity = new Amenity();

        $amenity->title = $request->title;
        $amenity->icon_class = $request->icon_class;
        $amenity->save();

        return back();
    }


   //Amenity edit method
   public function edit($id){

        $amenity = Amenity::find($id);

        return view('backend.pages.amenity.edit', compact('amenity'));
   }

   //Amenity update method
   public function update(Request $request, $id){

        $amenity = Amenity::find($id);

        $amenity->title = $request->title;
        $amenity->icon_class = $request->icon_class;
        $amenity->save();

        return to_route('admin.amenity');
   }

    //Amenity Delete method

    public function delete($id){

        $amenity = Amenity::find($id);
        $amenity->delete();

        return back();
   }


}
