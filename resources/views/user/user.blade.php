@extends('layouts.mainLayout')

@section('title', $user->name.'さんのページ')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">
                
            {{-- MyProfile --}}
            <div class="my-profile-box d-flex flex-column">
                
                <div class="my-profile-img d-flex justify-content-center">
                    <!-- プロフィールイメージ・無ければNoImage -->
                    @if(isset($user->profile_image))
                    <img src="{{ asset('storage/profile/'.$user['profile_image'] ) }}" name="profile-image">
                    @else
                    <img src="/assets/images/noimage.png" name="no-profile-image">
                    @endif
                    <!-- プロフィールネーム -->
                    <div class="my-profile-name d-flex align-items-center">{{ $user->name }}さんのページ</div>
                </div>
                <!-- プロフィール編集画面へ移動 -->
                <div class="d-flex justify-content-end mr-5">
                @if(Auth::id() === $user->id)
                <a class="btn btn-sm btn-outline-primary mt-3 mr-5" href="/user/edit/profile?id={{ $user->id }}" type="button">プロフィールを変更する</a>
                @endif
                </div>
            </div>

            <div class="mt-5 headline col-8 offset-2">
                <h3 class="headline-top text-center">{{ $user->name }}さん<br>の記事一覧</h3>
            </div>
            
            <div class="d-flex flex-wrap justify-content-around mb-5">
                @foreach ($articles as $article)
                <div class="card col-lg-5 col-md-10 next-news">
                    <img class="card-img-next" src="{{ asset('storage/article/'.$article['main_image'] ) }}">
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
                    <div class="card-body">
                        <h4 class="card-title next-title">{{ $article->title }}</h4>
                        <p class="card-text next-text">{{ $article->body }}</p>
                        <a class="float-right" href="/article/detail/?id={{ $article->id }}">続きを読む</a>
                    </div>
                    <div class="next-news-date d-inline ml-3 mb-3"><i class="far fa-clock mr-2"></i>{{ $article->updated_at->format('Y年m月d日') }}</div>
                    <div class="btn-group-sm d-flex justify-content-around mb-2" role="group" aria-label="Basic example">
                        <!-- 記事編集画面に移動 -->
                        @if(Auth::id() === $user->id)
                        <a class="btn btn-primary" href="/user/edit/article?id={{ $article->id }}">記事を編集</a>
                        <!-- 記事削除画面に移動 -->
                        <a class="btn btn-danger" href="/user/delete/article?id={{ $article->id }}">記事を削除</a>
                            {{ csrf_field() }}
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            
            {{--ページネーション--}}
            {{--<div class="d-flex justify-content-center mt-5">{{ $articles->links() }}</div>--}}

            @if(!isset($article->id))
            <div class="user-article-box col-8 text-center mb-5">
                <h4 class="form-title mt-2">{{ $user->name }}さんの<br>投稿はまだありません</h4>
                <div class="post-btn my-4 mr-5">
                    <a href="{{ url('/user/post/article') }}" type="button" class="main-btn d-inline-block">記事・日記<br>を投稿する</a>
                </div>
            </div>
            @endif
            
            
            <!-- 全体の記事一覧画面に移動 -->
            <!--<a class="main-btn btn d-block mx-auto mt-3 more d-none p-3" type="button" href="article/index">記事一覧<br>を見る</a>-->
            <a class="d-flex justify-content-center mt-3 rect" type="button" href="{{ url('article/index') }}">
                <img class="more-btn" src="/assets/images/more_3.png">
            </a>


            {{-- My写真見出し --}}
            <div class="user-headline-view col-8 offset-2">
                <h3 class="headline-view  text-center">{{ $user->name }}さん<br>の風景一覧</h3>
            </div>
            
            <div class="d-flex flex-wrap justify-content-center view-index">
                
                
                @foreach ($views as $view)
                <div class="card view-list mb-1 text-center" href="{{ asset('storage/view/'.$view['view_image']) }}" target="_blank">
                    <img class="card-img-top" src="{{ asset('storage/view/'.$view['view_image'] ) }}">
                    @if (isset($view->title))
                    <p class="card-title user-view-title">{{ Str::limit($view->title,20) }}</p>
                    @else
                    <p></p>
                    @endif
                    <div class="btn-group-sm d-flex justify-content-around mb-2" role="group" aria-label="Basic example">
                        <!-- 写真を削除する -->
                        @if(Auth::id() === $user->id)
                        <a class="btn btn-danger" href="/user/delete/view?id={{ $view->id }}">削除</a>
                            {{ csrf_field() }}
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            
            @if(!isset($view->id))    
            <div class="user-view-box col-8 text-center mb-5">
                <h4 class="form-title mt-2">{{ $user->name }}さんの<br>投稿はまだありません</h4>
                <div class="post-btn my-4 mr-5">
                    <a href="{{ url('/user/post/view') }}" type="button" class="main-btn d-inline-block">風景・写真<br>を投稿する</a>
                </div>
            </div>
            @endif
            
            <!-- 全体の記事一覧画面に移動 -->
            <!--<a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/view') }}">風景一覧<br>を見る</a>-->
            <a class="d-flex justify-content-center mt-3 rect" type="button" href="{{ url('article/view') }}">
                <img class="more-btn" src="/assets/images/more_4.png">
            </a>
        </div>

@endsection

@section('footer')