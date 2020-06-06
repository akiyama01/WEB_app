<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>webカルテ ログイン</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div id="content" style="text-align: center;">

      <h1 class="login-h1">WEBカルテログイン</h1>

      <div class="index-inner clearfix">
         
          
  <form method="post" action="login2.php">
  

   <label>ID<input type="text" name="user_id"></label><br>
   <label>PW<input type="text" name="pass"></label><br>
   <div class="error"></div>
   <button type="submit" title="ログイン" alt="ログイン">ログイン</button>
  
  </div>
  </form>

</div>
</body>
</html>