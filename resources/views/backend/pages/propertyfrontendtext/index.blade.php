@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-footer p-4 text-center">
                <div class="row form-control">
                    <table class="table">
                        <tr>
                            <th>Price</th>
                            <th>Beds</th>
                            <th>Baths</th>
                            <th>Type</th>
                            <th>Area</th>
                            <th>Button Text</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($propertyfrontendtexts as $propertyfrontendtext)
                            <tr>
                                <td>{{$propertyfrontendtext->price}}</td>
                                <td>{{$propertyfrontendtext->bed}}</td>
                                <td>{{$propertyfrontendtext->bath}}</td>
                                <td>{{$propertyfrontendtext->type}}</td>
                                <td>{{$propertyfrontendtext->area}}</td>
                                <td>{{$propertyfrontendtext->buttontext}}</td>
                                <td>
                                    <a href="{{route('admin.property.text.edit', $propertyfrontendtext->id)}}" class="btn btn-warning">E d i t</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Bed Room .</tr>

                        @endforelse
                    </table>
                    {{-- {{$bedrooms->links()}} --}}
                </div>
            </div>
        </div>

    @endsection


