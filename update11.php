<?php
setlocale(LC_ALL, 'zh_CN.utf-8');
header("Content-Type:text/html;charset=utf-8");

session_start();
$username=$_SESSION['username'];

if(!isset($_SESSION['username'])){
    header("Location:index.php"); //重新定向到其他页面
    exit();
}




$openid = isset($_POST['openid']) ? $_POST['openid'] : '';

$_SESSION['openid'] = $openid;


require_once 'class/user.class.php';


$userClass= new userClass();

$userClass->update3($username,$openid);


$data = array();   
$data['message']="操作成功";
$json= json_encode($data); 
echo $json; 

?>