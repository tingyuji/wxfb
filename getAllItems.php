<?php
setlocale(LC_ALL, 'zh_CN.utf-8');
header("Content-Type:text/html;charset=utf-8");
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;  
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;  
$offset = ($page-1)*$rows;
require_once 'class/file.class.php';
session_start();
$name=$_SESSION['username'];
$fileClass= new fileClass();

//$total=$fileClass->getCount();
$total=$fileClass->getCount();


//$row = mysql_fetch_row($rs);  
$result["total"] = $total;  

$items = $fileClass->getAllItems($offset,$rows);
$result["rows"] = $items;   
$jsonresult= json_encode($result); 
echo $jsonresult; 
?>