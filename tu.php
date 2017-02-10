<?php
session_start();
$username=$_SESSION['username'];

if(!isset($_SESSION['username'])){
    header("Location:index.php"); //重新定向到其他页面
    exit();
}



?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>赚米吧</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">


    <link rel="stylesheet" href="bootstraptable/bootstrap-table.css">
 
  </head>

  <body>



    <div class="container">
      <div class="page-header">
      <p class="panel-title">
      <button id="images" class="btn" type="button">去审图</button>
      <button id="update" class="btn" type="button">已审图</button>        

      </p>

      </div> 

     
      <div>
        <table id="dg1"></table>                                      
      </div>
  
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
    <script src="easyui/jquery.easyui.min.js"></script>
    <script src="easyui/locale/easyui-lang-zh_CN.js"></script>
    <link href="easyui/themes/icon.css" rel="stylesheet" />
    <link href="easyui/themes/default/easyui.css" rel="stylesheet" />    

  
<script type="text/javascript">
  
  $(document).ready(function(){
         $('#dg1').datagrid({
            idField:'id',
            singleSelect: true,
            pageNumber: 1,
            pageSize: 10,
            pagination: true,
            rownumbers: true,
            idField: 'id',
            url: 'getAllItems.php',    
            columns: [[
                { field: 'ck', checkbox: true, hidden: false },
                { field: 'id', title: '序号', width: 50, hidden: true },                
                { field: 'username', title: '账号', width: 150 },
                { field: 'file', title: '文件', width: 450 },
                { field: 'createTime', title: '上传时间', width: 150 },

            ]],
            onClickRow:function(index,row){  
                
            },                
            onLoadSuccess:function(data){  

            }
        });     
  

  });
</script>



</body>
</html>