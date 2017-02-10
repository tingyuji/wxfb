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

  <style type="text/css">
    body{
      padding-top: 0px;
    }
  </style>
 
  </head>

  <body>

    <div class="container">

      <div class="page-header">
          <p class="panel-title">任务截图由赚米吧独家提供，如有问题请联系平台客服</p>
      </div>

      <div class="page-header">
          <p class="panel-title" id="message"></p>
      </div>
      <div id="imgs">

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
    var base='http://www.fangdan8.com/wx/';
    var base='http://7xsomq.com2.z0.glb.clouddn.com/';

    var url = $.url(); 
    var pid=url.param('pid'); 
    $.ajax({
      type: 'POST',
      url: 'getAllData23.php',
      data: {
        pid:pid
      },
      dataType: 'json',
      success: function(data){
        var total=data.total;
        var total2=data.total2;
        $('#message').html(total2+'人，已完成图片上传');
        var rows=data.rows;
        $('#imgs').html('');
        for(var i=0;i<total2;i++){
            var row=rows[i];
            var id=row['id'];
            var orderid=row['orderid'];
            var status=row['status'];
            var imgs=row['imgs'];
            var imgArr=imgs.split(",");

           

            if(status=='投诉'){
                var html='<ul id="'+orderid+'" class="thumbnails" style="border: 1px solid #F00;padding:2px;">';
            }else{
                var html='<ul id="'+orderid+'" class="thumbnails" style="border-bottom: 1px solid #eeeeee;padding:2px;">';
            }
            
            for (var j=0;j<imgArr.length;j++) {
                //if(j<2){
                    var img=imgArr[j];

                    html+='<li style="width:200px;height:300px;">';
                    html+='<a href="javascript:void(0)" class="thumbnail">';
                    html+='<img style="width:200px;height:300px;" src='+base+img+' alt="">';
                                      
                    html+='</a>';  
                    html+='</li>'; 
                    
                //}

            }
            html+='</ul>';
            $('#imgs').append(html); 
            
        }




      }
    });


  });
</script> 

</body>
</html>
