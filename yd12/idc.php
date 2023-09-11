<?php
include "../config.php";
include "../library/conf.php";
if($_POST[action]=="add"){
$Result=$conn->query("INSERT INTO `yk_idc` (`id`, `cpu`, `ddr`, `ssd`, `dk`, `xl`, `ddos`, `rmb`) VALUES ('$_POST[id]', '$_POST[cpu]', '$_POST[ddr]', '$_POST[ssd]', '$_POST[dk]', '$_POST[xl]', '$_POST[ddos]', '$_POST[rmb]')");
 if($Result==1){
  echo '<script>alert("添加成功！");window.location.href="idc.php"</script>';
}

}
if($_GET[action]=="del"){
  $Result=$conn->query("DELETE FROM `yk_idc` WHERE `id`='$_GET[id]'");
  if ($Result==1) {
    echo '<script>alert("已删除");window.location.href="idc.php"</script>';


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
   <form action="idc.php" method="post">
       <div class="form-group">
   <label>排序：</label>
   <input type="text" name="id" placeholder="位置" class="form-control">
      <input type="text" name="action" class="form-control sr-only" value="add">
   </div>
   <div class="form-group">
   <label>CPU处理器：</label>
   <input type="text" name="cpu" placeholder="CPU" class="form-control">
   </div>
   <div class="form-group">
   <label>内存：</label>
   <input type="text" name="ddr" placeholder="DDR" class="form-control">
      <input type="text" name="action" class="form-control sr-only" value="add">
   </div>
   <div class="form-group">
   <label>硬盘：</label>
   <input type="text" name="ssd" placeholder="硬盘" class="form-control">
   </div>
   <div class="form-group">
   <label>带宽：</label>
   <input type="text" name="dk" placeholder="带宽" class="form-control">
   </div>
   <div class="form-group">
   <label>线路：</label>
   <input type="text" name="xl" placeholder="线路" class="form-control">
   <div class="form-group">
   <label>防御：</label>
   <input type="text" name="ddos" placeholder="防御" class="form-control">
   </div>
   <div class="form-group">
   <label>价格：</label>
   <input type="text" name="rmb" placeholder="月租" class="form-control">
   </div>
   <button class="form-control btn-success" type="submit">添加</button>
   </form>
   </div>
    <div class="row bg-info" style="padding:11px">
   物理服务器<!-- <button class="btn btn-xs btn-success" style="float:right"><i class="glyphicon glyphicon-plus" onclick="document.getElementById("form").style.display="inline-block"">添加</i></button> -->
   </div>
   <div class="row">
   <table class="table table-bordered table-hover table-condescend">
   <thead>
   <tr>
   <th>
   ID
   </th>
   <th>
服务器
   </th>
   <th>
   内存
   </th>
   <th>
   硬盘
   </th>
      <th>
   带宽
   </th>
      <th>
   线路
   </th>
      <th>
   防御
   </th>
      <th>
   价格
   </th>
      <th>
   操作
   </th>
   </tr>
   </thead>
   <tbody>
   <?php
   while($R_idc=$A_idc->fetch_array()){
    ?>
    <tr>
    <td>
    <?php echo $R_idc [id] ?>
    </td>
    <td>
    <?php echo $R_idc[cpu] ?>
    </td>
    <td>
    <?php echo $R_idc[ddr] ?>
    </td>
    <td>
    <?php echo $R_idc[ssd] ?>
    </td>
        <td>
    <?php echo $R_idc[dk] ?>
    </td>
        <td>
    <?php echo $R_idc[xl] ?>
    </td>
        <td>
    <?php echo $R_idc[ddos] ?>
    </td>
        <td>
    <?php echo $R_idc[rmb] ?>
    </td>
    <td>
    <a href="idc.php?action=del&id=<?php echo $R_idc[id] ?>">删除</a>
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