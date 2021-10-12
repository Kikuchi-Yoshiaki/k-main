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
                    @foreach ($views as $view)
                    <a class="card view-list" href="{{ asset('storage/view/'.$view['view_image'] ) }}" target="_blank">
                        <img class="card-img-top" src="{{ asset('storage/view/'.$view['view_image'] ) }}">
                        <p class="card-title">{{ $view->title }}</p>
                    </a>
                    @endforeach
                </div>


                <!-- 記事一覧ランダム -->
                <h3 class="col-lg-9 col-md-9 md-ml-5  col-sm-5 headline-top">記事・日記TOPIX</h3>
            
                <div class="d-flex flex-wrap justify-content-around">
                    @foreach ($articles as $article)
                    <div class="card article-index-card mb-3">
                        <img class="card-img-top" src="/assets/images/hanabi.jpeg">
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
                        <p class="card-title">{{ $article->title }}</p>
                        <div class="card-text">{{ $article->body }}</div>
                        <a class="card-link mt-3 mb-1" href="/article/detail/?id={{ $article->id }}">続きを見る</a>
                    </div>
                    @endforeach
                </div>
              
                <a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/index') }}">記事一覧<br>を見る</a>
            </div>

            
@endsection

@section('footer')

