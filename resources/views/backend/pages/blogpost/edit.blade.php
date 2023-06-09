@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Blog Post</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.blogpost.update', $blogpost->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="title" class="form-label">Blog Post Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$blogpost->title}}">
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Blog Post Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <img src="{{asset('backend/upload/blogpost')}}/{{$blogpost->image}}" height="60" width="60">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('middle_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="middle_title" class="form-label">Blog Post Middle Title</label>
                                    <input type="text" class="form-control" name="middle_title" value="{{$blogpost->middle_title}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('middle_des1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="middle_des1" class="form-label">Blog Post Middle Des1 </label>
                                    <input type="text" class="form-control" name="middle_des1" value="{{$blogpost->middle_des1}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('middle_des2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="middle_des2" class="form-label">Blog Post Middle Des2 </label>
                                    <input type="text" class="form-control" name="middle_des2" value="{{$blogpost->middle_des2}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('middle_url')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="middle_url" class="form-label">Blog Post Middle Url </label>
                                    <input type="text" class="form-control" name="middle_url" value="{{$blogpost->middle_url}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('next_middle_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="next_middle_title" class="form-label">Blog Post Next Middle Title</label>
                                    <input type="text" class="form-control" name="next_middle_title" value="{{$blogpost->next_middle_title}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('next_middle_des1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="next_middle_des1" class="form-label">Blog Post Next Middle Des1 </label>
                                    <input type="text" class="form-control" name="next_middle_des1" value="{{$blogpost->next_middle_des1}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('next_middle_des2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="next_middle_des2" class="form-label">Blog Post Next Middle Des2 </label>
                                    <input type="text" class="form-control" name="next_middle_des2"value="{{$blogpost->next_middle_des2}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('next_middle_des3')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="next_middle_des3" class="form-label">Blog Post Next Middle Des3 </label>
                                    <input type="text" class="form-control" name="next_middle_des3" value="{{$blogpost->next_middle_des3}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('next_middle_des4')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="next_middle_des4" class="form-label">Blog Post Next Middle Des4 </label>
                                    <input type="text" class="form-control" name="next_middle_des4" value="{{$blogpost->next_middle_des4}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('final_title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="final_title" class="form-label">Blog Post Final Title </label>
                                    <input type="text" class="form-control" name="final_title" value="{{$blogpost->final_title}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('final_des')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="final_des" class="form-label">Blog Post Final Title </label>
                                    <input type="text" class="form-control" name="final_des" value="{{$blogpost->final_des}}">
                                </div>
                                <div class="mb-3">
                                    <label for="images" class="form-label">Blog Post Image</label>
                                    <input type="file" class="form-control" name="images[]" multiple>
                                </div>

                                <div class="mb-3">
                                    @foreach ($blogpost->getBlogImage as $images)
                                    <span>
                                        <img src="{{asset('backend/upload/blogpost/other')}}/{{$images->blogpost_image}}" height="60" width="60">
                                    </span>
                                    @endforeach
                                </div>

                                <div class="mb-3">
                                    <label for="blogtag" class="form-label">Blog Tag </label>
                                    <select name="blogtag_id" class="form-control">
                                        <option value="">Select</option>
                                        @foreach ($blogtags as $blogtag)
                                        <option {{$blogpost->getTag()->where('id', $blogtag->id)->exists() ? 'selected': ''}} value="{{$blogtag->id}}">{{$blogtag->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="blogcategory" class="form-label">Blog Category </label>
                                    <select name="blogcategory_id" class="form-control">
                                        @foreach ($blogcategories as $blogcategory)
                                        <option {{$blogpost->getBlogCategory()->where('id', $blogcategory->id)->exists() ? 'selected':''}} value="{{$blogcategory->id}}">{{ $blogcategory->name }}</option>
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
        </div>

    @endsection


