@extends('frontend.master.master')

    @section('content')
        <div class="pxp-content mb-5">
            <div class="pxp-agents mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-8">
                            <h1 class="pxp-page-header float-left">{{$agent->name}}</h1>
                            {{-- <span class="pxp-agent-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span> --}}
                            <div class="clearfix"></div>
                            <p>{{$agent->getAgent->license}}</p>
                            <div class="mt-4 mt-md-5">
                                <div class="pxp-agent-email"><a href="mailto:erika.tillman@resideo.com"><span class="{{$agent->getAgent->email_icon}}"></span>{{$agent->email}}</a></div>
                                <div class="pxp-agent-phone"><span class="{{$agent->getAgent->phone_icon}}"></span>{{$agent->getAgent->phone}}</div>
                            </div>
                            <div class="mt-4 mt-md-5">
                                <div id="massageoutput" class="text-success">

                                </div>
                                <a href="#pxp-work-with{{$agent->id}}" class="pxp-agent-contact-btn" data-toggle="modal" data-target="#pxp-work-with{{$agent->id}}">Work with  {{$agent->name}}</a>
                            </div>
                        </div>
                        <div class="col-sm-12 offset-lg-1 col-lg-3">
                            <div class="pxp-agent-photo pxp-cover rounded-lg mt-4 mt-md-5 mt-lg-0" style="background-image: url('{{asset('backend/upload/image/agent')}}/{{$agent->getAgent->image}}'); background-position: 50% 0%;"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-lg-8">
                            <div class="pxp-agent-section mt-4 mt-md-5">
                                <h3>About {{$agent->name}}</h3>
                                <div class="mt-3 mt-md-4">
                                    {{$agent->getAgent->about}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 offset-lg-1">
                            <div class="pxp-agent-section mt-4 mt-md-5">
                                <h3>Specialities</h3>
                                <ul class="list-unstyled pxp-agent-specialities mt-3 mt-md-4">
                                    <li>{{$agent->getAgent->part1}}</li>
                                    <li>{{$agent->getAgent->part2}}</li>
                                    <li>{{$agent->getAgent->part3}}</li>
                                </ul>
                            </div>
                            <div class="pxp-agent-section mt-4 mt-md-5">
                                <h3>Social Media</h3>
                                <ul class="list-unstyled pxp-agent-social mt-3 mt-md-4">
                                    <li><a href="{{$agent->getAgent->facebook}}"><span class="{{$agent->getAgent->facebook_icon}}"></span></a></li>
                                    <li><a href="{{$agent->getAgent->twitter}}"><span class="{{$agent->getAgent->twitter_icon}}"></span></a></li>
                                    <li><a href="{{$agent->getAgent->instagram}}"><span class="{{$agent->getAgent->instagram_icon}}"></span></a></li>
                                    <li><a href="{{$agent->getAgent->pinterest}}"><span class="{{$agent->getAgent->pinterest_icon}}"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h2 class="pxp-section-h2 mt-100">Listings by {{$agent->name}}</h2>
                    <div class="row mt-4 mt-md-5">

                        @forelse ( $agent->getProperty as $property )

                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="{{route('singleproperty.frontend', $property->id)}}" class="pxp-prop-card-1 rounded-lg mb-4">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url('{{asset('backend/upload/image/property')}}/{{$property->image}}');"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">{{$property->title}}</div>
                                    <div class="pxp-prop-card-1-details-price">${{$property->price}}</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">{{$property->getBedroom->bedroom}} BD <span>|</span> {{$property->getBathroom->bathroom}} BA <span>|</span>{{$property->area}} SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>

                        @empty
                            <div class="ml-3">
                                <p> <span class="h5">{{$agent->name}}</span> Have No Property List!</p>
                            </div>
                        @endforelse
                    </div>

                    <ul class="pagination pxp-paginantion mt-3 mt-md-4">
                        {{-- <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <span class="fa fa-angle-right"></span></a></li> --}}
                    </ul>

                    <div class="row mt-100">
                        <div class="col-sm-12 col-lg-1"></div>
                        <div class="col-sm-12 col-lg-10">
                            <div class="pxp-agent-block">
                                <div class="pxp-agent-comments">
                                    <h4>{{count($agent->getAgent->getComment)}} Reviews</h4>

                                        <div id="singleagentcommentallupdate" class="mt-3 mt-md-4">
                                            @include('frontend.pages.agents.agentcomment')
                                        </div>

                                    <h4 class="mt-4 mt-md-5">Leave a review</h4>
                                    <form action="{{route('user.sinlgeagentcomment.add')}}" method="POST" class="pxp-agent-comments-form mt-3 mt-md-4">
                                        <div class="row">
                                            <input type="hidden" id="commentagentid" value="{{$agent->id}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="pxp-agent-comments-review">Write a Review</label>
                                            <textarea class="form-control" name="comment" id="pxp-agent-comments-review" rows="6" placeholder="Write your review here..."></textarea>
                                        </div>
                                        <button id="singleagentcommentbutton" type="button" class="pxp-agent-comments-form-btn">Post Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="pxp-work-with{{$agent->id}}" tabindex="-1" role="dialog" aria-labelledby="pxpWorkWithModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="pxpWorkWithModal">Work with {{$agent->name}}</h5>
                        <form class="mt-4">
                            {{-- <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pxp-work-with-firstname">First Name</label>
                                        <input type="text" class="form-control" id="pxp-work-with-firstname">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pxp-work-with-lastname">Last Name</label>
                                        <input type="text" class="form-control" id="pxp-work-with-lastname">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <input type="hidden" id="pxp-work-with-agent-id" name="agent_id" value="{{$agent->id}}">

                                <label for="pxp-work-with-email">Email</label>
                                <input type="text" name="email" class="form-control" id="pxp-work-with-email">
                            </div>
                            <div class="form-group">
                                <label for="pxp-work-with-phone">Phone (optional)</label>
                                <input type="text" class="form-control" id="pxp-work-with-phone">
                            </div>
                            <div class="form-group">
                                <label for="pxp-work-with-interest">I am interested in</label>
                                <select class="custom-select" id="pxp-work-with-interest">
                                    <option value="">--Select--</option>
                                    @foreach ($status as $status)
                                        <option value="{{$status->id}}">{{$status->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <button type="button" id="agentmassagefromusersubmitbutton"  class="pxp-agent-contact-modal-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    @endsection

