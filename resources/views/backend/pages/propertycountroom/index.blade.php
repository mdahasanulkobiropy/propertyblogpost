@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Count Room</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.countroom.add')}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3 text-center">
                                    @error('countroom')
                                       <p class="alert-danger">{{$message}}</p>
                                    @enderror
                                 </div>
                                <div class="mb-3">
                                    <label for="countroom" class="form-label">Count Room</label>
                                    <input type="text" class="form-control" name="countroom" placeholder="Enter Count Room Number">
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
                            <th>CountRoom</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($countrooms as $countroom)
                            <tr>
                                <td>{{$countroom->countroom}}</td>
                                <td>
                                    <a href="{{route('admin.countroom.edit', $countroom->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.countroom.delete', $countroom->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Count  Room .</tr>

                        @endforelse
                    </table>
                    {{$countrooms->links()}}
                </div>
            </div>
        </div>

    @endsection


