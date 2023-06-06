@extends('backend.master.master')

    @section('content')
        <div class="card-footer p-4 text-center">
            <div class="row form-control">
                <table class="table">
                    <tr>
                        <th>Agent Title</th>
                        <th>Agent Sub Title</th>
                        <th>Agent Find Title</th>
                        <th>Agent Bg Image</th>
                        <th>Agent Name </th>
                        <th>Agent location</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($agenttexts as $agenttext)
                        <tr>
                            <td>{{$agenttext->title}}</td>
                            <td>{{$agenttext->sub_title}}</td>
                            <td>{{$agenttext->find_title}}</td>
                            <td><img src="{{asset('backend/upload/image/agent')}}/{{$agenttext->image}}" width="40" width="50"></td>
                            <td>{{$agenttext->name}}</td>
                            <td>{{$agenttext->location}}</td>
                            <td>
                                <a href="{{route('admin.agenttext.edit', $agenttext->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>

                    @empty

                        <tr>There is No Agent all text.</tr>

                    @endforelse
                </table>
            </div>
        </div>
    </div>

    @endsection
