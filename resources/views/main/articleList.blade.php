@extends('layouts.mainLayout')

@section('title', '記事一覧')

@section('content')

    <!-- 全体の枠 -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">

            <!-- カテゴリーボックス -->
            <div class="form-group d-flex justify-content-center mt-3 mb-4 p-3">
                <a href="{{ url('article/index') }}" class="main-btn btn d-block mx-auto mt-3 all-category"><span>全てのカテゴリーをみる</span></a>
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
                            <div class="top-profile d-inline">
                                <img class="profile-img" src="/assets/images/profile.png">
                                <div class="next-news-profile d-inline">プロフィール名さん</div>
                            </div>
                            <div class="next-news-date d-inline"><i class="far fa-calendar-alt mr-2"></i>{{ $article->created_at->format('Y年m月d日') }}</div>
                            <p class="card-text next-text">{{ $article->body }}</p>
                            <a class="float-right" href="/article/detail/?id={{ $article->id }}">続きを読む</a>
                        </div>
                    </div>
                    @endforeach
                </div>




            <!-- My写真ランダム表示 -->
            <h3 class="col-lg-9 col-md-9 md-ml-5 col-sm-5 headline-view">投稿中の風景</h3>

            <div class="d-flex flex-wrap justify-content-center view-index">
                @foreach ($views as $view)
                <a class="card view-list mb-1" href="{{ asset('storage/view/'.$view['view_image'] ) }}" target="_blank">
                    <img class="card-img-top" src="{{ asset('storage/view/'.$view['view_image'] ) }}">
                    @if (isset($view->title))
                    <p class="card-title">{{ Str::limit($view->title,20) }}</p>
                    @else
                    <span></span>
                    @endif
                </a>
                @endforeach
            </div>

            <a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/view') }}
            ">風景一覧<br>を見る</a>
        </div>


            

                
            
@endsection

@section('footer')