@extends('layouts.formLayout')

@section('title', '風景画像の削除')

@section('content')

    @if(Auth::id() === $view->user->id)
    <div class="container form-container">
        <div class="wrapper">
            <div class="form-box form-box">
                <h4 class="form-title mt-3">画像を削除しますか？</h4>
                <p class="form-text mt-4">投稿日時：{{ $view->created_at->format('Y年m月d日')  }}</p>
                @if (isset($view->title))
                <p class="form-text">タイトル：{{ $view->title }}</p>
                @else
                <p class="form-text">タイトル：No Title</p>
                @endif
                <img class="card-img-top mb-5" src="{{ asset('storage/view/'.$view['view_image'] ) }}">
                
                <div class="btn-group-sm d-flex justify-content-around mb-2" role="group" aria-label="Basic example">
                    
                    <a class="btn btn-primary" href="/user?id={{ $view->user->id }}">ユーザーページ<br>に戻る</a>
                    <form action="{{ action('ViewController@delete', ['id' => $view->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除する" class="btn btn-danger">
                    </form>
                </div>
                @endif
                
                <a class="goto-top d-block my-5" href="{{ url('/') }}">トップページに戻る</a>
            </div>
        </div>
    </div>

@endsection