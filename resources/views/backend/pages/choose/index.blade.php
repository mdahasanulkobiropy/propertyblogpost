

@extends('backend.master.master')

    @section('content')

        <div class="card">

            </div>
            <div class="card-footer p-4 text-center">
                <div class="row form-control">
                    <table class="table">
                        <tr>
                            <th>Icon</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($chooses as $choose)
                            <tr>
                                <td>{{$choose->title}}</td>
                                <td>{{$choose->sub_title}}</td>
                                <td>{{$choose->button_text}}</td>
                                <td><img src="{{asset('backend/upload/image/choose')}}/{{$choose->image}}" height="80" width="80" alt="" srcset=""></td>
                                <td>
                                    <a href="{{route('admin.choose.edit', $choose->id)}}" class="btn btn-warning">E d i t</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Choose .</tr>

                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    @endsection



