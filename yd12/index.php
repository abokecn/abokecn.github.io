<?php
if($_COOKIE["islogin"]<>1) {
  echo '<script>alert("未登录");window.location.href="login.php"</script>';


}
?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>亿动官网-后台管理系统</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
#top{
width:100%;
height:50px;
border:none;
margin-bottom:-8px;
}
#left{
  width:140px;
  margin-top:-5px;
  border:none;
  margin-right:-8px;
}
#center{
  border:none;
}
.row{
  margin-left:0px;
}
</style>
  </head>
  <body>

<iframe src="top.html" id="top" scrolling="no" onclick="exchange()"></iframe>
<iframe src="head.php" id="left" scrolling="no"></iframe>
<iframe src="main.php" id="center" scrolling="auto" name="center"></iframe>

    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script>
var a=window.innerHeight;
var b=window.innerWidth;
document.getElementById("left").style.height=a-50+"px";
document.getElementById("center").style.height=a-50+"px";
document.getElementById("center").style.width=b-140+"px";
function exchange(){
	document.getElementById("left").style.display="none";
}
</script>
  </body>
</html>