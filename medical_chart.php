<?php
session_start();

$view = "ようこそ".$_SESSION["name"]."さん";

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
      
        $view1 .="<p>"."身長".$result["height"]."cm"."</p>";
        $view2 .="<p>"."体重".$result["body_weight"]."kg"."</p>";
        $view3 .="<p>"."血圧".$result["blood_pressure"]."mmHg"."</p>";
        $view4 .="<p>"."脈拍".$result["pulse"]."/分"."</p>";
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
<div class="container jumbotron" text-align: center; style="text-align: center;"><?=$view?></div>
<table>

  <tr>
    <th>身長</th> <th>体重</th> <th>血圧</th>　<th>脈拍</th>
  </tr>

  <tr>
    <td><$view1></td> <td><?=$view2></td> <td><?=$view3></td> <td><?=$view4></td>
  </tr>
  
</table>

</body>
</html>
