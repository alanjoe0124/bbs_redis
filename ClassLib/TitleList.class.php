<?php

class TitleList {

    public function cookie_handle($s, $cookie, $smarty) {
        $cookieName = $cookie->get_cookie($s);
        if ($cookieName != NULL) {
            $cookie_name = $cookieName;
        } else {
            $cookie_name = "tourist";
        }
        $smarty->assign("cookieName", $cookie_name); //get cooike name end
    }

    public function get_cate_name($getMenuId, $tableCateName, $mysql, $smarty) {
        $cols = array();
        $cols['0'] = "name";
        $where = array();
        $where['id'] = "$getMenuId";
        $sql = $mysql->select($tableCateName, $cols, $where, $orderBy = "", $limit = array()); //$sql = "select name from menu where id=" . $getMenuId;
        $subCategoryName = $mysql->fetchArr($sql);
        $smarty->assign("subCategoryName", $subCategoryName); // get category name end
    }

    public function page_handle($getMenuId, $tableBbsName, $mysql, $paging) {
        //$tablebbsName="bbs";
        //$sql = "select * from bbs where menu = " . $getMenuId;  
        $where = array();
        $where['menu'] = "$getMenuId";
        $sql = $mysql->select($tableBbsName, $cols = array(), $where, $orderBy = "", $limit = array());
        $res = $mysql->query($sql);
        $resCount = $mysql->num_rows($res); // page count

        $arrPaging = $paging->page_main($resCount);
        //    $page = $arrPaging['page'];
        //    $pages = $arrPaging['pages']; //offset ,pages
        //    $offset = $arrPaging['offset'];
        return $arrPaging;
    }

    public function list_titles($getMenuId, $getCondition, $rowsPerPage, $tableBbsName, $mysql, $smarty, $offset) {
        //  $sql = "select * from bbs where menu='" . $getMenuId . "' order by " . $getCondition . " desc limit $offset,$rowsPerPage"; 
        $where = array();
        $where["menu"] = $getMenuId;
        $orderBy = $getCondition;
        $limit = array();
        $limit["$offset"] = $rowsPerPage;
        $sql = $mysql->select($tableBbsName, $cols = array(), $where, $orderBy, $limit);
        $rows = $mysql->fetchArr($sql);
        $smarty->assign('titleRows', $rows);
    }

    public function list_tops($getMenuId, $tableBbsName, $smarty, $mysql) {
        $where = array("ontop" => '1', "menu" => "$getMenuId");
        $sql = $mysql->select($tableBbsName, $cols = array(), $where);
        $topbbs = $mysql->fetchArr($sql);
        $smarty->assign("topbbs", $topbbs);
    }

    public function page_list($paging,$smarty,$page,$pages,$getMenuId,$getCondition) {
        $pageList = $paging->page_list($pages);  // show pages  
        $smarty->assign('pageList', $pageList);        //page number list  
        $smarty->assign('page', $page);
        $smarty->assign('pages', $pages);
        $smarty->assign('getMenuId', $getMenuId);
        $smarty->assign('getCondition', $getCondition);
    }

}

?>
