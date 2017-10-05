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
    <div class="navbar-header"><a class="navbar-brand" href="select.php">管理ユーザー　登録</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>登録ページ</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>ログインID：<input type="text" name="lid"></label><br>
     <label>ログインPASSWORD：<input type="text" name="lpw"></label><br>
     <label><input type="radio" name="kanri_flg" value="0">管理者</label>
     <label><input type="radio" name="kanri_flg" value="1">スーパー管理者</label><br>
     <label><input type="radio" name="life_flg" value="0">使用中</label>
     <label><input type="radio" name="life_flg" value="1">使用しなくなった</label><br>
     <input type="submit" value="登録">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
