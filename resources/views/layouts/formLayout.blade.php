<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf_token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/   css">

        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon"  href="/assets/images/k-fav.png">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
        <link href="{{ asset('css/form.css') }}" rel="stylesheet">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/7807b4c945.js" crossorigin="anonymous"></script>
    
    </head>

    <body>
        {{-- アプリ全体 --}}
        <div id="app">
        
            {{-- ヘッダー --}}
            <nav class="navbar navbar-expand-md top-bar">
                <div class="container">
                
                    <!-- 左上タイトル -->
                    <a class="navbar-brand form-main-title" href="{{ url('/') }}"><img src="/assets/images/kf-logo.png" width="100" height="40"></a>
                    
                    <!-- ハンバーガーメニュー -->
                    <button class="navbar-toggler button-outline" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    
                    <!-- 右側のメニュー -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            
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
                            
                            <!-- ログイン・ログアウト切り替え -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link top-nav" href="{{ url('/login') }}">{{ __('message.Login') }}</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link top-nav" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('message.Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @endguest
                            
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
                            
                            <!-- ハンバーガーメニューでのみ表示される部分 -->
                            <div class="dropdown-divider"></div>
                            <li class="d-block d-md-none">
                                <div>概要説明</div>
                                <p>　この〇〇〇では気仙沼の観光や風景・グルメ・生活など情報を自由に投稿して共有できるWebサイトです。<br>　今、気仙沼市は大島大橋やかなえ大橋の開通、おかえりモネの放送などで盛り上がっておりますが、まだまだ知らない魅力が数多くあります。<br>　気仙沼や周辺地域の魅力を自由に発信してみませんか？<br><br>〇〇〇管理人</p>
                            </li>  
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        
        {{-- メインコンテンツ --}}
        <main>
            @yield('content')
        </main>


        {{-- フッター --}}
        <footer class="container-fluid">
            @yield('footer')
            <div class="d-flex justify-content-center">
                <a href="/privacy-policy" class="text-white copywriter mr-5">プライバシーポリシー</a>
                <div class="text-white copywriter px-5 c-border">©️ 2021 Y-Kikuchi</div>
                <a href="/forms/contact" class="text-white copywriter ml-5">お問い合わせ</a>
            </div>
        </footer>
        {{-- jQueryの読み込み --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        {{-- JavaScript --}}
        <script src="{{ secure_asset('js/main.js') }}"></script>
    </body>
</html>