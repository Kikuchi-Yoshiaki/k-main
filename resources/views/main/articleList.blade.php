@extends('layouts.mainLayout')

@section('title', '記事一覧')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">

            {{-- 最新記事見出し --}}
            <div class="mt-5 d-flex justify-content-center">
                <h3 class="headline-top">記事一覧</h3>
            </div>
            <!-- 全てのカテゴリーをみる -->
            <div class="form-group  d-flex justify-content-center mb-4 p-3 mr-5">
                <a href="{{ url('article/index') }}" class="main-btn btn d-block mx-auto mt-3 all-category"><span>全てのカテゴリーをみる</span></a>
            </div>
            
            <!-- 記事を一覧で表示 -->
            <div class="d-flex flex-wrap justify-content-around mb-5">
                    @foreach ($articles as $article)
                    <div class="card col-lg-5 col-md-10 next-news">
                        <!-- 記事のメイン画像 -->
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
                            <div class="next-news-date d-flex justify-content-end mr-3"><i class="far fa-clock mr-2 mt-1"></i>{{ $article->created_at->format('Y年m月d日') }}</div>
                            <h4 class="card-title next-title">{{ Str::limit($article->title,32) }}</h4>
                            <!-- 投稿者名 -->
                            <a class="top-profile d-inline" href="/user?id={{ $article->user->id }}">
                                @if (isset($article->user->profile_image))
                                <img class="next-profile-img" src="{{ asset('storage/profile/'.$article->user['profile_image'] ) }}">
                                @else
                                <img src="/assets/images/noimage.png" name="no-profile-image" class="next-profile-img">
                                @endif
                                <div class="next-news-profile d-inline">{{ $article->user->name }}さん</div>
                            </a>
                            <!-- 投稿記事 -->
                            <p class="card-text next-text">{{ $article->body }}</p>
                            <a class="float-right" href="/article/detail/?id={{ $article->id }}">続きを読む</a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                {{--ページネーション--}}
                <div class="d-flex justify-content-center mt-5">{{ $articles->links() }}</div>
                
                <!-- 未投稿時 -->
                @if(!isset($article->id))
                <div class="null-data">投稿はまだありません。</div>
                <div class="d-flex justify-content-center mr-5 post-btn null-btn">
                    <a href="{{ url('/user/post/article') }}" type="button" class="main-btn d-inline-block">記事・日記<br>を投稿する</a>
                </div>
                @endif
             
            {{-- My写真ランダム表示 --}}
            <div class="mt-5 headline col-10 offset-1">
                <h3 class="headline-view">風景写真TOPIX</h3>
            </div>
            <!-- 風景写真本体 -->
            <div class="d-flex flex-wrap justify-content-center view-index">
                    @foreach ($views as $view)
                    <a class="card view-list mb-1 text-center" href="{{ asset('storage/view/'.$view['view_image'] ) }}" target="_blank">
                        <img class="card-img-top" src="{{ asset('storage/view/'.$view['view_image'] ) }}">
                       
                        @if (isset($view->title))
                        <p class="view-text col-12">{{ Str::limit($view->title,20) }}</p>
                        @else
                        <span></span>
                        @endif
                        <div class="view-user-name">{{ $view->user->name }}さん</div>
                    </a>
                    @endforeach
                </div>
            <!-- 風景一覧を見る -->
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