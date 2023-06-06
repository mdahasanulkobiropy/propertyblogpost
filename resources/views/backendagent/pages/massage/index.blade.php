@extends('backendagent.master.master')

    @section('content')
        <div class="masssagelist">
            <div class="card">
                <div class="card-header">
                    <table class="table">
                        <tr>
                            <th>Sl</th>
                            <th>From</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Contact Status</th>

                        </tr>
                        @forelse ($massages as $massage)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$massage->getMassageUser->name}}</td>
                            <td>{{$massage->email}}</td>
                            <td>{{$massage->phone}}</td>
                            <td>{{$massage->getMassageStatus->title}}</td>
                            <td>
                                @if ($massage->agentcontactwithuser == '0')
                                    <a href="{{route('agent.agentcontactwithuser', $massage->id)}}" class="btn btn-danger">Yes</a>
                                @else
                                    <a class="btn btn-success">Yes</a>
                                @endif
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td>No Massage For You</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    @endsection
