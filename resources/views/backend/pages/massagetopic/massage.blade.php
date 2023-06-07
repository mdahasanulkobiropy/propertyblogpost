@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4 text-center">
                <div class="row form-control">
                    <table class="table">
                        <tr>
                            <th>Sl</th>
                            <th>From</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Topic</th>
                            <th>Massage</th>
                        </tr>
                        @forelse ($message as $message)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->phone}}</td>
                                <td>{{$message->getMassageTopic->topic}}</td>
                                <td>{{$message->message}}</td>
                            </tr>
                        @empty
                            <tr>There is No Message.</tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    @endsection


