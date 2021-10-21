@extends('layouts.mainLayout')

@section('title', $show->title )

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">
                <div class="detail-news-date d-block mt-5"><i class="far fa-clock mr-2"></i>{{ $show->created_at->format('Y年m月d日') }}</div>
                <!-- 記事タイトル -->
                <h2 class="detail-title">{{ $show->title }}</h2>
                
                {{-- 画像のコンテナ --}}
                <div class="container">
                    <div class="row flex-wrap">
                        <div class="col-lg-12 main">
                            <!-- メイン画像 -->
                            <img class="main-image col-lg-12" src="{{ asset('storage/article/'.$show['main_image'] ) }}">
                            
                            <!-- 画像に説明文があれば表示 -->
                            @if ($show->image_text)
                            <div class="col-lg-12 image-text">{{ $show->image_text }}</div>
                            @else
                            <span></span>
                            @endif
                            
                            <!-- カテゴリー分け -->
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
                        
                        <!-- サブ画像があれば表示 -->
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
                
                {{-- 投稿者プロフィール --}}
                <div class="d-flex justify-content-between m-4">
                    <a class="top-profile d-inline mt-3" href="user?id={{ $show->user->id }}">
                        @if (isset($show->user->profile_image))
                        <img class="detail-profile-image" src="{{ asset('storage/profile/'.$show->user['profile_image'] ) }}">
                        @else
                        <img src="/assets/images/noimage.png" name="no-profile-image" class="detail-profile-image">
                        @endif
                        <div class="detail-profile-name d-inline">{{ $show->user->name }}さん</div>
                    </a>
                </div>

                {{-- 記事本体 --}}
                <div class="card">
                    <div class="card-body mt-4">
                        <!-- 記事本文 -->
                        <p class="card-text detail-text">{{ $show->body }}</p>
                        
                        <!-- URLかテキストがあれば表示 -->
                        @if ($show->link_text || $show->link_url)
                        <div class="url-box col-12">
                            <p class="mb-3">{{ $show->link_text }}</p>
                            <a class="card-rink" target='_blank' href="{{ $show->link_url }}">{{ $show->link_url }}</a>
                        </div>
                        @else
                        <div></div>
                        @endif
                    </div>
                </div>

                <!-- 記事投稿へ移動 -->
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