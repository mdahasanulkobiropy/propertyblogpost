<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Amenity;
use App\Models\AmenityProperty;
use App\Models\Explore;
use App\Models\ExploreProperty;
use App\Models\Featured;
use App\Models\ImageProperty;
use App\Models\Property;
use App\Models\PropertyBathroom;
use App\Models\PropertyBedroom;
use App\Models\PropertyCountroom;
use App\Models\PropertyParkingspace;
use App\Models\Status;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
 ///////////////////////////////////////////////////////////
 ///////////////////////////////////////////////////////////
            //property method Start for Admin
    ////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////
    // method index for property
    public function index(){

        $amenities = Amenity::all();
        $explores =  Explore::all();
        $featureds = Featured::all();
        $agents = Agent::where('status', '=' ,'1')->get();
        $statuses = Status::all();
        $properties = Property::all();
        $bedrooms = PropertyBedroom::all();
        $bathrooms = PropertyBathroom::all();
        $parkingspaces = PropertyParkingspace::all();
        $countrooms = PropertyCountroom::all();

        return view('backend.pages.property.index', compact('amenities', 'explores', 'featureds', 'agents', 'statuses', 'properties', 'bedrooms','countrooms', 'bathrooms', 'parkingspaces'));
    }


    ////////////////////////////////////////////
    // method add for property
    ////////////////////////////////////////////
    public function add(Request $request){

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'price' => 'required',
            'year_built' => 'required',
            'bedroom_id' => 'required',
            'bathroom_id' => 'required',
            'parkingspace_id' => 'required',
            'area' => 'required',
            'stories' => 'required',
            'countroom_id' => 'required',
            'featured_id' => 'required',
            'status_id' => 'required',
            'image' => 'required|image',
            'images' => 'required|image',
            'agent_id' => 'required',
            'amenity_id' => 'required',
            'explore_id' => 'required',
        ]);

        $creator_id = Auth::user()->id;

        $property = new Property();
        $property->title = $request->title;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->year_built = $request->year_built;
        $property->bedroom_id = $request->bedroom_id;
        $property->bathroom_id = $request->bathroom_id;
        $property->parkingspace_id = $request->parkingspace_id;
        $property->area = $request->area;
        $property->stories = $request->stories;
        $property->button_text = $request->button_text;
        $property->countroom_id = $request->countroom_id;
        $property->featured_id = $request->featured_id;
        $property->status_id = $request->status_id;
        $property->agent_id = $request->agent_id;
        $property->color = $request->color;
        $property->creator_id = $creator_id;
        $property->post_status = '1';
        $property->approver_id = $creator_id;

        $image = $request->file('image');
        $filename = rand().time().".".$image->extension();
        $location = public_path('backend/upload/image/property');
        $image->move($location, $filename);
        $property->image = $filename;

        $property->save();

        ///imageproperty
        foreach($request->file('images') as $image){

            $imageproperty =new ImageProperty();

            $imageproperty->property_id = $property->id;
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/image/property/details');
            $image->move($location, $filename);
            $imageproperty->images = $filename;

            $imageproperty->save();
        }

        ///amenityproperty
        foreach($request->amenity_id as $amenity_id){

            $amenityproperty = new AmenityProperty();

            $amenityproperty->amenity_id = $amenity_id;
            $amenityproperty->property_id = $property->id;

            $amenityproperty->save();
        }
        ///exploreproperty
        foreach($request->explore_id as $explore_id){

            $exploreproperty = new ExploreProperty();

            $exploreproperty->explore_id = $explore_id;
            $exploreproperty->property_id = $property->id;

            $exploreproperty->save();
        }




        return back();
    }
//////////////////////////////////////////
    ///property edit method
    //////////////////////////////////
    public function edit($id){

        $property = Property::find($id);
        $amenities = Amenity::all();
        $explores =  Explore::all();
        $featureds = Featured::all();
        $agents = Agent::where('status', '=' ,'1')->get();
        $statuses = Status::all();
        $countrooms = PropertyCountroom::all();
        $bedrooms = PropertyBedroom::all();
        $bathrooms = PropertyBathroom::all();
        $parkingspaces = PropertyParkingspace::all();
        return view('backend.pages.property.edit', compact('property','amenities', 'explores', 'featureds', 'agents', 'statuses', 'countrooms', 'bedrooms', 'bathrooms', 'parkingspaces'));
    }

     // method update for property
     public function update(Request $request, $id){

        $creator_id = Auth::user()->id;

        $property=Property::find($id);

        $property->title = $request->title;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->year_built = $request->year_built;
        $property->bedroom_id = $request->bedroom_id;
        $property->bathroom_id = $request->bathroom_id;
        $property->parkingspace_id = $request->parkingspace_id;
        $property->area = $request->area;
        $property->stories = $request->stories;
        $property->button_text = $request->button_text;
        $property->countroom_id = $request->countroom_id;
        $property->featured_id = $request->featured_id;
        $property->status_id = $request->status_id;
        $property->color = $request->color;
        $property->agent_id = $request->agent_id;
        $property->creator_id = $creator_id;
        $property->post_status = '1';
        $property->approver_id = $creator_id;

        if($request->file('image') != ''){

            $image = $request->file('image');
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/image/property');
            $image->move($location, $filename);
            $property->image = $filename;
        }

        $property->save();


        ///imageproperty
       if($request->file('images') != ''){
           ImageProperty::where('property_id', $property->id)->get()->each->delete;
        foreach($request->file('images') as $image){

            $imageproperty = ImageProperty::find($property->id);
            $imageproperty->property_id = $property->id;
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/image/property/details');
            $image->move($location, $filename);
            $imageproperty->images = $filename;

            $imageproperty->save();
        }
       }

        ///amenityproperty
        AmenityProperty::where('property_id', $property->id)->get()->each->delete();
        foreach($request->amenity_id as $amenity_id){

            // dd($amenity_id);
            $amenityproperty =new AmenityProperty();
            $amenityproperty->amenity_id = $amenity_id;
            $amenityproperty->property_id = $property->id;

            $amenityproperty->save();
        }
        ///exploreproperty
        ExploreProperty::where('property_id', $property->id)->get()->each->delete();
        foreach($request->explore_id as $explore_id){

            $exploreproperty =new ExploreProperty();
            $exploreproperty->explore_id = $explore_id;
            $exploreproperty->property_id = $property->id;

            $exploreproperty->save();
        }

        return to_route('admin.poterty');
    }
    /////////////////////////////////////
         ///property details method
    ///////////////////////////////////////
    public function details($id){

        $property = Property::find($id);
        return view('backend.pages.property.details', compact('property'));
    }

    /////////////////////////////////////
         ///property delete method
    ///////////////////////////////////////
    public function delete($id){

        $property = Property::find($id);
        ImageProperty::where('property_id', $property->id)->get()->each->delete;
        AmenityProperty::where('property_id', $property->id)->get()->each->delete;
        ExploreProperty::where('property_id', $property->id)->get()->each->delete;
        $property->delete();
        return back();
    }


    ///////////////////////
    ///approve property method
    //////////////////////

    public function approve(){


        $properties = Property::where('post_status', '=', '0')->get();

        return view('backend.pages.property.approve', compact('properties'));
    }

    public function approvesure($id){

        $approver_id = Auth::user()->id;

        $property = Property::find($id);

        $property->post_status = '1';
        $property->approver_id = $approver_id;

        $property->save();

        return to_route('admin.property.approve');
    }

    public function approvedetails($id){

        $property = Property::find($id);

        return view('backend.pages.approve.approveagentdetails', compact('property'));
    }

     ///////////////////////////////////////////////////////////
 ///////////////////////////////////////////////////////////
            //property method End for Admin
    ////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////





////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
                //for agent property start
///////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////
        /// property method for agent
    ///////////////////////////////////////
    public function propertyfromagent(){

        $agent_id = Auth::user()->id;

        $amenities = Amenity::all();
        $explores =  Explore::all();
        $featureds = Featured::all();
        $statuses = Status::all();
        $properties = Property::where('agent_id', $agent_id)->get();
        $bedrooms = PropertyBedroom::all();
        $bathrooms = PropertyBathroom::all();
        $parkingspaces = PropertyParkingspace::all();
        $countrooms = PropertyCountroom::all();

        return view('backendagent.pages.property.index', compact('amenities', 'explores', 'featureds', 'statuses', 'properties', 'bedrooms','countrooms', 'bathrooms', 'parkingspaces'));
    }

    ////////////////////////////////////////////
    ////// add property method for agent
    ////////////////////////////////////////////


    public function propertyfromagentadd(Request $request){

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'price' => 'required',
            'year_built' => 'required',
            'bedroom_id' => 'required',
            'bathroom_id' => 'required',
            'parkingspace_id' => 'required',
            'area' => 'required',
            'stories' => 'required',
            'countroom_id' => 'required',
            'featured_id' => 'required',
            'status_id' => 'required',
            'agent_id' => 'required',
            'color' => 'required',
            'image' => 'required|image',
            'images' => 'required|image',
            'amenity_id' => 'required',
            'explore_id' => 'required',
        ]);

        $creator_id = Auth::user()->id;

        $property = new Property();
        $property->title = $request->title;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->year_built = $request->year_built;
        $property->bedroom_id = $request->bedroom_id;
        $property->bathroom_id = $request->bathroom_id;
        $property->parkingspace_id = $request->parkingspace_id;
        $property->area = $request->area;
        $property->stories = $request->stories;

        if($request->button_text != ''){
            $property->button_text = $request->button_text;
        }

        $property->countroom_id = $request->countroom_id;
        $property->featured_id = $request->featured_id;
        $property->status_id = $request->status_id;
        $property->agent_id = $creator_id;
        $property->color = $request->color;
        $property->creator_id = $creator_id;



        $image = $request->file('image');
        $filename = rand().time().".".$image->extension();
        $location = public_path('backend/upload/image/property');
        $image->move($location, $filename);
        $property->image = $filename;

        $property->save();

        ///imageproperty
        foreach($request->file('images') as $image){

            $imageproperty =new ImageProperty();

            $imageproperty->property_id = $property->id;
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/image/property/details');
            $image->move($location, $filename);
            $imageproperty->images = $filename;

            $imageproperty->save();
        }

        ///amenityproperty
        foreach($request->amenity_id as $amenity_id){

            $amenityproperty = new AmenityProperty();

            $amenityproperty->amenity_id = $amenity_id;
            $amenityproperty->property_id = $property->id;

            $amenityproperty->save();
        }
        ///exploreproperty
        foreach($request->explore_id as $explore_id){

            $exploreproperty = new ExploreProperty();

            $exploreproperty->explore_id = $explore_id;
            $exploreproperty->property_id = $property->id;

            $exploreproperty->save();
        }

        return back();

    }
    ////////////////////////////////////////////////
        /////update method for agent
    ///////////////////////////////////////////////

    public function propertyfromagentupdate(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'price' => 'required',
            'year_built' => 'required',
            'bedroom_id' => 'required',
            'bathroom_id' => 'required',
            'parkingspace_id' => 'required',
            'area' => 'required',
            'stories' => 'required',
            'countroom_id' => 'required',
            'featured_id' => 'required',
            'status_id' => 'required',
            'agent_id' => 'required',
            'amenity_id' => 'required',
            'explore_id' => 'required',
        ]);

        $creator_id = Auth::user()->id;

        $property=Property::find($id);

        $property->title = $request->title;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->year_built = $request->year_built;
        $property->bedroom_id = $request->bedroom_id;
        $property->bathroom_id = $request->bathroom_id;
        $property->parkingspace_id = $request->parkingspace_id;
        $property->area = $request->area;
        $property->stories = $request->stories;
                if($request->button_text != ''){
            $property->button_text = $request->button_text;
        }
        $property->countroom_id = $request->countroom_id;
        $property->featured_id = $request->featured_id;
        $property->status_id = $request->status_id;
        $property->agent_id = $request->agent_id;
        $property->post_status = '0';
        if($request->color!=''){

            $property->color = $request->color;
        }


        $property->creator_id = $creator_id;




        if($request->file('image') != ''){

            $image = $request->file('image');
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/image/property');
            $image->move($location, $filename);
            $property->image = $filename;
        }

        $property->save();




        ///imageproperty
       if($request->file('images') != ''){
           ImageProperty::where('property_id', $property->id)->get()->each->delete;
        foreach($request->file('images') as $image){

            $imageproperty = ImageProperty::find($property->id);
            $imageproperty->property_id = $property->id;
            $filename = rand().time().".".$image->extension();
            $location = public_path('backend/upload/image/property/details');
            $image->move($location, $filename);
            $imageproperty->images = $filename;

            $imageproperty->save();
        }
       }

        ///amenityproperty
        AmenityProperty::where('property_id', $property->id)->get()->each->delete();
        foreach($request->amenity_id as $amenity_id){

            // dd($amenity_id);
            $amenityproperty =new AmenityProperty();
            $amenityproperty->amenity_id = $amenity_id;
            $amenityproperty->property_id = $property->id;

            $amenityproperty->save();
        }
        ///exploreproperty
        ExploreProperty::where('property_id', $property->id)->get()->each->delete();
        foreach($request->explore_id as $explore_id){

            $exploreproperty =new ExploreProperty();
            $exploreproperty->explore_id = $explore_id;
            $exploreproperty->property_id = $property->id;

            $exploreproperty->save();
        }

        return to_route('agent.property');
    }

    ///////////////////////////////////
     //edit method for agent
    //////////////////////////////////
    public function propertyfromagentedit($id){

        $property = Property::find($id);
        $amenities = Amenity::all();
        $explores =  Explore::all();
        $featureds = Featured::all();
        $agents = Agent::where('status', '=' ,'1')->get();
        $statuses = Status::all();
        $countrooms = PropertyCountroom::all();
        $bedrooms = PropertyBedroom::all();
        $bathrooms = PropertyBathroom::all();
        $parkingspaces = PropertyParkingspace::all();
        return view('backendagent.pages.property.edit', compact('property','amenities', 'explores', 'featureds', 'agents', 'statuses', 'countrooms', 'bedrooms', 'bathrooms', 'parkingspaces'));
    }

    ////////////////////////////////
    //delete method for agent
    ////////////////////////////////
    public function propertyfromagentdelete($id){

        $property = Property::find($id);
        ImageProperty::where('property_id', $property->id)->get()->each->delete;
        AmenityProperty::where('property_id', $property->id)->get()->each->delete;
        ExploreProperty::where('property_id', $property->id)->get()->each->delete;
        $property->delete();
        return back();
    }

    //////////////////////////////
    ///details for agent
    //////////////////////////////
    public function propertyfromagentdetails($id){

        $property = Property::find($id);
        return view('backendagent.pages.property.details', compact('property'));
    }


    ////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
                //for agent property End
///////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
}
