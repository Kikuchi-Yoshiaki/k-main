@extends('layouts.mainLayout')

@section('title', '風景一覧')

@section('content')

    <div class="container-fluid">
        <div class="row">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">

                {{-- 風景写真見出し --}}
                <div class="mt-4 mb-2 headline d-flex justify-content-center">
                    <h3 class="headline-view">風景写真一覧</h3>
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
                        <div class="view-user-name">{{ $view->user->name }}さん</div>
                    </a>
                    @endforeach
                </div>

                {{--ページネーション--}}
                <div class="d-flex justify-content-center mt-5">{{ $views->links() }}</div>

                <!-- まだ何も無い時 -->
                @if(!isset($view->id))
                <div class="null-data">投稿はまだありません。</div>
                <div class="d-flex justify-content-center mr-5 post-btn null-btn">
                    <a href="{{ url('/user/post/view') }}" type="button" class="main-btn d-inline-block">風景・写真<br>を投稿する</a>
                </div>
                @endif
                
                
                {{-- 記事２件をランダム表示 --}}
                <div class="mt-4 mb-2 d-flex justify-content-center">
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
                            <a class="d-inline" href="/user?id={{ $article->user->id }}">
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
                @if(isset($article->id))
                <a class="d-flex justify-content-center mt-3 rect" type="button" href="{{ url('article/index') }}">
                    <img class="more-btn" src="/assets/images/more_2.png">
                </a>
                <!-- 未投稿時 -->
                @else
                <div class="null-data">投稿はまだありません。</div>
                <div class="d-flex justify-content-center mr-5 post-btn">
                    <a href="{{ url('/user/post/article') }}" type="button" class="main-btn d-inline-block">記事・日記<br>を投稿する</a>
                </div>
                @endif
            </div>
            
            
@endsection

@section('footer')