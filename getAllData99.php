<?php
setlocale(LC_ALL, 'zh_CN.utf-8');
header("Content-Type:text/html;charset=utf-8");
$openid = isset($_POST['openid']) ? $_POST['openid'] : '';

require_once 'class/images.class.php';


$imagesClass= new imagesClass();

$total=$imagesClass->getCount99($openid);
  
$result["total"] = $total;  


$items = $imagesClass->getAll99($openid);
$total2=count($items);
$result["total2"] = $total2;  

$result["rows"] = $items;   
$jsonresult= json_encode($result); 
echo $jsonresult; 
?>