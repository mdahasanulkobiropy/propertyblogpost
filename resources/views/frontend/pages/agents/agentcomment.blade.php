<h4 class="mb-5">{{count($agent->getAgent->getComment)}} Reviews</h4>

@foreach ($agent->getAgent->getComment as $comment)

    <div class="media">
        <img src="{{asset('frontend/assets')}}/./assets/images/customers/customer-1.jpg" class="mr-3" alt="customer image">
        <div class="media-body">
            <h5>{{$comment->getAgentCommentUser->name}}</h5>
            <div class="pxp-agent-comments-date">{{$comment->created_at}}</div>
            <p>{{$comment->comment}}</p>
        </div>
    </div>

@endforeach
