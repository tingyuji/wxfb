<?php
session_start();
$_SESSION['username']='';

var_dump($_SESSION); 

if(!isset($_SESSION['username'])){
    header("Location:index.php"); //重新定向到其他页面
    exit();
}

if(empty($_SESSION['username'])){
    header("Location:index.php"); //重新定向到其他页面
    exit();
}

?>
