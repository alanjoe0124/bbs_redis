<?php

class SearchList {

    public function main($getMenuId,$getCondition,$table,$mysql,$smarty) {
        if ($_POST['searchType'] != NULL && $_POST['searchContent'] != NULL) {

            $searchType = $_POST['searchType'];
            $searchContent = $_POST['searchContent'];
            //$sql = "select * from bbs where menu='".$getMenuId."' and ".$searchType." like '$searchContent%' order by time desc";
            $where = array();
            $where["menu"] = $getMenuId;
            $like = array();
            $like["$searchType"] = $searchContent;
            $orderBy = $getCondition;
            $sql = $mysql->select($table, $cols, $where, $orderBy, $limit, $like);
            $rows = $mysql->fetchArr($sql);
            $smarty->assign('titleRows', $rows);
            $smarty->assign('getMenuId', $getMenuId);
            $smarty->display("searchList.html");
        } else {
            echo "<script>location.href='titleList.php?menuId=" . $getMenuId . "'</script>";
        }
    }

}               
?>

