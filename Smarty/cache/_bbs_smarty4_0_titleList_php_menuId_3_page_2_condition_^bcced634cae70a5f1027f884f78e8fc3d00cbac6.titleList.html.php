<?php /*%%SmartyHeaderCode:504456f0b43179f463-38466538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcced634cae70a5f1027f884f78e8fc3d00cbac6' => 
    array (
      0 => 'C:\\MyProgram\\APMServ5.2.6\\www\\htdocs\\bbs_smarty4.0\\Smarty\\templates\\titleList.html',
      1 => 1458698822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '504456f0b43179f463-38466538',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56fdeba2579f80_45014429',
  'has_nocache_code' => true,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fdeba2579f80_45014429')) {function content_56fdeba2579f80_45014429($_smarty_tpl) {?><!DOCTYPE html>
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
        <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
        </script>
        <script>
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
                                <td align="left">
                    <h3>
                        School life
                    </h3>
                </td>  
                                <td align="left">
                    <form action="searchList.php" method="post">
                        <input type="hidden" name="menuId" value="3"/>
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
                                        <a href="index.php">If you want to post,login please</a>
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
                <tr class="onTopList" align="center" >
            <td>
                <a href = "detail.php?titleId=10&menuId=3">
                    aa1
                </a>
            </td>
            <td>
                aa
            </td>
            <td>
                2016-04-01 01:52:14
            </td>
            <td>
                2
            </td>
        </tr>
                <tr class="onTopList" align="center" >
            <td>
                <a href = "detail.php?titleId=11&menuId=3">
                    aa2
                </a>
            </td>
            <td>
                aa
            </td>
            <td>
                2015-08-22 13:41:57
            </td>
            <td>
                0
            </td>
        </tr>
            </table>

    <br>
    <table  id="tab" height="50" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
        <th class="topics" colspan="4" style="border:2px solid #C0C0C0 "  height="10" align="left">

        <h4>
            Topics
        </h4>
        <a href="titleList.php?condition=time&menuId=3">New
        </a>
        &nbsp;
        <a href="titleList.php?condition=reply_count&menuId=3">Hot
        </a>

    </th>
    <tr class="topicsList" align="center">
        <td width="25%">Title</td>
        <td width="25%">name</td>
        <td width="25%">time</td>
        <td width="25%">replyCount</td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=16&menuId=3&page=2">
                bb4
            </a>
        </td>
        <td>
            bb
        </td>
        <td>
            2015-08-22 13:38:11
        </td>
        <td>
            5
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=22&menuId=3&page=2">
                cc1
            </a>
        </td>
        <td>
            cc
        </td>
        <td>
            2015-08-22 13:47:06
        </td>
        <td>
            0
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=23&menuId=3&page=2">
                wqerwqer
            </a>
        </td>
        <td>
            aa
        </td>
        <td>
            2015-08-22 20:59:50
        </td>
        <td>
            2
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=27&menuId=3&page=2">
                hehehe
            </a>
        </td>
        <td>
            aa
        </td>
        <td>
            2016-01-04 09:20:28
        </td>
        <td>
            1
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=39&menuId=3&page=2">
                2016年2月11日15:54:23
            </a>
        </td>
        <td>
            aa
        </td>
        <td>
            2016-02-11 15:54:33
        </td>
        <td>
            0
        </td>
    </tr>
        <tr class="topicsList" align="center" >
        <td>
            <a href = "detail.php?titleId=40&menuId=3&page=2">
                 2016年2月11日16:22:16
            </a>
        </td>
        <td>
            aa
        </td>
        <td>
            2016-02-11 16:51:58
        </td>
        <td>
            0
        </td>
    </tr>
    </table>
<table class="topicsList" height="30" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">    <!--pageList-->
        <tr> 
        <td colspan="4" bgcolor="#E6E6FA">
            <div align="center">
                <div class='page'>
                    <span>2/4</span>
                     
                    <a href="titleList.php?menuId=3&page=1&condition=">首页</a>
                    <a href="titleList.php?menuId=3&page=1&condition=">上一页</a> 
                    
                      
                    
                                        <a href="titleList.php?menuId=3&page=1&condition=">1</a> 
                     
                                          
                    
                     
                    <span id = "page">2</span>
                     
                                          
                    
                                        <a href="titleList.php?menuId=3&page=3&condition=">3</a> 
                     
                                          
                    
                                        <a href="titleList.php?menuId=3&page=4&condition=">4</a> 
                     
                                        
                     
                    <a href="titleList.php?menuId=3&page=3&condition=">下一页</a> 
                    <a href="titleList.php?menuId=3&page=4&condition=">末页</a>
                                    </div>
            </div>
        </td> 
    </tr> 
    </table>
<table  height="150" border="0" cellspacing="0" cellpadding="1" bgcolor="#E6E6FA ">       <!--title-->
    <th colspan="2"  style="border:1px solid #C0C0C0 "  height="50" align="center"><h3>Thanks for surfing</h3></th>
</table>
</body>
</html>
<?php }} ?>
