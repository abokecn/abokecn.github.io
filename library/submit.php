<?php
include "../config.php";
$conn=new mysqli($conf['address'],$conf['user'],$conf['password'],$conf['name']);
$time=date("Y-m-d H:i:s",time());
$Result=$conn->query("INSERT INTO `yk_workform` (`id`, `name`, `email`, `object`, `content`, `time`) VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[message]', '$time')
");

if($Result==false){
	echo '<script>alert("提交失败，请联系客服解决！");window.location.href="../"</script>';
}else{
	echo '<script>alert("提交成功，我们尽快联系您！");window.location.href="../"</script>';
}
?>