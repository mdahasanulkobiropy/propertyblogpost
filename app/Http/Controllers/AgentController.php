<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\SingleAgentMassageFromUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{

/////////////////////////////////////////
/////////////////////////////////////////
    //agent index method for admin start//
//////////////////////////////////////////
//////////////////////////////////////////
    public function index(){

        $agentusers = User::where('role', '=', 'agent')->get();
        return view('backend.pages.agent.index', compact('agentusers'));
    }
    //////////////////////////////////////////
    //agent add/store method for admin//
    //////////////////////////////////////////
    public function add(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'license' => 'required',
            'phone' => 'required',
            'image' => 'required|image',
            'about' => 'required',
            'part1' => 'required',
            'part2' => 'required',
            'part3' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'pinterest' => 'required',
            'instagram' => 'required',
        ]);


        $creator_id = Auth::user()->id;

        $agentasuser = new User();

        $agentasuser->name = $request->name;
        $agentasuser->email = $request->email;
        $agentasuser->password = bcrypt($request->password);
        $agentasuser->role = 'agent';
        $agentasuser->save();

        $agent= new Agent();

        $agent->creator_id = $creator_id;
        $agent->status = '1';
        $agent->agent_id = $agentasuser->id;
        $agent->license = $request->license;
        $agent->phone = $request->phone;
        $agent->about = $request->about;
        /////Agent Specialities
        $agent->part1 = $request->part1;
        $agent->part2 = $request->part2;
        $agent->part3 = $request->part3;

        /////Agent Social Media Link
        $agent->facebook = $request->facebook;
        $agent->twitter = $request->twitter;
        $agent->pinterest = $request->pinterest;
        $agent->instagram = $request->instagram;
        $agent->instagram = $request->instagram;

        $image = $request->file('image');
        $filename = rand().time().".". $image->extension();
        $location = public_path('backend/upload/image/agent');
        $image->move($location, $filename);
        $agent->image = $filename;

        $agent->save();

        return back();
    }
    ////////////////////////////////////////
        //agent edit method for admin//
    ///////////////////////////////////////
    public function edit($id){

        $agentuser = User::find($id);

        // $agent = Agent::where('agent_id', '=' , $id)->get();


        return view('backend.pages.agent.edit', compact('agentuser'));
    }
    ////////////////////////////////////////
        //agent update method for admin//
    ////////////////////////////////////////
    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'license' => 'required',
            'phone' => 'required',
            'about' => 'required',
            'part1' => 'required',
            'part2' => 'required',
            'part3' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'pinterest' => 'required',
            'instagram' => 'required',
        ]);

        ///agent user table
        $agentasuser = User::find($id);
        $agentasuser->name = $request->name;
        $agentasuser->email = $request->email;
        if($request->password != ''){
            $agentasuser->password = bcrypt($request->password);
        }
        $agentasuser->role = 'agent';
        $agentasuser->update();


        $agent = Agent::where('agent_id', $id)->get()->each->delete();
        // dd($agent);
        $agent = new Agent();
        $agent->agent_id = $agentasuser->id;
        $agent->license = $request->license;
        $agent->phone = $request->phone;
        $agent->about = $request->about;
        $agent->status = '1';

        /////Agent Specialities
        $agent->part1 = $request->part1;
        $agent->part2 = $request->part2;
        $agent->part3 = $request->part3;

        /////Agent Social Media Link
        $agent->facebook = $request->facebook;
        $agent->twitter = $request->twitter;
        $agent->pinterest = $request->pinterest;
        $agent->instagram = $request->instagram;


        $image = $request->file('image');
        $filename = rand().time().".". $image->extension();
        $location = public_path('backend/upload/image/agent');
        $image->move($location, $filename);
        $agent->image = $filename;

        $agent->save();
        // dd($agent);
        return to_route('admin.agent');
    }
    ///////////////////////////////////////////////
         //agent delete method for admin//
    ///////////////////////////////////////////////
        public function delete($id){

        $agentuser = User::find($id);
        $agent = Agent::where('agent_id', $id)->get()->each->delete();
        $agentuser->delete();

        return back();
    }

    /////////////////////////////////////////////////
         //single agent find method for admin//
    /////////////////////////////////////////////////
    public function singleagent($id){

        $singleagent = Agent::find($id);

        return view('frontend.pages.agents.single-agent', compact('singleagent'));
    }


    ///////////////////////////////////////////
    ///all massage to agent to user
    //////////////////////////////////////////

    public function allmassage(){

        $allmassagetoagent = SingleAgentMassageFromUser::all();

        return view('backend.pages.agent.massage', compact('allmassagetoagent'));
    }


    ////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////
            //////////// agent method for method/////////////
    /////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////

    public function dashboard(){

        return view('backendagent.dashboard');
    }

    ///////////////////////////////////////
     ////////agent massage from user/////
    ///////////////////////////////////////

    public function massageforagentfromuser(){

        $id = Auth::user()->id;
        $massages = SingleAgentMassageFromUser::where('agent_id', $id)->get();

        return view('backendagent.pages.massage.index', compact('massages'));
    }

    ///////////////////////////////////////
     ////////user become an agent/////
    ///////////////////////////////////////

    public function userbecomeagent(){
        return view('backenduser.pages.becomeagent.index');
    }

    ///////////////////////////////////////
     ////////user become Apply method/////
    ///////////////////////////////////////
    public function userbecomeagentapply(Request $request){



        $request->validate([
            'license' => 'required',
            'phone' => 'required',
            'image' => 'required|image',
            'about' => 'required',
            'part1' => 'required',
            'part2' => 'required',
            'part3' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'pinterest' => 'required',
            'instagram' => 'required',


        ]);

        $user_id = Auth::user()->id;

        $agent = new Agent();

        $agent = new Agent();
        if(Agent::where('agent_id', $user_id)->exists()){

            $agent_iderror = 'You Already Apply For Agent!';
            return to_route('user.becomeagent', compact('agent_iderror'));
        }
        else{

            $agent->agent_id = $user_id;
        }
        $agent->license = $request->license;
        $agent->phone = $request->phone;
        $agent->about = $request->about;

        /////Agent Specialities
        $agent->part1 = $request->part1;
        $agent->part2 = $request->part2;
        $agent->part3 = $request->part3;

        /////Agent Social Media Link
        $agent->facebook = $request->facebook;
        $agent->twitter = $request->twitter;
        $agent->pinterest = $request->pinterest;
        $agent->instagram = $request->instagram;


        $image = $request->file('image');
        $filename = rand().time().".". $image->extension();
        $location = public_path('backend/upload/image/agent');
        $image->move($location, $filename);
        $agent->image = $filename;

        $agent->save();

        return to_route('user.becomeagent');

    }



    //////////////////////////////////////
    ///////Find agent Approve //////////
    //////////////////////////////////////
    public function confirmagentstatus(){

        $agents = Agent::where('status', '=', '0')->get();

        return view('backend.pages.approve.approveagent', compact('agents'));

    }


    //////////////////////////////////////
    ///////Find Approve Agent details////
    //////////////////////////////////////
    public function confirmagentstatusdetails($id){

        $agent = Agent::find($id);

        return view('backend.pages.approve.approveagentdetails', compact('agent'));

    }


    //////////////////////////////////////
        ///////Approve Agent//////////
    //////////////////////////////////////
    public function confirmagentstatusapprove($id){

        $creator_id = Auth::user()->id;

        $agent = Agent::find($id);
        $agent->creator_id = $creator_id;
        $agent->status = '1';

        $agent->save();

        $agentuser = User::find($agent->agent_id);
        $agentuser->role = 'agent';
        $agentuser->save();

       return to_route('admin.confirmagentstatus');
    }


    //// agent details method
    public function details($id){

        $agent = User::find($id);

        return view('backend.pages.agent.details', compact('agent'));
    }

    public function agentcontactwithuser($id){

        $massage = SingleAgentMassageFromUser::find($id);

        $massage->agentcontactwithuser = '1';

        $massage->save();

        return back();
    }


}
