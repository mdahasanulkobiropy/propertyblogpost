<h4>{{count($singleblog->getBlogComment)}} Comments</h4>
@foreach ($singleblog->getBlogComment as $comment)
    <div class="mt-3 mt-md-4">
        <div class="media">
            <img src="{{asset('frontend/assets')}}/./assets/images/customers/customer-1.jpg" class="mr-3" alt="customer image">
            <div class="media-body">
                <h5>{{$comment->getCommentUser->name}}</h5>
                <div class="pxp-blog-post-comments-date">{{$comment->created_at}}</div>
                <p>{{$comment->comment}}</p>
            </div>
        </div>
    </div>
@endforeach
