@extends('layouts.formLayout')

@section('title', '記事・日記投稿ページ')

@section('content')
    
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('ArticleController@create') }}" method="POST" name="article-post" class="form-box" enctype="multipart/form-data">
                <h3 class="form-title mb-4 mt-3">記事・日記を投稿する</h3>
                
                <!-- タイトル -->
                <div class="mb-4">
                    <label class="form-label">{{ __('message.title') }}</label>
                        <span class="text-danger small">※必須（最大50文字）</span>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autofocus="">
                
                    <!-- タイトルエラー表示 -->
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- カテゴリーボックス -->
                <div class="form-group">
                    <label class="form-label">{{ __('message.category') }}</label>
                    <span class="text-danger small">※必須</span>
                    <select class="form-control col-5 category-form" name="category">
                        <option>気仙沼の遊ぶ</option>
                        <option>気仙沼の食べる</option>
                        <option>気仙沼の生活</option>
                    </select>
                </div>

                <!-- 記事本文 -->
                <div class="form-group">
                    <label class="form-label">{{ __('message.Article body') }}</label>
                    <span class="text-danger small">※必須（最大500文字）</span>
                    <textarea rows="30" class="form-control @error('body') is-invalid @enderror" name="body" autofocus="">{{ old('body') }}</textarea>
                
                    <!-- 本文エラー表示 -->
                    @error('body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <!-- メイン画像 -->
                <div class="mb-5">
                    <label class="form-label mb-3">{{ __('message.Main image') }}</label>
                    <span class="text-danger small">※必須</span>
                    <input type="file" id="edit-article-image" class="form-control-file @error('main_image') is-invalid @enderror" name="main_image">
                
                    <!-- 画像選択エラー -->
                    @error('main_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <button type="button" id="cancel-article-main" class="mt-2" onclick="this.form.elements['main_image'].value=''">画像取り消し</button>
                    <!-- ファイル画像を表示 -->
                    <img src="" id="article-preview" class="img-responsive">
                </div>

                <!-- イメージ解説文 -->
                <div class="mb-2">
                    <label class="form-label">画像解説</label>
                    <span class="text-secondary small">※任意（最大30文字）</span>
                    <input type="text" class="form-control @error('image_text') is-invalid @enderror" name="image_text" value="{{ old('image_text') }}" placeholder="画像の下に文字を入れられます" autofocus="">
                    
                    @error('image_text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <!-- サブ画像 -->
                <div class="mb-2">
                    <div class="p-3">
                        <label class="form-label">{{ __('message.Sub image') }}(最大４枚まで)</label>
                        <span class="text-secondary small">※任意</span>
                        
                        <!-- サブ画像1 -->
                        <input type="file" id="edit-sub1-image" class="form-control-file @error('sub_image_1') is-invalid @enderror" name="sub_image_1">
                        <!-- エラー表示 -->
                        @error('sub_image_1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="button" id="cancel-article-sub1" class="mt-1" onclick="this.form.elements['sub_image_1'].value=''">取り消し</button>
                        <!-- ファイル画像を表示 -->
                        <img src="" id="sub1-preview" class="sub-responsive">
                        
                        <!-- サブ画像2 -->
                        <input type="file" id="edit-sub2-image" class="form-control-file @error('sub_image_2') is-invalid @enderror" name="sub_image_2">
                        <!-- 画像拡張子エラー -->
                        @error('sub_image_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="button" id="cancel-article-sub2" class="mt-1" onclick="this.form.elements['sub_image_2'].value=''">取り消し</button>
                        <!-- ファイル画像を表示 -->
                        <img src="" id="sub2-preview" class="sub-responsive">
                        
                        <!-- サブ画像3 -->
                        <input type="file" id="edit-sub3-image" class="form-control-file @error('sub_image_3') is-invalid @enderror" name="sub_image_3">
                        @error('sub_image_3')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="button" id="cancel-article-sub3" class="mt-1" onclick="this.form.elements['sub_image_3'].value=''">取り消し</button>
                        <!-- ファイル画像を表示 -->
                        <img src="" id="sub3-preview" class="sub-responsive">
                        
                        <!-- サブ画像4 -->
                        <input type="file" id="edit-sub4-image" class="form-control-file @error('sub_image_4') is-invalid @enderror" name="sub_image_4">
                        @error('sub_image_4')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="button" id="cancel-article-sub4" class="mt-1" onclick="this.form.elements['sub_image_4'].value=''">取り消し</button>
                        <!-- ファイル画像を表示 -->
                        <img src="" id="sub4-preview" class="sub-responsive">
                    </div>
                </div>

                <!-- リンクURL -->
                <div class="mb-2">
                    <label class="form-label">外部URL</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="url" class="form-control" name="link_url" {{ old('link_url') }} placeholder="リンク先URLがありましたらこちらに入力してください" autofocus="">
                </div>

                <!-- 文末メッセージ -->
                <div class="mb-4">
                    <label class="form-label">文末メッセージ</label>
                    <span class="text-secondary small">※任意（最大50文字）</span>
                    <input type="text" class="form-control @error('link_text') is-invalid @enderror" name="link_text" {{ old('link_text') }} placeholder="文末にメッセージを入力できます" autofocus="">
                
                    @error('link_text')
                    <span class="invalid-feedback" role="alert">
                        <strong>入力できる最大文字数は50文字以下です</strong>
                    </span>
                    @enderror
                </div>
                
                <!-- ユーザーIDを登録 -->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                
                <!-- 登録ボタン -->
                <div class="text-center">
                    <button type="submit" class="privacy-btn my-5 p-2 col-5">プライバシーポリシー<br>に同意して投稿する</button>
                    {{ csrf_field() }}
                </div>

                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>

            </form>
        </div>
    </div>

@endsection