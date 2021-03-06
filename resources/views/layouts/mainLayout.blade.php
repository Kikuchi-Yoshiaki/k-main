<!DOCTYPE html>
<html lang="ja">
    <head>
        <!--  -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf_token" content="{{ csrf_token() }}">
        
        <!-- タイトル -->
        <title>@yield('title')</title>
        <!-- favicon -->
        <link rel="icon" type="image/x-icon"  href="/assets/images/k-fav.png">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/   css">
        <!-- 見出し用フォント -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">

        <!-- CSS読み込み -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/article.css') }}" rel="stylesheet">
        <link href="{{ asset('css/user.css') }}" rel="stylesheet">
        
        <!-- スクリプトの読み込み -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/7807b4c945.js" crossorigin="anonymous"></script>
    </head>

    <body>
        {{-- アプリ全体 --}}
        <div id="app">
        
            {{-- ヘッダー --}}
            <nav class="navbar navbar-expand-md top-bar">
                <div class="container">
                
                    <!-- ハンバーガーメニュー -->
                    <button class="navbar-toggler button-outline" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    
                    <!-- 右側のメニューバー -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <!-- 非ログイン時は新規登録・ログイン時はユーザー名を表示 -->
                            @guest    
                            <li class="nav-item">
                                <a class="nav-link top-nav" href="{{ url('/register') }}">{{ __('message.Register') }}</a>
                            </li>
                            @else
                            <li>
                                <a class="nav-link top-nav" id="navbarDropdownMenuLink" href="/user?id={{ Auth::user()->id }}" role="button"  aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}さんのページに移動</a>
                            </li>
                            @endguest
                            
                            <!-- ログイン・ログアウト切り替え -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link top-nav" href="{{ url('/login') }}">{{ __('message.Login') }}</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link top-nav" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('message.Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @endguest
                             
                            <!-- 作品投稿・お問い合わせドロップダウン -->
                            <li class="nav-item dropdown post-btn">
                                <a class="nav-link dropdown-toggle top-nav" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    投稿する
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('/user/post/article') }}">記事・日記を投稿</a>
                                    <a class="dropdown-item" href="{{ url('/user/post/view') }}">風景・写真を投稿</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/forms/contact">お問い合わせ</a>
                                </div>
                            </li>
                            
                            
                            <!-- ハンバーガーメニューでのみ表示される部分 -->
                            <div class="dropdown-divider"></div>
                            <li class="d-block d-md-none overview">
                                <div>概要説明</div>
                                <p>　気仙沼うぉーかーでは気仙沼の観光や風景・グルメ・生活など情報を自由に投稿して共有できるWebサイトです。<br>　今、気仙沼市は大島大橋やかなえ大橋の開通、おかえりモネの放送などで盛り上がっておりますが、まだまだ知らない魅力が数多くあります。<br>　気仙沼や周辺地域の魅力を自由に発信してみませんか？<br><br>気仙沼うぉーかー管理人</p>
                            </li>  
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
 
            <!-- タイトル部分 -->
            <div id="carousel-example" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000" data-pause="false">
	            <!-- カルーセル画像はCSSで指定 -->
	            <div class="carousel-inner">
		            <div class="carousel-item active">
			            <a class="container-fluid title-bar-1" href="{{ url('/') }}">
                            <img src="/assets/images/k-logo.png" class="k-logo">
                        </a>
		            </div>
		            <div class="carousel-item">
			           <a class="container-fluid title-bar-2" href="{{ url('/') }}">
                            <img src="/assets/images/k-logo.png" class="k-logo">
                        </a>
		            </div>
		            <div class="carousel-item">
			            <a class="container-fluid title-bar-3" href="{{ url('/') }}">
                            <img src="/assets/images/k-logo.png" class="k-logo">
                        </a>
		            </div>
		            <div class="carousel-item">
			            <a class="container-fluid title-bar-4" href="{{ url('/') }}">
                            <img src="/assets/images/k-logo.png" class="k-logo">
                        </a>
		            </div>
		            <div class="carousel-item">
			            <a class="container-fluid title-bar-5" href="{{ url('/') }}">
                            <img src="/assets/images/k-logo.png" class="k-logo">
                        </a>
		            </div>
	            </div>
            </div>

            <!-- カテゴリー欄 -->
            <div class="container-fluid category">
                <div class="row">
                    <div class="category-tags col-6 col-md-3">
                        <a class="nav-link category-name k-job" href="{{ url('article/index?category=enjoy') }}">気仙沼の<span>遊ぶ</span></a>
                    </div>
                    <div class="category-tags col-6 col-md-3">
                        <a class="nav-link category-name k-food" href="{{ url('article/index?category=food') }}">気仙沼の<span>食べる<span></span></a>
                    </div>
                    <div class="category-tags col-6 col-md-3">
                        <a class="nav-link category-name k-life" href="{{ url('article/index?category=life') }}">気仙沼の<span>生活</span></a>
                    </div>
                    <div class="category-tags col-6 col-md-3">
                        <a class="nav-link category-name k-view" href="{{ url('article/view') }}">気仙沼の<span>風景</span></a>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- メインコンテンツ --}}
        <main class="d-flex justify-content-center">
            @yield('content')
            {{-- 右側バー --}}
            <div class="col-lg-3 right-contents col-md-6">
                
                <!-- 投稿ボタン -->
                <div class="d-none d-lg-block post-btn">
                    <a href="{{ url('/user/post/article') }}" type="button" class="main-btn d-inline-block">記事・日記<br>を投稿する</a>
                    <a href="{{ url('/user/post/view') }}" type="button" class="main-btn d-inline-block">風景・写真<br>を投稿する</a>
                </div>

                <!-- 概要説明欄 -->
                <div class="explanation d-none d-lg-block right-contents">
                    <span class="exp-title">概要解説</span>
                    <p class="mt-2">　気仙沼うぉーかーでは気仙沼の観光や風景・グルメ・生活など情報を自由に投稿して共有できるWebサイトです。
                    <br>　今、気仙沼市は大島大橋やかなえ大橋の開通、おかえりモネの放送などで盛り上がっておりますが、まだまだ知らない魅力が数多くあります。
                    <br>　気仙沼や周辺地域の魅力を自由に発信してみませんか？</p>
                    <p class="text-right">気仙沼うぉーかー管理人</p>
                </div>

                <!-- Twitter -->
                <div class="twitter">
                    <span class="twitter-title">Twitter</span>
                    <a class="twitter-timeline" href="https://twitter.com/numa_walker?   ref_src=twsrc%5Etfw" data-tweet-limit="5">Tweets by numa_walker</a> <script async   src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
</div>
            
            <div id="page_top"><a href="#"></a></div>
        </main>


        {{-- フッター --}}
        <footer class="container-fluid">
            @yield('footer')
            <div class="row text-center footer">
                <div class="copywriter col-sm-12 col-md-4">©️ 2021 Kesennuma-Walker</div>
                <div class="col-sm-12 col-md-4">
                    <a href="/privacy-policy" class="copywriter">プライバシーポリシー</a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="/forms/contact" class="copywriter">お問い合わせ</a>
                </div>
            </div>
        </footer>
        {{-- jQueryの読み込み --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        {{-- JavaScript --}}
        <script src="{{ secure_asset('js/main.js') }}"></script>
    </body>
</html>