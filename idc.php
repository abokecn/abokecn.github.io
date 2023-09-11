<?php
include "config.php";
include "library/conf.php"
 ?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title><?php echo $Result[name] ;?></title>

<!--=================================
Meta tags
=================================-->

<meta name="description" content="<?php echo $Result[content] ;?>">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />


<!--=================================
Style Sheets
=================================-->

<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,900' rel='stylesheet' type='text/css'>
 <link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/fractionslider.css">
<link rel="stylesheet" href="assets/css/main.css">
<link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="static/s.css">
 <link rel="stylesheet" href="static/animate-text.css">
<link rel="stylesheet" href="static/color7.css">
<link href="assets/lib/animate/animate.min.css" rel="stylesheet">
	<link href="assets/css/legends.css" rel="stylesheet" type="text/css">
	<link href="assets/css/list2.css" rel="stylesheet" type="text/css">

<!-- Dark Lyout styles
<link rel="stylesheet" type="text/css" href="assets/css/dark.css">
-->

<script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<style>
#contactform textarea {
    width: 100%;
    height: 170px;
    height: 170px;
    margin-bottom: 40px;
    padding: 15px 55px 15px 15px;
    font-size: 15px;
    color: #000000;
    line-height: 28px;
    }
#myforms{
    position:relative;
}
#myforms input{
    width:100%;
    height:43px;
    margin-bottom:20px;
    line-height:43px;
    padding-left:15px;
    font-size:15px;
    color:#000000;
}

#myforms textarea{
    width:100%;
    height:170px;
    height:170px;
    margin-bottom:40px;
    padding:15px 55px 15px 15px;
    font-size:15px;
    color:#000000;
    line-height:28px;
}

#myforms #submit{
    position:absolute;
    right:0;
    bottom:42px;
    height:166px;
    width:50px;
    border:0;
    background:#fff;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

#myforms #submit img{
    position:absolute;
    bottom:20px;
    left:15px;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

#myforms #submit:hover{
    background:#FCD144;
}

#myforms #submit:hover img{
    bottom:80px;
}


#myforms input:focus, #myforms textarea:focus{
    border:2px solid #c0392b;
}

</style>
</head>
<body data-spy="scroll" data-target="#sticktop" data-offset="70">
<!--=================================
header
=================================-->

<header> 
    <nav id="sticktop" class="navbar navbar-default">
      <div class="container">
      	
        
      
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="#"><img src="assets/img/basic/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
               
               
               <li class="dropdown active"><a href="/">首页</a>
               		
               </li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>

 <!--=================================
 Home
 =================================-->
 
 
 <body style="background-size: cover;">

<div class="wrap">
<table width="1000"  border="5">
     <tr>
 <td width="200" bgColor=green><h3><font color=\"red\">处理器（CPU）</font><h3></td>
 <td width="100" bgColor=green><h3><font color=\"red\">内存</font><h3></td>
  <td width="100" bgColor=green><h3><font color=\"red\">硬盘</font><h3></td>
 <td width="100" bgColor=green><h3><font color=\"red\">网络带宽</font><h3></td>
 <td width="100" bgColor=green><h3><font color=\"red\">网络线路</font><h3></td>
 <td width="100" bgColor=green><h3><font color=\"red\">防御</font><h3></td>
 <td width="100" bgColor=green><h3><font color=\"red\">价格</font><h3></td>
 </tr>

</table>



         <?php
         while ($R_idc=$A_idc->fetch_array()) {
             
         ?>
         
 <table width="1000"  border="5">        
         


 <tr>
 <td width="200" bgColor=#FFFF00><h4><?php echo $R_idc[cpu] ;?><h4></td>
 <td width="100" bgColor=#FFFF00><h4><?php echo $R_idc[ddr];?><h4></td>
  <td width="100" bgColor=#FFFF00><h4><?php echo $R_idc[ssd] ;?><h4></td>
 <td width="100" bgColor=#FFFF00><h4><?php echo $R_idc[dk] ;?><h4></td>
 <td width="100" bgColor=#FFFF00><h4><?php echo $R_idc[xl] ;?><h4></td>
 <td width="100" bgColor=#FFFF00><h4><?php echo $R_idc[ddos] ;?><h4></td>
 <td width="100" bgColor=#FFFF00><h4><?php echo $R_idc[rmb] ;?><h4></td>
 </tr>




         
         
         



          <?php
      }
      ?>
      
      </table>
</div>
</body>
 





 <!--=================================
 Newsletter
 =================================--> 
 
 <!--=================================
 footer
 =================================-->
 <footer>
 
 
 
 
 
 
 
	<div class="container">
    	<div class="row">
        	<div class="col-lg-9 col-md-9 col-sm-8">
                <div class="logo"><img src="assets/img/basic/logofooter.png" alt=""></div>
                <div class="copyrights">
                       <?php echo $Result[dbxx] ;?><br><a href="http://www.beian.miit.gov.cn/" target="_blank"> <?php echo $Result[beian] ;?></a></br>
                </div>
             </div>
             
         </div>
    </div>
    <?php echo $Result[tjdm] ;?>
</footer>
	
<!--=================================
Script Source
=================================-->
<script src="assets/js/jquery-1.9.js"></script>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing-1.3.pack.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/jquery.inview.js"></script>
<script src="assets/js/jquery.flexslider-min.js"></script>
<script src="assets/js/packery.pkgd.min.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>-->
<script src="assets/js/jquery.fractionslider.min.js"></script>
<script src="assets/js/query.min.js"></script>
<script src="static/animate-text.js"></script>
<script src="assets/js/main.js"></script> 
<link rel="stylesheet" href="static/owl.carousel.min.css">
<script src="static/mainn.js"></script>
</body>
</html>