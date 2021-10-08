@extends('layouts.formLayout')

@section('title', 'お問い合わせ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('ContactController@create') }}" method="POST" name="contact-form" class="form-box">
                <h3 class="form-title mb-4 mt-3">お問い合わせ</h3>
                
                
                <!-- お名前 -->
                <div class="form-group mb-4">
                    <label class="form-label mr-1" id="contact-name">お名前</label>
                    <span class="text-danger small">※必須</span>
                    <input type="text" class="form-control" name="name" for="contact-name" placeholder="お名前" required="required" aria-describedby="form-text">
                </div>
                
                <!-- メールアドレス -->
                <div class="form-group mb-4">
                    <label class="form-label mr-1" id="contact-mail">メールアドレス</label>
                    <span class="text-danger small">※必須</span>
                    <input type="text" class="form-control" name="email" for="contact-mail" placeholder="aaa@aaaaaaaaa" required="required" aria-describedby="form-text">
                </div>

                <!-- タイトル -->
                <div class="form-group mb-4">
                    <label class="form-label mr-1" id="contact-title">タイトル</label>
                    <span class="text-danger small">※必須</span>
                    <input type="text" class="form-control" name="title" for="contact-title" placeholder="お問い合わせ件名" required="" aria-describedby="form-text">
                </div>

                <!-- 問い合わせ内容 -->
                <div class="form-group">
                    <label class="form-label mr-1" id="contact-message">お問い合わせ内容</label>
                    <span class="text-danger small">※必須</span>
                    <textarea rows="10" type="text" class="form-control" name="body" for="contact-message" placeholder="お問い合わせ内容をこちらへ" required=""></textarea>
                </div>

                <!-- 登録ボタン -->
                <input type="submit" class="col-3 btn btn-block btn-outline-primary form-button" value="送信">
                {{ csrf_field() }}

                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>

            </form>
        </div>
    </div>

@endsection