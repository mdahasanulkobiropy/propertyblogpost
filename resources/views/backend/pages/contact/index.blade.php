

@extends('backend.master.master')

    @section('content')

        <div class="card">

            </div>
            <div class="card-footer p-4 text-center">
                <div class="row form-control">
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Office Title</th>
                            <th>Massage Title</th>
                            <th>Map Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($contact as $contact)
                            <tr>
                                <td>{{$contact->title}}</td>
                                <td>{{$contact->sub_title}}</td>
                                <td>{{$contact->office_title}}</td>
                                <td>{{$contact->massage_title}}</td>
                                <td>{{$contact->map_title}}</td>
                                <td><img src="{{asset('backend/upload/image/contact')}}/{{$contact->image}}" height="120" width="120" alt="" srcset=""></td>
                                <td>
                                    <a href="{{route('admin.contact.edit', $contact->id)}}" class="btn btn-warning">E d i t</a>
                                </td>
                            </tr>

                        @empty

                            <tr>There is No Amenity .</tr>

                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    @endsection



