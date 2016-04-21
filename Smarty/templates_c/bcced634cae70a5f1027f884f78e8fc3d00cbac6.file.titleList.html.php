<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-18 03:12:02
         compiled from "C:\MyProgram\APMServ5.2.6\www\htdocs\bbs_smarty4.0\Smarty\templates\titleList.html" */ ?>
<?php /*%%SmartyHeaderCode:1597356ae3774012f21-13505104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcced634cae70a5f1027f884f78e8fc3d00cbac6' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0\\Smarty\\templates\\titleList.html',
      1 => 1458270720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1597356ae3774012f21-13505104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56ae377466bde1_91601138',
  'variables' => 
  array (
    'cookieName' => 0,
    'subCategoryName' => 0,
    'value' => 0,
    'getMenuId' => 0,
    'page' => 0,
    'topbbs' => 0,
    'titleRows' => 0,
    'pages' => 0,
    'getCondition' => 0,
    'pageList' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ae377466bde1_91601138')) {function content_56ae377466bde1_91601138($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bbs_smarty.css" rel="stylesheet" type="text/css" />
        <?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(document).ready(function () {
                $(".onTop").click(function () {
                    $(".onTopList").slideToggle();
                });
            });
            $(document).ready(function(){
                $(".topics").click(function(){
                    $(".topicsList").slideToggle();
                });
            });
        <?php echo '</script'; ?>
>
    </head>
    <body>
        <table  height="100" border="0" cellspacing="0" cellpadding="1" bgcolor="#D8BFD8">     <!--head-->
            <tr>
                <td align="left" >
                    <h1>
                        <a href="index.php">
                            BBS
                        </a>
                    </h1>
                </td>
                <td  width="33%">

                </td>
                <?php if ($_smarty_tpl->tpl_vars['cookieName']->value!="tourist") {?>
                <td align="center" width="33%">
                    <h3>
                        <?php echo $_smarty_tpl->tpl_vars['cookieName']->value;?>

                    </h3>
                    <h4><a href='index.php?logout=1'>logout</a>
                    </h4>
                </td>
                <?php } else { ?>
                <td align="center" width="33%" >

                </td>
                <?php }?>
            </tr>
        </table>
        <br>
        <table  height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
            <tr>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subCategoryName']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <td align="left">
                    <h3>
                        <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

                    </h3>
                </td>  
                <?php } ?>
                <td align="left">
                    <form action="searchList.php" method="post">
                        <input type="hidden" name="menuId" value="<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
"/>
                        <td align="left">   
                            <select name="searchType">
                                <option value="title">title</option>
                                <option value="name">name</option>
                            </select>
                            <input type="text" name="searchContent"/>
                            <input type="submit" value="search"/>
                    </form>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['cookieName']->value!="tourist") {?>
                    <button><a href="post.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">Post</a></button>
                    <?php } else { ?>
                    <a href="index.php">If you want to post,login please</a>
                    <?php }?>
                </td>
            </tr>
        </table>
        <br>


        <table  id="tab" height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--top-->
            <th class="onTop" colspan="4" style="border:2px solid #C0C0C0 "  height="10" align="left">

            <h4>
                OnTop
            </h4>

        </th>
        <tr class="onTopList" align="center">
            <td width="25%">Title</td>
            <td width="25%">name</td>
            <td width="25%">time</td>
            <td width="25%">replyCount</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topbbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <tr class="onTopList" align="center" >
            <td>
                <a href = "detail.php?titleId=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
">
                    <?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>

                </a>
            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['reply_count'];?>

            </td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <table  id="tab" height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
        <th class="topics" colspan="4" style="border:2px solid #C0C0C0 "  height="10" align="left">

        <h4>
            Topics
        </h4>
        <a href="titleList.php?condition=time&menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
">New
        </a>
        &nbsp;
        <a href="titleList.php?condition=reply_count&menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
">Hot
        </a>

    </th>
    <tr class="topicsList" align="center">
        <td width="25%">Title</td>
        <td width="25%">name</td>
        <td width="25%">time</td>
        <td width="25%">replyCount</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['titleRows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
    <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>

            </a>
        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>

        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['value']->value['reply_count'];?>

        </td>
    </tr>
    <?php } ?>
</table>
<table class="topicsList" height="30" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">    <!--pageList-->
    <?php if ($_smarty_tpl->tpl_vars['pages']->value!=0) {?>
    <tr> 
        <td colspan="4" bgcolor="#E6E6FA">
            <div align="center">
                <div class='page'>
                    <span><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value!=1) {?> 
                    <a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=1&condition=<?php echo $_smarty_tpl->tpl_vars['getCondition']->value;?>
">首页</a>
                    <a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=<?php echo ($_smarty_tpl->tpl_vars['page']->value-1);?>
&condition=<?php echo $_smarty_tpl->tpl_vars['getCondition']->value;?>
">上一页</a> 
                    <?php } else { ?> 
                    首页
                    上一页
                    <?php }?>

                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>  
                    <?php if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['pages']->value) {?>

                    <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['page']->value) {?> 
                    <span id = "page"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                    <?php } else { ?>
                    <a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&condition=<?php echo $_smarty_tpl->tpl_vars['getCondition']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a> 
                    <?php }?> 
                    <?php }?>
                    <?php } ?>

                    <?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['pages']->value) {?> 
                    <a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
&condition=<?php echo $_smarty_tpl->tpl_vars['getCondition']->value;?>
">下一页</a> 
                    <a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
&condition=<?php echo $_smarty_tpl->tpl_vars['getCondition']->value;?>
">末页</a>
                    <?php } else { ?> 
                    下一页
                    末页
                    <?php }?>
                </div>
            </div>
        </td> 
    </tr> 
    <?php }?>
</table>
<table  height="150" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
    <th colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="center"><h3>Thanks for surfing</h3></th>
</table>
</body>
</html>
<?php }} ?>
