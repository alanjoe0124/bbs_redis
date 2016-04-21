<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-02-26 03:50:33
         compiled from "C:\MyProgram\APMServ5.2.6\www\htdocs\bbs_smarty4.0\Smarty\templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:675856a85a6579d109-92615969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8af6077eaee661ae110dd096dd2ce1a169879ddf' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0\\Smarty\\templates\\register.html',
      1 => 1456458631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '675856a85a6579d109-92615969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a85a659b1151_87400571',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a85a659b1151_87400571')) {function content_56a85a659b1151_87400571($_smarty_tpl) {?><!DOCTYPE html>
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
        <form action="register.php" method="post">
            <table  height="350" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">  
                <tr>
                    <td align="left">
                        <button>
                            
                            <a href="index.php"> back</a>
                           <!--
                            <a href="javascript:history.go(-1);">back</a>
                         --></button>
                    </td>
                </tr>
                <!--
                                <tr>
                                    <td align="right">
                
                                        userName:
                                    </td>
                                    <td align="center">
                                        <input type="text" name="userName"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">
                                        password:
                                    </td>
                                    <td align="center">
                                        <input type="password" name="pwd"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td align="left">
                                        <input type="submit" value="register">
                                    </td>
                                </tr>
                -->
                <tr>
                    <td>
                    </td>
                    <td>
                        <table  height="350" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">
                            <tr>
                                <td align="center">
                                       userName:
                                </td>
                                <td align="left">
                                     <input type="text" name="userName"/>
                                </td>
                            </tr>
                              <tr>
                                <td align="center">
                                       password:
                                </td>
                                <td align="left">
                                     <input type="password" name="pwd"/>   
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  
                                    </td>
                                    <td align="left">
                                         <input type="submit" value="register">
                                        </td>
                                </tr>
                                <tr>
                                    <td>
                                        </td>
                                        <td>
                                           PS:Password shorter than 
                                     15 characters
                                            </td>
                                        </tr>
                        </table>
                    </td>
                    <td>
                    </td>
                </tr>
            </table>     
        </form> 
    </body>
</html><?php }} ?>
