<?php

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
    if($return)  return $st->rowCount()==1?$st->fetch():$st->fetchAll();
    if(stripos($query, "INSERT INTO") !== false) return $db->lastInsertId();
    return true;
  }
  return false;
}
 ?>
