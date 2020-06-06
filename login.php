<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>webカルテ ログイン</title>
</head>
<body>
  <div id="content" style="text-align: center; padding: 6.5em 1em;
    margin: 0em 500px;
    color: #FFF;
    background: #6eb7ff;
    border-bottom: solid 6px #3f87ce;
    box-shadow: 30 80px 10px rgba(0, 0, 0, 0.25);
    border-radius: 9px;">

      <h1>WEBカルテログイン</h1>
         
          
  <form method="post" action="login2.php">
  
    
    <p><label>ID<input type="text" name="user_id"></label><br></p>
    <p><label>PW<input type="text" name="pass"></label><br></p>
   <div class="error"></div>
   <button type="submit" title="ログイン" alt="ログイン">ログイン</button>
  
  </div>
  </form>

</div>
</body>
</html>