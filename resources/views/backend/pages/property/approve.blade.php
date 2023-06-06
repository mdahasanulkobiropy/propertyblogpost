@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body col-lg-12">
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
                            <a type="button" class="btn btn-info" href="{{route('admin.poterty.details', $property->id)}}">Datails</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{route('admin.property.approvesure', $property->id)}}">Approve</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>

    @endsection


