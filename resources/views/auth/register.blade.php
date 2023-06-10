
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
                        <h5 class="text-center">Create Account</h5>
                        <form method="POST" action="{{ route('register') }}" class="mt-4">
                            @csrf
                            <div class="form-group">
                                <label for="pxp-signup-firstname">Name</label>
                                <input type="text" class="form-control" name="name" id="pxp-signup-firstname" value="{{old('name')}}" placeholder="Enter  name">
                            </div>
                            <div class="form-group">
                                <label for="pxp-signup-email">Email</label>
                                <input type="email" class="form-control" name="email"  id="pxp-signup-email" value="{{old('email')}}" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label for="pxp-signup-pass">Password</label>
                                <input type="password" class="form-control" name="password" id="pxp-signup-pass" placeholder="Create a password">
                            </div>
                            <div class="form-group">
                                <label for="pxp-signup-pass">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="pxp-signup-pass" placeholder="Re-type password">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="pxp-agent-contact-modal-btn">Sign Up</button>
                            </div>
                            <div class="text-center mt-4 pxp-modal-small">
                                Already have an account? <a href="{{route('login')}}" class="pxp-modal-link pxp-signin-trigger">Sign in</a>
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














{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
