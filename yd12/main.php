<?php
include "../config.php";
include "../library/conf.php"
 ?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.small-padding{
  padding:11px;
}
.xs-padding{
  padding:5px;
}
</style>
 
  </head>
  <body>

<div class="container">
<div class="row text-center bg-warning small-padding">
服务器信息
</div>
<div class="row bg-primary">
<div class="col-xs-12 xs-padding">
运行环境：PHP+MYSQL
</div>
<div class="col-xs-12 xs-padding">
服务器类型：<?php echo php_uname('s') ?>
</div>
<div class="col-xs-12 xs-padding">
服务器版本号：<?php echo php_uname('r') ?>
</div>
<div class="col-xs-12 xs-padding">
PHP环境支持：<?php echo php_sapi_name() ?>
</div>
<div class="col-xs-12 xs-padding">
当前PHP版本：<?php echo PHP_VERSION?>
</div>
<div class="col-xs-12 xs-padding">
当前路径：<?php echo __FILE__ ?>
</div>
<div class="col-xs-12 xs-padding">
服务器IP：<?php echo $_SERVER["SERVER_ADDR"] ?>
</div>
<div class="col-xs-12 xs-padding">
网站域名：<?php echo $_SERVER["HTTP_HOST"] ?>
</div>
<div class="col-xs-12 xs-padding">
服务器端口：<?php echo $_SERVER["SERVER_PORT"] ?>
</div>

</div>
<br>
<br>
<div class="row small-padding bg-danger text-center">
站点信息
</div>
<div class="row">
<div class="col-xs-12 xs-padding">
SEO标题：<?php echo $Result[name] ?>
</div>
<div class="col-xs-12 xs-padding">
SEO介绍：<?php echo $Result[content] ?>
</div>
<div class="col-xs-12 xs-padding">
网站URL：<?php echo $Result[url] ?>
</div>
<div class="col-xs-12 xs-padding">
负责人QQ：<?php echo $Result[qq] ?>
</div>
<div class="col-xs-12 xs-padding">
负责人微信：<?php echo $Result[wx] ?>
</div>
<div class="col-xs-12 xs-padding">
负责人邮箱：<?php echo $Result[emaill] ?>
</div>
<div class="col-xs-12 xs-padding">
联络地址：<?php echo $Result[province].$Result[city].$Result[county].$Result[address] ?>
</div>
<div class="col-xs-12 xs-padding">
管理员：<?php echo $Result[user] ?>
</div>
</div>
<br>
<br>
<div class="row small-padding bg-success" style="border:1px solid #666;border-radius:2px">
亿动网 &nbsp;www.yunziyuan.com.cn<br>
技术支持  萌新三连QQ：15413469<br>
站长QQ：3500867


</div>


</div>

    </body>
</html>