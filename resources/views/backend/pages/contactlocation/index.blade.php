@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Office Location</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.contact.location.add')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="title" class="form-label">City Name:</label>
                                    <input type="text" class="form-control" name="city_name" placeholder="Enter City Name">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Floor Position:</label>
                                    <input type="text" class="form-control" name="floor_position" placeholder="Enter floor position">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Bulding Location:</label>
                                    <input type="text" class="form-control" name="location" placeholder="Enter location">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Phone Number:</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Email Address:</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter email Address">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-info ">Add</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
            </div>
            <div class="card-footer p-4 text-center">
                <div class="row form-control">
                    <table class="table">
                        <tr>
                            <th>Sl</th>
                            <th>City Name</th>
                            <th>Floor Position</th>
                            <th>Bulding Location</th>
                            <th>Phone Number</th>
                            <th>Email Address</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($office as $office)
                            <tr>
                                <td>{{$loop->index}}</td>
                                <td>{{$office->city_name}}</td>
                                <td>{{$office->floor_position}}</td>
                                <td>{{$office->location}}</td>
                                <td>{{$office->phone}}</td>
                                <td>{{$office->email}}</td>
                                <td>
                                    <a href="{{route('admin.contact.location.edit', $office->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.contact.location.delete', $office->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Office.</tr>

                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    @endsection


