<?php
session_start();
 
// 認証処理・・・省略
 
if {
    $_SESSION['user_id'] = $name;
    header('Location: NINSYOU2.PHP');
    exit();
} else {
    $_SESSION['user_id'] = '';
    echo '認証エラー: ユーザ名とパスワードを確認してください。';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="post" action="NINSYOU2.php">
            <div class="jumbotron">
            <fieldset>
              <label>ID<input type="text" name="user_id"></label><br>
              <label>PW<input type="text" name="pass"></label><br>
              <div class="error"></div>
              <button type="submit" title="ログイン" alt="ログイン">ログイン</button>
              </fieldset>
              </div>





</body>
</html>