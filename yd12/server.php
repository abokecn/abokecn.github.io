<?php
include "../config.php";
include "../library/conf.php";
if($_POST[action]=="add"){
$Result=$conn->query("INSERT INTO `yk_server` (`id`, `name`, `introduce`, `rmb`) VALUES (NULL, '$_POST[name]', '$_POST[introduce]', '$_POST[rmb]')");
 if($Result==1){
  echo '<script>alert("添加成功！");window.location.href="server.php"</script>';
}

}
if($_GET[action]=="del"){
  $Result=$conn->query("DELETE FROM `yk_server` WHERE `id`='$_GET[id]'");
  if ($Result==1) {
    echo '<script>alert("已删除");window.location.href="server.php"</script>';


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
   <form action="server.php" method="post">
   <div class="form-group">
   <label>业务名称：</label>
   <input type="text" name="name" placeholder="输入业务名称" class="form-control">
   </div>
   <div class="form-group">
   <label>介绍内容：</label>
   <input type="text" name="introduce" placeholder="介绍内容" class="form-control">
   <input type="text" name="action" class="form-control sr-only" value="add">
   </div>
      <div class="form-group">
   <label>业务价格：</label>
   <input type="text" name="rmb" placeholder="输入价格" class="form-control">
   </div>
   <button class="form-control btn-success" type="submit">添加</button>
   </form>
   </div>
   <div class="row bg-info" style="padding:11px">
   业务列表<!-- <button class="btn btn-xs btn-success" style="float:right"><i class="glyphicon glyphicon-plus" onclick="document.getElementById("form").style.display="inline-block"">添加</i></button> -->
   </div>
   <div class="row">
   <table class="table table-bordered table-hover table-condescend">
   <thead>
   <tr>
   <th>
   ID
   </th>
   <th>
业务名称
   </th>
   <th>
   业务介绍
   </th>
   <th>
   报价
   </th>
      <th>
   操作
   </th>
   </tr>
   </thead>
   <tbody>
   <?php
   while($R_server=$A_server->fetch_array()){
    ?>
    <tr>
    <td>
    <?php echo $R_server[id] ?>
    </td>
    <td>
    <?php echo $R_server[name] ?>
    </td>
<td>
    <?php echo $R_server[introduce] ?>
    </td>
    <td>
    <?php echo $R_server[rmb] ?>
    </td>
    <td>
    <a href="server.php?action=del&id=<?php echo $R_server[id] ?>">删除</a>
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