<?php
  session_start();
  unset($_SESSION['username']);
  session_destroy();

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>赚米吧</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="赚米吧,微信刷票平台,微信投票平台">
    <meta name="Keywords" content="赚米吧,微信刷票平台,微信投票平台">

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
              <li class="active"><a href="index.php">首页</a></li>
              <li><a href="login.php">登录</a></li>
              <li><a href="contact.php">客服</a></li>
              <li><a href="note.php">通知</a></li>
              <li><a href="new.php">注册</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
  

      <div class="page-header">
          <p class="panel-title">
          
          <br>新增分享图片链接功能，可以直接分享链接给客户，这样可免去下载截图的麻烦
          <br>

          </p>
      </div>

      <div>
        <ul class="thumbnails" id="thumbnails">
          <li class="span4" style="width:282px;height:393px;">
            <a href="#" class="thumbnail">
              <img style="width:282px;height:393px;" src="WechatIMG5.jpeg" alt="">
            </a>
          </li>
        </ul>

      </div>



    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


  
    <script type="text/javascript">

    var hhhhhh_myprotocol = (("https:" == document.location.protocol) ? " https://" : " http://");

    document.write(unescape("%3Cscript src='" + hhhhhh_myprotocol + "user.ezns.net/user/code/user/js&id=13098' type='text/javascript'%3E%3C/script%3E"));

    </script>
</body>
</html>
