@extends('layouts.mainLayout')

@section('title', 'トップページ')

@section('content')

    <div class="container-fluid"> <!-- container-fluid - コンテナを幅に合わせる -->
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12 left-contents">
                {{-- 最新記事見出し --}}
                <h3 class="col-lg-10 col-md-12 md-ml-5 headline-top">最新記事</h3>
                <!-- 記事のメイン画像 -->
                <div class="card col-lg-9 offset-lg-2 col-md-10 mb-4 top-news">
                    <img class="card-img-top" src="{{ asset('storage/article/'.$top['main_image'] ) }}">
                    <!-- カテゴリー分け -->
                    @if ($top->category == "気仙沼の遊ぶ")
                    <div class="tags1">
                        <span>{{ $top->category }}</span>
                    </div>
                    @elseif ($top->category == "気仙沼の食べる")
                    <div class="tags2">
                        <span>{{ $top->category }}</span>
                    </div>
                    @else
                    <div class="tags3">
                        <span>{{ $top->category }}</span>
                    </div>
                    @endif
                    <!-- タイトル -->
                    <div class="card-body">
                        <h4 class="card-title top-title">{{ $top->title }}</h4>
                        <!-- 投稿者名 -->
                        <div class="top-profile d-inline">
                            <img class="profile-img" src="/assets/images/profile.png">
                            <div class="top-news-profile d-inline">プロフィール名さん</div>
                        </div>
                        <!-- 投稿日時 -->
                        <div class="top-news-date d-inline mr-3"><i class="far fa-calendar-alt mr-2"></i>{{ $top->created_at->format('Y年m月d日') }}</div>
                        <!-- 記事本文 -->
                        <p class="card-text top-text">{{ $top->body }}</p>
                        <a class="float-right" href="/article/detail/?id={{ $top->id }}">続きを読む</a>
                    </div>
                </div>

                {{-- ２〜５件目の記事 --}}
                <div class="d-flex flex-wrap justify-content-around mb-5">
                    @foreach ($posts as $post)
                    <div class="card col-lg-5 col-md-10 next-news">
                        <!-- 記事のメイン画像 -->
                        <img class="card-img-next" src="{{ asset('storage/article/'.$post['main_image'] ) }}">
                        <!-- カテゴリー分け -->
                        @if ($post->category == "気仙沼の遊ぶ")
                        <div class="tags1">
                            <span>{{ $post->category }}</span>
                        </div>
                        @elseif ($post->category == "気仙沼の食べる")
                        <div class="tags2">
                            <span>{{ $post->category }}</span>
                        </div>
                        @else
                        <div class="tags3">
                            <span>{{ $post->category }}</span>
                        </div>
                        @endif
                        <div class="card-body">
                            <!-- タイトル -->
                            <h4 class="card-title next-title">{{ $post->title }}</h4>
                            <!-- 投稿者名 -->
                            <div class="top-profile d-inline">
                                <img class="profile-img" src="/assets/images/profile.png">
                                <div class="next-news-profile d-inline">プロフィール名さん</div>
                            </div>
                            <!-- 投稿日時 -->
                            <div class="next-news-date d-inline"><i class="far fa-calendar-alt mr-2"></i>{{ $top->created_at->format('Y年m月d日') }}</div>
                            <!-- 記事本文 -->
                            <p class="card-text next-text">{{ $post->body }}</p>
                            <a class="float-right" href="/article/detail/?id={{ $post->id }}">続きを読む</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- 記事一覧をもっとみる -->
                <a class="main-btn btn d-block mx-auto mt-3 more d-none" type="button" href="{{ url('article/index') }}">もっと見る</a>

                {{-- 風景写真見出し --}}
                <h3 class="col-lg-9 col-md-9 md-ml-5 col-sm-5 headline-view">気仙沼の風景画像</h3>

                <!-- 風景写真一覧 -->
                <div class="d-flex flex-wrap justify-content-around">
                    @foreach ($views as $view)
                    <a class="card view-list mb-1 text-center" href="{{ asset('storage/view/'.$view['view_image'] ) }}" target="_blank">
                        <img class="card-img-top" src="{{ asset('storage/view/'.$view['view_image'] ) }}">
                        <!-- 画像にタイトルがあれば表示 -->
                        @if (isset($view->title))
                        <p class="card-title user-view-title">{{ Str::limit($view->title,20) }}</p>
                        @else
                        <span></span>
                        @endif
                    </a>
                    @endforeach
                </div>
                
                <!-- 風景一覧をもっとみる -->
                <a class="main-btn btn d-block mx-auto mt-3 more d-none" type="button" href="{{ url('article/view') }}">もっと見る</a>
            </div>
            
@endsection

@section('footer')

