<?php
session_start();
$view = 'ようこそ'.$_SESSION["name"].'さん';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="web3.css">
</head>
<body id="main">

<!-- Main[Start] $view-->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>

<div id="a">WEBカルテメニュー</div>

<div id="container">
  <div class="button-1">
    <div class="eff-1"></div>
    <a href="web4.php"> 前回の健診結果 </a>
  </div>
  <div class="button-4">
    <div class="eff-4"></div>
    <a href="#"> 担当医 </a>
  </div>
  <div class="button-2">
    <div class="eff-2"></div>
    <a href="#"> 予防接種のご案内 </a>
  </div>
  <div class="button-3">
    <div class="eff-3"></div>
    <a href="#">お問い合わせ</a>
  </div>
</div>

<img id="b" src="https://i1.wp.com/ptotstnews-blog.com/wp-content/uploads/2019/08/275971aa927391515036e950a5627849.png?w=646&ssl=1" alt="人体">


<footer>
  <h1> <a href="https://codepen.io/Kiraken/" target="_blank"></a></h1>
</footer>

</script>
<!-- Main[End] -->

</body>
</html>
