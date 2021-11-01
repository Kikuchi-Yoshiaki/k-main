@extends('layouts.formLayout')

@section('title', 'プロフィール編集ページ')

@section('content')
    
    @if(Auth::id() === $form->id)
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('UserController@update') }}" method="POST" class="form-box" enctype="multipart/form-data">
                <h3 class="form-title mt-3">プロフィール編集</h3>
                
                <!-- アカウント名 -->
                <div class="mb-4 form-controll">
                    <label class="form-label mr-1">アカウント名</label>
                    <span class="text-danger small">※必須（最大20文字）</span>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" aria-describedby="form-text" autofocus="" value="{{ $form->name }}">
                    
                    <!-- ユーザー名エラー表示 -->
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                
                <!-- メールアドレス -->
                <div class="mb-4 form-controll">
                    <label class="form-label mr-1">メールアドレス</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" aria-describedby="form-text" autofocus="" value="{{ $form->email }}">
                
                    <!-- メールエラー表示 -->
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- プロフィール画像 -->
                <div class="mb-2 form-controll">
                    <label class="form-label mb-4 mr-1">プロフィール画像</label>
                    <input type="file" id="update-user-image" class="form-control-file" name="profile_image">
                    
                    <!-- ファイル画像を表示 -->
                    <img src="" id="user-update-preview" class="img-responsive">
                    
                    <button type="button" id="cancel-edit-profile" class="mt-1" onclick="this.form.elements['profile_image'].value=''">画像取り消し</button>
                </div>
                
                <input type="hidden" name="password" value="{{ $form->password }}">

                <!-- 更新ボタン -->
                <input type="hidden" name="id" value="{{ $form->id }}">
                {{ csrf_field() }}
                <div class="input-box">
                    <input type="submit" class="btn-flat-vertical-border mt-5 col-3" value="更新する">
                </div>
                @endif
                
                <a class="goto-top d-block my-5" href="{{ url('/') }}">トップページに戻る</a>
            </form>
        </div>
    </div>

@endsection