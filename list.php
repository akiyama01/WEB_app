<?php

session_start();
$view = $_SESSION["name"].'お疲れ様です';


try {
    
    $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }


    
    $stmt = $pdo->prepare("SELECT * FROM medical_chart WHERE id>2");
    $status = $stmt->execute();
    



if($status==false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);

} else {
    while($result=$stmt->fetch(PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE)){
        
        $view .= "<p>".$result["name"]."さん"."<p>";
        $view .= '<a href="kousin.php?id='.$result["id"].'">';
        $view .="身長".$result["height"]."cm"."体重".$result["body_weight"]."kg"."血圧".$result["blood_pressure"]."mmHg"."脈拍".$result["pulse"]."/分";
        $view .="</a>";
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
<div class="container jumbotron"text-align: center; style="text-align: center;"><?=$view?></div>

</body>
</html>