@extends('backend.master.master')

    @section('content')
        <div class="card-footer p-4 text-center">
            <div class="row form-control">
                <table class="table">
                    <tr>
                        <th>Property Title</th>
                        <th>Property Sub Title</th>
                        <th>Property Button Text</th>
                        <th>Agent Title</th>
                        <th>Agent Sub Title</th>
                        <th>Agent Button Text</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($indexalltexts as $indexalltext)
                        <tr>
                            <td>{{$indexalltext->property_title}}</td>
                            <td>{{$indexalltext->property_sub_title}}</td>
                            <td>{{$indexalltext->property_button_text}}</td>
                            <td>{{$indexalltext->agent_title}}</td>
                            <td>{{$indexalltext->agent_sub_title}}</td>
                            <td>{{$indexalltext->agent_button_text}}</td>
                            <td>{{$indexalltext->button_text}}</td>
                            <td>
                                <a href="{{route('admin.indexalltext.edit', $indexalltext->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>

                    @empty

                        <tr>There is No index all text.</tr>

                    @endforelse
                </table>
            </div>
        </div>
    </div>

    @endsection
