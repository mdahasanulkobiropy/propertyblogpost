@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Index All Text</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.indexalltext.update', $indexalltext->id)}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="property_title" class="form-label">Property Title</label>
                                    <input type="text" class="form-control" name="property_title" value="{{$indexalltext->property_title}}">
                                </div>
                                <div class="mb-3">
                                    <label for="property_sub_title" class="form-label">Property Sub Title</label>
                                    <input type="text" class="form-control" name="property_sub_title" value="{{$indexalltext->property_sub_title}}" >
                                </div>
                                <div class="mb-3">
                                    <label for="property_button_text" class="form-label">Property Button Text</label>
                                    <input type="text" class="form-control" name="property_button_text" value="{{$indexalltext->property_button_text}}">
                                </div>
                                <div class="mb-3">
                                    <label for="agent_title" class="form-label">Property Title</label>
                                    <input type="text" class="form-control" name="agent_title" value="{{$indexalltext->agent_title}}">
                                </div>
                                <div class="mb-3">
                                    <label for="agent_sub_title" class="form-label">Property Sub Title</label>
                                    <input type="text" class="form-control" name="agent_sub_title" value="{{$indexalltext->agent_sub_title}}" >
                                </div>
                                <div class="mb-3">
                                    <label for="agent_button_text" class="form-label">Property Button Text</label>
                                    <input type="text" class="form-control" name="agent_button_text" value="{{$indexalltext->agent_button_text}}">
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
