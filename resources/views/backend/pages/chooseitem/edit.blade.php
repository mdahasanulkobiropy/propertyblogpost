@extends('backend.master.master')

    @section('content')
        <div class="card-body p-4">
            <h5 class="card-title">Update  Chooseitem</h5>
            <hr/>
            <div class="form-body mt-4">
            <div class="row">
                <form action="{{route('admin.chooseitem.update', $chooseitem->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-12">
                        <div class="border border-3 p-4 rounded">
                            <div class="mb-3">
                                <label for="title" class="form-label">Choose Title</label>
                                <input type="text" class="form-control" name="title" value="{{$chooseitem->title}}" >
                            </div>
                            <div class="mb-3">
                                <label for="sub_title_part1" class="form-label">ChooseItem Sub_Title Par1</label>
                                <input type="text" class="form-control" name="sub_title_part1" value="{{$chooseitem->sub_title_part1}}">
                            </div>
                            <div class="mb-3">
                                <label for="sub_title_part2" class="form-label">ChooseItem Sub_Title Par2</label>
                                <input type="text" class="form-control" name="sub_title_part2" value="{{$chooseitem->sub_title_part2}}">
                            </div>
                            <div class="mb-3">
                                <label for="button_text" class="form-label">ChooseItem Button_text</label>
                                <input type="text" class="form-control" name="button_text" value="{{$chooseitem->button_text}}">
                            </div>
                            <div class="mb-3">
                                <label for="route" class="form-label">ChooseItem route</label>
                                <input type="text" class="form-control" name="route" value="{{$chooseitem->route}}">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Choose Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="mb-3">
                                <img src="{{asset('backend/upload/image/choose/chooseitem')}}/{{$chooseitem->image}}" height="80" width="80" alt="" srcset="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <button type="submit" class="btn btn-primary ">Update</button>
                    </div>
                </form>
            </div><!--end row-->
        </div>
    @endsection
