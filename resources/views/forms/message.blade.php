@extends('layouts.formLayout')

@section('title', 'メッセージ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <div class="form-box message-box">
                <h4 class="form-title mt-3">{{ session('title') }}</h4>
                <p class="form-text mt-4">{{ session('message') }}</p>
                <p class="form-text mt-4">{{ session('message2') }}</p>
                
                <a class="goto-top d-block my-5" href="{{ url('/') }}">トップページに戻る</a>
            </div>
        </div>
    </div>

@endsection