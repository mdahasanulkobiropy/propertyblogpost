@extends('frontend.master.master')

    @section('content')


        <div class="pxp-content">
            <div class="pxp-agents pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            @foreach ($agenttexts as $agenttext)
                                <h1 class="pxp-page-header">{{$agenttext->title}}</h1>
                                <p class="pxp-text-light">{{$agenttext->sub_title}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="pxp-agents-hero mt-4 mt-md-5">
                    @foreach ($agenttexts as $agenttext)
                        <div class="pxp-agents-hero-fig pxp-cover" style="background-image: url({{asset('backend/upload/image/agent')}}/{{$agenttext->image}}); background-position: 50% 50%;"></div>
                    @endforeach

                    {{-- <div class="pxp-agents-hero-search-container">
                        <div class="container">
                            <div class="pxp-agents-hero-search">
                                @foreach ($agenttexts as $agenttext)
                                    <h2 class="pxp-section-h2 text-white">{{$agenttext->find_title}}</h2>
                                @endforeach
                                <div class="pxp-agents-hero-search-form mt-3 mt-md-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <label for="pxp-agents-search-location">{{$agenttext->location}}</label>
                                                <input type="text" class="form-control" id="pxp-agents-search-location" placeholder="Neighborhood/City/Zip">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                @foreach ($agenttexts as $agenttext)
                                                    <label for="pxp-agents-search-name">{{$agenttext->name}}</label>
                                                @endforeach
                                                <input type="text" class="form-control" id="pxp-agents-search-name" placeholder="Agent name">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <label for="pxp-agents-search-service">Service Needed</label>
                                                <select class="custom-select" id="pxp-agents-search-service">
                                                    <option value="0">--Select--</option>
                                                    @foreach ($status as $status)
                                                      <option value="{{$status->id}}">{{$status->title}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="container">
                    <div class="row mt-200">
                        @foreach ($agents as $agent )
                            {{-- @if ($agent->status == '1') --}}
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <a href="{{route('singleagent.frontend', $agent->agent_id)}}" class="pxp-agents-1-item">
                                        <div class="pxp-agents-1-item-fig-container rounded-lg">
                                            <div class="pxp-agents-1-item-fig pxp-cover" style="background-image: url('{{asset('backend/upload/image/agent')}}/{{$agent->image}}'); background-position: top center"></div>
                                        </div>
                                        <div class="pxp-agents-1-item-details rounded-lg">
                                            <div class="pxp-agents-1-item-details-name">{{$agent->getUserAgent->name}}</div>
                                            <div class="pxp-agents-1-item-details-email"><span class="{{$agent->phone_icon}}"></span> {{$agent->phone}}</div>
                                            <div class="pxp-agents-1-item-details-spacer"></div>
                                            <div class="pxp-agents-1-item-cta text-uppercase">More Details</div>
                                        </div>
                                        {{-- <div class="pxp-agents-1-item-rating"><span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></div> --}}
                                    </a>
                                </div>
                            {{-- @endif --}}
                        @endforeach
                    </div>

                    <ul class="pagination pxp-paginantion mt-2 mt-md-3">
                        {{$agents->links()}}
                    </ul>
                </div>
            </div>
        </div>

    @endsection


