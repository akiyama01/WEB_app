<?php
session_start();

$view = $_SESSION["name"]."さんの前回の健診結果";

try {
  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

$stmt = $pdo->prepare("SELECT * FROM medical_chart WHERE id=3");
    $status = $stmt->execute();
    



if($status==false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);

} else {
    while($result=$stmt->fetch(PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE)){
      
        $view .="<p>"."身長".$result["height"]."cm"."</p>";
        $view .="<p>"."体重".$result["body_weight"]."kg"."</p>";
        $view .="<p>"."収縮期血圧".$result["blood_pressure"]."mmHg"."</p>";
        $view .="<p>"."脈拍".$result["pulse"]."/分"."</p>";
    }
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
<div class="container jumbotron" style="text-align: center;font-size: 30px; padding: 0.5em 1em;
    margin: 2em 460px;font-weight: bold;color: #6091d3;background: #FFF;border: solid 3px #6091d3;
    border-radius: 10px;" ><?=$view?></div>

</body>
</html>
