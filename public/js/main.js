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
  
  
  //新規プロフィール画像のファイル表示
  $('#edit-user-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#user-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
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
  
  
  //記事メイン画像のファイル表示
  $('#edit-article-image').on('change' , function(e) {
    //ファイルを取得する
    var reader = new FileReader();
    reader.onload = function(e) {
      $("#article-preview").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
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
  
  
  
  
  
});




