@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Blog Category</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.blogcategory.add')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Blog Category Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter blog category">
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
                        @forelse ($blogcategories as $blogcategory)
                            <tr>
                                <td>{{$blogcategory->name}}</td>
                                <td>
                                    <a href="{{route('admin.blogcategory.edit', $blogcategory->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.blogcategory.delete', $blogcategory->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Blog Category .</tr>

                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    @endsection


