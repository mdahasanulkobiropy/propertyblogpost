
@extends('frontend.master.master')

    @section('content')
        <div class="pxp-content">
            <div class="pxp-single-property-top pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <h2 class="pxp-sp-top-title">{{$property->title}}</h2>
                            <p class="pxp-sp-top-address pxp-text-light">{{$property->location}}</p>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="pxp-sp-top-btns mt-2 mt-md-0">
                                <a href="#" class="pxp-sp-top-btn"><span class="fa fa-star"></span> Save</a>
                                <div class="dropdown">
                                    <a class="pxp-sp-top-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fa fa-share-alt"></span> Share
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><span class="fa fa-facebook"></span> Facebook</a>
                                        <a class="dropdown-item" href="#"><span class="fa fa-twitter"></span> Twitter</a>
                                        <a class="dropdown-item" href="#"><span class="fa fa-pinterest"></span> Pinterest</a>
                                        <a class="dropdown-item" href="#"><span class="fa fa-linkedin"></span> LinkedIn</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix d-block d-xl-none"></div>
                            <div class="pxp-sp-top-feat mt-3 mt-md-0">
                                <div>{{$property->getBedroom->bedroom}} <span>BD</span></div>
                                <div>{{$property->getBathroom->bathroom}} <span>BA</span></div>
                                <div>{{$property->area}} <span>SF</span></div>
                            </div>
                            <div class="pxp-sp-top-price mt-3 mt-md-0">${{$property->price}}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-single-property-gallery-container mt-4 mt-md-5">
                <div class="pxp-single-property-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                    @foreach ($property->getImages as $images)
                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class=" {{$loop->first ? 'pxp-sp-gallery-main-img': ''}}">
                            <a href="{{asset('backend/upload/image/property')}}/{{$images->images}}" itemprop="contentUrl" data-size="1920x1280" class="pxp-cover" style="background-image: url({{asset('backend/upload/image/property')}}/{{$images->images}});"></a>
                            <figcaption itemprop="caption description">Image caption</figcaption>
                        </figure>
                    @endforeach
                </div>
                <a href="#" class="pxp-sp-gallery-btn">View Photos</a>
                <div class="clearfix"></div>
            </div>
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="pswp__bg"></div>
                <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                        <div class="pswp__top-bar">
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                            <button class="pswp__button pswp__button--share" title="Share"></button>
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100 mb-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="pxp-single-property-section">
                            <h3>Key Details</h3>
                            <div class="row mt-3 mt-md-4">
                                <div class="col-sm-6">
                                    <div class="pxp-sp-key-details-item">
                                        <div class="pxp-sp-kd-item-label text-uppercase">Status</div>
                                        <div class="pxp-sp-kd-item-value">{{$status->title}}</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="pxp-sp-key-details-item">
                                        <div class="pxp-sp-kd-item-label text-uppercase">Property Type</div>
                                        <div class="pxp-sp-kd-item-value">{{$freatured->title}}</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="pxp-sp-key-details-item">
                                        <div class="pxp-sp-kd-item-label text-uppercase">Year Built</div>
                                        <div class="pxp-sp-kd-item-value">{{$property->year_built}}</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="pxp-sp-key-details-item">
                                        <div class="pxp-sp-kd-item-label text-uppercase">Stories</div>
                                        <div class="pxp-sp-kd-item-value">{{$property->stories}}</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="pxp-sp-key-details-item">
                                        <div class="pxp-sp-kd-item-label text-uppercase">Room Count</div>
                                        <div class="pxp-sp-kd-item-value">{{$property->getCountroom->countroom}}</div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="pxp-sp-key-details-item">
                                        <div class="pxp-sp-kd-item-label text-uppercase">Parking Spaces</div>
                                        <div class="pxp-sp-kd-item-value">{{$property->parking_space}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pxp-single-property-section mt-4 mt-md-5">
                            <h3>Overview</h3>
                            <div class="mt-3 mt-md-4">

                                <p>{{$property->description}}</p>
                                {{-- <p>Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space. The second bedroom is<span class="pxp-dots">...</span><span class="pxp-dots-more"> a corner room with double windows. The kitchen has fabulous space, new appliances, and a laundry area. Other features include rich herringbone floors, crown moldings and coffered ceilings throughout the apartment. 1049 5th Avenue is a classic pre-war building located across from Central Park, the reservoir and The Metropolitan Museum. Elegant lobby and 24 hours doorman. This is a pet-friendly building.
                                <br><br>
                                Conveniently located close to several trendy fitness centers like Equinox, New York Sports Clubs & Crunch. Fine restaurants around the area, as well as top-ranked schools. 2% Flip tax paid by buyer to the condominium. Building just put an assessment for 18 months of approximately $500 per month.</span></p> --}}
                                <a href="#" class="pxp-sp-more text-uppercase"><span class="pxp-sp-more-1">Continue Reading <span class="fa fa-angle-down"></span></span><span class="pxp-sp-more-2">Show Less <span class="fa fa-angle-up"></span></span></a>
                            </div>
                        </div>

                        <div class="pxp-single-property-section mt-4 mt-md-5">
                            <h3>Amenities</h3>
                            <div class="row mt-3 mt-md-4">
                               @foreach ($property->getAmenity as $amenity)
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="pxp-sp-amenities-item"><span class="{{$amenity->getAmenityName->icon_class}}"></span>{{ $amenity->getAmenityName->title}} </div>
                                    </div>
                               @endforeach
                            </div>
                        </div>

                        {{-- <div class="pxp-single-property-section mt-4 mt-md-5">
                            <h3>Explore the Area</h3>
                            <div class="pxp-sp-pois-nav mt-3 mt-md-4">
                                @foreach ($property->getExplore as $explore)

                                <div class="pxp-sp-pois-nav-transportation text-uppercase">{{$explore->getExploreName->title}}</div>

                                @endforeach
                                <div class="pxp-sp-pois-nav-restaurants text-uppercase">Restaurants</div>
                                <div class="pxp-sp-pois-nav-shopping text-uppercase">Shopping</div>
                                <div class="pxp-sp-pois-nav-cafes text-uppercase">Cafes & Bars</div>
                                <div class="pxp-sp-pois-nav-arts text-uppercase">Arts & Entertainment</div>
                                <div class="pxp-sp-pois-nav-fitness text-uppercase">Fitness</div>
                            </div>
                            <div id="pxp-sp-map" class="mt-3"></div>
                        </div> --}}

                        {{-- <div class="pxp-single-property-section mt-4 mt-md-5">
                            <h3>Payment Calculator</h3>
                            <div class="pxp-calculator-view mt-3 mt-md-4">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-4 align-self-center">
                                        <div class="pxp-calculator-chart-container">
                                            <canvas id="pxp-calculat or-chart"></canvas>
                                            <div class="pxp-calculator-chart-result">
                                                <div class="pxp-calculator-chart-result-sum">$11,277</div>
                                                <div class="pxp-calculator-chart-result-label">per month</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-8 align-self-center mt-3 mt-lg-0">
                                        <div class="pxp-calculator-data">
                                            <div class="row justify-content-between">
                                                <div class="col-8">
                                                    <div class="pxp-calculator-data-label"><span class="fa fa-minus"></span>Principal and Interest</div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div class="pxp-calculator-data-sum" id="pxp-calculator-data-pi"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pxp-calculator-data">
                                            <div class="row justify-content-between">
                                                <div class="col-8">
                                                    <div class="pxp-calculator-data-label"><span class="fa fa-minus"></span>Property Taxes</div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div class="pxp-calculator-data-sum" id="pxp-calculator-data-pt"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pxp-calculator-data">
                                            <div class="row justify-content-between">
                                                <div class="col-8">
                                                    <div class="pxp-calculator-data-label"><span class="fa fa-minus"></span>HOA Dues</div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div class="pxp-calculator-data-sum" id="pxp-calculator-data-hd"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pxp-calculator-form mt-3 mt-md-4">
                                <input type="hidden" id="pxp-calculator-form-property-taxes" value="$1,068">
                                <input type="hidden" id="pxp-calculator-form-hoa-dues" value="$2,036">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="pxp-calculator-form-term">Term</label>
                                            <select class="custom-select" id="pxp-calculator-form-term">
                                                <option value="30">30 Years Fixed</option>
                                                <option value="20">20 Years Fixed</option>
                                                <option value="15">15 Years Fixed</option>
                                                <option value="10">10 Years Fixed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="pxp-calculator-form-interest">Interest</label>
                                            <input type="text" class="form-control pxp-form-control-transform" id="pxp-calculator-form-interest" data-type="percent" value="4.45%">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="pxp-calculator-form-price">Home Price</label>
                                            <input type="text" class="form-control pxp-form-control-transform" id="pxp-calculator-form-price" data-type="currency" value="$5,198,000">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="row">
                                            <div class="col-7 col-sm-7 col-md-8">
                                                <div class="form-group">
                                                    <label for="pxp-calculator-form-down-price">Down Payment</label>
                                                    <input type="text" class="form-control pxp-form-control-transform" id="pxp-calculator-form-down-price" data-type="currency" value="$519,800">
                                                </div>
                                            </div>
                                            <div class="col-5 col-sm-5 col-md-4">
                                                <div class="form-group">
                                                    <label for="pxp-calculator-form-down-percentage">&nbsp;</label>
                                                    <input type="text" class="form-control pxp-form-control-transform" id="pxp-calculator-form-down-percentage" data-type="percent" value="10%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="pxp-single-property-section mt-4 mt-md-5">
                            <h3>Schools in Marina District</h3>
                            <ul class="nav nav-tabs pxp-nav-tabs mt-3 mt-md-4">
                                <li class="nav-item"><a class="nav-link active" href="#elementary" data-toggle="tab">Elementary</a></li>
                                <li class="nav-item"><a class="nav-link" href="#middle"  data-toggle="tab">Middle</a></li>
                                <li class="nav-item"><a class="nav-link" href="#high" data-toggle="tab">High</a></li>
                            </ul>
                            <div class="tab-content mt-3">
                                <div class="tab-pane active" id="elementary" role="tabpanel">
                                    <table class="table table-responsive pxp-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">School</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Grades</th>
                                                <th scope="col">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Harvest Collegiate High School</td>
                                                <td>Public</td>
                                                <td>9-11</td>
                                                <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></td>
                                            </tr>
                                            <tr>
                                                <td>Harvest Collegiate High School</td>
                                                <td>Public</td>
                                                <td>9-11</td>
                                                <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="middle" role="tabpanel">
                                    <table class="table table-responsive pxp-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">School</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Grades</th>
                                                <th scope="col">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Harvest Collegiate High School</td>
                                                <td>Public</td>
                                                <td>9-11</td>
                                                <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></td>
                                            </tr>
                                            <tr>
                                                <td>Harvest Collegiate High School</td>
                                                <td>Public</td>
                                                <td>9-11</td>
                                                <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="high" role="tabpanel">
                                    <table class="table table-responsive pxp-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">School</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Grades</th>
                                                <th scope="col">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Harvest Collegiate High School</td>
                                                <td>Public</td>
                                                <td>9-11</td>
                                                <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></td>
                                            </tr>
                                            <tr>
                                                <td>Harvest Collegiate High School</td>
                                                <td>Public</td>
                                                <td>9-11</td>
                                                <td>5/5<span class="pxp-school-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-4">
                        <div class="pxp-single-property-section pxp-sp-agent-section mt-4 mt-md-5 mt-lg-0">
                            <h3>Listed By</h3>
                            <div class="pxp-sp-agent mt-3 mt-md-4">
                                <a href="{{route('singleagent.frontend',$property->getAgentProperty->id)}}" class="pxp-sp-agent-fig pxp-cover rounded-lg" style="background-image: url('{{asset('backend/upload/image/agent')}}/{{$property->getAgentProperty->getAgent->image}}'); background-position: top center"></a>
                                <div class="pxp-sp-agent-info">
                                    <div class="pxp-sp-agent-info-name"><a href="{{route('singleagent.frontend',$property->getAgentProperty->id )}}">{{$property->getAgentProperty->name}}</a></div>
                                    {{-- <div class="pxp-sp-agent-info-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div> --}}
                                    <div class="pxp-sp-agent-info-email"> <span class="{{$property->getAgentProperty->getAgent->email_icon}}"></span> <a href="mailto:erika.tillman@resideo.com">{{$property->getAgentProperty->email}}</a></div>
                                    <div class="pxp-sp-agent-info-phone"><span class="{{$property->getAgentProperty->getAgent->phone_icon}}"></span>{{$property->getAgentProperty->getAgent->phone}}</div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="pxp-sp-agent-btns mt-3 mt-md-4">
                                    <a href="#pxp-contact-agent" class="pxp-sp-agent-btn-main" data-toggle="modal" data-target="#pxp-contact-agent"><span class="fa fa-envelope-o"></span> Contact Agent</a>
                                    <a href="#pxp-contact-agent" class="pxp-sp-agent-btn" data-toggle="modal" data-target="#pxp-contact-agent"><span class="fa fa-calendar-check-o"></span> Request Tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @endsection
