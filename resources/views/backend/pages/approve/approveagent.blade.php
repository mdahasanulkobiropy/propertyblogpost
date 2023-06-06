@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Agent Status</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($agents as $agent)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{$agent->getUserAgent->name}}</td>
                        <td>{{$agent->getUserAgent->email}}</td>
                        <td>
                            @if ($agent->status == '0')
                                <button class="btn btn-danger">Panding</button>
                            @else
                                <button class="btn btn-success">Success</button>
                            @endif
                        </td>
                        <td><a href="{{route('admin.confirmagentstatusdetails', $agent->id)}}">Details</a></td>
                        <td><a href="{{route('admin.confirmagentstatusapprove', $agent->id)}}" type="button">Approve</a></td>
                    </tr>

                    @empty
                        <tr>
                            <td></td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>

    @endsection


