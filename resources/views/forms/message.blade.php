@extends('layouts.formLayout')

@section('title', 'メッセージ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <div class="form-box message-box">
                <h4 class="form-title mt-3">{{ session('title') }}</h4>
                <p class="message-text mt-4 text-center">{{ session('message') }}</p>
                <p class="message-text mt-4 text-center">{{ session('message2') }}</p>
                <a class="message-text mt-5 d-block text-center message-url" href="{{ session('url') }}{{ Auth::user()->id }}">{{ session('page') }}</a> 
                <a class="goto-top d-block my-5" href="{{ url('/') }}">トップページに戻る</a>
            </div>
        </div>
    </div>

@endsection