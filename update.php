<?php

$id = $_POST["id"];
$height = $_POST["height"];
$body_weight = $_POST["body_weight"];
$blood_pressure = $_POST["blood_pressure"];
$pulse = $_POST["pulse"];

try {
    $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }

  $sql ='UPDATE medical_chart SET height=:height, body_weight=:body_weight, blood_pressure=:blood_pressure, pulse=:pulse WHERE id=:id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':height', $height, PDO::PARAM_INT); 
  $stmt->bindValue(':body_weight', $body_weight, PDO::PARAM_INT); 
  $stmt->bindValue(':blood_pressure', $blood_pressure, PDO::PARAM_INT); 
  $stmt->bindValue(':pulse', $pulse, PDO::PARAM_INT); 
  $stmt->bindValue(':id', $id, PDO::PARAM_INT); 
  $status = $stmt->execute();
  

  
  if($status==false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);

} else {
    header("Location: list.php");
    exit;
}
?>
