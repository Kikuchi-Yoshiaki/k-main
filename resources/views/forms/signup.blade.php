@extends('layouts.formLayout')

@section('title', '新規登録ページ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('UserController@create') }}" method="POST" name="signup-form" class="form-box" enctype="multipart/form-data">
                <h3 class="form-title mb-4 mt-3">新規登録</h3>
                
                <!-- ユーザー名 -->
                <div class="mb-4">
                    <label class="form-label mr-1">ユーザー名</label>
                        <span class="text-danger small">※必須</span>
                    <input type="text" class="form-control" name="name" placeholder="ユーザー名" required="" autofocus="">
                </div>
                
                <!-- メールアドレス -->
                <div class="mb-4">
                    <label class="form-label mr-1">メールアドレス</label>
                    <span class="text-danger small">※必須</span>
                    <input type="email" class="form-control" name="email" placeholder="aaa@aaaaaaaaa" required="" autofocus="">
                </div>

                <!-- パスワード -->
                <div class="mb-4">
                    <label class="form-label mr-1">パスワード</label>
                    <span class="text-danger small">※必須</span>
                    <input type="password" class="form-control" name="password" placeholder="パスワード" required="" autofocus="">
                </div>
                
                <!-- プロフィール画像 -->
                <div class="mb-4">
                    <label class="form-label mb-2 mr-1">プロフィール画像</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="file" class="form-control-file" name="profile_image">
                    <button type="button" class="mt-2" onclick="this.form.elements['profile_image'].value=''">画像取り消し</button>
                </div>

                <!-- 登録ボタン -->
                <input type="submit" class="btn btn-block btn-primary form-button col-3" value="登録">
                {{ csrf_field() }}

                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>

            </form>
        </div>
    </div>

@endsection