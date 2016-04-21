<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-10 07:35:51
         compiled from "C:\MyProgram\APMServ5.2.6\www\htdocs\bbs_smarty4.0\Smarty\templates\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:3045056bae8573a9251-06180871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca5314a997aac7be7ec3cf51f76265e295307f86' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0\\Smarty\\templates\\detail.html',
      1 => 1455084818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3045056bae8573a9251-06180871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titleDetail' => 0,
    'value' => 0,
    'getMenuId' => 0,
    'page' => 0,
    'replyRows' => 0,
    'detailPages' => 0,
    'detailPage' => 0,
    'titleId' => 0,
    'detailPageList' => 0,
    'i' => 0,
    'cookieName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56bae8576480b1_25357979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bae8576480b1_25357979')) {function content_56bae8576480b1_25357979($_smarty_tpl) {?><!DOCTYPE html>
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
    </head>
    <body>               
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['titleDetail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
         <table id=tac  height="300" border="0" cellspacing="0" cellpadding="0" bgcolor="#E6E6FA ">       <!--titleDetail-->
      <th colspan="2" height="10%" align="left">
      <h4>TITLE:
          </h4>
      <h4>
              <?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>

              </h4>
      <button>
   
	  <a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"> back</a>
	<!--  
	  <a href="javascript:history.go(-1);">back</a>
      -->
	  </button>    
      </th>
             <tr height="10%">
                 <td width="20%">
                发帖人： <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

                 </td>
                 <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>

                 </td>
             </tr>   
             <tr >  
                 <td colspan="2"    > 
                     <?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>

                 </td>
             </tr>
         </table>
<?php } ?>
        
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['replyRows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
         <table id=tac  height="300" border="0" cellspacing="0" cellpadding="0" bgcolor="#E6E6FA ">       <!--replyContent-->
             <tr height="10%">
                 <td width="20%">
               回帖人：  <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

                 </td>
                 <td>
                <?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>

                 </td>
             </tr>   
             <tr >  
                 <td colspan="2"    > 
                     <?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>

                 </td>
             </tr>
         </table>
<?php } ?>
      <?php if ($_smarty_tpl->tpl_vars['detailPages']->value!=0) {?>        
<table  height="30" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">    <!--pageList-->
  
        <tr> 
            <td colspan="4" bgcolor="#E6E6FA">
                <div align="center">
                    <div class='page'>
                        <span><?php echo $_smarty_tpl->tpl_vars['detailPage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['detailPages']->value;?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['detailPage']->value!=1) {?> 
                        <a href="detail.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&detailPage=1&titleId=<?php echo $_smarty_tpl->tpl_vars['titleId']->value;?>
">首页</a>
                        <a href="detail.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&detailPage=<?php echo ($_smarty_tpl->tpl_vars['detailPage']->value-1);?>
&titleId=<?php echo $_smarty_tpl->tpl_vars['titleId']->value;?>
">上一页</a> 
                        <?php } else { ?> 
                        首页
                        上一页
                        <?php }?>

                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['detailPageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>  
                        <?php if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['detailPages']->value) {?>

                        <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['detailPage']->value) {?> 
                        <span id = "page"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                        <?php } else { ?>
                        <a href="detail.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&detailPage=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&titleId=<?php echo $_smarty_tpl->tpl_vars['titleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a> 
                        <?php }?> 
                        <?php }?>
                        <?php } ?>

                        <?php if ($_smarty_tpl->tpl_vars['detailPage']->value!=$_smarty_tpl->tpl_vars['detailPages']->value) {?> 
                        <a href="detail.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&detailPage=<?php echo $_smarty_tpl->tpl_vars['detailPage']->value+1;?>
&titleId=<?php echo $_smarty_tpl->tpl_vars['titleId']->value;?>
">下一页</a> 
                        <a href="detail.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&detailPage=<?php echo $_smarty_tpl->tpl_vars['detailPages']->value;?>
&titleId=<?php echo $_smarty_tpl->tpl_vars['titleId']->value;?>
">末页</a>
                        <?php } else { ?> 
                       下一页
                       末页
                        <?php }?>
                    </div>
                </div>
            </td> 
        </tr> 
   
    </table>
          <?php }?> 
          <?php if ($_smarty_tpl->tpl_vars['cookieName']->value!="tourist") {?>
          <table height="30" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">
              <tr><td>
              <h3><a href="reply.php?titleId=<?php echo $_smarty_tpl->tpl_vars['titleId']->value;?>
&detailPage=<?php echo $_smarty_tpl->tpl_vars['detailPage']->value;?>
&menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
">Reply</a></h3>
               </td></tr>
          </table>
          <?php } else { ?>
               <table height="30" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">
              <tr><td>
              <h3><a href="index.php">If you want to reply,login please</a></h3>
               </td></tr>
          </table>
          <?php }?>
    </body>
    
</html>
<?php }} ?>
