@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Licensed </th>
                        <th>About </th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>{{$agent->license}}</td>
                        <td>{{$agent->about}}</td>
                        <td><img src="{{asset('backend/upload/image/agent')}}/{{$agent->image}}" width="120" height="120"></td>
                        <td><a href="{{route('admin.confirmagentstatusapprove', $agent->id)}}" type="button">Approve</a></td>
                    </tr>


                </table>
            </div>
        </div>

    @endsection


