@extends('backendagent.master.master')

    @section('content')

        <div class="card">
            <div class="col-11 mt-3">
                <a class="btn btn-info"  href="{{route('agent.property')}}">Go Back</a>
            </div>
            <div class="card-body">
                <div class="col-11 mt-3">
                    <label for="iamges">Images:</label>
                    <div class="from-control">
                        @foreach ($property->getImages as $images)
                            <img src="{{asset('backend/upload/image/property/details')}}/{{$images->images}}" height="120" width="120">
                        @endforeach
                    </div>
                </div>
                <div class="col-11 mt-3">
                    <label for="explore">Explore:</label>
                    @foreach ($property->getExplore as $explore )
                    <P class="from-control">{{$loop->index +1}} {{$explore->getExploreName->title}} </P>
                    @endforeach
                </div>
                <div class="col-11 mt-3">
                    <label for="status">Amenities:</label>
                    @foreach ($property->getAmenity as $amenity )
                        <P class="from-control">{{$loop->index +1}} {{$amenity->getAmenityName->title}}   </P>
                    @endforeach
                </div>
                <div class="col-11 mt-3">
                    <label for="description">Description:</label>
                    <P class="from-control">{{$property->description}} </P>
                </div>
                <div class="col-11 mt-3">
                    <label for="description">Button Text:</label>
                    <P class="from-control">{{$property->button_text}} </P>
                </div>
                <div class="col-11 mt-3">
                    <a class="btn btn-warning" href="{{route('agent.property.edit', $property->id)}}">E d i t</a>
                    <a class="btn btn-danger"  href="{{route('admin.poterty.delete', $property->id)}}">Delete</a>
                </div>

            </div>
        </div>

    @endsection
