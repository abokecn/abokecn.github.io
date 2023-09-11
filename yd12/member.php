<?php
include "../config.php";
include "../library/conf.php";
if($_POST[action]=="add"){
$Result=$conn->query("INSERT INTO `yk_member` (`id`, `name`, `position`,`QQ`) VALUES (NULL, '$_POST[name]', '$_POST[position]','$_POST[QQ]')");
 if($Result==1){
  echo '<script>alert("添加成功！");window.location.href="member.php"</script>';
}

}
if($_GET[action]=="del"){
  $Result=$conn->query("DELETE FROM `yk_member` WHERE `id`='$_GET[id]'");
  if ($Result==1) {
    echo '<script>alert("已删除");window.location.href="member.php"</script>';


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
   <form action="member.php" method="post">
   <div class="form-group">
   <label>成员昵称：</label>
   <input type="text" name="name" placeholder="名字" class="form-control">
   </div>
   <div class="form-group">
   <label>成员职位：</label>
   <input type="text" name="position" placeholder="职位" class="form-control">
   <input type="text" name="action" class="form-control sr-only" value="add">
   </div>
    <div class="form-group">
   <label>成员QQ：</label>
   <input type="text" name="QQ" placeholder="QQ" class="form-control">
  
   </div>
   <button class="form-control btn-success" type="submit">添加</button>
   </form>
   </div>
   <div class="row bg-info" style="padding:11px">
   成员列表<!-- <button class="btn btn-xs btn-success" style="float:right"><i class="glyphicon glyphicon-plus" onclick="document.getElementById("form").style.display="inline-block"">添加</i></button> -->
   </div>
   <div class="row">
   <table class="table table-bordered table-hover table-condescend">
   <thead>
   <tr>
   <th>
   ID
   </th>
   <th>
昵称
   </th>
   <th>
   职位
   </th>
   <th>
   操作
   </th>
   </tr>
   </thead>
   <tbody>
   <?php
   while($R_member=$A_member->fetch_array()){
    ?>
    <tr>
    <td>
    <?php echo $R_member[id] ?>
    </td>
    <td>
    <?php echo $R_member[name] ?>
    </td>
<td>
    <?php echo $R_member[position] ?>
    </td>
    <td>
    <a href="member.php?action=del&id=<?php echo $R_member[id] ?>">删除</a>
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