$(function() {
  
  //風景画像のファイル表示
  $('#edit-view-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#view-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-view').click(function() {
    //ファイルを取得する
      $("#view-preview").attr('src', '');
  });
  
  
  //新規プロフィール画像のファイル表示
  $('#edit-user-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#user-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-register').click(function() {
    //ファイルを取得する
      $("#user-preview").attr('src', '');
  });
  
  
  //プロフィール更新画像のファイル表示
  $('#update-user-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#user-update-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-edit-profile').click(function() {
    //ファイルを取得する
      $("#user-update-preview").attr('src', '');
  });
  
  
  //記事メイン画像のファイル表示
  $('#edit-article-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#article-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-article-main').click(function() {
    //ファイルを取得する
      $("#article-preview").attr('src', '');
  });
  
  
  //記事サブ1画像のファイル表示
  $('#edit-sub1-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#sub1-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-article-sub1').click(function() {
    //ファイルを取得する
      $("#sub1-preview").attr('src', '');
  });
  
  
  //記事サブ2画像のファイル表示
  $('#edit-sub2-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#sub2-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-article-sub2').click(function() {
    //ファイルを取得する
      $("#sub2-preview").attr('src', '');
  });
  
  
  //記事サブ3画像のファイル表示
  $('#edit-sub3-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#sub3-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-article-sub3').click(function() {
    //ファイルを取得する
      $("#sub3-preview").attr('src', '');
  });
  
  
  //記事サブ4画像のファイル表示
  $('#edit-sub4-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#sub4-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-article-sub4').click(function() {
    //ファイルを取得する
      $("#sub4-preview").attr('src', '');
  });
  

  
  //記事編集メイン画像のファイル表示
  $('#update-article-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#article-update-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-edit-article').click(function() {
    //ファイルを取得する
      $("#article-update-preview").attr('src', '');
  });
  
  
  //記事編集サブ1画像のファイル表示
  $('#update-sub1-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#sub1-update-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-update-sub1').click(function() {
    //ファイルを取得する
      $("#sub1-update-preview").attr('src', '');
  });
  
  
  //記事編集サブ2画像のファイル表示
  $('#update-sub2-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#sub2-update-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-update-sub2').click(function() {
    //ファイルを取得する
      $("#sub2-update-preview").attr('src', '');
  });
  
  
  //記事編集サブ3画像のファイル表示
  $('#update-sub3-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#sub3-update-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-update-sub3').click(function() {
    //ファイルを取得する
      $("#sub3-update-preview").attr('src', '');
  });
  
  
  //記事編集サブ4画像のファイル表示
  $('#update-sub4-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#sub4-update-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
  });
  //画像表示取り消し
  $('#cancel-update-sub4').click(function() {
    //ファイルを取得する
      $("#sub4-update-preview").attr('src', '');
  });
  
});

//フォームロゴを少し動かす
$(function () {
    setTimeout('rect()'); //アニメーションを実行
});

function rect() {
    $('.more-btn').animate({
        marginRight: '-=10px'
    }, 800).animate({
        marginRight: '+=10px'
    }, 800);
    setTimeout('rect()', 160); //アニメーションを繰り返す間隔
}



