<?php
require_once("./Smarty/config/config.php");
require_once("./ClassLib/Reply.class.php");
require_once("./ClassLib/Mysql.class.php");
require_once("./ClassLib/Cookie.class.php");

$table="bbs";
$s = "userName";
$cookie = new Cookie();
$mysql=new Mysql($db, $ip, $dbUser, $pwd);
$reply=new Reply();

$titleId=$_REQUEST['titleId'];
$detailPage=$_REQUEST['detailPage'];
$menuId=$_REQUEST['menuId'];
$reply->parameter_pass($smarty, $titleId, $menuId, $detailPage);
$cookie_name=$reply->cookie_handle($cookie, $s);
$replyPost = trim($_POST['replyPost']);

if ($replyPost != NULL) {
    $reply->insert_reply($cookie_name,$replyPost,$titleId,$table,$mysql);
    $reply->update_replycount($titleId,$table,$mysql);
    echo "<script>location.href='detail.php?menuId=$menuId&titleId=$titleId&detailPage=$detailPage'</script>";
} else {
    $smarty->display("reply.html");
}
?>



