@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Parking Space</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.parkingspace.add')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    @error('parkingspace')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="parkingspace" class="form-label">Parking Space</label>
                                    <input type="text" class="form-control" name="parkingspace" placeholder="Enter Parking Space Number">
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
                            <th>Parking Space</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($parkingspaces as $parkingspace)
                            <tr>
                                <td>{{$parkingspace->parkingspace}}</td>
                                <td>
                                    <a href="{{route('admin.parkingspace.edit', $parkingspace->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.parkingspace.delete', $parkingspace->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Parking Space.</tr>

                        @endforelse
                    </table>
                    {{$parkingspaces->links()}}
                </div>
            </div>
        </div>

    @endsection


