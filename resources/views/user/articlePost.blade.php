@extends('layouts.formLayout')

@section('title', '記事・日記投稿ページ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('ArticleController@create') }}" method="POST" name="article-post" class="user-box" enctype="multipart/form-data">
                <h3 class="form-title mb-4 mt-3">記事・日記を投稿する</h3>
                
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
                    <input type="text" class="form-control" name="user_id" autofocus="">
                </div>
                
                <!-- タイトル -->
                <div class="mb-4">
                    <label class="form-label">{{ __('message.title') }}</label>
                        <span class="text-danger small">※必須</span>
                    <input type="text" class="form-control" name="title" autofocus="">
                </div>
                
                <!-- カテゴリーボックス -->
                <div class="form-group">
                    <label class="form-label">{{ __('message.category') }}</label>
                    <span class="text-danger small">※必須</span>
                    <select class="form-control col-5" name="category">
                        <option>気仙沼の遊ぶ</option>
                        <option>気仙沼の食べる</option>
                        <option>気仙沼の生活</option>
                    </select>
                </div>

                <!-- 記事本文 -->
                <div class="form-group">
                    <label class="form-label">{{ __('message.Article body') }}</label>
                    <span class="text-danger small">※必須</span>
                    <textarea rows="30" class="form-control" name="body" placeholder="〇〇文字以内で入力してください" autofocus=""></textarea>
                </div>
                
                <!-- メイン画像 -->
                <div class="mb-5">
                    <label class="form-label mb-3">{{ __('message.Main image') }}</label>
                    <span class="text-danger small">※必須</span>
                    <input type="file" class="form-control-file" name="main_image">
                    <button type="button" class="mt-2" onclick="this.form.elements['main_image'].value=''">画像取り消し</button>
                </div>

                <!-- イメージ解説文 -->
                <div class="mb-2">
                    <label class="form-label">画像解説</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="text" class="form-control" name="image_text" placeholder="画像の下に文章を入れることができます" autofocus="">
                </div>

                <!-- サブ画像 -->
                <div class="sub-image-contaiter mb-2">
                    <div class="sub-image-body p-3">
                        <label class="form-label">{{ __('message.Sub image') }}(最大４枚まで追加できます)</label>
                        <span class="text-secondary small">※任意</span>
                        <input type="file" class="form-control-file" name="sub_image_1">
                        <button type="button" class="mt-1 mb-3" onclick="this.form.elements['sub_image_1'].value=''">取り消し</button>
                        <input type="file" class="form-control-file" name="sub_image_2">
                        <button type="button" class="mt-1 mb-3" onclick="this.form.elements['sub_image_2'].value=''">取り消し</button>
                        <input type="file" class="form-control-file" name="sub_image_3">
                        <button type="button" class="mt-1 mb-3" onclick="this.form.elements['sub_image_3'].value=''">取り消し</button>
                        <input type="file" class="form-control-file" name="sub_image_4">
                        <button type="button" class="mt-1 mb-3" onclick="this.form.elements['sub_image_4'].value=''">取り消し</button>
                    </div>
                </div>

                <!-- リンクURL -->
                <div class="mb-2">
                    <label class="form-label">外部URL</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="url" class="form-control" name="link_url" placeholder="リンク先URLがありましたらこちらに入力してください" autofocus="">
                </div>

                <!-- リンクURL -->
                <div class="mb-4">
                    <label class="form-label">URL説明文</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="text" class="form-control" name="link_text" placeholder="文章の最後にコメントをどうぞ" autofocus="">
                </div>

                <!-- プライバシーポリシー -->
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        ※ プライバシーポリシーに同意します。
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