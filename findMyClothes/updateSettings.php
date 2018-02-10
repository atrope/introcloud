<?php
include "helper.php";
$name = isset($_GET["username"])?$_GET["username"]:"";
$email = isset($_GET["email"])?$_GET["email"]:"";
$city = isset($_GET["city"])?$_GET["city"]:"";
$push = isset($_GET["push"])?1:0;
$sql = "UPDATE 214_users set name=:name,email=:email,city=:city,push=:push where id = :id";
$vals = array(":name"=>$name,":email"=>$email,":city"=>$city,":push"=>$push,":id"=>$uid);
if ($name && $email && $city){
if(execSQL($sql,$vals,false)) echo json_encode(array("status"=>200,"username"=>$name,"email"=>$email));
else echo json_encode(array("status"=>409));
} else echo json_encode(array("status"=>400));
