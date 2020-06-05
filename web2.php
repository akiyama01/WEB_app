<?php

session_start();
//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$user_id = $_POST["user_id"];
$pass = $_POST["pass"];


//2. DB接続します 

try {
  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$sql ="SELECT * FROM medical_chart WHERE user_id=:user_id AND pass=:pass";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id',$user_id );  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':pass', $pass);  //Integer（数値の場合 PDO::PARAM_INT)
$res = $stmt->execute();

//４．データ登録処理後
if($res==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}
  
$val = $stmt->fetch();

if( $val["type"] =="patient" ){
$_SESSION["user_id"]    = session_id();
$_SESSION["name"]   = $val['name'];
header("Location: web3.php");
}else if( $val["id"] ==1 ){
$_SESSION["user_id"]    = session_id();
$_SESSION["name"]   = $val['name'];
header("Location: list.php");
}else if( $val["id"] ==2 ){
  $_SESSION["user_id"]    = session_id();
  $_SESSION["name"]   = $val['name'];
  header("Location: list.php");
}else {header("Location: login.php");
}
  exit();
  

?>
