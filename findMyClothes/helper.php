<?php
session_start();
if(!isset($_SESSION['userid'])) $_SESSION['userid'] = 1; //Hardcoding for now;
$uid = $_SESSION['userid'];
function getDB(){
  $user     = "auxstudDB7c";
  $password = "auxstud7cDB1!";
  $dsn      = 'mysql:host=182.50.133.55;dbname=auxstudDB7c';
  $db       = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $db->exec("SET CHARACTER SET utf8");

  return $db;
}
function execSQL($query,$values,$return=true){
  $db = getDB();
  $st = $db->prepare($query);
  if ($st->execute($values)){
    if(stripos($query, "INSERT INTO") !== false) return $db->lastInsertId();
    if($return)  return $st->rowCount()==1?$st->fetch():$st->fetchAll();
    return true;
  }
  return false;
}
function sanitizeName($name){
  return strtolower(str_replace(" ","",$name));
}
function viewProduct($uid,$pid){
  $sql = "INSERT INTO 214_history(userId,productsId) values (:uid,:pid)";
  $val = array(":uid" => $uid,":pid" => $pid);
  return execSQL($sql,$val);
}
function generateBreadcrumb(){
  $file = basename($_SERVER["SCRIPT_FILENAME"], '.php');
  $split = preg_split('/(?=[A-Z])/',$file);
  $file = implode($split," ");
  return ucwords($file);
}
$user = execSQL("SELECT * from 214_users where id = :id",array(":id"=>$uid));

?>
