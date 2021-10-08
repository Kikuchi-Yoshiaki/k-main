@extends('layouts.formLayout')

@section('title', 'プロフィール編集ページ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form type="POST" name="profile_edit_form" class="user-box">
                <h3 class="form-title mt-3">プロフィール編集</h3>
                
                
                <!-- プロフィールネーム -->
                <div class="mb-4">
                    <label class="form-label mr-1" id="user-name">ユーザー名</label>
                    <input type="text" class="form-control" for="user-name" placeholder="ユーザー名" aria-describedby="form-text" required="" autofocus="">
                </div>
                
                <!-- メールアドレス -->
                <div class="mb-4">
                    <label class="form-label mr-1" id="lodin-mail">メールアドレス</label>
                    <input type="email" class="form-control" for="login-mail" placeholder="aaa@aaaaaaaaa" aria-describedby="form-text" required="" autofocus="">
                </div>
                
                <!-- プロフィール画像 -->
                <div class="mb-2">
                    <label class="form-label mb-2 mr-1">プロフィール画像</label>
                    <input type="file" class="form-control-file" name="profile-image">
                </div>
                <div class="form-check mb-4">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="remove" value="true">画像の削除はあとで実装
                    </label>
                </div>    

                <!-- 更新ボタン -->
                <button type="submit" class="btn btn-block btn-primary form-button" name="login">更新する</button>
                <a class="goto-top d-block my-5" href="{{ url('/') }}">トップ画面に戻る</a>
            </form>
        </div>
    </div>

@endsection