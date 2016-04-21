<?php

Class Mysql {

    private $db;
    private $ip;
    private $userName;
    private $pwd;
    private $connect;

    public function __construct($db, $ip, $userName, $pwd) {
        $this->db = $db;
        $this->ip = $ip;
        $this->pwd = $pwd;
        $this->userName = $userName;
        $this->connect();
    }

    public function __destruct() {
        mysql_close($this->connect);
    }

    public function connect() {
        $this->connect = mysql_connect($this->ip, $this->userName, $this->pwd);
        mysql_query("set names utf8");
        mysql_select_db("$this->db", $this->connect);
    }

    public function query($sql) {
        $res = mysql_query($sql);
        return $res;
    }

    public function fetchArr($sql) {   // list result rows 
        $res = $this->query($sql);
        $data = array();
        //   while($row=  mysql_fetch_array($res,MYSQL_ASSOC)){
        while ($row = $this->fetch_array($res)) {
            $data[] = $row;
        }
        return $data;
    }

    public function fetch_array($res) {
        $row = mysql_fetch_array($res, MYSQL_ASSOC);
        return $row;
    }

    public function num_rows($res) {
        $count = mysql_num_rows($res);
        return $count;
    }

    public function select($table, $cols = array(), $where = array(), $orderBy = "", $limit = array(), $like = array()) {   // sql for select 
        //select * or $sCols from table where col=v and col_2=v_2 order by conditon limit offset,size
        // * or $sCols
        $sCols = "*";
        if (!empty($cols)) {
            $sCols = "";
            $i = 0;
            foreach ($cols as $ko => $vo) {
                if ($i > 0) {
                    $sCols.=",";
                }
                $sCols.="{$vo}";
                $i++;
            }
        }
        // "" or "where col=v and col_2=v_2"
        $sWhere = "";
        if (!empty($where)) {
            $sWhere.="where ";
            $i = 0;
            foreach ($where as $k => $v) {
                if ($i > 0) {
                    $sWhere.=" AND ";
                }
                $sWhere.="{$k} ='{$v}'";
                $i++;
            }
        }
        // "" or order by
        $sOrderBy = "";
        if (!empty($orderBy)) {
            $sOrderBy.="order by {$orderBy} desc";
        }
        //"" or limit offset,size
        $sLimit = "";
        if (!empty($limit)) {
            $sLimit.="limit ";
            foreach ($limit as $ko => $vo) {
                $sLimit.="$ko,$vo";
            }
        }
        if (!empty($like)) {
            foreach ($like as $k => $v) {
                $sLike = "{$k} like '{$v}%'";
            }
            $sql = "select {$sCols} from {$table} {$sWhere} and {$sLike} {$sOrderBy} {$sLimit}";
        } else {
            $sql = "select {$sCols} from {$table} {$sWhere} {$sOrderBy} {$sLimit}";
        }
        return $sql;
    }

    public function insert($table, $set = array()) {
        // insert into $table set col=v,col_1=v_1..
        //set col=v,....
        $qSet = "";
        $i = 0;
        if (!empty($set)) {
            $qSet.="set ";
            foreach ($set as $k => $v) {
                if ($i > 0) {
                    $qSet.=",";
                }
                $qSet.="{$k}='{$v}'";
                $i++;
            }
        }
        $sql = "insert into {$table} {$qSet}";
        return $sql;
    }

    public function update($table, $set = array(), $where = array()) {
        //update $table set col=val,col_1=val_1,.. where condition
        //set col=v,....
        $qSet = "";
        $i = 0;
        if (!empty($set)) {
            $qSet.="set ";
            foreach ($set as $k => $v) {
                if ($i > 0) {
                    $qSet.=",";
                }
                $qSet.="{$k}='{$v}'";
                $i++;
            }
        }
        // "" or "where col=v and col_2=v_2"
        $sWhere = "";
        if (!empty($where)) {
            $sWhere.="where ";
            $i = 0;
            foreach ($where as $k => $v) {
                if ($i > 0) {
                    $sWhere.=" AND ";
                }
                $sWhere.="{$k} ='{$v}'";
                $i++;
            }
        }
        $sql = "update {$table} {$qSet} {$sWhere}";
        return $sql;
    }

    public function delete($table, $where = array()) {
        // delete from $table where col=...
        // "" or "where col=v and col_2=v_2"
        $sWhere = "";
        if (!empty($where)) {
            $sWhere.="where ";
            $i = 0;
            foreach ($where as $k => $v) {
                if ($i > 0) {
                    $sWhere.=" AND ";
                }
                $sWhere.="{$k} ='{$v}'";
                $i++;
            }
        }
        $sql = "delete from {$table} {$sWhere}";
        return $sql;
    }

}
