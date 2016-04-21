<?php

require_once("./ClassLib/Cookie.class.php");
require_once("./Smarty/config/config.php");
require_once("./ClassLib/Mysql.class.php");
require_once("./ClassLib/Page.class.php");
require_once("./ClassLib/Detail.class.php");

$table = "bbs";
$titleId = $_GET['titleId'];

$mysql = new Mysql($db, $ip, $dbUser, $pwd); 

$detail = new Detail();

$detail->title_detail($mysql,$titleId,$table,$smarty);// post content detail

$detail->parameter_pass($smarty,$titleId);

$cookie = new Cookie();
$s = "userName";
$detail->cookie_handle($s, $cookie, $smarty);

///////////////// page handle

$rowsPerPage = 4;  //rows per page
$paging = new Page($rowsPerPage);

$arrPaging = $detail->page_handle($titleId, $table, $mysql, $paging);
$detailPage = $arrPaging['page'];
$detailPages = $arrPaging['pages']; //offset ,pages
$offset = $arrPaging['offset'];

//////////list reply content
$detail->reply_detail($mysql, $titleId, $table, $smarty,$offset,$rowsPerPage);
/////////////////   pages list
$detail->page_list($paging, $detailPages, $detailPage,$smarty);

$smarty->display("detail.html");
?>

