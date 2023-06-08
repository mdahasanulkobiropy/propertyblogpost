@extends('backend.master.master')

    @section('content')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Agent</h5>
                <hr/>
                <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{route('admin.agent.add')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="name" class="form-label">Agent name</label>
                                    <input type="text" class="form-control" name="name"  placeholder="Enter Agent name">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="email" class="form-label">Agent Email</label>
                                    <input type="email" class="form-control" name="email"  placeholder="Agent Email">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="password" class="form-label">Agent Password</label>
                                    <input type="password" class="form-control" name="password"  placeholder="Agent Password">
                                </div>

                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('license')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="license" class="form-label">Agent License</label>
                                    <input type="text" class="form-control" name="license"  placeholder="Enter Agent license">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="phone" class="form-label">Agent Phone Number</label>
                                    <input type="phone" class="form-control" name="phone"  placeholder="Agent Phone">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('about')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="about" class="form-label">Agent About</label>
                                    <textarea class="form-control" name="about" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="image" class="form-label">Agent Images</label>
                                    <input type="file"  class="form-control" name="image">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Agent Specialities</label>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('part1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="part1" class="form-label">Part-1</label>
                                    <input type="text"  class="form-control" name="part1">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('part2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="part2" class="form-label">Part-2</label>
                                    <input type="text"  class="form-control" name="part2">
                                </div>
                                <div class="mb-3">
                                    <div class="mb-3">
                                        @error('part3')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="part3" class="form-label">Part-3</label>
                                    <input type="text"  class="form-control" name="part3">
                                </div>

                                <div class="mb-3">
                                    <label for="social" class="form-label mb-3">Agent Social Media Link:</label>
                                    <br>
                                    <div class="mb-3 mt-3">
                                        @error('facebook')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text"  class="form-control" name="facebook">
                                    <div class="mb-3 mt-3">
                                        @error('twitter')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="twitter" class="form-label mt-4">Twitter</label>
                                    <input type="text"  class="form-control" name="twitter">
                                    <div class="mb-3 mt-3">
                                        @error('pinterest')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="pinterest" class="form-label mt-4">Pinterest</label>
                                    <input type="text"  class="form-control" name="pinterest">
                                    <div class="mb-3 mt-3">
                                        @error('instagram')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="instagram" class="form-label mt-4">Instagram</label>
                                    <input type="text"  class="form-control" name="instagram">
                                </div>
                                <div class="mb-3">
                                    <div >
                                    <button type="submit" class="btn btn-primary">add</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--end row-->
            </div>
            <div class="card-footer">
                <table class="table text-center">
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>license</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>image</th>
                        <th>Agent Status</th>
                        <th>Details</th>
                        <th>action</th>
                    </tr>

                    @forelse ($agentusers as $agent )

                    <tr>
                        <td>{{$loop->index +1}}</td>
                        <td>{{$agent->name}}</td>
                        <td>{{$agent->email}}</td>
                        <td>{{$agent->getAgent->license}}</td>
                        <td>{{$agent->getAgent->phone}}</td>
                        <td><img src="{{asset('backend/upload/image/agent')}}/{{$agent->getAgent->image}}" height="80" width="80" alt="" srcset=""></td>
                        <td>
                            @if ($agent->getAgent->status == '0')
                                <button class="btn btn-danger">Panding</button>
                            @else
                                <button class="btn btn-success">Success</button>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin.agent.details', $agent->id)}}" class="btn btn-info">Deatils</a>
                        </td>

                        <td>
                            <a class="btn btn-warning" href="{{route('admin.agent.edit', $agent->id)}}">E d i t</a>
                            <a class="btn btn-danger" href="{{route('admin.agent.delete', $agent->id)}}">Delete</a>
                        </td>
                    </tr>

                    @empty
                        <tr>There is No Agent .</tr>
                    @endforelse
                </table>
            </div>
            </div>
        </div>

    @endsection


