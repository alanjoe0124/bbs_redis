<?php

class Page {

    private $rows; // rows per page

    public function __construct($rows) {
        $this->rows = $rows;
    }

    public function page_main($count) {  // $count=mysql_num_rows($res)
        $page = empty($_GET['page']) ? 1 : $_GET['page'];  // current page 
        $rows=$this->rows;
        $offset = $rows * ($page - 1);   // limit $offset,$rows
       
        $pages = ceil($count / $rows);

        $arr = array();
        $arr['page'] = $page;
        $arr['pages'] = $pages;
        $arr['offset'] = $offset;
        return $arr;
    }

        public function detail_page_main($count) {  // $count=mysql_num_rows($res)
        $page = empty($_GET['detailPage']) ? 1 : $_GET['detailPage'];  // current page 
        $rows=$this->rows;
        $offset = $rows * ($page - 1);   // limit $offset,$rows
       
        $pages = ceil($count / $rows);

        $arr = array();
        $arr['page'] = $page;
        $arr['pages'] = $pages;
        $arr['offset'] = $offset;
        return $arr;
    }
    public function page_list($pages) {
        $page =empty($_GET['page']) ? 1 : $_GET['page'];

        $i = floor(($page - 1) / 10);
        $i = $i * 10 + 1;
        $limit = $i + 9;
        if ($pages <= $limit) {
            $max = $pages;
        } else {
            $max = $limit;
        }
        $pageArr = array();
        for ($i; $i <= $max; $i++) {
            $pageArr[] = $i;
        }
        return $pageArr;
    }

        public function detail_page_list($pages) {
        $page =empty($_GET['detailPage']) ? 1 : $_GET['detailPage'];

        $i = floor(($page - 1) / 10);
        $i = $i * 10 + 1;
        $limit = $i + 9;
        if ($pages <= $limit) {
            $max = $pages;
        } else {
            $max = $limit;
        }
        $pageArr = array();
        for ($i; $i <= $max; $i++) {
            $pageArr[] = $i;
        }
        return $pageArr;
    }
}
