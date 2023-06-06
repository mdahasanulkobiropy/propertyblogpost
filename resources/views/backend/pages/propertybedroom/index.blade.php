@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Bedroom</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.bedroom.add')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3 text-center">
                                    @error('bedroom')
                                       <p class="alert-danger">{{$message}}</p>
                                    @enderror
                                 </div>
                                <div class="mb-3">
                                    <label for="bedroom" class="form-label">Blog Category Name</label>
                                    <input type="text" class="form-control" name="bedroom" placeholder="Enter Bed Room Number">
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
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($bedrooms as $bedroom)
                            <tr>
                                <td>{{$bedroom->bedroom}}</td>
                                <td>
                                    <a href="{{route('admin.bedroom.edit', $bedroom->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.bedroom.delete', $bedroom->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Bed Room .</tr>

                        @endforelse
                    </table>
                    {{$bedrooms->links()}}
                </div>
            </div>
        </div>

    @endsection


