@extends('backend.master.master')

    @section('content')
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Parking Space</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.parkingspace.update', $parkingspace->id)}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="parkingspace" class="form-label">Parking Space Number</label>
                                    <input type="text" class="form-control" name="parkingspace" value="{{$parkingspace->parkingspace}}" >
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
