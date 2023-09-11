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
               
               
               <li class="dropdown active"><a href="#slider">首页</a>
               		
               </li>
               <li><a href="#services" class="scrollto">旗下业务</a></li>
                              </li>
               <li><a href="idc.html" class="scrollto">服务器列表</a></li>
               <li class="dropdown"><a href="#portfolio">展示</a>
               		
               </li>
               <li><a href="#team" class="scrollto">服务</a></li>
               <li class="dropdown"><a href="#blog">动态</a>
               		
               </li>
               <li><a href="#contact" class="scrollto">交流</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>

 <!--=================================
 Home
 =================================-->
 
 
 
 
 <section id="slider">
<div class="single-slider" style="background-image:url('logo/2.gif')">
<div id="particles-js"></div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="text">
<h1 class="cd-headline clip is-full-width">
5G云资源网络科技工作室 ·
<span class="cd-words-wrapper">
<b class="is-visible">Yd12.cn</b>
<b>认真钻研网络</b>
<b>加强自身业务</b>
<b>初心永不忘</b>
</span>
</h1>
<p><?php echo $Result[introsmall] ;?> </p>
<div class="button-head">
<div class="button">
<span></span>
<a href=<?php echo $Result[introbig] ;?> class="btn">加入我们</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 



<div class="clearfix">
    
    
    
    
</div>
 <!--=================================
 Services
 =================================-->
  
     <section id="services" class="container" style="">
     	<h1>旗下业务</h1>
        <div class="row">
        	<div class="col-lg-8 col-md-8 col-sm-10 col-sm-offset-1 col-lg-offset-2 col-md-offset-2">
        		<div class="section-line">5G云资源网络科技工作室，旗下拥有丰富多样的业务展示给大家</div>
     		</div>
        </div>
        
        <div class="row">

         <?php
         while ($R_product=$A_product->fetch_array()) {
             
         ?>

            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="service rotateX360">
                    <span class="colorsIcon"></span>
                    <a href=<?php echo $R_product[url] ;?>>
                    <h4><?php echo $R_product[name] ;?></h4>
                    <p><?php echo $R_product[introduce] ;?></p>
                    </a>
                </div>
            </div>
                
          <?php
      }
      ?>
        </div><!--//row-->
             
     </section>
     
 <!--=================================
 Profile/Bio
 =================================-->

 <!--=================================
 Portfolio/Showcase
 =================================--> 	
 
 <section id="portfolio">
 	<div class="container">
    	<h1>客户展示</h1>
        
        <div class="top-nav">
            <div id="portfolio-prev" class="btn-effect prev"><span class="icon-angle-left"></span></div>
            <div id="portfolio-next" class="btn-effect next"><span class="icon-angle-right"></span></div>
        </div>
        
        
    </div>
    
    <div class="project-sliders">
        <div id="folio-row1" class="flexslider">
        	<ul class="slides">
            <?php
            while($R_img=$A_img->fetch_array()){

                ?>
            
            	<li>
                     <div class="project">
                        <a href="portfolio-single.html">
                            <a href="<?php echo $R_img[link] ;?>"><img src="<?php echo $R_img[url] ;?>" alt="" style="height:300px">
                            <div class="hover"></div>
                        </a>
                         <h4><?php echo $R_img[text] ;?></h4>
                     </div>
                 </li>
             	
                <?php
            }
            ?>
              </ul>
         </div><!--\\foliorow2-->
         
    </div>
    
</section>


 <section id="blog">
 	
 	<div class="container">
    	<h1>工作室动态</h1>
        
   
        
 
        
        <?php 
        while($R_article=$A_article->fetch_array())
        {
            ?>
            
            
            
            <div class="section-line">
                                    <h3><a href="#"><?php echo $R_article[name] ?></a></h3>
                    <ul class="about-post">
                       
                        <li>管理员</li>
                        <li><?php echo $R_article[time] ?></li>
                    </ul>
                    <p><?php echo $R_article[content] ?></p>
                
                </div>
            
            
                  
                  
           	
           <!--//blog-unit-->

<?php
}
?>
            
  
     </div><!--\\row-->  

  </div>
    
</section>
 <div class="clearfix"></div>

 <!--=================================
 Pricing table
 =================================--> 


 <!--=================================
 Clients
 =================================--> 
<section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <h3>业务定价标准</h3>
		  <p>业务专业,定价标准,物美价廉,容易接受.</p>
        </div>

        <div class="row">
         <?php
         while ($R_server=$A_server->fetch_array()) {
             
         ?>
          <div class="col-lg-3 col-md-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="member">
			  <center><h3 class="member-name"><?php echo $R_server[name] ;?></h3></center>
			  <center><font><?php echo $R_server[introduce] ;?></font></center>
              <div class="member-info">
                <div class="member-info-content">
                  <h4>￥:<?php echo $R_server[rmb] ;?></h4>
                  
                </div>
              </div>
            </div>
          </div>
          <?php
      }
      ?>
          
				  

          </div>
        </div>
	  
    </section>

 <!--=================================
 Newsletter
 =================================--> 
 
 <!--=================================
 footer
 =================================-->
 <section id="contact">
 	<div class="container">
    	<div class="row">
        	<div class="col-lg-4 col-md-4 col-sm-4">
            	<h4>联系我们</h4>
            	<ul>
                	<li><a href="mailto:2811051813@qq.com">E：<?php echo $Result[emaill] ?></a></li>
                    <li><a href="tel:0123456789">P：<?php echo $Result[phone] ?></a></li>
                    <li><a href="#">W：<?php echo $Result[url] ?></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            	<h4>通讯地址</h4>
            	<address><?php echo $Result[province] ?><BR><?php echo $Result[city] ?><BR><?php echo $Result[county] ?><BR><?php echo $Result[address] ?></address>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
            	<h4>寻求合作</h4>
            	联系QQ：
                <a class="support" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $Result[qq] ?>&site=qq&menu=yes"><?php echo $Result[qq] ?></a>
            </div>
        </div>
        
        <div class="contactus">
            <form id="myforms" action="library/submit.php" method="post">
            	<div class="row">
                   <div class="col-lg-4 col-md-4 col-sm-4">
                      <input type="text" name="name" placeholder="您的尊称" />
                   </div>
                   
                   <div class="col-lg-4 col-md-4 col-sm-4">
                      <input type="text" name="email"  placeholder="您的邮箱" />
                   </div>
                   
                   <div class="col-lg-4 col-md-4 col-sm-4">
                      <input type="text" name="subject" placeholder="合作项目" />
                   </div>
                </div>
                
                <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12">
                   		<textarea name="message" placeholder="在此键入您的需求，并且点击右下角的按钮提交，我们会在第一时间联系到您（请附带您的QQ号或微信号或手机号）"></textarea>
                   </div>
                </div>
                
                <button id="submit" type="submit"><img src="assets/img/basic/sendicon.png" alt="send" /></button>
                
            </form>
            
            
            
       </div>
    </div>
    
    <div class="mapWrapper">
    	<a href="#contact-map" class="triangle"><i class=" icon-map-marker"></i></a>
    	<div class="mapHandler">
        	<div id="contact-map" data-dark="false" data-address="kansas city" data-zoomlvl="13" data-maptype="HYBRID"></div>
    	</div>
    </div>
    
 </section>
 
 
 <div align="center">
    <table width="980" height="35" border="0" align="center">
        

        <tr>
            <td>
                友情链接：&nbsp;
                         <?php
         while ($R_yqlj=$A_yqlj->fetch_array()) {
             
         ?>
                <a target="_blank" href=<?php echo $R_yqlj[url] ;?>><?php echo $R_yqlj[name] ;?></a>
                &nbsp;|
                          <?php
      }
      ?>
            </td>
        </tr>
    </table>
</div>
 
 


          

  
		  
         

		  

			  

				  

          </div>
 
 
 
 
 
 
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