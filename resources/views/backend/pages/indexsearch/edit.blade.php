@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Index All Text</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.indexsearch.update', $indexsearch->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Index Search Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$indexsearch->title}}">
                                </div>
                                <div class="mb-3">
                                    <label for="sub_title" class="form-label">Index Search Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" value="{{$indexsearch->sub_title}}" >
                                </div>
                                <div class="mb-3">
                                    <label for="button_text" class="form-label">Index Search Button Text</label>
                                    <input type="text" class="form-control" name="button_text" value="{{$indexsearch->button_text}}">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Index Search Button Text</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <img src="{{asset('backend/upload/image/indexsearch')}}/{{$indexsearch->image}}" height="80" width="80" alt="" srcset="">
                                </div>



                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary ">Update</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
        </div>

    </div>

    @endsection
