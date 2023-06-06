@extends('backend.master.master')

    @section('content')
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Blog Tag</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.blogtag.update', $blogtag->id)}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Blog Category Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$blogtag->name}}" >
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
