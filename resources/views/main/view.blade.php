@extends('layouts.mainLayout')

@section('title', '風景一覧')

@section('content')

    <div class="container-fluid">
        <div class="row view-row">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">

                {{-- 風景写真見出し --}}
                <div class="mt-5 headline col-10 offset-1">
                    <h3 class="headline-view">気仙沼の風景画像</h3>
                </div>
                <!-- 風景写真一覧 -->
                <div class="d-flex flex-wrap justify-content-center view-index">
                    @foreach ($views as $view)
                    <a class="card view-list mb-1" href="{{ asset('storage/view/'.$view['view_image'] ) }}" target="_blank">
                        <img class="card-img-top" src="{{ asset('storage/view/'.$view['view_image'] ) }}">
                        @if (isset($view->title))
                        <p class="card-title">{{ Str::limit($view->title,20) }}</p>
                        @else
                        <span></span>
                        @endif
                    </a>
                    @endforeach
                </div>


                {{-- 記事２件をランダム表示 --}}
                <div class="mt-5 headline col-10 offset-1">
                    <h3 class="headline-top">記事・日記TOPIX</h3>
                </div>
                <div class="d-flex flex-wrap justify-content-around mb-5">
                    @foreach ($articles as $article)
                    <!-- 記事のメイン画像 -->
                    <div class="card col-lg-5 col-md-10 next-news">
                        <img class="card-img-next" src="{{ asset('storage/article/'.$article['main_image'] ) }}">
                        <!-- カテゴリー分け -->
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
                        <!-- タイトル -->
                        <div class="card-body">
                            <!-- 投稿日時 -->
                            <div class="next-news-date d-inline"><i class="far fa-clock mr-2"></i>{{ $article->created_at->format('Y年m月d日') }}</div>
                            <h4 class="card-title next-title">{{ $article->title }}</h4>
                            <!-- 投稿者名 -->
                            <a class="top-profile d-inline" href="user?id={{ $article->user->id }}">
                                @if (isset($article->user->profile_image))
                                <img class="next-profile-img" src="{{ asset('storage/profile/'.$article->user['profile_image'] ) }}">
                                @else
                                <img src="/assets/images/noimage.png" name="no-profile-image" class="next-profile-img">
                                @endif
                                <div class="next-news-profile d-inline">{{ $article->user->name }}さん</div>
                            </a>
                            <!-- 記事本文 -->
                            <p class="card-text next-text">{{ $article->body }}</p>
                            <a class="float-right" href="/article/detail/?id={{ $article->id }}">続きを読む</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- 記事一覧をもっとみる -->
                <a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/index') }}">記事一覧<br>を見る</a>
            </div>
            
@endsection

@section('footer')