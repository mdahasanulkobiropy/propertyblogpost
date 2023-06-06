@extends('backenduser.master.master')

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
                        </tr>
                        @forelse ($mymassages as $massage)
                        <tr>
                            <td>{{$loop->index}}</td>
                            <td>{{$massage->getMassageUser->name}}</td>
                            <td>{{$massage->email}}</td>
                            <td>{{$massage->phone}}</td>
                            <td>{{$massage->getMassageStatus->title}}</td>
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
