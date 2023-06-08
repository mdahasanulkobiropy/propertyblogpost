@extends('frontend.master.master')

    @section('content')

        <div class="pxp-content pxp-full-height">
            <div class="pxp-map-side pxp-map-right pxp-half">
                <div id="results-map"></div>
                <a href="javascript:void(0);" class="pxp-list-toggle"><span class="fa fa-list"></span></a>
            </div>
            <div class="pxp-content-side pxp-content-left pxp-half">
                <div class="pxp-content-side-wrapper">
                    <form action="{{route('properties.frontend')}}" method="get">
                        <div class="d-flex">
                            <div class="pxp-content-side-search-form">
                                <div class="row pxp-content-side-search-form-row">
                                    <div class="col-5 col-sm-5 col-md-4 col-lg-3 pxp-content-side-search-form-col">
                                        <select class="custom-select" name="status_id" id="pxp-p-search-status">
                                            <option value="buy" >Select</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{$status->id}}">{{$status->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-7 col-sm-7 col-md-8 col-lg-9 pxp-content-side-search-form-col">
                                        <input type="search" name="location" class="form-control pxp-is-address" placeholder="Search by City, Neighborhood, or Address" id="pxp-p-search-address">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a role="button" class="pxp-adv-toggle"><span class="fa fa-sliders"></span></a>
                            </div>
                        </div>
                        <div class="pxp-content-side-search-form-adv mb-3">
                            <div class="row pxp-content-side-search-form-row">
                                <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        @foreach ($propertyfrontendtexts as $propertyfrontendtext)
                                            <label for="pxp-p-filter-price-min">{{$propertyfrontendtext->price}}</label>
                                        @endforeach
                                        <input type="search" name="price_min" class="form-control" placeholder="Min" id="pxp-p-filter-price-min">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <label for="pxp-p-filter-price-max" class="d-none d-sm-inline-block">&nbsp;</label>
                                        <input type="search" name="price_max" class="form-control" placeholder="Max" id="pxp-p-filter-price-max" >
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        @foreach ($propertyfrontendtexts as $propertyfrontendtext)
                                            <label for="pxp-p-filter-beds">{{$propertyfrontendtext->bed}}</label>
                                        @endforeach
                                        <select class="custom-select" name="bedroom_id" id="pxp-p-filter-beds">
                                            <option value="" selected="selected">Any</option>
                                            @foreach ($bedrooms  as $bedroom )
                                                    <option value="{{$bedroom->id}}">{{$bedroom->bedroom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        @foreach ($propertyfrontendtexts as $propertyfrontendtext)
                                            <label for="pxp-p-filter-baths">{{$propertyfrontendtext->bath}}</label>
                                        @endforeach
                                        <select class="custom-select" name="bathroom_id" id="pxp-p-filter-baths">
                                            <option value="" selected="selected">Any</option>
                                            @foreach ($bathrooms  as $bathroom )
                                                <option value="{{$bathroom->id}}">{{$bathroom->bathroom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        @foreach ($propertyfrontendtexts as $propertyfrontendtext)
                                            <label for="pxp-p-filter-type">{{$propertyfrontendtext->type}}</label>
                                        @endforeach
                                        <select class="custom-select" name="featured_id" id="pxp-p-filter-type">
                                            <option value="">Select type</option>
                                            @foreach ($featureds as $featured)
                                                <option value="{{$featured->id}}">{{$featured->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        @foreach ($propertyfrontendtexts as $propertyfrontendtext)
                                            <label for="pxp-p-filter-size-min">{{$propertyfrontendtext->area}}</label>
                                        @endforeach
                                        <input type="search" class="form-control" name="area_min" id="pxp-p-filter-size-min" placeholder="Min">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <label for="pxp-p-filter-size-max" class="d-none d-sm-inline-block">&nbsp;</label>
                                        <input type="search" class="form-control" name="area_max" id="pxp-p-filter-size-max" placeholder="Max">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="pxp-filter-btn">{{$propertyfrontendtext->buttontext}}</button>
                        </div>
                    </form>
                    <div class="row pb-4">
                        <div class="col-sm-6">
                            <h2 class="pxp-content-side-h2">{{count($properties)}} Results</h2>
                        </div>
                        {{-- <div class="col-sm-6">
                            <div class="pxp-sort-form form-inline float-right">
                                <div class="form-group">
                                    <select class="custom-select" id="pxp-sort-results">
                                        <option value="" selected="selected">Default Sort</option>
                                        <option value="">Price (Lo-Hi)</option>
                                        <option value="">Price (Hi-Lo)</option>
                                        <option value="">Beds</option>
                                        <option value="">Baths</option>
                                        <option value="">Size</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex">
                                    <a role="button" class="pxp-map-toggle"><span class="fa fa-map-o"></span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div class="row">
                        @foreach ($properties as $property)
                            <div class="col-sm-12 col-md-6 col-xxxl-4">
                                <a href="{{route('singleproperty.frontend', $property->id)}}" class="pxp-results-card-1 rounded-lg" data-prop="1">
                                    <div id="card-carousel-{{$loop->index}}" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <div class="carousel-inner">
                                            @foreach ($property->getImages as $image )
                                                <div class="carousel-item {{$loop->first ? 'active':''}}" style="background-image: url('{{asset('backend/upload/image/property')}}/{{$image->images}}')"></div>
                                            @endforeach
                                        </div>
                                        <span class="carousel-control-prev" data-href="#card-carousel-{{$loop->index}}" data-slide="prev">
                                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                                        </span>
                                        <span class="carousel-control-next" data-href="#card-carousel-{{$loop->index}}" data-slide="next">
                                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                    <div class="pxp-results-card-1-gradient"></div>
                                    <div class="pxp-results-card-1-details">
                                        <div class="pxp-results-card-1-details-title">{{$property->title}}</div>
                                        <div class="pxp-results-card-1-details-price">${{$property->price}}</div>
                                    </div>
                                    <div class="pxp-results-card-1-features">
                                        <span>{{$property->getBedroom->bedroom}} BD <span>|</span> {{$property->getBathroom->bathroom}} BA <span>|</span> {{$property->area}} SF</span>
                                    </div>
                                    <div class="pxp-results-card-1-save"><span class="fa fa-star-o"></span></div>
                                </a>
                            </div>

                        @endforeach
                    </div>

                    <ul class="pagination pxp-paginantion mt-2 mt-md-4">
                        {{$properties->links()}}

                    </ul>

                </div>
            </div>
        </div>

    @endsection
