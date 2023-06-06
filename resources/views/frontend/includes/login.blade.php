<div class="modal fade" id="pxp-signin-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSigninModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title" id="pxpSigninModal">Welcome back!</h5>
                <form class="mt-4" method="POST" action="{{ route('login') }}">
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
                        <a href="#" class="pxp-modal-link">Forgot password</a>
                    </div>
                    <div class="text-center pxp-modal-small">
                        New to Resideo? <a href="javascript:void(0);" class="pxp-modal-link pxp-signup-trigger">Create an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
