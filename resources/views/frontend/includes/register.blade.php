<div class="modal fade" id="pxp-signup-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSignupModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="modal-title" id="pxpSignupModal">Create an account</h5>
                <form method="POST" action="{{ route('register') }}" class="mt-4">
                    <div class="form-group">
                        <label for="pxp-signup-firstname">Name</label>
                        <input type="text" class="form-control" name="name" id="pxp-signup-firstname" placeholder="Enter  name">
                    </div>
                    <div class="form-group">
                        <label for="pxp-signup-email">Email</label>
                        <input type="email" class="form-control" name="email" id="pxp-signup-email" placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="pxp-signup-pass">Password</label>
                        <input type="password" class="form-control"  id="pxp-signup-pass" placeholder="Create a password">
                    </div>
                    <div class="form-group">
                        <label for="pxp-signup-pass">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="pxp-signup-pass" placeholder="Re-type password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="pxp-agent-contact-modal-btn">Sign Up</a>
                    </div>
                    <div class="text-center mt-4 pxp-modal-small">
                        Already have an account? <a href="javascript:void(0);" class="pxp-modal-link pxp-signin-trigger">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
