@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Massage Topic For User</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.contact.topic.add')}}" method="POST">
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
                                    <input type="text" class="form-control" name="topic" placeholder="Enter topic title">
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
                            <th>Sl</th>
                            <th>Topic</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($topic as $topic)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$topic->topic}}</td>
                                <td>
                                    <a href="{{route('admin.contact.topic.edit', $topic->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.contact.topic.delete', $topic->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Featured.</tr>

                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    @endsection


