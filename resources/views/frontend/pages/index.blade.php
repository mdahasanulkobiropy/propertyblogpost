@extends('frontend.master.master')

    @section('content')

        <div class="pxp-content">
            <div class="pxp-hero vh-100">
                <div class="pxp-hero-props-carousel-2">
                    <div class="carousel slide pxp-hero-props-carousel-2-left" data-ride="carousel" data-pause="false" data-interval="false">
                        <div class="carousel-inner">
                            @foreach ($properties as $property)
                                <div class="carousel-item {{$loop->first ? 'active' : ''}}" data-slide="{{$loop->index}}" style="background-color: {{$property->color}};">
                                    <div class="pxp-caption">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-10">
                                                <div class="pxp-caption-prop-title">{{$property->title}}</div>
                                            </div>
                                        </div>
                                        <div class="pxp-caption-prop-features mt-4">{{$property->getBedroom->bedroom}} BD <span>|</span> {{$property->getBathroom->bathroom}} BA <span>|</span> {{$property->area}} SF</div>
                                        <div class="pxp-caption-prop-price mt-5">${{$property->price}}</div>
                                    </div>
                                    <a href="{{route('singleproperty.frontend', $property->id)}}" class="pxp-cta text-uppercase pxp-animate">{{$property->button_text}}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="pxp-hero-props-carousel-2-right" class="carousel slide pxp-hero-props-carousel-2-right" data-ride="carousel" data-pause="false" data-interval="7000">
                        <div class="carousel-inner">
                            @foreach ($properties as $property)
                                <div class="carousel-item {{$loop->first ? 'active' : ''}}" data-slide="{{$loop->index}}">
                                    <div class="pxp-hero-bg pxp-cover" style="background-image: url('{{asset('backend/upload/image/property')}}/{{$property->image}}');"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pxp-carousel-controls">
                        <a class="pxp-carousel-control-prev" role="button" data-slide="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.414" height="20.828" viewBox="0 0 32.414 20.828">
                                <g id="Group_30" data-name="Group 30" transform="translate(-1845.086 -1586.086)">
                                    <line id="Line_2" data-name="Line 2" x1="30" transform="translate(1846.5 1596.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"/>
                                    <line id="Line_3" data-name="Line 3" x1="9" y2="9" transform="translate(1846.5 1587.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"/>
                                    <line id="Line_4" data-name="Line 4" x1="9" y1="9" transform="translate(1846.5 1596.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"/>
                                </g>
                            </svg>
                        </a>
                        <a class="pxp-carousel-control-next" role="button" data-slide="next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32.414" height="20.828" viewBox="0 0 32.414 20.828">
                                <g id="Symbol_1_1" data-name="Symbol 1 – 1" transform="translate(-1847.5 -1589.086)">
                                    <line id="Line_5" data-name="Line 2" x2="30" transform="translate(1848.5 1599.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"/>
                                    <line id="Line_6" data-name="Line 3" x2="9" y2="9" transform="translate(1869.5 1590.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"/>
                                    <line id="Line_7" data-name="Line 4" y1="9" x2="9" transform="translate(1869.5 1599.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="pxp-carousel-ticker">
                        <div class="pxp-carousel-ticker-counter"></div>
                        <div class="pxp-carousel-ticker-divider">&nbsp;&nbsp;/&nbsp;&nbsp;</div>
                        <div class="pxp-carousel-ticker-total"></div>
                    </div>
                </div>
            </div>

            <div class="container mt-100">
                <div class="row align-items-end">
                    <div class="col-lg-auto">
                        @foreach ($indexalltexts as $indexalltext )
                            <h2 class="pxp-section-h2">{{$indexalltext->property_title}}</h2>
                            <p class="pxp-text-light">{{$indexalltext->property_sub_title}}</p>
                        @endforeach
                    </div>
                    <div class="col-lg">
                        <ul class="filter-list nav justify-content-lg-end">
                            <li class="nav-item filter-list__item">
                                <button type="button" class="filter-list__btn active" data-toggle="pill" data-filter="*">All</button>
                            </li>
                            @foreach ($featureds as $featured)
                                <li class="nav-item filter-list__item">
                                <button type="button" class="filter-list__btn" data-toggle="pill" data-filter=".{{ $featured->id}}">{{ $featured->title}}</button>
                                </li>
                           @endforeach
                        </ul>
                    </div>
                </div>
                <div class="filter-grid row mt-4 mt-md-5">
                    @foreach ($properties as $property)
                        <div class="filter-grid__item col-lg-4 col-md-6 {{$property->featured_id}} featured-3">
                            <a href="{{route('singleproperty.frontend', $property->id)}}" class="pxp-prop-card-1 rounded-lg mb-4">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url('{{asset('backend/upload/image/property')}}/{{$property->image}}');"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">{{$property->title}}</div>
                                    <div class="pxp-prop-card-1-details-price">${{$property->price}}</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">{{$property->getBedroom->bedroom}} BD <span>|</span> {{$property->getBathroom->bathroom}} BA <span>|</span>  {{$property->area}} SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">{{$property->button_text}}</div>
                            </a>
                        </div>
                    @endforeach
                </div>


                <a href="{{route('properties.frontend')}}" class="pxp-primary-cta text-uppercase mt-2 mt-md-4 pxp-animate">

                    @foreach ($indexalltexts as $indexalltext )
                        {{ $indexalltext->property_button_text}}
                    @endforeach

                </a>

            </div>

            <div class="pt-100 pb-100 mt-100 position-relative">
                @foreach ($chooses as $choose)
                    <div class="pxp-services-c pxp-cover" style="background-image: url('{{asset('backend/upload/image/choose')}}/{{$choose->image}}');"></div>
                @endforeach
                <div class="pxp-services-c-content">
                    @foreach ($chooses as $choose)
                        <div class="pxp-services-c-intro">
                            <h2 class="pxp-section-h2 text-white">{{$choose->title}}</h2>
                            <p class="pxp-text-light text-white">{{$choose->sub_title}}</p>
                            <a href="#" class="pxp-primary-cta text-white text-uppercase mt-2 mt-md-3 mt-lg-5 pxp-animate">{{$choose->button_text}}</a>
                        </div>
                    @endforeach
                    <div class="pxp-services-c-container mt-4 mt-md-5 mt-lg-0">
                        <div class="owl-carousel pxp-services-c-stage">
                            @foreach ($chooseitems as $chooseitem)
                                <div>
                                    <a href="{{route($chooseitem->route)}}" class="pxp-services-c-item">
                                        <div class="pxp-services-c-item-fig">
                                            <img src="{{asset('backend/upload/image/choose/chooseitem')}}/{{$chooseitem->image}}" alt="...">
                                        </div>
                                        <div class="pxp-services-c-item-text text-center">
                                            <div class="pxp-services-c-item-text-title">{{$chooseitem->title}}</div>
                                            <div class="pxp-services-c-item-text-sub">{{$chooseitem->sub_title_part1}}<br>{{$chooseitem->sub_title_part2}}</div>
                                        </div>
                                        <div class="pxp-services-c-item-cta text-uppercase text-center">{{$chooseitem->button_text}}</div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-100 container mt-100">
                @foreach ($indexalltexts as $indexalltext )
                            <h2 class="pxp-section-h2">{{$indexalltext->agent_title}}</h2>
                            <p class="pxp-text-light">{{$indexalltext->agent_sub_title}}</p>
                        @endforeach
                <div class="row mt-4 mt-md-5">

                    @forelse ($agents as $agent)
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

                    @empty
                    <div class="ml-3">
                        <p>There are No Agent.</p>
                    </div>
                    @endforelse
                </div>

                <a href="{{route('agents.frontend')}}" class="pxp-primary-cta text-uppercase mt-1 mt-md-4 pxp-animate">
                    @foreach ($indexalltexts as $indexalltext )
                         {{ $indexalltext->agent_button_text}}
                    @endforeach

                </a>
            </div>

            @foreach ($indexsearchs as $indexsearch )
                <div class="pxp-cta-1 pxp-cover mt-100 pt-200 pb-200" style="background-image: url('{{asset('backend/upload/image/indexsearch')}}/{{$indexsearch->image}}'); background-position: 50% 50%;">
            @endforeach
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="pxp-cta-1-caption pxp-animate-in">
                                @foreach ($indexsearchs as $indexsearch )

                                    <h2 class="pxp-section-h2 text-white">{{$indexsearch->title}}</h2>
                                    <p class="pxp-text-light text-white">{{$indexsearch->sub_title}}</p>
                                @endforeach
                                <a href="{{route('properties.frontend')}}" class="pxp-primary-cta text-white text-uppercase mt-3 mt-md-5 pxp-animate">
                                    @foreach ($indexsearchs as $indexsearch )
                                        {{$indexsearch->button_text}}
                                    @endforeach
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @endsection










