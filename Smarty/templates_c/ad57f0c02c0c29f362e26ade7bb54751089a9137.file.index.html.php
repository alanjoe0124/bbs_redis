<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-01 03:21:43
         compiled from "C:\MyProgram\APMServ5.2.6\www\htdocs\bbs_smarty4.0\Smarty\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:7867569b6fe45add77-86239973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad57f0c02c0c29f362e26ade7bb54751089a9137' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0\\Smarty\\templates\\index.html',
      1 => 1459449958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7867569b6fe45add77-86239973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_569b6fe4915c03_50195103',
  'variables' => 
  array (
    'cookieName' => 1,
    'categoryRows' => 0,
    'cateValue' => 0,
    'subCateValue' => 0,
    'arrRank' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569b6fe4915c03_50195103')) {function content_569b6fe4915c03_50195103($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0\\Smarty\\plugins\\modifier.capitalize.php';
?><html>
    <head>
        <link href="css/bbs_smarty.css" rel="stylesheet" type="text/css" /> <!--index.php relatively-->
        <?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $(document).ready(function () {
                $(".category").click(function () {
                    $(".subCategory").slideToggle();
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
                    <?php if ($_smarty_tpl->tpl_vars['cookieName']->value==null) {?>  
                    <table cellspacing="1" cellpadding="1">
                        <form action="login.php" method="post" name="register_login">
                            <tr>
                                <td align="right">
                                    UserName:
                                </td>
                                <td align="left">
                                    <input type="text" name="userName"  />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Password:
                                </td>
                                <td align="left">
                                    <input type="password" name="pwd"  />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td align="left">
                                    <input type="submit" value="login" />
                                    <button><a href="register.php">register</a></button>
                                </td>

                            </tr>
                        </form>
                    </table>
                    <?php } else { ?>

                    <?php }?>
                </td>
                <?php if ($_smarty_tpl->tpl_vars['cookieName']->value!=null) {?>
                <td align="center" width="33%">
                    <h3>
                        <?php echo $_smarty_tpl->tpl_vars['cookieName']->value;?>

                    </h3>
                    <h4><a href='index.php?logout=1'>logout</a>
                    </h4>
					<h4>
						<?php echo insert_get_current_time(array(),$_smarty_tpl);?>

					<h4>
					<!--
					<h4>
						<?php echo time();?>

					<h4>
					-->
                </td>
                <?php } else { ?>
                <td align="center" width="33%" >

                </td>
                <?php }?>
            </tr>
        </table>
	
        <br>

        <?php  $_smarty_tpl->tpl_vars['cateValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cateValue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryRows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cateValue']->key => $_smarty_tpl->tpl_vars['cateValue']->value) {
$_smarty_tpl->tpl_vars['cateValue']->_loop = true;
?>
        <table   border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
            <th height="50" class="category" colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="left"><h2><?php echo $_smarty_tpl->tpl_vars['cateValue']->value['name'];?>
</h2></th>

        <tr height="100" class="subCategory">
            <?php  $_smarty_tpl->tpl_vars['subCateValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subCateValue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cateValue']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subCateValue']->key => $_smarty_tpl->tpl_vars['subCateValue']->value) {
$_smarty_tpl->tpl_vars['subCateValue']->_loop = true;
?>
            <td align="center" > 
                <table >
                    <tr>
                        <td align="center"><h3><a href="titleList.php?menuId=<?php echo $_smarty_tpl->tpl_vars['subCateValue']->value['id'];?>
">
                                    <?php echo mb_strtoupper(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['subCateValue']->value['name']), 'UTF-8');?>
 </a></h3>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><h4>
                                Posting Number:(<?php echo $_smarty_tpl->tpl_vars['subCateValue']->value['postnum'];?>
)</h4>
                        </td>
                    </tr>
                </table>
            </td>

            <?php } ?> 
        </tr>
    </table>
    <?php } ?>

    <table  height="150" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
        <th colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="center"><h3>Post Rank top 10</h3></th>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrRank']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>

        <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>


    </tr>  
    <?php } ?>
</table>
</body>
</html><?php }} ?>
