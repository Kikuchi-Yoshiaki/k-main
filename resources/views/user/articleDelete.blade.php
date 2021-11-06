@extends('layouts.formLayout')

@section('title', '記事の削除')

@section('content')
    
    @if(Auth::id() === $article->user->id)
    <div class="container form-container">
        <div class="wrapper">
            <div class="form-box form-box">
                <h4 class="form-title mt-3">記事を削除しますか？</h4>
                <p class="message-text mt-4">投稿日時：{{ $article->updated_at->format('Y年m月d日')  }}</p>
                <p class="message-text mt-4">タイトル：{{ $article->title }}</p>
                <p class="message-text mt-4">カテゴリー：{{ $article->category }}</p>
                <p class="message-text mt-4">本文：{{ Str::limit($article->body,60) }}</p>
                
                <div class="btn-group-sm d-flex justify-content-around mb-2 mt-5" role="group" aria-label="Basic example">
                    <a class="btn btn-primary" href="/user?id={{ $article->user->id }}">ユーザーページ<br>に戻る</a>
                    <form action="{{ action('ArticleController@delete', ['id' => $article->id]) }}" method="POST">
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