<?php

session_start();

$user_id = $_POST["user_id"];
$pass = $_POST["pass"];




try {
  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}



$sql ="SELECT * FROM medical_chart WHERE user_id=:user_id AND pass=:pass";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id',$user_id );  
$stmt->bindValue(':pass', $pass); 
$res = $stmt->execute();


if($res==false){

  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}
  
$val = $stmt->fetch();

if( $val["id"]=="3" ){
$_SESSION["user_id"]    = session_id();
$_SESSION["name"]   = $val['name'];
header("Location: medical_chart.php");
}else if( $val["id"]=="4" ){
  $_SESSION["user_id"]    = session_id();
  $_SESSION["name"]   = $val['name'];
  header("Location: medical_chart2.php");
}else if( $val["type"] =="doctor" ){
$_SESSION["user_id"]    = session_id();
$_SESSION["name"]   = $val['name'];
header("Location: list.php");
// }else if( $val["id"] ==2 ){
//   $_SESSION["user_id"]    = session_id();
//   $_SESSION["name"]   = $val['name'];
//   header("Location: list.php");
}else {header("Location: login.php");
}
  exit();
  

?>
