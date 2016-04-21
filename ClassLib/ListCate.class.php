<?php

class ListCate {

    public function categoryRows($tableName, $mysql) {
        //       $sql="select * from ".$tableName." where parent=0";
        //       $res=mysql_query($sql);
        $where = array();
        $where["parent"] = 0;
        $sql = $mysql->select($tableName, $cols = array(), $where, $orderBy = "", $limit = array());
        //      echo $sql;
        $res = $mysql->query($sql);

        while ($row = $mysql->fetch_array($res)) {
            $data[$row["id"]]["id"] = $row["id"];
            $data[$row["id"]]["name"] = $row["name"];
            $data[$row["id"]]["postnum"] = $row["postnum"];
            $data[$row["id"]]["child"] = $this->subCategoryRows($row["id"], $tableName, $mysql);
        }

        return $data;
    }

    public function subCategoryRows($cate_id, $tableName, $mysql) {
        /*
          $sql="select * from ".$tableName." where parent=".$cate_id;
          $res=mysql_query($sql);
         */
        $where = array();
        $where["parent"] = $cate_id;
        $sql = $mysql->select($tableName, $cols = array(), $where, $orderBy = "", $limit = array());
        $res = $mysql->query($sql);
        while ($row = $mysql->fetch_array($res)) {
            $data[$row["id"]]["id"] = $row["id"];
            $data[$row["id"]]["name"] = $row["name"];
            $data[$row["id"]]["postnum"] = $row["postnum"];
            $data[$row["id"]]["child"] = $this->subCategoryRows($row["id"], $tableName, $mysql);
        }

        return $data;
    }

}
