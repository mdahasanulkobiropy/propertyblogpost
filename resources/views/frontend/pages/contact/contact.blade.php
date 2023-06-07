
@extends('frontend.master.master')

    @section('content')

        <div class="pxp-content">
            <div class="pxp-contact pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            @foreach ($contact as $contact)
                                <h1 class="pxp-page-header">{{$contact->title}}</h1>
                                <p class="pxp-text-light">{{$contact->sub_title}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="pxp-contact-hero mt-4 mt-md-5">
                    <div class="pxp-contact-hero-fig pxp-cover" style="background-image: url('{{asset('backend/upload/image/contact')}}/{{$contact->image}}'); background-position: 50% 80%;"></div>
                    <div class="pxp-contact-hero-offices-container">
                        <div class="container">
                            <div class="pxp-contact-hero-offices">
                                <h2 class="pxp-section-h2 text-white">{{ $contact->office_title}}</h2>
                                <div class="row">
                                    @foreach ($office as $office )
                                        <div class="col-sm-12 col-md-4">
                                            <div class="pxp-contact-hero-offices-title mt-3 mt-md-4">{{$office->city_name}}</div>
                                            <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                                <p class="pxp-is-address">{{$office->floor_position}}<br>{{$office->location}}</p>
                                                <p>
                                                    <a href="#">{{$office->phone}}</a><br>
                                                    <a href="#">{{$office->email}}</a>
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- <div class="col-sm-12 col-md-4">
                                        <div class="pxp-contact-hero-offices-title mt-3 mt-md-4">New York</div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address">90 Fifth Avenue, 3rd Floor<br>New York, NY 1980</p>
                                            <p>
                                                <a href="#">(123) 789-7390</a><br>
                                                <a href="#">office-ny@resideo.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="pxp-contact-hero-offices-title mt-3 mt-md-4">San Francisco</div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address">90 Fifth Avenue, 3rd Floor<br>San Francisco, CA 1980</p>
                                            <p>
                                                <a href="#">(123) 789-7390</a><br>
                                                <a href="#">office-sf@resideo.com</a>
                                            </p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container mt-200 mb-5">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <h2 class="pxp-section-h2">{{$contact->massage_title}}</h2>
                            <div class="pxp-contact-form mt-3 mt-md-4">
                                <div class="col-sm-12 col-md-6 text-success" id="massagefromusertoadmin">

                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <select class="custom-select" id="pxp-contact-form-reg">
                                                <option value="">What is this regarding?</option>
                                                @foreach ($topics as $topic)
                                                    <option value="{{$topic->id}}">{{$topic->topic}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone (optional)" id="pxp-contact-form-phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="pxp-contact-form-message" rows="6" placeholder="Message"></textarea>
                                </div>
                                <a href="" id="pxp-contact-form-btn" class="pxp-contact-form-btn">Send Message</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="row mt-4 mt-md-5 mt-lg-0">
                                <div class="col-6">
                                    <h2 class="pxp-section-h2">{{$contact->map_title}}</h2>
                                </div>
                                <div class="col-6 text-right">
                                    <select class="custom-select pxp-contact-locations-select">
                                        @foreach ($offices as $offices)
                                            <option value="la">{{$offices->city_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="pxp-contact-map" class="mt-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

