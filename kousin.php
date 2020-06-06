<?php

$id = $_GET["id"];

try {
    $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }

  $sql ="SELECT * FROM medical_chart WHERE id=:id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);  
  $status = $stmt->execute();
  

  $view="";
  if($status==false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);

} else {
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ更新</title>
</head>
<body>
    <form method="post"  action="update.php">
    <div class="jumbotron">
    <fieldset>
    <label>身長<input type="number" name="height" value="<?=$row["height"]?>"></label><br>
    <label>体重<input type="number" name="body_weight" value="<?=$row["body_weight"]?>"></label><br>
    <label>血圧<input type="number" name="blood_pressure" value="<?=$row["blood_pressure"]?>"></label><br>
    <label>脈拍<input type="number" name="pulse" value="<?=$row["pulse"]?>"></label><br>
    <input type="hidden" name="id" value="<?=$row["id"]?>">
    <input type="submit" value="更新">
    </fieldset>
    </div>
    </form>
</body>
</html>