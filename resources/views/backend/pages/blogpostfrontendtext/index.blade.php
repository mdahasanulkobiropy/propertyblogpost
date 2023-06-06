@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-footer p-4 text-center">
                <div class="row form-control">
                    <table class="table">
                        <tr>
                            <th>title</th>
                            <th>sub_title</th>
                            <th>featured</th>
                            <th>search</th>
                            <th>category</th>
                            <th>tag</th>
                            <th>subscribe_title</th>
                            <th>subscribe_sub_title</th>
                            <th>subscribe_button</th>
                            <th>subscribe_image</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($blogpostfrontendtexts as $blogpostfrontendtext)
                            <tr>
                                <td>{{$blogpostfrontendtext->title}}</td>
                                <td>{{$blogpostfrontendtext->sub_title}}</td>
                                <td>{{$blogpostfrontendtext->featured}}</td>
                                <td>{{$blogpostfrontendtext->search}}</td>
                                <td>{{$blogpostfrontendtext->category}}</td>
                                <td>{{$blogpostfrontendtext->tag}}</td>
                                <td>{{$blogpostfrontendtext->subscribe_title}}</td>
                                <td>{{$blogpostfrontendtext->subscribe_sub_title}}</td>
                                <td>{{$blogpostfrontendtext->subscribe_button}}</td>
                                <td><img src="{{asset('backend/upload/blogpost')}}/{{$blogpostfrontendtext->subscribe_image}}" width="120" height="120"></td>
                                <td>
                                    <a href="{{route('admin.blogpost.text.edit', $blogpostfrontendtext->id)}}" class="btn btn-warning">E d i t</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Bed Room .</tr>

                        @endforelse
                    </table>
                    {{-- {{$bedrooms->links()}} --}}
                </div>
            </div>
        </div>

    @endsection


