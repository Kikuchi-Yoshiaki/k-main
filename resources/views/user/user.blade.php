@extends('layouts.mainLayout')

@section('title', 'ユーザーページ')

@section('content')

    <!-- 全体の枠 -->
    <div class="container-fluid">
        <div class="row justify-content-center">

            {{-- 左側コンテンツ --}}
            <div class="col-lg-9 col-md-12">
                
            <!-- MyProfile -->
            <div class="my-profile-box col-sm-8">
                <div class="my-profile-name">{ プロフィール名 }."さん"</div>
                <div class="my-profile-set">
                    <div class="my-profile-img">プロフィール画像：
                        <img src="/assets/images/profile.png" name="profile-image">
                    </div>
                    <div class="profile-mail mt-3 mb-5">"メールアドレス".：{ aaa@aaaaaaaaaaaa }</div>
                    <!--<div class="profile-mail mt-3">"パスワード".：{ xxxxxxxxxxx }</div>-->
                    <a class="post-btn" href="{{ url('/user/edit/profile') }}" type="button">プロフィールを変更する</a>
                </div>
            </div>

            <!--My記事一覧 -->
            <h3 class="col-lg-9 col-md-9 md-ml-5  col-sm-5 headline-top">投稿中の記事</h3>
            
            <div class="d-flex flex-wrap my-article-box">
                <div class="card my-article-card mb-3">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを確認</a>
                    <div class="btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href="{{ url('/user/edit/article') }}">記事を編集</a>
                        <a class="btn btn-danger" href="#">記事を削除</a>
                    </div>
                </div>
                <div class="card my-article-card">
                    <img class="card-img-top" src="/assets/images/yama.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを確認</a>
                    <div class="btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href="{{ url('/user/edit/article') }}">記事を編集</a>
                        <a class="btn btn-danger" href="#">記事を削除</a>
                    </div>
                </div>
                <div class="card my-article-card">
                    <img class="card-img-top" src="/assets/images/cafe1.jpg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを確認</a>
                    <div class="btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href="{{ url('/user/edit/article') }}">記事を編集</a>
                        <a class="btn btn-danger" href="#">記事を削除</a>
                    </div>
                </div>
                <div class="card my-article-card">
                    <img class="card-img-top" src="/assets/images/iwate.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを確認</a>
                    <div class="btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href="{{ url('/user/edit/article') }}">記事を編集</a>
                        <a class="btn btn-danger" href="#">記事を削除</a>
                    </div>
                </div>
                <div class="card my-article-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを確認</a>
                    <div class="btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href="{{ url('/user/post/article') }}">記事を編集</a>
                        <a class="btn btn-danger" href="#">記事を削除</a>
                    </div>
                </div>
                <div class="card my-article-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <div class="news-tag">遊ぶ・観光</div>
                    <p class="card-title">タイトル名</p>
                    <div class="card-text">テキスト</div>
                    <a class="card-link mt-3 mb-5" href="{{ url('/article/detail') }}">続きを確認</a>
                    <div class="btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href="{{ url('/user/post/article') }}">記事を編集</a>
                        <a class="btn btn-danger" href="#">記事を削除</a>
                    </div>
                </div>
            </div>

            <a class="main-btn btn d-block mx-auto mt-3 more d-none p-3" type="button" href="article/index">記事一覧<br>を見る</a>



            <!-- My写真一覧 -->
            <h3 class="col-lg-9 col-md-9 md-ml-5 col-sm-5 headline-view">投稿中の風景</h3>

            <div class="d-flex flex-wrap view-box">
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                    <a href="#">画像を削除</a>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                    <a href="#">画像を削除</a>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                    <a href="#">画像を削除</a>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                    <a href="#">画像を削除</a>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
                <div class="card photo-card">
                    <img class="card-img-top" src="/assets/images/hanabi.jpeg">
                    <p class="caro-title">タイトル名</p>
                </div>
            </div>
            <a class="main-btn btn d-block mx-auto mt-3 p-3" type="button" href="{{ url('article/view') }}
            ">風景一覧<br>を見る</a>
        </div>


            
@endsection

@section('footer')


