<?php

require_once("./Smarty/config/config.php");
require_once("./ClassLib/Mysql.class.php");
require_once("./ClassLib/Cookie.class.php");
require_once("./ClassLib/Login.class.php");

$tableName = "member";
$cookie = new Cookie();
$mysql = new Mysql($db, $ip, $dbUser, $pwd);
$userName = trim($_POST['userName']);
$password = trim($_POST['pwd']);
$s = "userName";

$login=new Login();
$count=$login->check_name($mysql, $tableName, $userName,$password);
$login->cookie($cookie, $count, $s,$userName);

echo "<script>location.href='index.php'</script>";
?>

