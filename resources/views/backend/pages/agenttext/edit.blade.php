@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Agent Text</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.agenttext.update', $agenttext->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="title" class="form-label">Agent Page Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$agenttext->title}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('sub_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="sub_title" class="form-label">Agent Page Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" value="{{$agenttext->sub_title}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('find_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="find_title" class="form-label">Agent Find Title</label>
                                    <input type="text" class="form-control" name="find_title" value="{{$agenttext->find_title}}" >
                                </div>
                                <div class="mb-3">
                                    <label for="sub_title" class="form-label">Agent Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <img src="{{asset('backend/upload/image/agent')}}/{{$agenttext->image}}" width="150" height="150">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="name" class="form-label">Agent Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$agenttext->name}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('location')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="location" class="form-label">Agent Name</label>
                                    <input type="text" class="form-control" name="location" value="{{$agenttext->location}}" >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary ">Update</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
        </div>

    </div>

    @endsection
