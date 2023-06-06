@extends('frontend.master.master')

    @section('content')


        <div class="pxp-content">
            <div class="pxp-blog-posts pxp-content-wrapper mt-100">
                <div class="container">
                    <h1 class="pxp-page-header">Latest Articles</h1>
                    <p class="pxp-text-light">Read our latest articles on real estate, architecture, interior design, and more</p>

                        <div class="pxp-blog-posts-carousel-1 mt-4 mt-md-5">

                            <div id="pxp-blog-posts-carousel-1-img" class="carousel slide pxp-blog-posts-carousel-1-img" data-ride="carousel" data-pause="false" data-interval="false">
                                <div class="carousel-inner">
                                    @foreach ($allblogposts as  $blogpost)
                                    <div class="carousel-item {{$loop->first ? 'active' : ''}}" data-slide="{{$loop->index}}">
                                        <div class="pxp-hero-bg pxp-cover" style="background-image: url('{{asset('backend/upload/blogpost')}}/{{$blogpost->image}}'); background-position: 50% 50%;"></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="pxp-carousel-controls">
                                <a class="pxp-carousel-control-prev" role="button" data-slide="prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32.414" height="20.828" viewBox="0 0 32.414 20.828">
                                        <g id="Group_30" data-name="Group 30" transform="translate(-1845.086 -1586.086)">
                                            <line id="Line_2" data-name="Line 2" x1="30" transform="translate(1846.5 1596.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"></line>
                                            <line id="Line_3" data-name="Line 3" x1="9" y2="9" transform="translate(1846.5 1587.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"></line>
                                            <line id="Line_4" data-name="Line 4" x1="9" y1="9" transform="translate(1846.5 1596.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"></line>
                                        </g>
                                    </svg>
                                </a>
                                <a class="pxp-carousel-control-next" role="button" data-slide="next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32.414" height="20.828" viewBox="0 0 32.414 20.828">
                                        <g id="Symbol_1_1" data-name="Symbol 1 – 1" transform="translate(-1847.5 -1589.086)">
                                            <line id="Line_5" data-name="Line 2" x2="30" transform="translate(1848.5 1599.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"></line>
                                            <line id="Line_6" data-name="Line 3" x2="9" y2="9" transform="translate(1869.5 1590.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"></line>
                                            <line id="Line_7" data-name="Line 4" y1="9" x2="9" transform="translate(1869.5 1599.5)" fill="none" stroke="#333" stroke-linecap="round" stroke-width="2"></line>
                                        </g>
                                    </svg>
                                </a>
                            </div>

                            <div class="pxp-blog-posts-carousel-1-caption-container">
                                <div id="pxp-blog-posts-carousel-1-caption" class="carousel slide pxp-blog-posts-carousel-1-caption" data-ride="carousel" data-pause="false" data-interval="false">
                                    <div class="carousel-inner">
                                        @foreach ($allblogposts as $blogpost )
                                            <div class="carousel-item {{$loop->first ? 'active': ''}}" data-slide="{{$loop->index}}">
                                                <div class="pxp-blog-posts-carousel-1-caption-category">{{$blogpost->getBlogCategory->name}}</div>
                                                <div class="pxp-blog-posts-carousel-1-caption-title">{{$blogpost->title}}</div>
                                                <div class="pxp-blog-posts-carousel-1-caption-summary">{{$blogpost->middle_des1}}</div>
                                                <a href="{{route('singleblog.frontend', $blogpost->id)}}" class="pxp-primary-cta text-uppercase mt-3 mt-md-4 pxp-animate">Read Article</a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="pxp-blog-posts-carousel-1-badge">Featured</div>
                        </div>


                    <div class="row mt-200">
                        <div class="col-sm-12 col-lg-9">
                            <div class="row">
                                @foreach ($blogposts as $blogpost)
                                    <div class="col-sm-12 col-md-6">
                                        <a href="{{route('singleblog.frontend', $blogpost->id)}}" class="pxp-posts-1-item">
                                            <div class="pxp-posts-1-item-fig-container">
                                                <div class="pxp-posts-1-item-fig pxp-cover" style="background-image: url({{asset('backend/upload/blogpost')}}/{{$blogpost->image}});"></div>
                                            </div>
                                            <div class="pxp-posts-1-item-details">
                                                <div class="pxp-posts-1-item-details-category">{{$blogpost->getBlogCategory->name}}</div>
                                                <div class="pxp-posts-1-item-details-title">{{$blogpost->middle_title}}</div>
                                                <div class="pxp-posts-1-item-details-date mt-2">{{$blogpost->created_at}}</div>
                                                <div class="pxp-posts-1-item-cta text-uppercase">Read Article</div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                            <ul class="pagination pxp-paginantion mt-3 mt-md-4">
                                {{-- {{ $blogposts->links() }} --}}
                            </ul>
                        </div>
                        <div class="col-sm-12 col-lg-3 mt-4 mt-md-5 mt-lg-0">
                            <div class="pxp-blog-posts-side-section">
                                <h3>Search Articles</h3>
                                <div class="mt-3 mt-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control pxp-is-address" placeholder="Search">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="pxp-blog-posts-side-section mt-4 mt-md-5">
                                <h3>Categories</h3>
                                <ul class="pxp-blog-posts-side-v-list list-unstyled mt-3 mt-md-4">
                                    @foreach ($blogcategories as $blogcategory)
                                        <li><a href="{{route('blogsearchcategory.frontend', $blogcategory->id)}}">{{$blogcategory->name}}({{blogPostCountWithCategory($blogcategory->id)}})</a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="pxp-blog-posts-side-section mt-4 mt-md-5">
                                <h3>Tags</h3>
                                <div class="pxp-blog-posts-side-tags mt-3 mt-md-4">
                                    @foreach ($blogtags as $blogtag)
                                        <a href="{{route('blogsearchtag.frontend', $blogtag->id)}}">{{$blogtag->name}} ({{blogPostCountWithTag($blogtag->id)}})</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pxp-full pxp-cover pt-100 pb-100 mt-100" style="background-image: url('{{asset('frontend/assets/./assets/images/sub-banners/newsletter-bg.jpg')}}');">
            <div class="container">
                <h2 class="pxp-section-h2 text-white">Stay Up to Date</h2>
                <p class="pxp-text-light text-white">Subscribe to our newsletter to receive our weekly feed</p>
                <div class="row mt-4 mt-md-5">
                    <div class="col-xs-12 col-sm-6">
                        <form action="blog.html" class="pxp-newsletter-1-form">
                            <input type="text" class="form-control" placeholder="Enter your email...">
                            <a href="#" class="pxp-primary-cta text-white text-uppercase pxp-animate mt-3 mt-md-4">Subscribe</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    @endsection

