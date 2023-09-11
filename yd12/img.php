<?php
include "../config.php";
include "../library/conf.php";
if($_POST[action]=="add"){
$Result=$conn->query("INSERT INTO `yk_img` (`id`, `url`, `link`,`text`) VALUES (NULL, '$_POST[url]', '$_POST[link]','$_POST[text]')");
 if($Result==1){
  echo '<script>alert("添加成功！");window.location.href="img.php"</script>';
}

}
if($_GET[action]=="del"){
  $Result=$conn->query("DELETE FROM `yk_img` WHERE `id`='$_GET[id]'");
  if ($Result==1) {
    echo '<script>alert("已删除");window.location.href="img.php"</script>';


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
   <div class="row" id="form" style="padding:8px;border:1px solid gray;border-radius:3px;margin-top:20px;">
   <form action="img.php" method="post">
   <div class="form-group">
   <label>图片地址：</label>
   <input type="text" name="url" placeholder="输入图片链接" class="form-control">
   </div>
   <div class="form-group">
   <label>跳转链接：</label>
   <input type="text" name="link" placeholder="点击图片跳转地址" class="form-control">

   </div>
      <div class="form-group">
   <label>图片名称：</label>
   <input type="text" name="text" placeholder="图片下面的文字" class="form-control">
   <input type="text" name="action" class="form-control sr-only" value="add">
   </div>
   <button class="form-control btn-success" type="submit">添加</button>
   </form>
   </div>
   <div class="row bg-info" style="padding:11px">
   轮播图列表<!-- <button class="btn btn-xs btn-success" style="float:right"><i class="glyphicon glyphicon-plus" onclick="document.getElementById("form").style.display="inline-block"">添加</i></button> -->
   </div>
   <div class="row table-responsive">
   <table class="table table-bordered table-hover table-condescend">
   <thead>
   <tr>
   <th>
   图片ID
   </th>
   <th>
图片链接
   </th>
   <th>
   跳转地址
   </th>
   <th>
   操作
   </th>
   </tr>
   </thead>
   <tbody>
   <?php
   while($R_img=$A_img->fetch_array()){
    ?>
    <tr>
    <td>
    <?php echo $R_img[id] ?>
    </td>
    <td>
    <?php echo $R_img[url] ?>
    </td>
<td>
    <?php echo $R_img[link] ?>
    </td>
    <td>
    <?php echo $R_img[text] ?>
    </td>
    <td>
    <a href="img.php?action=del&id=<?php echo $R_img[id] ?>">删除</a>
    </td>

    </tr>
    <?php
  }
  ?>
   </tbody>
   </table>
   </div>
   </div>
  </body>
</html>