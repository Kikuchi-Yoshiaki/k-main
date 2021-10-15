@extends('layouts.formLayout')

@section('title', '記事の削除')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <div class="form-box user-box">
                <h4 class="form-title mt-3">記事を削除しますか？</h4>
                <p class="form-text mt-4">投稿日時：{{ $article->created_at->format('Y年m月d日')  }}</p>
                <p class="form-text mt-4">タイトル：{{ $article->title }}</p>
                <p class="form-text mt-4">カテゴリー：{{ $article->category }}</p>
                <p class="form-text mt-4">本文：{{ Str::limit($article->body,60) }}</p>
                
                <div class="btn-group-sm d-flex justify-content-around mb-2" role="group" aria-label="Basic example">
                    <button class="btn btn-primary" href="/user?id={{ $article->id }}">ユーザーページ<br>に戻る</button>
                    <form action="{{ action('ArticleController@delete', ['id' => $article->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除する" class="btn btn-danger">
                    </form>
                </div>
                
                <a class="goto-top d-block my-5" href="{{ url('/') }}">トップページに戻る</a>
            </div>
        </div>
    </div>

@endsection