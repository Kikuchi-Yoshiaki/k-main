@extends('layouts.mainLayout')

@section('title', '記事一覧')

@section('content')

    <!-- 全体の枠 -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">

            <!-- カテゴリーボックス -->
            <div class="form-group d-flex justify-content-center mt-5">
                <label class="form-label mr-3 mt-2" id="article-category">カテゴリー</label>
                <select class="form-control col-5" name="category">
                    <option>全てのジャンル</option>
                    <option>気仙沼の遊ぶ</option>
                    <option>気仙沼の食べる</option>
                    <option>気仙沼の生活</option>
                </select>
            </div>
            
            <div class="d-flex flex-wrap article-index">
                <div class="card article-index-card mb-3">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                    <a class="card-link mt-3 mb-1" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/yama.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-1" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/cafe1.jpg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-1" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/iwate.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-1" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-1" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
                <div class="card article-index-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを見る</a>
                </div>
            </div>




            <!-- My写真一覧 -->
            <h3 class="col-lg-9 col-md-9 md-ml-5 col-sm-5 headline-view">投稿中の風景</h3>

            <div class="d-flex flex-wrap view-box">
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
            </div>

            <a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/view') }}
            ">風景一覧<br>を見る</a>


            </div>


            

                
            {{-- 右側コンテンツ --}}
            <div class="col-lg-3  col-md-6">
                
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