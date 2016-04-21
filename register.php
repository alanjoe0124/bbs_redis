<?php

require_once("./ClassLib/Register.class.php");
require_once("./Smarty/config/config.php");
require_once("./ClassLib/Mysql.class.php");
require_once("./ClassLib/Cookie.class.php");
$mysql=new Mysql($db,$ip,$dbUser,$pwd);
$cookie=new Cookie();
$redis=new Redis();
$userName = trim($_POST['userName']);
$password = trim($_POST['pwd']);
$length_pwd = strlen($password);
if ($length_pwd > 15) {
    $password = NULL;
}
$table="member";
$register=new Register();
$register->register_handle($cookie,$mysql, $redis,$smarty,$userName,$password,$table);

?>
