@extends('layouts.formLayout')

@section('title', 'プロフィール編集ページ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('UserController@update') }}" method="POST" class="user-box" enctype="multipart/form-data">
                <h3 class="form-title mt-3">プロフィール編集</h3>
                
                <!-- プロフィールネーム -->
                <div class="mb-4">
                    <label class="form-label mr-1">ユーザー名</label>
                    <input type="text" class="form-control" name="name" placeholder="ユーザー名" aria-describedby="form-text" required="" autofocus="" value="{{ $form->name }}">
                </div>
                
                <!-- メールアドレス -->
                <div class="mb-4">
                    <label class="form-label mr-1">メールアドレス</label>
                    <input type="email" class="form-control" name="email" placeholder="aaa@aaaaaaaaa" aria-describedby="form-text" required="" autofocus="" value="{{ $form->email }}">
                </div>
                
                <!-- プロフィール画像 -->
                <div class="mb-2">
                    <label class="form-label mb-4 mr-1">プロフィール画像</label>
                    <input type="file" class="form-control-file" name="profile_image">
                    <button type="button" class="mt-1" onclick="this.form.elements['profile_image'].value=''">画像取り消し</button>
                </div>
                
                

                <!-- 更新ボタン -->
                <input type="hidden" name="id" value="{{ $form->id }}">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-block btn-primary form-button mt-5 col-3" value="更新する">
                <a class="goto-top d-block my-5" href="{{ url('/') }}">トップページに戻る</a>
            </form>
        </div>
    </div>

@endsection