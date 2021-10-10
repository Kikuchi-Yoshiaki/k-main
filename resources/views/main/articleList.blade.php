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
                @foreach ($articles as $article)
                <div class="card article-index-card mb-3">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">{{ $article->category }}</div>
                    <p class="card-title">{{ $article->title }}</p>
                    <p class="mt-0">{{ $article->created_at->format('Y年m月d日') }}</p>
                    <div class="card-text">{{ $article->body }}</div>
                    <a class="card-link mt-3 mb-1" href="/article/detail/?id={{ $article->id }}">続きを見る</a>
                </div>
                @endforeach
            </div>




            <!-- My写真ランダム表示 -->
            <h3 class="col-lg-9 col-md-9 md-ml-5 col-sm-5 headline-view">投稿中の風景</h3>

            <div class="d-flex flex-wrap view-box">
                
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">title</p>
                </div>
            
            </div>

            <a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/view') }}
            ">風景一覧<br>を見る</a>
        </div>


            

                
            
@endsection

@section('footer')