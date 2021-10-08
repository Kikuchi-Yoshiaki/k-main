@extends('layouts.mainLayout')

@section('title', '風景一覧')

@section('content')

    <!-- 全体の枠 -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">

            <!-- My写真一覧 -->
                <h3 class="col-lg-9 col-md-9 md-ml-5 col-sm-5 headline-view">投稿中の風景</h3>

                <div class="d-flex flex-wrap view-index">
                    <a class="card view-list" href="/assets/images/hanabi.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/bridge.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/bridge.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/iwate.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/iwate.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/cafe.jpg" target="_blank">
                        <img class="card-img-top" src="/assets/images/cafe.jpg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/profile.png" target="_blank">
                        <img class="card-img-top" src="/assets/images/profile.png">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/yama.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/yama.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/bridge.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/bridge.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/hanabi.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/yama.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/yama.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/cafe.jpg" target="_blank">
                        <img class="card-img-top" src="/assets/images/cafe.jpg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/iwate.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/iwate.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/yama.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/yama.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/hanabi.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/iwate.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/iwate.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                    <a class="card view-list" href="/assets/images/hanabi.jpeg" target="_blank">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                        <p class="card-title">タイトル名</p>
                    </a>
                </div>

            

                <!-- 記事一覧ひとつ -->
                <h3 class="col-lg-9 col-md-9 md-ml-5  col-sm-5 headline-top">記事・日記TOPIX</h3>
            
                <div class="d-flex flex-wrap my-article-box">
                    <div class="d-flex flex-wrap article-index">
                        <div class="card article-index-card mb-3">
                            <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                            <div class="news-tag">遊ぶ・観光</div>
                            <p class="card-title">タイトル名</p>
                            <div class="card-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                            <a class="card-link mt-3 mb-1" href="{{ url('/article/detail') }}">続きを見る</a>
                        </div>
                    </div>
                </div>
                <a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/index') }}">記事一覧<br>を見る</a>
            </div>

            

                
            {{-- 右側コンテンツ --}}
            <div class="col-lg-3 right-contents col-md-6">
                
                <!-- 投稿ボタン -->
                <div class="d-none d-lg-block post-btn">
                    <a href="{{ url('/user/post/article') }}" type="button" class="main-btn d-inline-block">記事・日記<br>を投稿する</a>
                    <a href="{{ url('/user/post/view') }}" type="button" class="main-btn d-inline-block">風景・写真<br>を投稿する</a>
                </div>

                <!-- 概要説明欄 -->
                <div class="explanation d-none d-lg-block right-contents">
                    <span class="exp-title">概要解説</span>
                    <p>ここに概要説明
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>〇〇〇管理人</p>
                </div>

                <!-- Twitter -->
                <div class="twitter">
                    <span class="twitter-title">Twitter</span>
                    <a class="twitter-timeline" href="https://twitter.com/kikuyoshi5?   ref_src=twsrc%5Etfw" data-tweet-limit="5">Tweets by kikuyoshi5</a> <script async   src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer')

