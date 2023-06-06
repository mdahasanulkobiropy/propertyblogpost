@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Choose Item</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.chooseitem.add')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Choose Item Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                <div class="mb-3">
                                    <label for="sub_title_part1" class="form-label">ChooseItem Sub_Title Par1</label>
                                    <input type="text" class="form-control" name="sub_title_part1" placeholder="Sub Title 1" >
                                </div>
                                <div class="mb-3">
                                    <label for="sub_title_part2" class="form-label">ChooseItem Sub_Title Par2</label>
                                    <input type="text" class="form-control" name="sub_title_part2" placeholder="Sub Title 2">
                                </div>
                                <div class="mb-3">
                                    <label for="button_text" class="form-label">ChooseItem Button_text</label>
                                    <input type="text" class="form-control" name="button_text" placeholder="Button Text">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Choose Item Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <label for="route" class="form-label">Choose Item Route</label>
                                    <input type="text" class="form-control" name="route">
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-primary ">add</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
        </div>
        <div class="card-footer p-4 text-center">
            <div class="row form-control">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <th>Subtitle part 1</th>
                        <th>Subtitle part 2</th>
                        <th>Button Text</th>
                        <th>Image</th>
                        <th>Route</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($chooseitems as $chooseitem)
                        <tr>
                            <td>{{$chooseitem->title}}</td>
                            <td>{{$chooseitem->sub_title_part1}}</td>
                            <td>{{$chooseitem->sub_title_part2}}</td>
                            <td>{{$chooseitem->button_text}}</td>
                            <td>{{$chooseitem->route}}</td>
                            <td><img src="{{asset('backend/upload/image/choose/chooseitem')}}/{{$chooseitem->image}}" height="80" width="80" alt="" srcset=""></td>
                            <td>
                                <a href="{{route('admin.chooseitem.edit', $chooseitem->id)}}" class="btn btn-warning">E d i t</a>
                                <a href="{{route('admin.chooseitem.delete', $chooseitem->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    @empty

                        <tr>There is No Choose Item .</tr>

                    @endforelse
                </table>
            </div>
        </div>
    </div>

    @endsection
