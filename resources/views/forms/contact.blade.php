@extends('layouts.formLayout')

@section('title', 'お問い合わせ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('ContactController@create') }}" method="POST" name="contact-form" class="form-box">
                <h3 class="form-title mb-4 mt-3">お問い合わせ</h3>
                
                <!-- お名前 -->
                <div class="form-group mb-4 form-controll">
                    <label class="form-label mr-1">{{ __('message.Name') }}</label>
                    <span class="text-danger small">※任意（最大30文字）</span>
                    <input id="contact_name" type="text" class="form-control @error('contact_name') is-invalid @enderror" name="contact_name" value="{{ old('contact_name') }}" autocomplete="contact_name" autofocus>
                
                    <!-- 名前エラーメッセージ -->
                    @error('contact_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- メールアドレス -->
                <div class="form-group mb-4 form-controll">
                    <label class="form-label mr-1">{{ __('message.E-Mail Address') }}</label>
                    <span class="text-danger small">※必須</span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                
                    <!-- メールエラーメッセージ -->
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- タイトル -->
                <div class="form-group mb-4 form-controll">
                    <label class="form-label mr-1">{{ __('message.contact title') }}</label>
                    <span class="text-danger small">※任意（最大30文字）</span>
                    <input id="contact_title" type="text" class="form-control @error('contact_title') is-invalid @enderror" name="contact_title" value="{{ old('contact_title') }}" autocomplete="contact_title" autofocus>
                
                    <!-- タイトルエラーメッセージ -->
                    @error('contact_title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- 問い合わせ内容 -->
                <div class="form-group form-controll mb-5">
                    <label class="form-label mr-1">{{ __('message.contact body') }}</label>
                    <span class="text-danger small">※任意（最大300文字）</span>
                    <textarea id="cotact_body" rows="10" type="text" class="form-control @error('contact_body') is-invalid @enderror" name="contact_body" value="{{ old('contact_body') }}" autocomplete="contact_body" autofocus></textarea>
                
                    <!-- 本文エラーメッセージ -->
                    @error('contact_body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- 登録ボタン -->
                <input type="submit" class="col-3 btn btn-block btn-outline-primary form-button" value="送信">
                {{ csrf_field() }}

                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>

            </form>
        </div>
    </div>

@endsection