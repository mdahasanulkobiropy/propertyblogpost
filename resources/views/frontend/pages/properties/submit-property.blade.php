@extends('frontend.master.master')

    @section('content')

        <div class="pxp-content">
            <div class="pxp-submit-property pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header">Add New Property</h1>
                        </div>
                    </div>
                    <div class="row mt-4 mt-md-5">
                        <div class="col-sm-12 col-lg-8">
                            <h3>Basic Information</h3>
                            <div class="mt-3 mt-md-4">
                                <div class="form-group">
                                    <label for="pxp-submit-property-title">Title</label>
                                    <input type="text" class="form-control" id="pxp-submit-property-title" placeholder="Enter property title">
                                </div>
                                <div class="form-group">
                                    <label for="pxp-submit-property-overview">Overview</label>
                                    <textarea class="form-control" id="pxp-submit-property-overview" rows="6" placeholder="Describe the property..."></textarea>
                                </div>
                            </div>

                            <h3 class="mt-4 mt-md-5">Key Details</h3>
                            <div class="row mt-3 mt-md-4">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-type">Type</label>
                                        <select class="custom-select" id="pxp-submit-property-type">
                                            <option value="">Select type</option>
                                            <option value="">Apartment</option>
                                            <option value="">House</option>
                                            <option value="">Townhome</option>
                                            <option value="">Multi-Family</option>
                                            <option value="">Land</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-status">Status</label>
                                        <select class="custom-select" id="pxp-submit-property-status">
                                            <option value="">Select status</option>
                                            <option value="">For Rent</option>
                                            <option value="">For Sale</option>
                                            <option value="">To Let</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-built">Year Built</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-built">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-stories">Stories</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-stories">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-rooms">Room Count</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-rooms">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label for="pxp-submit-property-parking">Parking Spaces</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-parking">
                                    </div>
                                </div>
                            </div>

                            <h3 class="mt-4 mt-md-5">Amenities</h3>
                            <div class="row mt-3 mt-md-4">
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-wifi"></span> Internet</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-car"></span> Garage</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-sun-o"></span> Air Conditioning</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-bullseye"></span> Dishwasher</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-recycle"></span> Disposal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-clone"></span> Balcony</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-futbol-o"></span> Gym</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-smile-o"></span> Playroom</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-glass"></span> Bar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="mt-4 mt-md-5">Photo Gallery</h3>
                            <form class="dropzone needsclick mt-3 mt-md-4" id="demo-upload" action="/upload">
                                <div class="dz-message needsclick">
                                    Drop files here or click to upload.<br>
                                    <span class="note needsclick">This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.</span>
                                </div>
                            </form>

                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="pxp-submit-property-side rounded-lg mt-4 mt-md-5 mt-lg-0">
                                <h3 class="text-white">Main Details</h3>
                                <div class="row mt-3 mt-md-4">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="text-white" for="pxp-submit-property-price">Price</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-price" placeholder="Enter price">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="text-white" for="pxp-submit-property-plabel">Price Label</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-plabel" placeholder="Enter price label">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label class="text-white" for="pxp-submit-property-beds">Beds</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-beds" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label class="text-white" for="pxp-submit-property-baths">Baths</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-baths" placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label class="text-white" for="pxp-submit-property-size">Size (sq ft)</label>
                                            <input type="text" class="form-control" id="pxp-submit-property-size" placeholder="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pxp-submit-property-side rounded-lg mt-4 mt-md-5">
                                <h3 class="text-white">Location</h3>
                                <div class="mt-3 mt-md-4">
                                    <div class="form-group">
                                        <label class="text-white" for="pxp-submit-property-address">Address</label>
                                        <input type="text" class="form-control" id="pxp-submit-property-address" placeholder="Enter address">
                                    </div>
                                    <div id="pxp-submit-property-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 mt-md-5">
                        <a href="#" class="pxp-submit-property-btn">Submit Property</a>
                    </div>
                </div>
            </div>
        </div>


    @endsection








