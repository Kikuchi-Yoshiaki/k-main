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

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
        <link href="{{ asset('css/form.css') }}" rel="stylesheet">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/7807b4c945.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div id="app">
            <!-- ヘッダー全体 -->
            <nav class="navbar navbar-expand-md top-bar">
                <div class="container">
                    <a class="navbar-brand form-main-title" href="{{ url('/') }}">メインロゴ</a>
                    <!-- ハンバーガー -->
                    <button class="navbar-toggler button-outline" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <!-- 右側のメニュー -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle top-nav profile-name" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">プロフィール名</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('user') }}">マイページへ</a>
                                    <a class="dropdown-item" href="{{ url('user/edit/profile') }}">プロフィールを変更</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">ログアウト</a>
                                </div>
                            </li>
                          <!-- ドロップダウン -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle top-nav" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              投稿する
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('/user/post/article') }}">記事・日記を投稿</a>
                                    <a class="dropdown-item" href="{{ url('/user/post/view') }}">風景・写真を投稿</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/forms/contact">お問い合わせ</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link top-nav" href="{{ url('/forms/login') }}">ログイン</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link top-nav" href="{{ url('/forms/signup') }}">新規登録</a>
                            </li>
                            <!-- 画面サイズで表示される部分 -->
                            <div class="dropdown-divider"></div>
                            <li class="d-block d-md-none">
                                <div class="exp-title">概要解説</div>
                                <p>　この〇〇〇では気仙沼の観光や風景・グルメ・生活など情報を自由に投稿して共有できるWebサイトです。<br>　今、気仙沼市は大島大橋やかなえ大橋の開通、おかえりモネの放送などで盛り上がっておりますが、まだまだ知らない魅力が数多くあります。<br>　気仙沼や周辺地域の魅力を自由に発信してみませんか？<br><br>〇〇〇管理人</p>
                            </li>  
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <main>
            @yield('content')
        </main>

        <footer class="container-fluid">
            @yield('footer')
            <div class="text-center text-white copywriter">©️ 2021 Y-Kikuchi</div>
        </footer>           
    </body>
</html>