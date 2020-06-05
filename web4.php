<?php

session_start();
$view = $_SESSION["name"].'さんのデータ';
// $view = $_SESSION["height"].'cm';
// $view = $_SESSION["body_weight"].'kg';

try {
    
    $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }


    
    $stmt = $pdo->prepare("SELECT * FROM medical_chart where id >= 2 and name = 'akiyama'");
    $status = $stmt->execute();
    



    if($status==false) {
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error[2]);
    
    } else {
        while($result=$stmt->fetch(PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE)){
            
            $view .= "<p>".$result["name"]."さん"."<p>";
            $view .= "身長".$result["height"]."cm"."<button>"."変更"."</button>"."体重".$result["body_weight"]."kg"."<button>"."変更"."</button>"."血圧".$result["blood_pressure"]."mmHg"."<button>"."変更"."</button>"."脈拍".$result["pulse"]."/分"."<button>"."変更"."</button>";
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
<div class="container jumbotron"><?=$view?></div>

</body>
</html>