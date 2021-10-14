@extends('layouts.mainLayout')

@section('title', '記事一覧ページ')

@section('content')

    <!-- 全体の枠 -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">
                
                <h2 class="mt-5 preview-top col-5 offset-3">{{ session('title') }}</h3>

                <!-- 記事上部 -->
                <h2 class="detail-title">{{ $preview->title }}</h2>
                <div class="container">
                    <div class="row flex-wrap">
                        <div class="col-lg-12 main">
                            <img class="main-image col-lg-12" src="{{ asset('storage/article/'.$preview['main_image'] ) }}">
                            @if ($preview->image_text)
                            <div class="col-lg-12 image-text">{{ $preview->image_text }}</div>
                            @else
                            <span></span>
                            @endif
                            @if ($preview->category == "気仙沼の遊ぶ")
                            <div class="tags1">
                                <span>{{ $preview->category }}</span>
                            </div>
                            @elseif ($preview->category == "気仙沼の食べる")
                            <div class="tags2">
                                <span>{{ $preview->category }}</span>
                            </div>
                            @else
                            <div class="tags3">
                                <span>{{ $preview->category }}</span>
                            </div>
                            @endif
                        </div>
                        <!-- サブイメージ -->
                        @if (isset($preview->sub_image_1))
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub1">
                            <img class="sub-image col-lg-12" src="{{ asset('storage/article/'.$preview['sub_image_1'] ) }}">
                        </div>
                        @else
                        <div></div>
                        @endif
                        @if (isset($preview->sub_image_2))
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub2">
                            <img class="sub-image col-lg-12" src="{{ asset('storage/article/'.$preview['sub_image_2'] ) }}">
                        </div>
                        @else
                        <div></div>
                        @endif
                        @if (isset($preview->sub_image_3))
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub3">
                            <img class="sub-image col-lg-12" src="{{ asset('storage/article/'.$preview['sub_image_3'] ) }}">
                        </div>
                        @else
                        <div></div>
                        @endif
                        @if (isset($preview->sub_image_4))
                        <div class="col-lg-3 col-md-3 col-sm-6 sub sub4">
                            <img class="sub-image col-lg-12" src="{{ asset('storage/article/'.$preview['sub_image_4'] ) }}">
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
                        <div type="button" class="btn btn-outline-success">ここのイイね<br>は形のみ
                    </div>
                </div>

                <!-- 記事本文 -->
                <div class="card">
                    <div class="card-body mt-4">
                        <p class="card-text detail-text">{{ $preview->body }}</p>
                        
                        @if ($preview->link_text || $preview->link_url)
                        <div class="url-box col-12">
                            <p class="mb-3">{{ $preview->link_text }}</p>
                            <a class="card-rink" target='_blank' href="{{ $preview->link_url }}">{{ $preview->link_url }}</a>
                        </div>
                        @else
                        <div></div>
                        @endif
                        <div class="next-news-date d-block float-left mt-1"><i class="far fa-calendar-alt ml-3"></i>{{ $preview->created_at->format('Y年m月d日') }}</div>
                        <div type="button" class="btn btn-outline-danger float-right mr-5">イイねボタン</div>
                    </div>
                </div>

                <!-- 下側部分 -->
                <div class="col-lg-6 offset-lg-3 post-box">
                    <div class="d-none d-lg-block post-btn mb-5">
                        <a href="/user/edit/article/?id={{ $preview->id }}" type="button" class="main-btn">編集する</a>
                    </div>
                    <div class="d-none d-lg-block post-btn">
                        <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>
                    </div>
                </div>
            </div>


@endsection

@section('footer')

