@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <svg class="icon-register" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 513"><defs></defs>
                        <g id="DZHwds.tif">
                            <path fill="white" d="M246,481c6.11,1.33,12.28,2.44,18.33,4a123.29,123.29,0,0,1,90.5,101.61c9.19,64.48-35,126.32-98.64,138.13-66.29,12.3-129-29.41-143.65-95.55-14.79-66.78,30.94-134.78,98.34-146.27,3.06-.52,6.08-1.29,9.12-1.94Z" transform="translate(-23 -481)" class="cls-1"></path>
                            <path fill="white" d="M329.45,771.37c-35.7,29.21-55.22,65.62-55.28,110.84s19.47,81.5,54.28,110.78H52.51c-14.24,0-22.47-8.38-22.46-22.75,0-24.32.32-48.64-.08-73-.5-30.31,10.65-55.81,31-77.6,25.52-27.33,57.64-43.52,93.08-53.6A277.12,277.12,0,0,1,262.24,757c12.85,1.48,25.66,3.65,38.33,6.28C310,765.2,319.09,768.41,329.45,771.37Z" transform="translate(-23 -481)" class="cls-1"></path>
                            <path fill="white" d="M412.56,769.71c52.72.16,109.1,40.69,111.17,107.77,1.93,62.39-46.28,110.38-105.22,113.51-69.36,3.69-116-55.52-116.16-109.54C302.22,817.58,352.66,769.8,412.56,769.71Zm12.71,53.64H402.75v46.92H356.19V894.6h46.93v46.73h22.23v-47h46.5V870H425.27Z" transform="translate(-23 -481)" class="cls-1"></path>
                            <path fill="none"  d="M425.27,823.35V870h46.58v24.41h-46.5v47H403.12V894.6H356.19V870.27h46.56V823.35Z" transform="translate(-23 -481)" class="cls-1"></path>
                        </g>
                    </svg>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Register') }}
                                </button>
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
@endsection
