@extends('frontend.master.master')

    @section('content')
        <div class="pxp-content">
            <div class="pxp-blog-posts pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="pxp-blog-post-category"><span>{{$singleblog->created_at}}</span><span>{{$singleblog->getTag->name}}</span></div>
                            <h1 class="pxp-page-header">{{$singleblog->title}}</h1>
                        </div>
                    </div>
                </div>

                <div class="pxp-blog-post-hero mt-4 mt-md-5">
                    <div class="pxp-blog-post-hero-fig pxp-cover" style="background-image: url({{asset('backend/upload/blogpost')}}/{{$singleblog->image}}); background-position: 50% 50%;"></div>
                </div>

                <div class="container mt-100">
                    <div class="row">
                        <div class="col-sm-12 col-lg-1">
                            <div class="pxp-blog-post-share">
                                <div class="pxp-blog-post-share-label">Share</div>
                                <ul class="list-unstyled mt-3">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-10">
                            <div class="pxp-blog-post-block mt-4 mt-md-5 mt-lg-0">
                                <h2>{{$singleblog->middle_title}}</h2>
                                <div class="mt-3 mt-md-4">
                                    <p class="pxp-first-letter">{{$singleblog->middle_des1}}</p>
                                    <p>{{$singleblog->middle_des2}}</p>
                                </div>
                            </div>

                            <div class="pxp-blog-post-block pxp-full mt-4 mt-md-5">
                                <a href="javascript:void(0);" class="pxp-blog-post-video pxp-cover" style="background-image: url({{asset('backend/upload/blogpost')}}/{{$singleblog->image}}); background-position: 50% 50%;"></a>
                                <iframe width="889" height="500" src="{{$singleblog->middle_url}}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%; border: 0 none;"></iframe>
                            </div>

                            <div class="pxp-blog-post-block mt-4 mt-md-5">
                                <h2>{{$singleblog->next_middle_title}}</h2>
                                <div class="mt-3 mt-md-4">
                                    <p>{{$singleblog->next_middle_des1}}</p>
                                    <div class="pxp-blog-post-blockquote pxp-left">{{$singleblog->next_middle_des2}}</div>
                                    <p>{{$singleblog->next_middle_des3}}</p>
                                    <p>{{$singleblog->next_middle_des4}}</p>
                                </div>
                            </div>

                            <div class="pxp-blog-post-block pxp-full mt-4 mt-md-5">
                                <div class="row">
                                    @foreach ($singleblog->getBlogImage as $images)
                                        <div class="col-sm-12 col-md-6">
                                            <img src="{{asset('backend/upload/blogpost/other')}}/{{$images->blogpost_image}}" alt="post images" class="pxp-image-full mb-3">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="pxp-blog-post-block mt-4 mt-md-5">
                                <h2>{{$singleblog->final_title}}</h2>
                                <div class="mt-3 mt-md-4">
                                    <p>{{$singleblog->final_des}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-100">
                    <h2 class="pxp-section-h2">Related Articles</h2>
                    <div class="row mt-4 mt-md-5">
                        @foreach ($singleblogrelated as $relatedblog)
                            <div class="col-sm-12 col-md-6 col-lg-4">
                                <a href="{{route('singleblog.frontend', $relatedblog->id)}}" class="pxp-posts-1-item">
                                    <div class="pxp-posts-1-item-fig-container">
                                        <div class="pxp-posts-1-item-fig pxp-cover" style="background-image: url({{asset('backend/upload/blogpost/')}}/{{$relatedblog->image}});"></div>
                                    </div>
                                    <div class="pxp-posts-1-item-details">
                                        <div class="pxp-posts-1-item-details-category">{{$relatedblog->getBlogCategory->name}}</div>
                                        <div class="pxp-posts-1-item-details-title">{{$relatedblog->middle_title}}</div>
                                        <div class="pxp-posts-1-item-details-date mt-2">{{$relatedblog->created_at}}</div>
                                        <div class="pxp-posts-1-item-cta text-uppercase">Read Article</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="container mt-100 mb-5">
                    <div class="row">
                        <div class="col-sm-12 col-lg-1"></div>
                        <div class="col-sm-12 col-lg-10">
                            <div class="pxp-blog-post-block">
                                <div class="pxp-blog-post-comments">
                                    <div id="singleblogcommentupdate">
                                       @include('frontend.pages.blog.singleblogcomment')
                                    </div>
                                    <h4 class="mt-4 mt-md-5">Leave a comment</h4>
                                    <form class="pxp-blog-post-comments-form mt-3 mt-md-4">
                                        <div class="form-group">
                                            <label for="pxp-blog-post-comments-reply">Leave a Reply</label>
                                            <textarea class="form-control" id="pxp-blog-post-comments-reply" rows="6" placeholder="Write your comment here..."></textarea>
                                        </div>
                                        <button type="button" value="{{$singleblog->id}}" class="pxp-blog-post-comments-form-btn">Post Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection



