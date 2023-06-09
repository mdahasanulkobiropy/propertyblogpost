@extends('backend.master.master')

    @section('content')
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update blog post frontend text</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.blogpost.text.update', $blogpostfrontendtext->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="title" class="form-label">Title Text</label>
                                    <input type="text" class="form-control" name="title" value="{{$blogpostfrontendtext->title}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('sub_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="sub_title" class="form-label">Sub Title Text</label>
                                    <input type="text" class="form-control" name="sub_title" value="{{$blogpostfrontendtext->sub_title}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('featured')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="featured" class="form-label">Featured Text</label>
                                    <input type="text" class="form-control" name="featured" value="{{$blogpostfrontendtext->featured}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('search')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="search" class="form-label">Type Text</label>
                                    <input type="text" class="form-control" name="search" value="{{$blogpostfrontendtext->search}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('category')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="category" class="form-label">Category Text</label>
                                    <input type="text" class="form-control" name="category" value="{{$blogpostfrontendtext->category}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('tag')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="tag" class="form-label">tag Text </label>
                                    <input type="text" class="form-control" name="tag" value="{{$blogpostfrontendtext->tag}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('subscribe_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="subscribe_title" class="form-label">Subscribe Title Text </label>
                                    <input type="text" class="form-control" name="subscribe_title" value="{{$blogpostfrontendtext->subscribe_title}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('subscribe_sub_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="subscribe_sub_title" class="form-label">Subscribe Sub Title Text </label>
                                    <input type="text" class="form-control" name="subscribe_sub_title" value="{{$blogpostfrontendtext->subscribe_sub_title}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('subscribe_button')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="subscribe_button" class="form-label">Subscribe Button Text </label>
                                    <input type="text" class="form-control" name="subscribe_button" value="{{$blogpostfrontendtext->subscribe_button}}" >
                                </div>
                                <div class="mb-3">
                                    <label for="subscribe_button" class="form-label">Subscribe image</label>
                                    <input type="file"  class="form-control" name="subscribe_image">
                                </div>
                                <div class="mb-3">
                                    <img src="{{asset('backend/upload/blogpost')}}/{{$blogpostfrontendtext->subscribe_image}}" height="120" width="120">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-info ">Update</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
            </div>
        </div>

    @endsection
