@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Blog Tag</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.blogtag.add')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="name" class="form-label">Blog Tag Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter blog category">
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
                        @forelse ($blogtags as $blogtag)
                            <tr>
                                <td>{{$blogtag->name}}</td>
                                <td>
                                    <a href="{{route('admin.blogtag.edit', $blogtag->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.blogtag.delete', $blogtag->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Blog Tag .</tr>

                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    @endsection


