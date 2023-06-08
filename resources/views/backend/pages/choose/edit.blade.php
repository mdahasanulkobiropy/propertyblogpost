@extends('backend.master.master')

    @section('content')
        <div class="card-body p-4">
            <h5 class="card-title">Update Choose</h5>
            <hr/>
            <div class="form-body mt-4">
            <div class="row">
                <form action="{{route('admin.choose.update', $choose->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                        <div class="border border-3 p-4 rounded">
                            <div class="mb-3">
                                <div class="mb-3">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="title" class="form-label">Choose Title</label>
                                <input type="text" class="form-control" name="title" value="{{$choose->title}}" >
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    @error('sub_Title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="sub_Title" class="form-label">Choose Sub_Title</label>
                                <input type="text" class="form-control" name="sub_Title" value="{{$choose->sub_title}}">
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    @error('button_text')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="button_text" class="form-label">Choose Button_text</label>
                                <input type="text" class="form-control" name="button_text" value="{{$choose->button_text}}">
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="image" class="form-label">Choose Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="mb-3">
                                <img src="{{asset('backend/upload/image/choose')}}/{{$choose->image}}" height="80" width="80">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <button type="submit" class="btn btn-primary ">Update</button>
                    </div>
                </form>
            </div><!--end row-->
        </div>
    @endsection
