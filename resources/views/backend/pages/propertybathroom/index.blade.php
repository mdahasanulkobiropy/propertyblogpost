@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Bathroom</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.bathroom.add')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    @error('bathroom')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="bathroom" class="form-label">Bath Room Number</label>
                                    <input type="text" class="form-control" value="{{old('bathroom')}}" name="bathroom" placeholder="Enter Bath Room Number">
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
                        @forelse ($bathrooms as $bathroom)
                            <tr>
                                <td>{{$bathroom->bathroom}}</td>
                                <td>
                                    <a href="{{route('admin.bathroom.edit', $bathroom->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.bathroom.delete', $bathroom->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Bath Room .</tr>

                        @endforelse
                    </table>
                    {{$bathrooms->links()}}
                </div>
            </div>
        </div>

    @endsection


