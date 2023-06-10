<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.includes.head')
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 mt-5 mx-auto">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="text-center">Welcome back!</h5>
                        <form class="mt-4 " method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="pxp-signin-email">Email</label>
                                <input type="email" class="form-control" name="email" id="pxp-signin-email" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label for="pxp-signin-pass">Password</label>
                                <input type="password" class="form-control" name="password" id="pxp-signin-pass" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="pxp-agent-contact-modal-btn">Sign In</button>
                            </div>
                            <div class="form-group mt-4 text-center pxp-modal-small">
                                <a href="{{ route('password.email') }}" class="pxp-modal-link">Forgot password</a>
                            </div>
                            <div class="text-center pxp-modal-small">
                                New to Resideo? <a href="{{ route('register') }}" class="pxp-modal-link pxp-signup-trigger">Create an account</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>
    @include('frontend.includes.script')
</html>
