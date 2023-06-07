@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Massage Topic For User</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.contact.topic.update', $topic->id)}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    @error('topic')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Topic Title</label>
                                    <input type="text" class="form-control" name="topic" value="{{$topic->topic}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-info ">update</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
            </div>
        </div>

    @endsection


