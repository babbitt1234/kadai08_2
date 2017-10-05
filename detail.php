<?php

//1.GETでidを取得
$id = $_GET["id"];

//2.DB接続など
try {
  $pdo = new PDO('mysql:dbname=gs_db30;charset=utf8;host=127.0.0.1','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//3．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

//4．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる
  $row = $stmt->fetch(); //$row["name"]
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>管理ユーザー</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid"></div>
    <div class="navbar-header"><a class="navbar-brand" href="select.php">管理ユーザー　修正</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>修正ページ</legend>
     <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>ログインID：<input type="text" name="lid" value="<?=$row["lid"]?>"></label><br>
     <label>ログインPASSWORD：<input type="text" name="lpw" value="<?=$row["lpw"]?>"></label><br>
     <label><input type="radio" name="kanri_flg" value="<?=$row["kanri_flg"]?>">管理者</label>
     <label><input type="radio" name="kanri_flg" value="<?=$row["kanri_flg"]?>">スーパー管理者</label><br>
     <label><input type="radio" name="life_flg" value="<?=$row["life_flg"]?>">使用中</label>
     <label><input type="radio" name="life_flg" value="<?=$row["life_flg"]?>">使用しなくなった</label><br>
     <input type="hidden" name="id" value="<?=$id?>">
     <input type="submit" value="修正">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>






