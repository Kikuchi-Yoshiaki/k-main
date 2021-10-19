@extends('layouts.formLayout')

@section('title', 'ログインページ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form method="POST" action="{{ route('login') }}" name="login-form" class="form-box">
                @csrf
                <h3 class="form-title mt-3">{{ __('message.Login') }}</h3>
                
                <div class="mb-4 mt-4">
                    <label class="form-label" for="email">{{ __('message.E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                
                    <!-- アドレスエラーメッセージ -->
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="password" class="form-label">{{ __('message.Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autofocus autocomplete="current-password">
                
                    <!-- パスワードエラーメッセージ -->
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox1" name="remenber" id="remenber" {{old('remenber') ? 'checked' : '' }}>
                    <label class="form-check-label" for="checkbox1">{{ __('message.Remember Me') }}</label>
                </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link mb-4" href="{{ route('password.request') }}">
                        {{ __('message.Forgot Your Password?') }}    
                    </a>
                @endif
               
                <button type="submit" class="btn btn-block btn-primary form-button" name="login">{{ __('message.Login') }}</button>

                
                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>
            </form>
        </div>
    </div>
@endsection