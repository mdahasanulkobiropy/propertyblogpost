@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Agent</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('admin.agent.update', $agentuser->id)}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Agent name</label>
                                    <input type="text" class="form-control" name="name"  value="{{$agentuser->name}}" >
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Agent Email</label>
                                    <input type="email" class="form-control" name="email"  value="{{$agentuser->email}}" >
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label"> Reset Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Reset Password">
                                </div>

                                <div class="mb-3">
                                    <label for="license" class="form-label">Agent License</label>
                                    <input type="text" class="form-control" name="license"  value="{{$agentuser->getAgent->license}}" >
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Agent Phone Number</label>
                                    <input type="phone" class="form-control" name="phone" value="{{$agentuser->getAgent->phone}}" >
                                </div>
                                <div class="mb-3">
                                    <label for="about" class="form-label">Agent About</label>
                                    <textarea class="form-control" name="about" rows="3">{{$agentuser->getAgent->about}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Agent Images*</label>
                                    <input type="file"  class="form-control" name="image">
                                    <img src="{{asset('backend/upload/image/agent')}}/{{$agentuser->getAgent->image}}" height="80" width="80" alt="" srcset="">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Agent Specialities</label>
                                </div>
                                <div class="mb-3">
                                    <label for="part1" class="form-label">Part-1</label>
                                    <input type="text"  class="form-control" name="part1" value="{{$agentuser->getAgent->part1}}">
                                </div>
                                <div class="mb-3">
                                    <label for="part2" class="form-label">Part-2</label>
                                    <input type="text"  class="form-control" name="part2"  value="{{$agentuser->getAgent->part2}}">
                                </div>
                                <div class="mb-3">
                                    <label for="part3" class="form-label">Part-3</label>
                                    <input type="text"  class="form-control" name="part3"  value="{{$agentuser->getAgent->part3}}">
                                </div>

                                <div class="mb-3">
                                    <label for="social" class="form-label mb-3">Agent Social Media Link:</label>
                                    <br>
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text"  class="form-control" name="facebook"  value="{{$agentuser->getAgent->facebook}}">
                                    <label for="twitter" class="form-label mt-4">Twitter</label>
                                    <input type="text"  class="form-control" name="twitter" value="{{$agentuser->getAgent->twitter}}">
                                    <label for="pinterest" class="form-label mt-4">Pinterest</label>
                                    <input type="text"  class="form-control" name="pinterest" value="{{$agentuser->getAgent->pinterest}}">
                                    <label for="instagram" class="form-label mt-4">Instagram</label>
                                    <input type="text"  class="form-control" name="instagram" value="{{$agentuser->getAgent->instagram}}">
                                </div>
                                <div class="mb-3">
                                    <div >
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--end row-->
            </div>
            </div>
        </div>

    @endsection


