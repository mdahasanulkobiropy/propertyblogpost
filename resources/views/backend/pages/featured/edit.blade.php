@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Featured</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <form action="{{route('admin.featured.update', $featured->id)}}" method="POST">
                            @csrf
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Featured Title</label>
                                        <input type="text" class="form-control" name="title" value="{{$featured->title}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 mt-3">
                                <button type="submit" class="btn btn-success ">Update</button>
                            </div>
                        </form>
                    </div><!--end row-->
                </div>
            </div>
        </div>

    @endsection

