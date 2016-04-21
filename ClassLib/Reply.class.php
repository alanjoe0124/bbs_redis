<?php

class Reply {

    public function cookie_handle($cookie, $s) {
        $cookieName = $cookie->get_cookie($s);
        if ($cookieName != NULL) {
            $cookie_name = $cookieName;
        } else {
            $cookie_name = "tourist";
        }
        return $cookie_name;
    }

    public function insert_reply($cookie_name, $replyPost, $titleId, $table, $mysql) {
        //  $sql = "insert into bbs(name,content,parent) values ('$cookie_name','$replyPost',$titleId)";
        $set = array();
        $set['name'] = $cookie_name;
        $set['content'] = $replyPost;
        $set['parent'] = $titleId;
        $sql = $mysql->insert($table, $set);
        $res = $mysql->query($sql);
    }

    public function update_replycount($titleId, $table, $mysql) {
        // $sql = "select reply_count from bbs where id=" . $titleId;
        $cols = array();
        $cols[] = "reply_count";
        $where = array();
        $where['id'] = $titleId;
        $sql = $mysql->select($table, $cols, $where);
        $res = $mysql->query($sql);
        while ($row = $mysql->fetch_array($res)) {
            $reply_count = $row['reply_count'];
        }
        $reply_count++;

        //$sql = "UPDATE bbs  SET reply_count=" . $reply_count . " WHERE id=" . $titleId;
        $set = array();
        $set['reply_count'] = $reply_count;
        $where = array();
        $where['id'] = $titleId;
        $sql = $mysql->update($table, $set, $where);
        $res = $mysql->query($sql);
    }

    public function parameter_pass($smarty,$titleId,$menuId,$detailPage) {
        $smarty->assign("titleId", $titleId);
        $smarty->assign("menuId", $menuId);
        $smarty->assign("detailPage", $detailPage);
    }

}
