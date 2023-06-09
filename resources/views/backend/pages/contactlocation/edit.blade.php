@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Office Location</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.contact.location.update', $office->id)}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('city_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="title" class="form-label">City Name:</label>
                                    <input type="text" class="form-control" name="city_name" value="{{$office->city_name}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('floor_position')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="title" class="form-label">Floor Position:</label>
                                    <input type="text" class="form-control" name="floor_position" value="{{$office->floor_position}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('location')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="title" class="form-label">Bulding Location:</label>
                                    <input type="text" class="form-control" name="location" value="{{$office->location}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="title" class="form-label">Phone Number:</label>
                                    <input type="text" class="form-control" name="phone" value="{{$office->phone}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="title" class="form-label">Email Address:</label>
                                    <input type="text" class="form-control" name="email" value="{{$office->email}}">
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


