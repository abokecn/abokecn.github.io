<?php
include "../config.php";
include "../library/conf.php";
if ($_POST[action]=="setup") {
	$Result=$conn->query("UPDATE `yk_config` SET `name` = '$_POST[name]', `content` = '$_POST[content]', `url` = '$_POST[url]', `introbig` = '$_POST[introbig]', `introsmall` = '$_POST[introsmall]', `qq` = '$_POST[qq]', `wx` = '$_POST[wx]', `emaill` = '$_POST[email]', `phone` = '$_POST[phone]', `province` = '$_POST[province]', `city` = '$_POST[city]', `county` = '$_POST[county]', `address` = '$_POST[address]', `dbxx` = '$_POST[dbxx]', `beian` = '$_POST[beian]', `tjdm` = '$_POST[tjdm]', `user` = '$_POST[user]', `pass` = '$_POST[pass]' WHERE `yk_config`.`id` = 1");
	if($Result==1){
		echo '<script>alert("修改成功！");window.location.href="set.php"</script>';


	}else{

	echo '<script>alert("修改失败！");window.location.href="set.php"</script>';


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
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
   <div class="container">
   <div class="row bg-info" style="padding:11px;">
   网站设置
   </div>
   <div class="row" style="padding:15px;border:1px solid gray;border-radius:0 0 2px 2px;border-top:none">
   <form action="set.php" method="post">
   <div class="form-group">
   <label>网站名称：</label>
   <input type="text" name="name" placeholder="网站名称" value="<?php echo $Result[name] ?>" class="form-control">
   </div>

   <input type="text" name="action" placeholder="手机号" value="setup" class="form-control sr-only">

   <div class="form-group">
   <label>SEO介绍：</label>
   <input type="text" name="content" placeholder="SEO介绍" value="<?php echo $Result[content] ?>" class="form-control" style="height:150px">
   </div>
   <div class="form-group">
   <label>站点URL：</label>
   <input type="text" name="url" placeholder="网址" value="<?php echo $Result[url] ?>" class="form-control">
   </div>
<div class="form-group">
   <label>站长QQ：</label>
   <input type="text" name="qq" placeholder="QQ" value="<?php echo $Result[qq] ?>" class="form-control">
   </div>
<div class="form-group">
   <label>站长微信：</label>
   <input type="text" name="wx" placeholder="wx" value="<?php echo $Result[wx] ?>" class="form-control">
   </div>
   <div class="form-group">
   <label>站长邮箱：</label>
   <input type="email" name="email" placeholder="邮箱" value="<?php echo $Result[emaill] ?>" class="form-control">
   </div>
   <div class="form-group">
   <label>手机号：</label>
   <input type="text" name="phone" placeholder="手机号" value="<?php echo $Result[phone] ?>" class="form-control">
   </div>
   <div class="form-group">
   <label>联络地址：</label><br>
   <input type="text" name="province" placeholder="省" value="<?php echo $Result[province] ?>" class="col-xs-3">
   <input type="text" name="city" placeholder="市" value="<?php echo $Result[city] ?>" class="col-xs-3">
   <input type="text" name="county" placeholder="县" value="<?php echo $Result[county] ?>" class="col-xs-3">
   <input type="text" name="address" placeholder="详细地址" value="<?php echo $Result[address] ?>" class="col-xs-3">
   </div>
    <div class="form-group">
   <label>底部信息：</label>
   <textarea class="form-control" rows="5" name="dbxx"><?php echo $Result[dbxx] ?></textarea>
   </div>
   <div class="form-group">
   <label>统计代码：</label>
   <textarea class="form-control" rows="1" name="tjdm"><?php echo $Result[tjdm] ?></textarea>
   </div>
    <div class="form-group">
   <label>备案信息：</label>
   <input type="text" name="beian" placeholder="备案" value="<?php echo $Result[beian] ?>" class="form-control">
   </div>
   <div class="form-group">
   <label>首页QQ群链接</label>
   <textarea class="form-control" rows="5" name="introbig"><?php echo $Result[introbig] ?></textarea>
   </div>
   <div class="form-group">
   <label>首页小字介绍</label>
   <textarea class="form-control" rows="5" name="introsmall"><?php echo $Result[introsmall] ?></textarea>
   </div>
    <div class="form-group">
   <label>后台账号：</label>
   <input type="text" name="user" placeholder="账号" value="<?php echo $Result[user] ?>" class="form-control">
   </div>
    <div class="form-group">
   <label>后台密码：</label>
   <input type="text" name="pass" placeholder="密码" value="<?php echo $Result[pass] ?>" class="form-control">
   </div>
   <button type="submit" class="form-control btn-success">提交</button>
   </form>
   </div>
   </div>
  </body>
</html>