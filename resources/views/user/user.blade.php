@extends('layouts.mainLayout')

@section('title', $user->name.'さんのページ')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">
                
            {{-- MyProfile --}}
            <div class="my-profile-box col-sm-9">
                <h3 class="my-profile">ユーザーページ</h3>
                
                <!-- 最新の投稿された日時を右上に表示 -->
                <p class="float-right mt-2 mr-5">最新投稿日：</p>
                
                <div class="my-profile-img">
                    <!-- プロフィールイメージ・無ければNoImage -->
                    @if(isset($user->profile_image))
                    <img  src="{{ asset('storage/profile/'.$user['profile_image'] ) }}" name="profile-image">
                    @else
                    <img src="/assets/images/noimage.png" name="no-profile-image">
                    @endif
                    <!-- プロフィールネーム -->
                    <span class="my-profile-name">{{ $user->name }}さんのページ</span>
                </div>
                <!-- プロフィール編集画面へ移動 -->
                <a class="post-btn float-right mr-5" href="/user/edit/profile?id={{ $user->id }}" type="button">プロフィールを変更する</a>
            </div>

            {{--My記事見出し --}}
            <h3 class="col-lg-9 col-md-9 md-ml-5  col-sm-5 headline-top">{{ $user->name }}さんの記事一覧</h3>
            
            <div class="d-flex flex-wrap justify-content-around mb-5">
                    @foreach ($articles as $article)
                    <div class="card col-lg-5 col-md-10 next-news">
                        <img class="card-img-next" src="{{ asset('storage/article/'.$article['main_image'] ) }}">
                        @if ($article->category == "気仙沼の遊ぶ")
                        <div class="tags1">
                            <span>{{ $article->category }}</span>
                        </div>
                        @elseif ($article->category == "気仙沼の食べる")
                        <div class="tags2">
                            <span>{{ $article->category }}</span>
                        </div>
                        @else
                        <div class="tags3">
                            <span>{{ $article->category }}</span>
                        </div>
                        @endif
                        <div class="card-body">
                            <h4 class="card-title next-title">{{ $article->title }}</h4>
                            <p class="card-text next-text">{{ $article->body }}</p>
                            <a class="float-right" href="/article/detail/?id={{ $article->id }}">続きを読む</a>
                        </div>
                        {{-- ユーザーID確認テスト --}}
                        <div class="next-news-date d-inline ml-3 mb-3">User_id:{{ $article->user_id }}</div>
                        <div class="next-news-date d-inline ml-3 mb-3"><i class="fas fa-sync-alt mr-2"></i>{{ $article->updated_at->format('Y年m月d日') }}</div>
                        <div class="btn-group-sm d-flex justify-content-around mb-2" role="group" aria-label="Basic example">
                            <!-- 記事編集画面に移動 -->
                            <a class="btn btn-primary" href="/user/edit/article?id={{ $article->id }}">記事を編集</a>
                            <!-- 記事削除画面に移動 -->
                            <a class="btn btn-danger" href="/user/delete/article?id={{ $article->id }}">記事を削除</a>
                                {{ csrf_field() }}
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- 全体の記事一覧画面に移動 -->
                <a class="main-btn btn d-block mx-auto mt-3 more d-none p-3" type="button" href="article/index">記事一覧<br>を見る</a>


            {{-- My写真見出し --}}
            <h3 class="col-lg-9 col-md-9 md-ml-5 col-sm-5 headline-view">{{ $user->name }}さんの風景一覧</h3>
            
            <div class="d-flex flex-wrap justify-content-around">
                @foreach ($views as $view)
                <a class="card view-list mb-1 text-center" href="{{ asset('storage/view/'.$view['view_image']) }}" target="_blank">
                    <img class="card-img-top" src="{{ asset('storage/view/'.$view['view_image'] ) }}">
                    @if (isset($view->title))
                    <p class="card-title user-view-title">{{ Str::limit($view->title,20) }}</p>
                    @else
                    <span></span>
                    @endif
                    {{-- ユーザーID確認テスト --}}
                    <div class="next-news-date d-inline ml-3 mb-3">User_id:{{ $view->user_id }}</div>
                    <div class="btn-group-sm d-flex justify-content-around mb-2" role="group" aria-label="Basic example">
                    <!-- 写真を削除する -->
                    <form action="{{ action('UserController@delete', ['id' => $view->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除" class="btn btn-danger btn-sm">
                    </form>
                </div>
                </a>
                @endforeach
            </div>
            <!-- 全体の記事一覧画面に移動 -->
            <a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/view') }}">風景一覧<br>を見る</a>
        </div>

@endsection

@section('footer')