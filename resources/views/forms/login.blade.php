@extends('layouts.formLayout')

@section('title', 'ログインページ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form type="POST" name="login-form" class="form-box">
                <h3 class="form-title mt-3">ログイン画面</h3>
                <div class="mb-4 mt-4">
                    <label class="form-label" id="lodin-mail">メールアドレス</label>
                    <input type="email" class="form-control" for="login-mail" placeholder="メールアドレス" aria-describedby="form-text" required="" autofocus="">
                </div>
                <div class="mb-4">
                    <label class="form-label" id="lodin-password">パスワード</label>
                    <input type="password" class="form-control" for="login-password" placeholder="パスワード" aria-describedby="form-text" required="" autofocus="">
                </div>
                <div class="mb-5 form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox1">
                    <label class="form-check-label" for="checkbox1">パスワードを記憶する</label>
                </div>
                <button type="submit" class="btn btn-block btn-primary form-button" name="login">ログイン</button>

                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>
            </form>
        </div>
    </div>

    
            

@endsection