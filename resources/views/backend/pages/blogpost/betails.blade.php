
    @extends('backend.master.master')

    @section('content')

        <div class="card">

            <div class="card-body">
                <div class="col-11 mt-3">
                    <a class="btn btn-info"  href="{{route('admin.blogpost')}}">Go Back</a>
                </div>
                <div class="col-11 mt-3">
                    @foreach ($blogpost->getBlogImage as $images)
                        <span>
                            <img src="{{asset('backend/upload/blogpost/other')}}/{{$images->blogpost_image}}" height="120" width="120">
                        </span>
                    @endforeach
                </div>

                <div class="col-11 mt-3">
                    <label for="next">Next Middle Area:</label>
                    <div class="col-11 mt-3">
                        <label for="next">Title:</label>
                        <p>{{$blogpost->next_middle_title}}</p>
                    </div>
                    <div class="col-11 mt-3">
                        <label for="next">Description-1:</label>
                        <p>{{$blogpost->next_middle_des1}}</p>
                    </div>
                    <div class="col-11 mt-3">
                        <label for="next">Description-2:</label>
                        <p>{{$blogpost->next_middle_des2}}</p>
                    </div>
                    <div class="col-11 mt-3">
                        <label for="next">Description-3:</label>
                        <p>{{$blogpost->next_middle_des3}}</p>
                    </div>
                    <div class="col-11 mt-3">
                        <label for="next">Description-4:</label>
                        <p>{{$blogpost->next_middle_des4}}</p>
                    </div>
                </div>

                <div class="col-11 mt-3">
                    <label for="next">Final Area:</label>
                    <div class="col-11 mt-3">
                        <label for="next">Final Title:</label>
                        <p>{{$blogpost->final_title}}</p>
                    </div>
                    <div class="col-11 mt-3">
                        <label for="next">Description:</label>
                        <p>{{$blogpost->final_des}}</p>
                    </div>
                </div>
            </div>
            <div class="col-11 m-3 mb-5">
                <a href="{{route('admin.blogpost.edit', $blogpost->id)}}" class="btn btn-warning">E d i t</a>
                <a href="{{route('admin.blogpost.delete', $blogpost->id)}}" class="btn btn-danger">Delete</a>
            </div>

        </div>

    @endsection
