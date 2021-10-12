@extends('layouts.mainLayout')

@section('title', '記事詳細ページ')

@section('content')

    <!-- 全体の枠 -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">
                
                <!-- 記事上部 -->
                <h2 class="detail-title">{{ $show->title }}</h2>
                <div class="detail-news-date">更新日時:{{ $show->updated_at->format('Y年m月d日') }}</div>
                <div class="container">
                    <div class="row flex-wrap">
                        <div class="col-lg-12 main">
                            <img class="main-image col-lg-12" src="{{ asset('storage/article/'.$show['main_image'] ) }}">
                            <div class="col-lg-12 image-text">{{ $show->image_text }}</div>
                            @if ($show->category == "気仙沼の遊ぶ")
                            <div class="tags1">
                                <span>{{ $show->category }}</span>
                            </div>
                            @elseif ($show->category == "気仙沼の食べる")
                            <div class="tags2">
                                <span>{{ $show->category }}</span>
                            </div>
                            @else
                            <div class="tags3">
                                <span>{{ $show->category }}</span>
                            </div>
                            @endif
                        </div>
                        <!-- サブイメージ -->
                        @if (isset($show->sub_image_1))
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub1">
                            <img class="sub-image col-lg-12" src="{{ asset('storage/article/'.$show['sub_image_1'] ) }}">
                        </div>
                        @else
                        <div></div>
                        @endif
                        @if (isset($show->sub_image_2))
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub2">
                            <img class="sub-image col-lg-12" src="{{ asset('storage/article/'.$show['sub_image_2'] ) }}">
                        </div>
                        @else
                        <div></div>
                        @endif
                        @if (isset($show->sub_image_3))
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub3">
                            <img class="sub-image col-lg-12" src="{{ asset('storage/article/'.$show['sub_image_3'] ) }}">
                        </div>
                        @else
                        <div></div>
                        @endif
                        @if (isset($show->sub_image_4))
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub4">
                            <img class="sub-image col-lg-12" src="{{ asset('storage/article/'.$show['sub_image_4'] ) }}">
                        </div>
                        @else
                        <div></div>
                        @endif
                    </div>
                </div>

                <!-- 記事プロフィール -->
                <div class="d-flex justify-content-between m-4">
                    <div class="top-profile">
                        <img class="detail-profile-image" src="/assets/images/profile.png">
                        <div class="detail-profile-name d-inline">プロフィール名さん</div>
                    </div>
                        <div type="button" class="btn btn-outline-success">イイね数を<br>置く場所
                    </div>
                </div>

                <!-- 記事本文 -->
                <div class="card">
                    <div class="card-body mt-4">
                        <p class="card-text detail-text">{{ $show->body }}</p>
                        
                        <div class="url-box col-12">
                            <p>{{ $show->link_text }}</p>
                            <a class="card-rink" target='_blank' href="{{ $show->link_url }}">{{ $show->link_url }}</a>
                        </div>
                        <div type="button" class="btn btn-outline-danger float-right mr-5">イイねボタン</div>
                    </div>
                </div>

                <!-- 下側部分 -->
                <div class="col-lg-6 offset-lg-3 post-box">
                    <div class="">あなたも記事を投稿してみませんか？</div>
                    <div class="d-none d-lg-block post-btn">
                        <a href="{{ url('/user/post/article') }}" type="button" class="main-btn">記事・日記<br>を投稿する</a>
                    </div>
                </div>
                <a class="goto-top d-block text-center mt-5" href="{{ url('/') }}">トップページに戻る</a>
            </div>

            
@endsection

@section('footer')


