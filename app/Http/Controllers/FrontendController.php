<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\AgentText;
use App\Models\Amenity;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogPostText;
use App\Models\BlogTag;
use App\Models\Choose;
use App\Models\ChooseItem;
use App\Models\Contact;
use App\Models\ContactOfficeLocation;
use App\Models\Featured;
use App\Models\IndexAllText;
use App\Models\IndexSearch;
use App\Models\MassageTopicForUser;
use App\Models\Property;
use App\Models\PropertyBathroom;
use App\Models\PropertyBedroom;
use App\Models\PropertyFrontendText;
use App\Models\PropertyParkingspace;
use App\Models\SingleAgentComment;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function loginpage(){
        return view('frontend.pages.loginregister.loginpage');
    }
    public function index(){

        $properties = Property::where('post_status', '=', '1')->get();
        $featureds = Featured::all();
        $agents = Agent::where('status', '=', '1')->paginate(4);
        $chooses = Choose::all();
        $chooseitems = ChooseItem::all();
        $indexalltexts = IndexAllText::all();
        $indexsearchs = IndexSearch::all();
        return view('frontend.pages.index', compact('properties', 'properties', 'featureds', 'agents', 'chooses', 'chooseitems', 'indexalltexts', 'indexsearchs'));
    }
    public function properties(Request $request){


        // dd($request->input('amenty_id'));
        $search_price_min = $request['price_min'] ?? '';
        $search_price_max = $request['price_max'] ?? '';
        $search_area_min = $request['area_min'] ?? '';
        $search_area_max = $request['area_max'] ?? '';
        $search_featured_id = $request['featured_id'] ?? '';
        $search_status_id = $request['status_id'] ?? '';
        $search_location = $request['location'] ?? '';
        $search_bedroom = $request['bedroom_id'] ?? '';
        $search_bathroom = $request['bathroom_id'] ?? '';
        // $search_amenty_id = $request->input('amenty_id') ?? '';

        // dd($search_amenty_id);

        if($search_price_min != '' && $search_price_max != '' && $search_area_min != '' && $search_area_max != '' && $search_featured_id != '' && $search_status_id != '' &&  $search_location != '' && $search_bedroom != '' &&  $search_bathroom != '' ){

            $properties = Property::whereBetween('price', [$search_price_min, $search_price_max])
                                    ->whereBetween('area', [$search_area_min, $search_area_max])
                                    ->where('featured_id', $search_featured_id)
                                    ->where('status_id', $search_status_id)
                                    ->where('location' ,'LIKE', "%$search_location%")
                                    ->where('bedroom_id', $search_bedroom)
                                    ->where('bathroom_id', $search_bathroom)
                                    ->where('post_status', '=', '1')
                                    ->paginate(4);

        }

        else{

            $properties = $properties = Property::where('post_status', '=', '1')->paginate(4);
        }
        // $properties = Property::all();
        $featureds = Featured::all();
        $statuses = Status::all();
        $amenties = Amenity::all();
        $bedrooms = PropertyBedroom::all();
        $bathrooms = PropertyBathroom::all();
        $parkingspaces = PropertyParkingspace::all();
        $propertyfrontendtexts = PropertyFrontendText::all();
        return view('frontend.pages.properties.properties', compact('properties', 'featureds', 'statuses', 'amenties','bathrooms', 'bedrooms', 'parkingspaces', 'propertyfrontendtexts'));
    }
    public function singleproperty($id){

        $property = Property::find($id);
        $freatured = Featured::find($property->featured_id);
        $status = Status::find($property->status_id);
        return view('frontend.pages.properties.single-property', compact('property', 'freatured', 'status'));
    }
    public function submitproperty(){
        return view('frontend.pages.properties.submit-property');
    }
    //all agent part method
    public function agents(){
        $agents = Agent::where('status', '=', '1')->paginate(8);
        $agenttexts = AgentText::all();
        $status = Status::all();
        return view('frontend.pages.agents.agents', compact('agents', 'agenttexts', 'status'));
    }
    public function singleagent($id){
        $agent = User::find($id);
        $comments = SingleAgentComment::all();
        $status = Status::all();
        return view('frontend.pages.agents.single-agent', compact('agent', 'comments', 'status'));
    }
    public function blog(){
        $blogposts = BlogPost::paginate(6);
        $blogcategories = BlogCategory::all();
        $blogtags = BlogTag::all();
        $blogpostfrontendtexts = BlogPostText::all();
        return view('frontend.pages.blog.blog', compact('blogposts', 'blogcategories', 'blogtags', 'blogpostfrontendtexts'));
    }

    public function blogsearchcategory($id){

        $allblogposts = BlogPost::all();
        $blogcategories = BlogCategory::all();
        $blogtags = BlogTag::all();
        if(!empty($id)){
            $blogposts = BlogPost::where('blogcategory_id', $id)->get();
        }
        else{
            $blogposts = BlogPost::all();
        }
        return view('frontend.pages.blog.blogsearchcategory', compact('allblogposts', 'blogcategories', 'blogtags', 'blogposts'));

    }
    public function blogsearchtag($id){

        $allblogposts = BlogPost::all();
        $blogcategories = BlogCategory::all();
        $blogtags = BlogTag::all();
        if(!empty($id)){
            $blogposts = BlogPost::where('blogtag_id', $id)->get();
        }
        else{
            $blogposts = BlogPost::all();
        }
        return view('frontend.pages.blog.blogsearchtag', compact('allblogposts', 'blogcategories', 'blogtags', 'blogposts'));

    }

    public function singleblog($id){
        $singleblog = BlogPost::find($id);
        // dd($singleblog->blogtag_id);
        $singleblogrelated = BlogPost::where('blogtag_id', $singleblog->blogtag_id)
        ->where('id', '!=', $singleblog->id)->get();
        return view('frontend.pages.blog.singleblog', compact('singleblog', 'singleblogrelated'));
    }

    public function contact(){

        $contact = Contact::all();
        $office = ContactOfficeLocation::all();
        $offices = ContactOfficeLocation::all();
        $topics = MassageTopicForUser::all();
        return view('frontend.pages.contact.contact', compact('contact', 'office', 'offices', 'topics'));
    }



}
