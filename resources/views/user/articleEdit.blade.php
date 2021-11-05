@extends('layouts.formLayout')

@section('title', '記事・日記編集ページ')

@section('content')
    
    @if(Auth::id() === $form->user->id)
    <div class="container form-container">
        <div class="wrapper">
            <form action="{{ action('ArticleController@update') }}" method="POST" class="form-box" enctype="multipart/form-data">
                <h3 class="form-title mb-4 mt-3">記事・日記を編集する</h3>
                
                <!-- タイトル -->
                <div class="mb-4">
                    <label class="form-label">{{ __('message.title') }}</label>
                    <span class="text-danger small">※必須（最大50文字）</span>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" aria-describedby="" autofocus="" value="{{ $form->title }}">
                
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
                    <textarea rows="30" class="form-control @error('body') is-invalid @enderror" name="body">{{ $form->body }}</textarea>
                
                    <!-- 本文エラー表示 -->
                    @error('body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <!-- メイン画像 -->
                <div class="mb-2">
                    <label class="form-label mb-2">{{ __('message.Main image') }}</label>
                    <span class="text-danger small">※必須</span>
                    <input type="file" id="update-article-image" class="form-control-file @error('main_image') is-invalid @enderror" name="main_image">
                    
                    <!-- 画像未選択エラー -->
                    @error('main_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <button type="button" id="cancel-edit-article" class="mt-2" onclick="this.form.elements['main_image'].value=''">画像取り消し</button>
                    <!-- ファイル画像を表示 -->
                    <img src="" id="article-update-preview" class="img-responsive">
                </div>

                <!-- イメージ解説文 -->
                <div class="mb-2">
                    <label class="form-label">画像解説</label>
                    <span class="text-secondary small">※任意（最大30文字）</span>
                    <input type="text" class="form-control @error('image_text') is-invalid @enderror" name="image_text" value="{{ $form->image_text }}" placeholder="画像の下に文字を入れられます" aria-describedby="" autofocus="" value="{{ $form->image_text }}">
                
                     @error('image_text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- サブ画像 -->
                <div class="sub-image-contaiter mb-2">
                    <div class="sub-image-body p-3">
                        <label class="form-label">{{ __('message.Sub image') }}(最大４枚まで)</label>
                        <span class="text-secondary small">※任意</span>
                        
                        <input type="file" class="form-control-file @error('sub_image_1') is-invalid @enderror" name="sub_image_1">
                        <!-- 画像拡張子エラー -->
                        @error('sub_image_1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="button" class="mt-1 mb-3" onclick="this.form.elements['sub_image_1'].value=''">取り消し</button>
                        
                        <input type="file" class="form-control-file @error('sub_image_2') is-invalid @enderror" name="sub_image_2">
                        <!-- 画像拡張子エラー -->
                        @error('sub_image_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="button" class="mt-1 mb-3" onclick="this.form.elements['sub_image_2'].value=''">取り消し</button>
                        
                        <input type="file" class="form-control-file @error('sub_image_3') is-invalid @enderror" name="sub_image_3">
                        @error('sub_image_3')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="button" class="mt-1 mb-3" onclick="this.form.elements['sub_image_3'].value=''">取り消し</button>
                        
                        <input type="file" class="form-control-file @error('sub_image_4') is-invalid @enderror" name="sub_image_4">
                        @error('sub_image_4')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="button" class="mt-1 mb-3" onclick="this.form.elements['sub_image_4'].value=''">取り消し</button>
                    </div>
                </div>

                <!-- リンクURL -->
                <div class="mb-2">
                    <label class="form-label" id="link-url">外部URL</label>
                    <span class="text-secondary small">※任意</span>
                    <input type="url" class="form-control" for="link-url" placeholder="リンク先URLがありましたらこちらに入力してください" aria-describedby="" autofocus="" value="{{ $form->link_url }}">
                </div>

                <!-- 文末メッセージ -->
                <div class="mb-4">
                    <label class="form-label" id="link-text">文末メッセージ</label>
                    <span class="text-secondary small">※任意（最大50文字）</span>
                    <input type="text" class="form-control @error('link_text') is-invalid @enderror" name="link_text" placeholder="文末にメッセージを入力できます" aria-describedby="" autofocus="" value="{{ $form->link_text }}">
            
                    @error('link_text')
                    <span class="invalid-feedback" role="alert">
                        <strong>入力できる最大文字数は50文字以下です</strong>
                    </span>
                    @enderror
                </div>
                
                <!-- ユーザーIDを登録 -->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> 
                <input type="hidden" name="id" value="{{ $form->id }}"> 
                <!-- 登録ボタン -->
                <div class="input-box">
                    <button type="submit" class="btn-flat-vertical-border my-5 p-2 col-5">プライバシーポリシー<br>に同意して投稿する</button>
                    {{ csrf_field() }}
                </div>
                @endif
                
                <a class="goto-top d-block mb-3" href="{{ url('/') }}">トップページに戻る</a>
            </form>
        </div>
    </div>

@endsection