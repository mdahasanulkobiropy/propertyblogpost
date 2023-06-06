@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Explore</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.explore.add')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Explore Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter explore title">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-success ">Add</button>
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
                        @forelse ($explores as $explore)
                            <tr>
                                <td>{{$explore->title}}</td>
                                <td>
                                    <a href="{{route('admin.explore.edit', $explore->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.explore.delete', $explore->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Explore .</tr>

                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    @endsection


