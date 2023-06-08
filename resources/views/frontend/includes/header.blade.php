<header class="pxp-header fixed-top pxp-animate pxp-no-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5 col-md-2">
                <a href="{{route('index.frontend')}}" class="pxp-logo text-decoration-none">Logo.</a>
            </div>
            <nav class="col-2 col-md-8 text-center">
                <ul class="pxp-nav list-inline">
                    <li class="list-inline-item">
                        <a href="{{route('index.frontend')}}">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a>Properties</a>
                        <ul class="pxp-nav-sub rounded-lg">
                            <li><a href="{{route('properties.frontend')}}">All Properties</a></li>
                            {{-- <li><a href="{{route('singleproperty.frontend')}}">Single Property</a></li> --}}
                            {{-- <li><a href="{{route('submitproperty.frontend')}}">Submit New Property</a></li> --}}
                        </ul>
                    </li>
                    <li class="list-inline-item">
                        <a >Agents</a>
                        <ul class="pxp-nav-sub rounded-lg">
                            <li><a href="{{route('agents.frontend')}}">All Agents</a></li>
                            {{-- <li><a href="single-agent.html">Single Agent</a></li> --}}
                        </ul>
                    </li>
                    <li class="list-inline-item">
                        <a >Blog</a>
                        <ul class="pxp-nav-sub rounded-lg">
                            <li><a href="{{route('blog.frontend')}}">All Blog Posts</a></li>
                            <li><a href="single-post.html">Single Blog Post</a></li>
                        </ul>
                    </li>
                    <li class="list-inline-item pxp-is-last"><a href="{{route('contact.frontend')}}">Contact Us</a></li>
                    <li class="list-inline-item pxp-has-btns">
                        <div class="pxp-user-btns">
                            <a href="#" class="pxp-user-btns-signup pxp-signup-trigger">Sign Up</a>
                            <a href="#" class="pxp-user-btns-login pxp-signin-trigger">Sign In</a>
                        </div>
                    </li>
                </ul>
            </nav>
            @if (empty(Auth::user()->id))
                <div class="col-5 col-md-2 text-right">
                    <a href="javascript:void(0);" class="pxp-header-nav-trigger"><span class="fa fa-bars"></span></a>
                    <a href="javascript:void(0);" class="pxp-header-user pxp-signin-trigger"><span class="fa fa-user-o"></span></a>
                </div>
            @elseif (Auth::user()->role == 'admin')
                <div class="col-5 col-md-2 text-right">
                    <a href="{{route('admin.dashboard')}}">Admin Dashboard</a>
                </div>

            @elseif (Auth::user()->role == 'agent')
                <div class="col-5 col-md-2 text-right">
                    <a href="{{route('agent.dashboard')}}">Agent Dashboard</a>
                </div>


            @elseif (Auth::user()->role == 'user')
                <div class="col-5 col-md-2 text-right">
                    <a href="{{route('user.dashbord')}}">User Dashboard</a>
                </div>

            @endif


        </div>
    </div>
</header>
