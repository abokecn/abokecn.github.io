<?php
include "../config.php";
$conn=new mysqli($conf['address'],$conf['user'],$conf['password'],$conf['name']);
$user=$_POST[username];
$pass=$_POST[password];
if($pass<>NULL and $user<>NULL){
$Result=$conn->query("SELECT * FROM `yk_config` WHERE `user`='$user' AND `pass`='$pass'")->fetch_array();
if($Result==NULL){
	echo '<script>alert("账号密码不正确！");window.location.href="login.php"</script>';
}else{
	echo '<script>alert("登录成功！");window.location.href="index.php"</script>';
	setcookie("islogin",1,time()+86400);
}
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>YD-登录</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <style>
    #wrapper{
    
     border:1px solid #555;
     margin-top:100px;
     margin-left:10%;
     margin-right:10%;
     width:80%;
          color:black;
     border-radius:5px;
     background-color:rgb(245,235,250);
   
    }
    #form{
    	padding:15px;

    }
    </style>
  </head>
  <body>

<div class="container" id="wrapper">
<div class="row bg-info" style="text-align:center;padding:10px;
">
Login
</div>
<div class="row" id="form">
<form action="login.php" method="post">
<div class="form-group">
<label>账号：</label>
<input type="text" name="username" class="form-control" placeholder="管理员账号">
</div>
<div class="form-group">
<label>密码：</label>
<input type="password" name="password" class="form-control" placeholder="管理员密码">
</div>
<div class="form-group">
<button class="form-control btn-primary">登录</button>
</div>
</form>
</div>
</div>



   
  </body>
</html>