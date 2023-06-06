@extends('backend.master.master')

    @section('content')
        <div class="card-footer p-4 text-center">
            <div class="row form-control">
                <table class="table">
                    <tr>
                        <th>Index Search Title</th>
                        <th>Index Search Sub Title</th>
                        <th>Index Search  Button Text</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($indexsearchs as $indexsearch)
                        <tr>
                            <td>{{$indexsearch->title}}</td>
                            <td>{{$indexsearch->sub_title}}</td>
                            <td>{{$indexsearch->button_text}}</td>
                            <td><img src="{{asset('backend/upload/image/indexsearch')}}/{{$indexsearch->image}}" height="80" width="80" alt="" srcset=""></td>
                            <td>
                                <a href="{{route('admin.indexsearch.edit', $indexsearch->id)}}" class="btn btn-warning">Edit</a>
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
