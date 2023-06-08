@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Update Property</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin.poterty.update',$property->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Property Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$property->title}}" >
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('location')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="location" class="form-label">Poterty Location</label>
                                    <input type="text" class="form-control" name="location" value="{{$property->location}}">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="description" class="form-label">Property Description</label>
                                    <textarea class="form-control" name="description" rows="3">{{$property->description}}</textarea>
                                </div>

                                <div class="col-md-8">
                                    <label for="color" class="form-label">Color</label>
                                    <input type="color" class="form-control" value="{{$property->color}}" name="color">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="image" class="form-label">Property Thumbnail Image</label>
                                    <input type="file"  class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <img src="{{asset('backend/upload/image/property')}}/{{$property->image}}" height="80" width="80" alt="" srcset="">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('images')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="images" class="form-label">Property Other Images</label>
                                    <input type="file"  class="form-control" name="images[]"  multiple>
                                </div>
                                @foreach ($property->getImages as $images)
                                    <div class="mb-3">
                                        <img src="{{asset('backend/upload/image/property')}}/{{$images->images}}" height="80" width="80" alt="" srcset="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="row g-3">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            @error('price')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <label for="price" class="form-label">Property Price</label>
                                        <input type="text" class="form-control" name="price" value="{{$property->price}}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            @error('year_built')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <label for="year_built" class="form-label">Year Built</label>
                                        <input type="text" class="form-control" name="year_built" value="{{$property->year_built}}">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="bedroom" class="form-label">Bed Room</label>
                                        <select class="form-select" name="bedroom_id">
                                            <option>--select--</option>
                                            @foreach ($bedrooms as $bedroom)
                                                <option {{$property->getBedroomNumber()->where('id', $bedroom->id)->exists() ? 'selected' : ''}} value="{{$bedroom->id}}">{{$bedroom->bedroom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="bathroom" class="form-label">Bath Room</label>
                                        <select class="form-select" name="bathroom_id">
                                            <option>--select--</option>
                                            @foreach ($bathrooms as $bathroom)
                                                <option {{$property->getBathroomNumber()->where('id', $bathroom->id)->exists() ? 'selected' : ''}} value="{{$bathroom->id}}">{{$bathroom->bathroom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="roomcount" class="form-label">Room Count</label>
                                        <select class="form-select" name="countroom_id">
                                            <option>--select--</option>
                                            @foreach ($countrooms as $countroom)
                                            <option {{$property->getCountroomNumber()->where('id', $countroom->id)->exists() ? 'selected' : ''}} value="{{$countroom->id}}">{{$countroom->countroom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="button_text" class="form-label">Button Text</label>
                                        <input type="text" class="form-control" name="button_text" value="{{$property->button_text}}">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="roomcount" class="form-label">Parking spaces</label>
                                        <select class="form-select" name="parkingspace_id">
                                            <option>--select--</option>
                                            @foreach ($parkingspaces as $parkingspace)
                                            <option {{$property->getParkingspaceNumber()->where('id', $parkingspace->id)->exists() ? 'selected' : ''}} value="{{$parkingspace->id}}">{{$parkingspace->parkingspace}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            @error('area')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <label for="area" class="form-label">Area spaces</label>
                                        <input type="text" class="form-control" name="area" value="{{$property->area}}">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="stories" class="form-label">Stories</label>
                                        <input type="text" class="form-control" name="stories" value="{{$property->stories}}">
                                    </div>
                                    <div class="col-12">
                                    <label for="featured_id" class="form-label">Property Type</label>
                                        <select class="form-select" name="featured_id">
                                            <option>--select--</option>
                                            @foreach ($featureds as $featured)
                                                <option {{$property->getFeaturedName()->where('id', $featured->id)->exists() ? 'selected' : ''}} value="{{$featured->id}}">{{$featured->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                    <label for="inputVendor" class="form-label">Amenities</label>
                                    <select  class="form-select amenity_id " id="amenity_select" name="amenity_id[]" multiple="multiple">
                                        <option>--select--</option>
                                       @foreach ($amenities as $amenity)
                                            <option {{$property->getAmenity()->where('amenity_id', $amenity->id)->exists() ? 'selected' : ''}}  value="{{$amenity->id}}">{{$amenity->title}}</option>
                                       @endforeach
                                    </select>
                                    </div>
                                    <div class="col-12">
                                    <label for="explore_id" class="form-label">Explore</label>
                                    <select class="form-select explore_select" id="explore_select" name="explore_id[]" multiple="multiple">
                                    <option>--select--</option>
                                        @foreach ($explores as $explore)
                                            <option {{$property->getExplore()->where('explore_id', $explore->id)->exists()  ? 'selected' : ''}} value="{{$explore->id}}">{{$explore->title}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-12">
                                    <label for="status_id" class="form-label">Status</label>
                                    <select class="form-select explore_select" id="status_id" name="status_id">
                                    <option>--select--</option>
                                        @foreach ($statuses as $status)
                                            <option {{$property->getStatusName()->where('id', $status->id)->exists() ? 'selected' : ''}} value="{{$status->id}}">{{$status->title}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-12">
                                    <label for="agent_id" class="form-label">Agent</label>
                                    <select class="form-select agent_select" id="agent_select" name="agent_id">
                                        <option>--select--</option>
                                        @foreach ($agents as $agent)
                                        <option {{ $property->getAgentPropertyDetails()->where('agent_id', $agent->agent_id)->exists() ? 'selected':''}}  value="{{$agent->agent_id}}">{{$agent->getUserAgent->name}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Update Property</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
            </div>
        </div>

    @endsection


