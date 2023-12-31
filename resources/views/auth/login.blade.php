<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="d-flex justify-content-center py-4">
                <a href="/" class="logo d-flex align-items-center w-auto">
                    <x-application-logo />
                </a>
            </div><!-- End Logo -->
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="card mb-3">
            <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                </div>

                <form class="row g-3" method="POST" action="{{ route('login') }}" id="loginForm" novalidate>
                    @csrf

                    <div class="col-12">
                        <x-label :value="__('Email')" />
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" name="email" class="form-control"  value="{{ old('email') }}">
                            <div class="invalid-feedback" id="email"></div>
                            <x-admin.form.error field="email" />
                        </div>
                    </div>

                    <div class="col-12">
                        <x-label :value="__('Password')" />
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                            <div class="invalid-feedback" id="password"></div>
                            <x-admin.form.error field="password" />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                        @endif
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">{{ __('Log in') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
