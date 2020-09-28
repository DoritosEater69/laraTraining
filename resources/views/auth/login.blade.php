<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <svg class="icon-login" id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 464.6 464.6">
                        <g id="xDXJVQ">
                            <path fill="white"  d="M265.21,518.41c12.41,3.66,25.45,5.93,37.13,11.2,79.71,35.95,97.43,140.35,34.53,201.2-3.17,3.07-6.45,6-10.3,9.62,3.13,1.29,5.57,2.23,7.95,3.3,9.74,4.37,14.19,14.43,10.57,23.8C341.75,776.15,332,780,322,777.7c-19.64-4.46-39.25-10.6-59.16-12C168,759.06,78.44,824.57,56.9,920.12c-3.9,17.3,3.77,26.4,21.54,26.66,18.22.26,36.44,0,54.67.09,13.56.07,20.54,4.2,22.78,13.2,2.46,9.86-.87,16-12.51,22.95H64.91c-23.68-6.61-38.66-21.91-45.43-45.43V919a17.91,17.91,0,0,0,1.75-3.61c18-78.26,64.29-133.4,136.76-167,6-2.79,12.27-5,19-7.71-4.62-4.4-8.39-7.87-12-11.48-61.23-61-42.68-164.34,36.22-199.6,11.7-5.23,24.72-7.51,37.13-11.16ZM251.89,729c47.42,0,87.44-39.54,87.39-86.27-.06-48.69-39.48-88.26-87.74-88.06-47.69.2-87.41,39.46-87.3,86.3C164.36,689.81,203.39,729,251.89,729Z" transform="translate(-19.48 -518.41)"/>
                            <path fill="white"  d="M360.19,983c-28.3-7.24-39.3-28.5-44.23-54.64-1.81-9.63,3.21-17.79,12.54-20.71a17,17,0,0,1,21.13,10c2.5,6,4.21,12.3,6.12,18.51,2.22,7.23,7.14,10.6,14.56,10.6,17.89,0,35.81.68,53.63-.45,4.93-.31,11.86-5,13.89-9.42,13.14-29,13.12-58.4.75-87.82-3-7.17-7.65-10.8-15.67-10.67-17.2.26-34.4.23-51.59,0-8-.1-13.11,3.16-15.27,10.89-.09.33-.2.66-.3,1-9.27,31.27-10.26,27.74-40.73,27.85-30.26.11-60.56.74-90.79-.31-13.1-.46-21.48,4.25-27.78,14.84,6.16,10,14.05,15.59,26.85,14.25,11.57-1.22,23.36-.44,35.05-.2,12.64.26,20.59,7.6,20.48,18.41-.11,10.16-7.81,17.49-20,17.75-18.56.4-37.16.54-55.7-.18a24.89,24.89,0,0,1-14.56-6.14C177.89,926.91,168,916.36,158,905.88c-8.23-8.67-8.38-17.63-.15-26.53,9.8-10.6,19.64-21.26,30.47-30.76,4.13-3.63,11-5.7,16.65-5.78,35.08-.51,70.17-.45,105.25-.09,7.13.07,10.59-1.83,13.28-8.84,7.61-19.91,22.59-30.59,44.13-30.91q29.4-.45,58.82,0c20.61.29,35.8,10.22,43.5,29,6,14.7,9.5,30.45,14.11,45.74v28.91c-.68,2.57-1.47,5.11-2,7.71-6.32,29.5-12.58,59-47.54,68.69Z" transform="translate(-19.48 -518.41)"/>
                            <path fill="white" d="M410.87,874.17a18.24,18.24,0,0,1,17.53,18.1c0,10-8.8,18.58-18.53,18.06a18.14,18.14,0,0,1-17-18.53C393.1,882.25,401.52,874,410.87,874.17Z" transform="translate(-19.48 -518.41)"/>
                        </g>
                    </svg>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check text-right d-flex justify-content-end">

                                    <label class="form-check-label pr-3" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 text-center">
                                <button type="submit" class="btn btn-clear w-100">
                                    {{ __('LOGIN') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    <div class="row mt-5">
                        <div class="col-12 d-flex justify-content-end">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
