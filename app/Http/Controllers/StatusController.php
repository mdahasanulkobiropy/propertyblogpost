<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    //status index method
    public function index(){

        $statuses = Status::all();

        return view('backend.pages.status.index', compact('statuses'));
    }


    //status store/add method
    public function add(Request $request){

        $request->validate([
            'title' => 'required|unique:featureds,title',
        ]);

        $status = new Status();

        $status->title = $request->title;
        $status->save();

        return back();
    }

    //status edit method

    public function edit($id){

        $status = Status::find($id);

        return view('backend.pages.status.edit', compact('status'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required|unique:statuses,title,'. $id,
        ]);

        $status = Status::find($id);

        $status->title = $request->title;
        $status->save();

        return to_route('admin.status');
    }

    public function delete($id){

        $status = Status::find($id);
        $status->delete();

        return back();

    }

}
