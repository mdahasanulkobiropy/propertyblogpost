@extends('backend.master.master')

    @section('content')
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Bed Room Number</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.property.text.update', $propertyfrontendtext->id)}}" method="POST">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="price" class="form-label">price Text</label>
                                    <input type="text" class="form-control" name="price" value="{{$propertyfrontendtext->price}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('bed')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="bed" class="form-label">Bed Text</label>
                                    <input type="text" class="form-control" name="bed" value="{{$propertyfrontendtext->bed}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('bath')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="bath" class="form-label">bath Text</label>
                                    <input type="text" class="form-control" name="bath" value="{{$propertyfrontendtext->bath}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('type')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="type" class="form-label">Type Text</label>
                                    <input type="text" class="form-control" name="type" value="{{$propertyfrontendtext->type}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('area')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="area" class="form-label">Area Text</label>
                                    <input type="text" class="form-control" name="area" value="{{$propertyfrontendtext->area}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('buttontext')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="buttontext" class="form-label">Button Text </label>
                                    <input type="text" class="form-control" name="buttontext" value="{{$propertyfrontendtext->buttontext}}" >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <button type="submit" class="btn btn-info ">Update</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
            </div>
        </div>

    @endsection
