<?php
//1.  DB接続します xxxにDB名を入れます
try {
// mampの場合は注意です！違います！別途後ほど確認します！
$pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM medical_chart");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $view .= $result["name"]."さん ようこそ";
    $view .= "<p>"."身長".$result["height"]."cm"."</p>";
    $view .= "<p>"."体重".$result["body_weight"]."kg"."</p>";
    $view .= "<p>"."血圧".$result["blood_pressure"]."mmHg"."</p>";
    $view .= "<p>"."脈拍".$result["pulse"]."/分"."</p>";
    
  }

}
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
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php"></a> 
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

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
