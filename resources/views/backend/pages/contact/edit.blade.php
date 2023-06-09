@extends('backend.master.master')

    @section('content')
        <div class="card-body p-4">
            <h5 class="card-title">Update New contact</h5>
            <hr/>
            <div class="form-body mt-4">
            <div class="row">
                <form action="{{route('admin.contact.update', $contact->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                        <div class="border border-3 p-4 rounded">
                            <div class="mb-3">
                                <div class="mb-3">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="title" class="form-label">Contact Title</label>
                                <input type="text" class="form-control" name="title" value="{{$contact->title}}" >
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    @error('sub_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="sub_Title" class="form-label">Contact Sub_Title</label>
                                <input type="text" class="form-control" name="sub_title" value="{{$contact->sub_title}}">
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    @error('office_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="button_text" class="form-label">Contact office title</label>
                                <input type="text" class="form-control" name="office_title" value="{{$contact->office_title}}">
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    @error('massage_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="button_text" class="form-label">Contact Massage title</label>
                                <input type="text" class="form-control" name="massage_title" value="{{$contact->massage_title}}">
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    @error('map_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="button_text" class="form-label">Contact Map title</label>
                                <input type="text" class="form-control" name="map_title" value="{{$contact->map_title}}">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">contact Bg Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="mb-3">
                                <img src="{{asset('backend/upload/image/contact')}}/{{$contact->image}}" height="80" width="80" alt="" srcset="">
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
