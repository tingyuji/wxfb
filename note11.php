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


 
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">赚米吧</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="list.php">返回</a></li>
              <li class="active"><a href="#">信息引导页</a></li>
    
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      
      <div class="page-header">
          <p class="panel-title">如何获取赚米吧账号，请往下看</p>
      </div>
      <div>
         <p class="text-info ">
           请输入您的赚米吧账号
          </p>
          <div class="form-group">
          <input id="openid" type="text" class="form-control" name="orderid" style="width:450px;">
          </div>
          <div class="form-group">
          <input id="ok" class="btn btn-info" type="button" value="确认" name="OK">
          </div>                                           
      </div>

      <div class="page-header">
        <p class="panel-title">关注公众号，回复账号二字，获取您的账号信息</p>


      </div>
      <div>
        <ul class="thumbnails" id="thumbnails">
          <li class="span4" style="width:160px;height:160px;">
            <a href="#" class="thumbnail">
              <img style="width:160px;height:160px;" src="WechatIMG8.jpeg" alt="">
            </a>
          </li>
        </ul>
      </div>


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
    <script type="text/javascript" src="js/purl.js"></script> 
    <script src="bootstrap/js/bootstrap.min.js"></script>


 <script type="text/javascript">
  
  $(document).ready(function(){
    

    $('#ok').click(function(){
      var openid=$('#openid').val();
      if(openid==''){
        alert('请先输入赚米吧账号');
        return;
      }
      $.ajax({
          type:'post',        
          url:'update11.php',
          dataType:'json',
          data:{
            openid:openid
          },
          async:false,
          success:function(data){    
            alert(data.message);  
          }
      }); 
    });

  });
</script> 

</body>
</html>
