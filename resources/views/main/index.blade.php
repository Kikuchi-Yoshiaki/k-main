@extends('layouts.mainLayout')

@section('title', 'トップページ')

@section('content')

    <!-- 全体の枠 -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12 left-contents">
                <!-- 最新記事見出し -->
                <h3 class="col-lg-10 col-md-12 md-ml-5 headline-top">最新記事</h3>
            
                <!-- トップ記事 -->
                
                <div class="card col-lg-9 offset-lg-2 col-md-10 top-news">
                    <img class="card-img-top" src="/assets/images/iwate.jpeg">
                    <div class="news-tag">{{ $top->category }}</div>
                    <div class="card-body">
                        <h4 class="card-title top-title">{{ $top->title }}</h4>
                        <div class="top-profile d-inline">
                            <img class="profile-img" src="/assets/images/profile.png">
                            <div class="top-news-profile d-inline">プロフィール名さん</div>
                        </div>
                        <div class="top-news-date d-inline">投稿日:{{ $top->created_at->format('Y年m月d日') }}</div>
                        <p class="card-text top-text">{{ $top->body }}</p>
                        <a class="float-right" href="/article/detail/?id={{ $top->id }}">続きを読む</a>
                    </div>
                </div>
                

                <!--記事の２列目 -->
                <div class="card-group mt-1">
                    <div class="card col-lg-6 offset-lg-1 mx-3 col-md-12 next-news">
                        <img class="card-img-next" src="/assets/images/iwate.jpeg">
                        <div class="news-tag">遊ぶ・観光</div>
                        <div class="card-body">
                            <h4 class="card-title next-title">２つ目のニュース</h4>
                            <div class="top-profile d-inline">
                                <img class="profile-img" src="/assets/images/profile.png">
                                <div class="next-news-profile d-inline">プロフィール名さん</div>
                            </div>
                            <div class="next-news-date d-inline">投稿日時：2021年10月7日</div>
                            <p class="card-text next-text">ここに投稿された記事が入る。カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文 本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カ   ード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本 文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文   カード本文本文カード本文本文カード本文</p>
                            <a class="float-right" href="#">続きを読む</a>
                        </div>
                    </div>
                    <div class="card col-lg-6 offset-lg-1 mx-3 col-md-12 next-news">
                        <img class="card-img-next" src="/assets/images/iwate.jpeg">
                        <div class="news-tag">遊ぶ・観光</div>
                        <div class="card-body">
                            <h4 class="card-title next-title">３つ目のニュース</h4>
                            <div class="top-profile d-inline">
                                <img class="profile-img" src="/assets/images/profile.png">
                                <div class="next-news-profile d-inline">プロフィール名さん</div>
                            </div>
                            <div class="next-news-date d-inline">投稿日時：2021年10月7日</div>
                            <p class="card-text next-text">ここに投稿された記事が入る。カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文 本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カ   ード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本 文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文   カード本文本文カード本文本文カード本文</p>
                            <a class="float-right" href="#">続きを読む</a>
                        </div>
                    </div>
                </div>

                <!--記事の３列目 -->
                <div class="card-group mt-1">
                    <div class="card col-lg-6 offset-lg-1 mx-3 col-md-12 next-news">
                        <img class="card-img-next" src="/assets/images/iwate.jpeg">
                        <div class="news-tag">遊ぶ・観光</div>
                        <div class="card-body">
                            <h4 class="card-title next-title">４つ目のニュース</h4>
                            <div class="top-profile d-inline">
                                <img class="profile-img" src="/assets/images/profile.png">
                                <div class="next-news-profile d-inline">プロフィール名さん</div>
                            </div>
                            <div class="next-news-date d-inline">投稿日時：2021年10月7日</div>
                            <p class="card-text next-text">ここに投稿された記事が入る。カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文 本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カ   ード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本 文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文   カード本文本文カード本文本文カード本文</p>
                            <a class="float-right" href="#">続きを読む</a>
                        </div>
                    </div>
                    <div class="card col-lg-6 offset-lg-1 mx-3 col-md-12 next-news">
                        <img class="card-img-next" src="/assets/images/iwate.jpeg">
                        <div class="news-tag">遊ぶ・観光</div>
                        <div class="card-body">
                            <h4 class="card-title next-title">５つ目のニュース</h4>
                            <div class="top-profile d-inline">
                                <img class="profile-img" src="/assets/images/profile.png">
                                <div class="next-news-profile d-inline">プロフィール名さん</div>
                            </div>
                            <div class="next-news-date d-inline">投稿日時：2021年10月7日</div>
                            <p class="card-text next-text">ここに投稿された記事が入る。カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー ド本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カード本文カー   ド本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文 本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カ   ード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本 文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文カード本文本文   カード本文本文カード本文本文カード本文</p>
                            <a class="float-right" href="#">続きを読む</a>
                        </div>
                    </div>
                </div>
                <a class="main-btn btn d-block mx-auto mt-3 more d-none" type="button" href="{{ url('article/index') }}">もっと見る</a>

                <!-- 風景写真見出し -->
                <h3 class="col-lg-9 col-md-9 md-ml-5 col-sm-5 headline-view">気仙沼の風景画像</h3>

                <!-- 風景写真一覧 -->
                <div class="d-flex flex-wrap view-container">
            
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </div>
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/iwate.jpeg">
                        <p class="card-title">タイトル名</p>
                    </div>
                    
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/profile.png">
                        <p class="card-title">タイトル名</p>
                    </div>
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </div>
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </div>
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/profile.png">
                        <p class="card-title">タイトル名</p>
                    </div>
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </div>
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </div>
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/iwate.jpeg">
                        <p class="card-title">タイトル名</p>
                    </div>
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </div>
                    <div class="card photo-card">
                        <img class="card-img-top" src="/assets/images/bridge.jpeg">
                        <p class="card-title">タイトル名</p>
                    </div>
                </div>
                <a class="main-btn btn d-block mx-auto mt-3 more d-none" type="button" href="{{ url('article/view') }}">もっと見る</a>
            </div>

        
@endsection

@section('footer')

