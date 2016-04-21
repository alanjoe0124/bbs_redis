<?php

class Detail {

    public function cookie_handle($s, $cookie, $smarty) {
        $cookieName = $cookie->get_cookie($s);
        if ($cookieName != NULL) {
            $cookie_name = $cookieName;
        } else {
            $cookie_name = "tourist";
        }
        $smarty->assign("cookieName", $cookie_name);
    }

    public function title_detail($mysql, $titleId, $table, $smarty) {
//$sql="select * from bbs where id=".$titleId;
        $where = array();
        $where["id"] = $titleId;
        $sql = $mysql->select($table, $cols = array(), $where);
        $titleDetail = $mysql->fetchArr($sql);
        $smarty->assign("titleDetail", $titleDetail);  //titleDetail
    }

    public function reply_detail($mysql, $titleId, $table, $smarty, $offset, $rowsPerPage) {
        $where = array();
        $where["parent"] = $titleId;
        $orderBy = "time";
        $limit = array();
        $limit["$offset"] = $rowsPerPage;
        $sql = $mysql->select($table, $cols = array(), $where, $orderBy, $limit);
        $rows = $mysql->fetchArr($sql);
        $smarty->assign('replyRows', $rows);
    }

    public function page_handle($titleId, $table, $mysql, $paging) {
        $where = array();
        $where["parent"] = $titleId;
        $sql = $mysql->select($table, $cols = array(), $where);
        $res = $mysql->query($sql);
        $resCount = $mysql->num_rows($res); // page count

        $arrPaging = $paging->detail_page_main($resCount);
        /*
          $detailPage = $arrPaging['page'];
          $detailPages = $arrPaging['pages']; //offset ,pages
          $offset = $arrPaging['offset'];
         */
        return $arrPaging;
    }

    public function page_list($paging,$detailPages,$detailPage,$smarty) {
        $detailPageList = $paging->detail_page_list($detailPages);  // show pages  
        $smarty->assign('detailPageList', $detailPageList);        //page number list  
        $smarty->assign('detailPage', $detailPage);
        $smarty->assign('detailPages', $detailPages);
    }

    public function parameter_pass($smarty,$titleId) {
        $getMenuId = $_GET['menuId'];
        $smarty->assign("getMenuId", $getMenuId);
        $page = $_GET['page'];
        $smarty->assign("page", $page);
        $smarty->assign("titleId",$titleId);
    }

}

?>