@extends('layouts.mainLayout')

@section('title', '気仙沼うぉーかー')

@section('content')

    <div class="container-fluid"> <!-- container-fluid - コンテナを幅に合わせる -->
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12 left-contents">
                {{-- 最新記事見出し --}}
                <div class="mt-4 mb-2 headline d-flex justify-content-center">
                    <h3 class="headline-top">最新の記事</h3>
                </div>
                
                <!-- 未投稿時 -->
                @if(!isset($top->id))
                <div class="null-data">投稿はまだありません。</div>
                <div class="d-flex justify-content-center mr-5 post-btn">
                    <a href="{{ url('/user/post/article') }}" type="button" class="main-btn d-inline-block">記事・日記<br>を投稿する</a>
                </div>
                @else
                
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
                        <!-- 投稿日時 -->
                        <div class="top-news-date d-flex justify-content-end mr-3"><i class="far fa-clock mr-2 mt-1"></i>{{ $top->updated_at->format('Y年m月d日') }}</div>
                        <h4 class="card-title top-title">{{ Str::limit($top->title,32) }}</h4>
                        <!-- 投稿者名 -->
                        <a class="top-profile d-inline" href="user?id={{ $top->user->id }}">
                            @if (isset($top->user->profile_image))
                            <img class="top-profile-img" src="{{ asset('storage/profile/'.$top->user['profile_image'] ) }}">
                            @else
                            <img src="/assets/images/noimage.png" name="no-profile-image" class="top-profile-img">
                            @endif
                            <div class="top-news-profile d-inline">{{ $top->user->name }}さん</div>
                        </a>
                        <!-- 記事本文 -->
                        <p class="card-text top-text">{{ $top->body }}</p>
                        <a class="float-right" href="/article/detail/?id={{ $top->id }}">続きを読む</a>
                    </div>
                </div>
                @endif

                {{-- ２〜５件目の記事 --}}
                <div class="d-flex flex-wrap justify-content-around mb-5">
                    @foreach ($posts as $post)
                    <div class="card col-lg-5 col-md-10 next-news">
                         <!--記事のメイン画像 -->
                        <img class="card-img-next" src="{{ asset('storage/article/'.$post['main_image'] ) }}">
                         <!--カテゴリー分け -->
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
                             <!--投稿日時 -->
                            <div class="next-news-date d-flex justify-content-end mr-3"><i class="far fa-clock mr-2 mt-1"></i>{{ $post->created_at->format('Y年m月d日') }}</div>
                             <!--タイトル -->
                            <h4 class="card-title next-title">{{ Str::limit($post->title,32) }}</h4>
                             <!--投稿者名 -->
                            <a class="top-profile d-inline" href="user?id={{ $post->user->id }}">
                                @if (isset($post->user->profile_image))
                                <img class="next-profile-img" src="{{ asset('storage/profile/'.$post->user['profile_image'] ) }}">
                                @else
                                <img src="/assets/images/noimage.png" name="no-profile-image" class="next-profile-img">
                                @endif
                                <div class="next-news-profile d-inline">{{ $post->user->name }}さん</div>
                            </a>
                             <!--記事本文 -->
                            <p class="card-text next-text">{{ $post->body }}</p>
                            <a class="float-right" href="/article/detail/?id={{ $post->id }}">続きを読む</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                @if(isset($top->id))
                <!-- 記事一覧をもっとみる -->
                <a class="d-flex justify-content-center mt-3" type="button" href="{{ url('article/index') }}">
                    <img class="more-btn" src="/assets/images/more_2.png">
                </a>
                @endif

                {{-- 風景写真見出し --}}
                <div class="mb-2 user-headline-view d-flex justify-content-center">
                    <h3 class="headline-view">風景写真</h3>
                </div>

                <!-- 風景写真一覧 -->
                <div class="d-flex flex-wrap justify-content-center view-index">
                    @foreach ($views as $view)
                    <a class="card view-image mb-1 text-center" href="{{ asset('storage/view/'.$view['view_image'] ) }}" target="_blank">
                        <img class="card-img-top" src="{{ asset('storage/view/'.$view['view_image'] ) }}">
                       
                        @if (isset($view->title))
                        <p class="view-text col-12">{{ Str::limit($view->title,20) }}</p>
                        @else
                        <span></span>
                        @endif
                    </a>
                    @endforeach
                </div>
                
                <!-- 風景一覧をもっとみる -->
                @if(isset($view->id))
                <a class="d-flex justify-content-center mt-3 rect" type="button" href="{{ url('article/view') }}">
                    <img class="more-btn" src="/assets/images/more_2.png">
                </a>
                <!-- 未投稿時 -->
                @else
                <div class="null-data">投稿はまだありません。</div>
                <div class="d-flex justify-content-center mr-5 post-btn">
                    <a href="{{ url('/user/post/view') }}" type="button" class="main-btn d-inline-block">風景・写真<br>を投稿する</a>
                </div>
                @endif
            </div>
            
@endsection

@section('footer')

