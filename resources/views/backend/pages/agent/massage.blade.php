
@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Sl</th>
                        <th>From</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>To</th>
                        <th>Status</th>
                        <th>Feedback</th>
                    </tr>

                    @forelse ($allmassagetoagent as $massage)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$massage->getMassageUser->name}}</td>
                            <td>{{$massage->email}}</td>
                            <td>{{$massage->phone}}</td>
                            <td>{{$massage->getMassageAgent->name}}</td>
                            <td>{{$massage->getMassageStatus->title}}</td>
                            <td>
                                @if ($massage->agentcontactwithuser == '1')
                                   <button class="btn btn-success">Yes</button>
                                @else
                                    <button class="btn btn-danger">No</button>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>There are No massage </td>
                        </tr>

                    @endforelse
                </table>
            </div>
        </div>

    @endsection
