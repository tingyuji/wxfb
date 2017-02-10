<?php
session_start();
$username=$_SESSION['username'];

if(!isset($_SESSION['username'])){
    header("Location:index.php"); //重新定向到其他页面
    exit();
}


$url = isset($_POST['url']) ? $_POST['url'] : '';

require_once 'class/task.class.php';
$taskClass=new taskClass();

$total=$taskClass->getCount12($url);

	$data=array();
	$data['total']=$total;

	$json=json_encode($data);
	echo $json;
	exit();

?>
