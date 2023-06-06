@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Blog Post</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.blogpost.add')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Blog Post Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter blog Post Title">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Blog Post Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <label for="middle_title" class="form-label">Blog Post Middle Title</label>
                                    <input type="text" class="form-control" name="middle_title" placeholder="Enter blog Post Middle Title">
                                </div>
                                <div class="mb-3">
                                    <label for="middle_des1" class="form-label">Blog Post Middle Des1 </label>
                                    <input type="text" class="form-control" name="middle_des1" placeholder="Enter blog Post description 1">
                                </div>
                                <div class="mb-3">
                                    <label for="middle_des2" class="form-label">Blog Post Middle Des2 </label>
                                    <input type="text" class="form-control" name="middle_des2" placeholder="Enter blog Post description 2">
                                </div>
                                <div class="mb-3">
                                    <label for="middle_url" class="form-label">Blog Post Middle Url </label>
                                    <input type="text" class="form-control" name="middle_url" placeholder="Enter blog Post Url">
                                </div>
                                <div class="mb-3">
                                    <label for="next_middle_title" class="form-label">Blog Post Next Middle Title</label>
                                    <input type="text" class="form-control" name="next_middle_title" placeholder="Enter blog Post Middle Title">
                                </div>
                                <div class="mb-3">
                                    <label for="next_middle_des1" class="form-label">Blog Post Next Middle Des1 </label>
                                    <input type="text" class="form-control" name="next_middle_des1" placeholder="Enter blog Post description 1">
                                </div>
                                <div class="mb-3">
                                    <label for="next_middle_des2" class="form-label">Blog Post Next Middle Des2 </label>
                                    <input type="text" class="form-control" name="next_middle_des2" placeholder="Enter blog Post description 2">
                                </div>
                                <div class="mb-3">
                                    <label for="next_middle_des3" class="form-label">Blog Post Next Middle Des3 </label>
                                    <input type="text" class="form-control" name="next_middle_des3" placeholder="Enter blog Post Des 3">
                                </div>
                                <div class="mb-3">
                                    <label for="next_middle_des4" class="form-label">Blog Post Next Middle Des4 </label>
                                    <input type="text" class="form-control" name="next_middle_des4" placeholder="Enter blog Post Des4">
                                </div>
                                <div class="mb-3">
                                    <label for="images" class="form-label">Blog Post Image</label>
                                    <input type="file" class="form-control" name="images[]" multiple>
                                </div>
                                <div class="mb-3">
                                    <label for="final_title" class="form-label">Blog Post Final Title </label>
                                    <input type="text" class="form-control" name="final_title" placeholder="Enter blog Post Des4">
                                </div>
                                <div class="mb-3">
                                    <label for="final_des" class="form-label">Blog Post Final Title </label>
                                    <input type="text" class="form-control" name="final_des" placeholder="Enter blog Post Des4">
                                </div>
                                <div class="mb-3">
                                    <label for="blogtag" class="form-label">Blog Tag </label>
                                   <select name="blogtag_id" class="form-control">
                                        <option value="">Select</option>
                                        @foreach ($blogtags as $blogtag)
                                            <option value="{{$blogtag->id}}">{{$blogtag->name}}</option>
                                        @endforeach
                                   </select>
                                </div>
                                <div class="mb-3">
                                    <label for="blogcategory" class="form-label">Blog Category </label>
                                   <select name="blogcategory_id" class="form-control">
                                        <option value="">Select</option>
                                        @foreach ($blogcategories as $bloagcategory)
                                            <option value="{{$bloagcategory->id}}">{{$bloagcategory->name}}</option>
                                        @endforeach
                                   </select>
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
                            <th>Title</th>
                            <th>Image</th>
                            <th>Middle Title</th>
                            <th>Middle des 1</th>
                            <th>Middle des 2</th>
                            <th>Middle Url</th>
                            <th>Blog Category</th>
                            <th>Blog Tag</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($blogposts as $blogpost)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$blogpost->title}}</td>
                                <td><img src="{{asset('backend/upload/blogpost')}}/{{$blogpost->image}}" height="60" width="60" ></td>
                                <td>{{$blogpost->middle_title}}</td>
                                <td>{{$blogpost->middle_des1}}</td>
                                <td>{{$blogpost->middle_des2}}</td>
                                <td>{{$blogpost->middle_url}}</td>
                                <td>{{$blogpost->getBlogCategory->name}}</td>
                                <td>{{$blogpost->getTag->name}}</td>
                                <td>
                                    <a href="{{route('admin.blogpost.details', $blogpost->id)}}" class="btn btn-info">Deatils</a>
                                </td>
                                <td>
                                    <a href="{{route('admin.blogpost.edit', $blogpost->id)}}" class="btn btn-warning">E d i t</a>
                                    <a href="{{route('admin.blogpost.delete', $blogpost->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Blog Tag .</tr>

                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    @endsection


