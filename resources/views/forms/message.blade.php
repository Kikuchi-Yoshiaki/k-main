@extends('layouts.formLayout')

@section('title', 'メッセージ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <div class="form-box message-box">
                <h4 class="form-title mt-3">ここにメッセージタイトルを入れるようにする</h4>
                <p class="form-text mt-4">メッセージを内容によって変更する。メッセージを内容によって変更する。メッセージを内容によって変更する。メッセージを内容によって変更する。メッセージを内容によって変更する。メッセージを内容によって変更する。メッセージを内容によって変更する。メッセージを内容によって変更する。メッセージを内容によって変更する。メッセージを内容によって変更する。メッセージを内容によって変更する。</p>
                <a class="goto-top d-block my-5" href="{{ url('/') }}">トップページに戻る</a>
            </div>
        </div>
    </div>

@endsection