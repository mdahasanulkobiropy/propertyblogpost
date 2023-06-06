
@extends('backend.master.master')

@section('content')

    <div class="card">

        <div class="card-body">
            <div class="col-11 mt-3">
                <a class="btn btn-info"  href="{{route('admin.agent')}}">Go Back</a>
            </div>


            <div class="col-11 mt-3">
                <label for="next">Specialities:</label>
                <div class="col-11 mt-3">
                    <label for="next">Part1:</label>
                    <p>{{$agent->getAgent->part1}}</p>
                </div>

                <div class="col-11 mt-3">
                    <label for="next">Part2:</label>
                    <p>{{$agent->getAgent->part2}}</p>
                </div>
                <div class="col-11 mt-3">
                    <label for="next">Part3:</label>
                    <p>{{$agent->getAgent->part3}}</p>
                </div>

            </div>

            <div class="col-11 mt-3">
                <label for="next">Social Area:</label>
                <div class="col-11 mt-3">
                    <label for="next"> Facebook :</label>
                    <p>{{$agent->getAgent->facebook}}</p>
                </div>
                <div class="col-11 mt-3">
                    <label for="next"> Twitter :</label>
                    <p>{{$agent->getAgent->twitter}}</p>
                </div>
                <div class="col-11 mt-3">
                    <label for="next"> Pinterest :</label>
                    <p>{{$agent->getAgent->pinterest}}</p>
                </div>
                <div class="col-11 mt-3">
                    <label for="next"> Instagram :</label>
                    <p>{{$agent->getAgent->instagram}}</p>
                </div>
            </div>
            <div class="col-11 mt-3">
                <label for="next"> About :</label>
                <p>{{$agent->getAgent->about}}</p>
            </div>
        </div>
        <div class="col-11 m-3 mb-5">
            <a class="btn btn-warning" href="{{route('admin.agent.edit', $agent->id)}}">E d i t</a>
            <a class="btn btn-danger" href="{{route('admin.agent.delete', $agent->id)}}">Delete</a>
        </div>

    </div>

@endsection
