@extends('layouts.formLayout')

@section('title', '風景写真投稿ページ')

@section('content')

    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('ViewController@create') }}" method="POST" name="view-post" class="user-box" enctype="multipart/form-data">
                <h3 class="form-title mb-4 mt-3">風景・画像を投稿する</h3>
                
                <!-- エラーチェック -->
                @if (count($errors) > 0)
                <ul class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $e)
                    <li class="ml-3">{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                
                <!-- リレーション終わったら消す -->
                <div class="mb-5 mt-3">
                    <label class="form-label mr-1">user_id(リレーションしたら消す)</label>
                    <span class="text-primary small">※必須</span>
                    <input type="text" class="form-control" name="user_id" required="" autofocus="">
                </div>
                
                <!-- 画像選択 -->
                <div class="mb-4">
                    <label class="form-label mb-2 mr-1">画像選択</label>
                    <span class="text-danger small">※必須</span>
                    <input type="file" class="form-control-file" name="view_image">
                    <button type="button" class="mt-2" onclick="this.form.elements['view_image'].value=''">画像取り消し</button>
                </div>

                <!-- タイトル -->
                <div class="mb-5 mt-3">
                    <label class="form-label mr-1">画像のタイトル名</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="text" class="form-control" name="title" placeholder="写真のタイトル" autofocus="">
                </div>
                
                <!-- プライバシーポリシー -->
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        ※ プライバシーポリシーに同意します
                    </label>
                </div>

                <!-- 登録ボタン -->
                <input type="submit" class="btn btn-block btn-primary form-button mt-5 col-3" value="投稿する">
                {{ csrf_field() }}

                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>

            </form>
        </div>
    </div>

@endsection