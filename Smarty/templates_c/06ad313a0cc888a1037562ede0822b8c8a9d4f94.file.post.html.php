<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-11 06:58:26
         compiled from "C:\MyProgram\APMServ5.2.6\www\htdocs\bbs_smarty4.0\Smarty\templates\post.html" */ ?>
<?php /*%%SmartyHeaderCode:2925856bc31123b3a18-10725623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06ad313a0cc888a1037562ede0822b8c8a9d4f94' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0\\Smarty\\templates\\post.html',
      1 => 1455173552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2925856bc31123b3a18-10725623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subCategoryName' => 0,
    'value' => 0,
    'getMenuId' => 0,
    'page' => 0,
    'cookieName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56bc311249d4d9_15642686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56bc311249d4d9_15642686')) {function content_56bc311249d4d9_15642686($_smarty_tpl) {?><!DOCTYPE html>
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
  <table id="tab" height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--head-->
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
                </td>
                <td>
                    <button>
                    <a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">Back</a>
                    </button>
                    </td>
            </tr>
        </table>    
        <form action="post.php" method="post">
            <input type="hidden" name="cookieName" value="<?php echo $_smarty_tpl->tpl_vars['cookieName']->value;?>
">
            <input type="hidden" name="menuId" value="<?php echo $_smarty_tpl->tpl_vars['getMenuId']->value;?>
">
            <input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
            <table id="tab" height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
            <tr>
                <td align="left" width="33%">
                        <h3>Title:</h3>
                </td>  
  
                <td align="left" width="33%">
                    <input class=inpt type="text" name="titleName" width="300" />
                </td>
                <td>
                    
                    </td>
            </tr>
        </table>             
        
         <table id="tab" height="600" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--content-->
            <tr >
                <td align="left" width="33%">
                        <h3>Content:</h3>
                </td>  
  
                <td align="left" width="67%" height="500">
                  
                    <textarea  name="titleContent"  ></textarea>     
                    <input type="submit" value="submit" />
                </td>
         
            </tr>
        </table>    
        </form>
    </body>
</html>
<?php }} ?>
