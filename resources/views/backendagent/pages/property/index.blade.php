@extends('backendagent.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Property</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('agent.property.add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Property Title</label>
                                    <input type="text" class="form-control" name="title"  placeholder="Enter Property title">
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Poterty Location</label>
                                    <input type="text" class="form-control" name="location"  placeholder="Enter Property Location">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Property Description</label>
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Property  Image</label>
                                    <input type="file"  class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                <label for="images" class="form-label">Property Other Images</label>
                                <input type="file"  class="form-control" name="images[]"  multiple>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="row g-3">
                                    <div class="col-md-8">
                                        <label for="price" class="form-label">Property Price</label>
                                        <input type="text" class="form-control" name="price" placeholder="$00.00">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="year_built" class="form-label">Year Built</label>
                                        <input type="text" class="form-control" name="year_built" placeholder="y-y-y-y">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="bedroom" class="form-label">Bed Room</label>
                                        <select class="form-select" name="bedroom_id">
                                            <option>--select--</option>
                                            @foreach ($bedrooms as $bedroom)
                                                <option value="{{$bedroom->id}}">{{$bedroom->bedroom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="bathroom" class="form-label">Bath Room</label>
                                        <select class="form-select" name="bathroom_id">
                                            <option>--select--</option>
                                            @foreach ($bathrooms as $bathroom)
                                                <option value="{{$bathroom->id}}">{{$bathroom->bathroom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="roomcount" class="form-label">Room Count</label>
                                        <select class="form-select" name="countroom_id">
                                            <option>--select--</option>
                                            @foreach ($countrooms as $countroom)
                                                <option value="{{$countroom->id}}">{{$countroom->countroom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="button_text" class="form-label">Button Text</label>
                                        <input type="text" class="form-control" name="button_text" placeholder="button_text">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="color" class="form-label">Color</label>
                                        <input type="color" class="form-control" name="color">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="roomcount" class="form-label">Parking spaces</label>
                                        <select class="form-select" name="parkingspace_id">
                                            <option>--select--</option>
                                            @foreach ($parkingspaces as $parkingspace)
                                                <option value="{{$parkingspace->id}}">{{$parkingspace->parkingspace}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        <label for="area" class="form-label">Area spaces</label>
                                        <input type="text" class="form-control" name="area" placeholder="Area sq">
                                    </div>
                                    <div class="col-md-8">
                                        <label for="stories" class="form-label">Stories</label>
                                        <input type="text" class="form-control" name="stories" placeholder="Number of stories">
                                    </div>
                                    <div class="col-12">
                                    <label for="featured_id" class="form-label">Property Type</label>
                                        <select class="form-select" name="featured_id">
                                            <option>--select--</option>
                                            @foreach ($featureds as $featured)
                                                <option value="{{$featured->id}}">{{$featured->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                    <label for="inputVendor" class="form-label">Amenities</label>
                                    <select  class="form-select amenity_id " id="amenity_select" name="amenity_id[]">
                                            <option>--select--</option>
                                            @foreach ($amenities as $amenity)
                                                    <option value="{{$amenity->id}}">{{$amenity->title}}</option>
                                            @endforeach
                                    </select>
                                    </div>
                                    <div class="col-12">
                                    <label for="explore_id" class="form-label">Explore</label>
                                    <select class="form-select explore_select" id="explore_select" name="explore_id[]">
                                    <option>--select--</option>
                                        @foreach ($explores as $explore)
                                            <option value="{{$explore->id}}">{{$explore->title}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    <div class="col-12">
                                    <label for="status_id" class="form-label">Status</label>
                                    <select class="form-select explore_select" id="status_id" name="status_id">
                                    <option>--select--</option>
                                        @foreach ($statuses as $status)
                                            <option value="{{$status->id}}">{{$status->title}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    {{-- <div class="col-12">
                                    <label for="agent_id" class="form-label">Agent</label>
                                    <select class="form-select agent_select" id="agent_select" name="agent_id">
                                        <option>--select--</option>
                                        @foreach ($agents as $agent)
                                            <option value="{{$agent->id}}">{{$agent->name}}</option>
                                        @endforeach
                                    </select>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Save Product</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
            </div>

            <div class="card-footer col-lg-12">
                <table  class="table">
                    <tr>
                        <th>Sl</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>YBuilt</th>
                        <th>Bed</th>
                        <th>Bath</th>
                        <th>Room</th>
                        <th>Parking spaces</th>
                        <th>Area spaces</th>
                        <th>Stories</th>
                        <th>Property Type</th>
                        <th>Status</th>
                        <th>Agent</th>
                        <th>Post Status</th>
                        <th>Details</th>
                        <th>Action</th>

                    </tr>
                    @foreach ($properties as $property )
                    <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$property->title}}</td>
                        <td>{{$property->location}}</td>

                        <td><img src="{{asset('backend/upload/image/property')}}/{{$property->image}}" height="30" width="30"></td>
                        <td style="height: 30px, width:20 ">{{$property->price}}</td>
                        <td>{{$property->year_built}}</td>
                        <td>{{$property->getBedroom->bedroom}}</td>
                        <td>{{$property->getBathroom->bathroom}}</td>
                        <td>{{$property->getCountroom->countroom}}</td>
                        <td>{{$property->getParkingspace->parkingspace}}</td>
                        <td>{{$property->area}}</td>
                        <td>{{$property->stories}}</td>
                        <td>{{$property->getFeaturedName->title}}</td>
                        <td>{{$property->getStatusName->title}}</td>
                        <td>{{$property->getAgentProperty->name}}</td>
                        <td>
                            @if ($property->post_status == '0')
                                <button class="btn btn-danger">Panding</button>
                            @else
                                <button class="btn btn-success">Success</button>
                            @endif
                        </td>
                        <td>
                            <a type="button" class="btn btn-info" href="{{route('agent.property.details', $property->id)}}">Datails</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{route('agent.property.edit', $property->id)}}">E d i t</a>
                            <a class="btn btn-danger"  href="{{route('agent.property.edit', $property->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>

    @endsection


