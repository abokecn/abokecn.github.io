<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
if(fopen("../config.php",r)!=false){
include "../config.php";
}
$conn=new mysqli($conf['address'],$conf['user'],$conf['password'],$conf['name']);
$Action=$conn->query("SELECT * FROM `yk_config`");
$Result=$Action->fetch_array();


$A_product=$conn->query("SELECT * FROM `yk_product`");
$A_banner=$conn->query("SELECT * FROM `yk_banner`");
$A_img=$conn->query("SELECT * FROM `yk_img`");
$A_member=$conn->query("SELECT * FROM `yk_member`");
$A_article=$conn->query("SELECT * FROM `yk_article`");
$A_serverimg=$conn->query("SELECT * FROM `yk_serverimg`");
$A_server=$conn->query("SELECT * FROM `yk_server`");
$A_yqlj=$conn->query("SELECT * FROM `yk_yqlj`");
$A_idc=$conn->query("SELECT * FROM `yk_idc`");
?>