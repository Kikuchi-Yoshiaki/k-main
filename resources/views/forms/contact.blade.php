@extends('layouts.formLayout')

@section('title', 'お問い合わせ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('ContactController@create') }}" method="POST" name="contact-form" class="form-box">
                <h3 class="form-title mb-4 mt-3">お問い合わせ</h3>
                
                <!-- お名前 -->
                <div class="form-group mb-4">
                    <label class="form-label mr-1">{{ __('message.Name') }}</label>
                    <span class="text-danger small">※必須</span>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                
                    <!-- 名前エラーメッセージ -->
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>お名前を入力してください。</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- メールアドレス -->
                <div class="form-group mb-4">
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
                <div class="form-group mb-4">
                    <label class="form-label mr-1">{{ __('message.contact title') }}</label>
                    <span class="text-danger small">※必須</span>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>
                
                    <!-- タイトルエラーメッセージ -->
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>お問い合わせタイトルを入力してください。</strong>
                        </span>
                    @enderror
                </div>

                <!-- 問い合わせ内容 -->
                <div class="form-group">
                    <label class="form-label mr-1">{{ __('message.contact body') }}</label>
                    <span class="text-danger small">※必須</span>
                    <textarea id="body" rows="10" type="text" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}" placeholder="お問い合わせ内容をこちらへ" autocomplete="body" autofocus></textarea>
                
                    <!-- 本文エラーメッセージ -->
                    @error('body')
                        <span class="invalid-feedback" role="alert">
                            <strong>お問い合わせ内容を入力してください。</strong>
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