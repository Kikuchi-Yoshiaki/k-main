@extends('layouts.formLayout')

@section('title', '新規登録ページ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ route('register') }}" method="POST" name="signup-form" class="form-box" enctype="multipart/form-data">
                <h3 class="form-title mb-4 mt-3">{{ __('message.Register') }}</h3>
                    @csrf
                
                @if (count($errors) > 0)
                <ul class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $e)
                    <li class="ml-3">{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                
                <!-- ユーザー名 -->
                <div class="mb-4">
                    <label class="form-label mr-1">{{ __('message.Name') }}・ニックネーム</label>
                        <span class="text-danger small">※必須</span>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('neme') }}" autofocus="">
                </div>
                
                <!-- メールアドレス -->
                <div class="mb-4">
                    <label class="form-label mr-1">{{ __('message.E-Mail Address') }}</label>
                    <span class="text-danger small">※必須</span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus="">
                </div>

                <!-- パスワード -->
                <div class="mb-4">
                    <label class="form-label mr-1">{{ __('message.Password') }}</label>
                    <span class="text-danger small">※必須</span>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="パスワード" autofocus="">
                </div>
                
                <!-- パスワード再確認 -->
                <div class="mb-4">
                    <label class="form-label mr-1">{{ __('message.Confirm Password') }}</label>
                    <span class="text-danger small">※必須</span>
                    <input type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password>
                </div>
                
                <!-- プロフィール画像 -->
                <div class="mb-4">
                    <label class="form-label mb-2 mr-1">{{ __('message.Profile-image') }}</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="file" class="form-control-file" name="profile_image">
                    <button type="button" class="mt-2" onclick="this.form.elements['profile_image'].value=''">画像取り消し</button>
                </div>

                <!-- 登録ボタン -->
                <input type="submit" class="btn btn-block btn-primary form-button col-3" value="{{ __('message.Register') }}">
                {{ csrf_field() }}

                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>
            </form>
            </form>
        </div>
    </div>

@endsection