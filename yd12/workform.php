<?php
include "../config.php";
include "../library/conf.php";
$A_workform=$conn->query("SELECT * FROM `yk_workform`");
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
   
   <div class="row bg-info" style="padding:11px">
   轮播图列表<!-- <button class="btn btn-xs btn-success" style="float:right"><i class="glyphicon glyphicon-plus" onclick="document.getElementById("form").style.display="inline-block"">添加</i></button> -->
   </div>
   <div class="row">
   <table class="table table-bordered table-hover table-condescend">
   <thead>
   <tr>
   <th>
   ID
   </th>
   <th>
提交人
   </th>
   <th>
   邮箱
   </th>
   <th>
   项目
   </th>
   <th>
   内容
   </th>
   <th>
   提交时间
   </th>
   <th>
   操作
   </th>
   </tr>
   </thead>
   
   
   <tbody>
   <?php
   while($R_workform=$A_workform->fetch_array()){
    ?>
    <tr>
    <td>
    <?php echo $R_workform[id] ?>
    </td>
    <td>
    <?php echo $R_workform[name] ?>
    </td>
        <td>
    <?php echo $R_workform[eamil] ?>
    </td>
        <td>
    <?php echo $R_workform[object] ?>
    </td>
<td>
    <?php echo $R_workform[content] ?>
    </td>
    <td>
    <?php echo $R_workform[time] ?>
    </td>
    <td>
    <a href="workform.php?action=del&id=<?php echo $R_workform[id] ?>">删除</a>
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