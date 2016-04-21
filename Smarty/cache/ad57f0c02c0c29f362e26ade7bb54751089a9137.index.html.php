<?php /*%%SmartyHeaderCode:896956e620e4a67c91-10744149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad57f0c02c0c29f362e26ade7bb54751089a9137' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0\\Smarty\\templates\\index.html',
      1 => 1459481603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '896956e620e4a67c91-10744149',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56fdec04d38561_38932413',
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
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fdec04d38561_38932413')) {function content_56fdec04d38561_38932413($_smarty_tpl) {?><html>
    <head>
        <link href="css/bbs_smarty.css" rel="stylesheet" type="text/css" /> <!--index.php relatively-->
        <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
        </script>
        <script>
            $(document).ready(function () {
                $(".category").click(function () {
                    $(".subCategory").slideToggle();
                });
            });
        </script>
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
						<?php echo insert_get_current_time(array (
),$_smarty_tpl);?>
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

                <table   border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
            <th height="50" class="category" colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="left"><h2>My College</h2></th>

        <tr height="100" class="subCategory">
                        <td align="center" > 
                <table >
                    <tr>
                        <td align="center"><h3><a href="titleList.php?menuId=3">
                                    SCHOOL LIFE </a></h3>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><h4>
                                Posting Number:(22)</h4>
                        </td>
                    </tr>
                </table>
            </td>

                        <td align="center" > 
                <table >
                    <tr>
                        <td align="center"><h3><a href="titleList.php?menuId=4">
                                    CAMPUS ONE CORNER </a></h3>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><h4>
                                Posting Number:(1)</h4>
                        </td>
                    </tr>
                </table>
            </td>

             
        </tr>
    </table>
            <table   border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
            <th height="50" class="category" colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="left"><h2>Entertainment</h2></th>

        <tr height="100" class="subCategory">
                        <td align="center" > 
                <table >
                    <tr>
                        <td align="center"><h3><a href="titleList.php?menuId=5">
                                    TV </a></h3>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><h4>
                                Posting Number:(0)</h4>
                        </td>
                    </tr>
                </table>
            </td>

                        <td align="center" > 
                <table >
                    <tr>
                        <td align="center"><h3><a href="titleList.php?menuId=6">
                                    MOVIE </a></h3>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><h4>
                                Posting Number:(0)</h4>
                        </td>
                    </tr>
                </table>
            </td>

             
        </tr>
    </table>
            <table   border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
            <th height="50" class="category" colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="left"><h2>life</h2></th>

        <tr height="100" class="subCategory">
                        <td align="center" > 
                <table >
                    <tr>
                        <td align="center"><h3><a href="titleList.php?menuId=8">
                                    DELICACY </a></h3>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><h4>
                                Posting Number:(0)</h4>
                        </td>
                    </tr>
                </table>
            </td>

                        <td align="center" > 
                <table >
                    <tr>
                        <td align="center"><h3><a href="titleList.php?menuId=9">
                                    CLOTHES </a></h3>
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><h4>
                                Posting Number:(0)</h4>
                        </td>
                    </tr>
                </table>
            </td>

             
        </tr>
    </table>
    
    <table  height="150" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
        <th colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="center"><h3> Post Rank top 10</h3></th>
        <tr>
        <td>aa</td>

        <td>16</td>


    </tr>  
        <tr>
        <td>bb</td>

        <td>4</td>


    </tr>  
        <tr>
        <td>cc</td>

        <td>1</td>


    </tr>  
        <tr>
        <td></td>

        <td>1</td>


    </tr>  
        <tr>
        <td>yyyyyyyyyf</td>

        <td>0</td>


    </tr>  
        <tr>
        <td>yyyyyyyyy</td>

        <td>0</td>


    </tr>  
        <tr>
        <td>tyu</td>

        <td>0</td>


    </tr>  
        <tr>
        <td>tre</td>

        <td>0</td>


    </tr>  
        <tr>
        <td>qwe</td>

        <td>0</td>


    </tr>  
        <tr>
        <td>mm</td>

        <td>0</td>


    </tr>  
        <tr>
        <td>kk</td>

        <td>0</td>


    </tr>  
    </table>
</body>
</html><?php }} ?>
