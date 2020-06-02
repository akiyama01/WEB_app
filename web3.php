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
<img id="b" src="https://i1.wp.com/ptotstnews-blog.com/wp-content/uploads/2019/08/275971aa927391515036e950a5627849.png?w=646&ssl=1" alt="人体">
<div id="c">前回の健診結果を見る</div>
</script>
<!-- Main[End] -->

</body>
</html>
