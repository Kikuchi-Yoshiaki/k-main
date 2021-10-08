@extends('layouts.mainLayout')

@section('title', '記事一覧ページ')

@section('content')

    <!-- 全体の枠 -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">
                
                <!-- 記事上部 -->
                <h2 class="detail-title">詳細記事のタイトル</h2>
                <div class="detail-news-date">投稿日時：2021年10月7日</div>
                <div class="container">
                    <div class="row flex-wrap">
                        <div class="col-lg-12 main">
                            <img class="main-image col-lg-12" src="/assets/images/bridge.jpeg">
                            <div class="col-lg-12 image-text">ここにイメージ解説文を入れる</div>
                            <div class="news-tag">遊ぶ・観光</div>
                        </div>
                        <!-- サブイメージ -->
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub1">
                            <img class="sub-image col-lg-12" src="/assets/images/iwate.jpeg">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub2">
                            <img class="sub-image col-lg-12" src="/assets/images/hanabi.jpeg">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub3">
                            <img class="sub-image col-lg-12" src="/assets/images/profile.png">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub4">
                            <img class="sub-image col-lg-12" src="/assets/images/iwate.jpeg">
                        </div>
                    </div>
                </div>

                <!-- 記事プロフィール -->
                <div class="d-flex justify-content-between m-4">
                    <div class="top-profile">
                        <img class="detail-profile-image" src="/assets/images/profile.png">
                        <div class="detail-profile-name d-inline">プロフィール名さん</div>
                    </div>
                        <div type="button" class="btn btn-outline-success">ここのイイね<br>は形のみ
                    </div>
                </div>

                <!-- 記事本文 -->
                <div class="card">
                    <div class="card-body mt-4">
                        <p class="card-text detail-text">本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト本文テキスト</p>
                        
                        <div class="url-box col-12">
                            <p>ここにメッセージを挿入できる</p>
                            <a class="card-rink" href="#" target='_blank'>aaaaaaaaaaa</a>
                        </div>
                        <div type="button" class="btn btn-outline-danger float-right mr-5">イイねボタン</div>
                    </div>
                </div>

                <!-- 下側部分 -->
                <div class="col-lg-6 offset-lg-3 post-box">
                    <div class="d-none d-lg-block post-btn mb-5">
                        <div >※投稿はこちらから</div>
                        <a href="{{ url('/forms/message') }}" type="button" class="main-btn">投稿する</a>
                    </div>
                    <div class="d-none d-lg-block post-btn">
                        <div class="text-danger">※修正こちらへ</div>
                        <a href="{{ url('/user/post/article') }}" type="button" class="main-btn">戻る</a>
                    </div>
                </div>
            </div>


@endsection

@section('footer')

