@extends('backenduser.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Apply To Become an New Agent</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('user.becomeagentapply')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="border border-3 p-4 rounded">

                                <div class="mb-3">
                                    <label for="license" class="form-label">Agent License*</label>
                                    <input type="text" class="form-control" name="license"  placeholder="Enter Agent license">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Agent Phone Number*</label>
                                    <input type="phone" class="form-control" name="phone"  placeholder="Agent Phone">
                                </div>
                                <div class="mb-3">
                                    <label for="about" class="form-label">Agent About*</label>
                                    <textarea class="form-control" name="about" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Agent Images*</label>
                                    <input type="file"  class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Agent Specialities</label>
                                </div>
                                <div class="mb-3">
                                    <label for="part1" class="form-label">Part-1*</label>
                                    <input type="text"  class="form-control" name="part1">
                                </div>
                                <div class="mb-3">
                                    <label for="part2" class="form-label">Part-2*</label>
                                    <input type="text"  class="form-control" name="part2">
                                </div>
                                <div class="mb-3">
                                    <label for="part3" class="form-label">Part-3*</label>
                                    <input type="text"  class="form-control" name="part3">
                                </div>

                                <div class="mb-3">
                                    <label for="social" class="form-label mb-3">Agent Social Media Link:</label>
                                    <br>
                                    <label for="facebook" class="form-label">Facebook*</label>
                                    <input type="text"  class="form-control" name="facebook">
                                    <label for="twitter" class="form-label mt-4">Twitter*</label>
                                    <input type="text"  class="form-control" name="twitter">
                                    <label for="pinterest" class="form-label mt-4">Pinterest*</label>
                                    <input type="text"  class="form-control" name="pinterest">
                                    <label for="instagram" class="form-label mt-4">Instagram*</label>
                                    <input type="text"  class="form-control" name="instagram">
                                </div>
                                <div class="mb-3">
                                    <div >
                                    <button type="submit" class="btn btn-primary">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--end row-->
            </div>
            {{-- <div class="card-footer">
                <table class="table text-center">
                    <tr>
                        <th>Name</th>
                        <th>license</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>about</th>
                        <th>image</th>
                        <th>Specialities</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Pinterest</th>
                        <th>Instagram</th>
                        <th>action</th>
                    </tr>

                    @forelse ($agentusers as $agent )

                    <tr>
                        <td>{{$agent->name}}</td>
                        <td>{{$agent->email}}</td>
                        <td>{{$agent->getAgent->license}}</td>
                        <td>{{$agent->getAgent->phone}}</td>
                        <td>{{$agent->getAgent->about}}</td>
                        <td><img src="{{asset('backend/upload/image/agent')}}/{{$agent->getAgent->image}}" height="80" width="80" alt="" srcset=""></td>
                        <td>{{$agent->getAgent->part1}}<br>{{$agent->getAgent->part2}}<br>{{$agent->getAgent->part3}}</td>
                        <td>{{$agent->getAgent->facebook}}</td>
                        <td>{{$agent->getAgent->twitter}}</td>
                        <td>{{$agent->getAgent->pinterest}}</td>
                        <td>{{$agent->getAgent->instagram}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('admin.agent.edit', $agent->id)}}">E d i t</a>
                            <a class="btn btn-danger" href="{{route('admin.agent.delete', $agent->id)}}">Delete</a>
                        </td>
                    </tr>

                    @empty
                        <tr>There is No Agent .</tr>
                    @endforelse
                </table>
            </div> --}}
            </div>
        </div>

    @endsection


