@extends('layouts.formLayout')

@section('title', '記事・日記投稿ページ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('ArticleController@create') }}" method="POST" name="article-post" class="user-box" enctype="multipart/form-data">
                <h3 class="form-title mb-4 mt-3">記事・日記を投稿する</h3>
                
                <!-- リレーション終わったら消す -->
                <div class="mb-5 mt-3">
                    <label class="form-label mr-1">user_id(リレーションしたら消す)</label>
                    <span class="text-primary small">※必須</span>
                    <input type="text" class="form-control" name="user_id" required="" autofocus="">
                </div>
                
                <!-- タイトル -->
                <div class="mb-4">
                    <label class="form-label">タイトル</label>
                        <span class="text-danger small">※必須</span>
                    <input type="text" class="form-control" placeholder="タイトル名" name="title" required="" autofocus="">
                </div>
                
                <!-- カテゴリーボックス -->
                <div class="form-group">
                    <label class="form-label" id="article-category">カテゴリー</label>
                    <span class="text-danger small">※必須</span>
                    <select class="form-control col-5" name="category" value="">
                        <option>気仙沼の遊ぶ</option>
                        <option>気仙沼の食べる</option>
                        <option>気仙沼の生活</option>
                    </select>
                </div>

                <!-- 記事本文 -->
                <div class="form-group">
                    <label class="form-label" id="article-body">記事本文</label>
                    <span class="text-danger small">※必須</span>
                    <textarea rows="30" class="form-control" for="article-body" placeholder="〇〇文字以内で入力してください"></textarea>
                </div>
                
                <!-- メイン画像 -->
                <div class="mb-2">
                    <label class="form-label mb-2">メイン画像</label>
                    <span class="text-danger small">※必須</span>
                    <input type="file" class="form-control-file" name="main-image">
                </div>

                <!-- イメージ解説文 -->
                <div class="mb-2">
                    <label class="form-label" id="image-text">画像解説</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="text" class="form-control" for="image-text" placeholder="画像の下に文章を入れることができます" aria-describedby="" required="" autofocus="">
                </div>

                <!-- サブ画像 -->
                <div class="sub-image-contaiter mb-2">
                    <div class="sub-image-body p-3">
                        <label class="form-label">サブ画像(最大４枚まで追加できます)</label>
                        <span class="text-secondary small">※任意</span>
                        <input type="file" class="form-control-file mb-1" name="sub-image1">
                        <input type="file" class="form-control-file mb-1" name="sub-image2">
                        <input type="file" class="form-control-file mb-1" name="sub-image3">
                        <input type="file" class="form-control-file mb-1" name="sub-image4">
                    </div>
                </div>

                <!-- リンクURL -->
                <div class="mb-2">
                    <label class="form-label" id="link-url">外部URL</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="url" class="form-control" for="link-url" placeholder="リンク先URLがありましたらこちらに入力してください" aria-describedby="" required="" autofocus="">
                </div>

                <!-- リンクURL -->
                <div class="mb-4">
                    <label class="form-label" id="link-text">URL説明文</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="text" class="form-control" for="link-text" placeholder="文章の最後にコメントをどうぞ" aria-describedby="" required="" autofocus="">
                </div>

                <!-- プライバシーポリシー -->
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        ※ プライバシーポリシーに同意します。
                    </label>
                </div>

                <!-- 登録ボタン -->
                <input type="submit" class="btn btn-block btn-primary form-button mt-5 col-3" value="プレビュー画面へ">
                {{ csrf_field() }}

                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップ画面に戻る</a>

            </form>
        </div>
    </div>

@endsection