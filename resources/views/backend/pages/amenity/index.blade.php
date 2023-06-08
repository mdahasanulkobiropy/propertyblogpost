@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Amenity</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.amenity.add')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="title" class="form-label">Amenity Title</label>
                                    <input type="text" class="form-control" value="{{old('title')}}" name="title" placeholder="Enter Amenity title">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('icon_class')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="icon_class" class="form-label">Amenity Icon</label>
                                    <input type="text" class="form-control"  value="{{old('icon_class')}}" name="icon_class" placeholder="Enter Amenity Icon">
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
                            <th>Icon</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($amenities as $amenity)
                            <tr>
                                <td>{{$amenity->icon_class}}</td>
                                <td>{{$amenity->title}}</td>
                                <td>
                                    <a href="{{route('admin.amenity.edit', $amenity->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.amenity.delete', $amenity->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Amenity .</tr>

                        @endforelse
                    </table>

                </div>
            </div>
        </div>

    @endsection


