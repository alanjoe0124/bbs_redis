<?php

/**
 * Description of Post
 *
 * @author zhiyuan
 */
class Post {

    //put your code here
    public function cookie_handle($s, $cookie, $smarty) {
        $cookieName = $cookie->get_cookie($s);  // cookie handle
        $smarty->assign("cookieName", $cookieName);
        return $cookieName;
    }

    public function category_name_get($smarty, $table, $mysql, $getMenuId) {
        //$sql="select name from menu where id=".$getMenuId;
        $cols = array();
        $cols[] = "name";
        $where = array();
        $where["id"] = $getMenuId;
        $sql = $mysql->select($table, $cols, $where);
        $subCategoryName = $mysql->fetchArr($sql);
        $smarty->assign("subCategoryName", $subCategoryName);  // category name get
    }

    public function insert_post($smarty, $mysql, $tablebbs, $cookie_name, $titleName, $getMenuId, $titleContent) {
        //$sql = "insert into bbs(name,title,menu,content) values('$cookie_name','$titleName',$getMenuId,'$titleContent')"; 
        //insert post message
        $set = array();
        $set["name"] = "$cookie_name";
        $set["title"] = $titleName;
        $set["menu"] = "$getMenuId";
        $set["content"] = $titleContent;
        $sql = $mysql->insert($tablebbs, $set);
        $res = $mysql->query($sql);
    }

    public function update_postnum($getMenuId, $mysql, $table, $page) {
        //  $sql = "select postnum from menu where id=" . $getMenuId;   
        $cols = array();
        $cols[] = "postnum";
        $where = array();
        $where["id"] = "$getMenuId";
        $sql = $mysql->select($table, $cols, $where);
        $res1 = $mysql->query($sql); //update title post Number
        while ($row = $mysql->fetch_array($res1)) {
            $postNum = $row['postnum'];
        }
        $postNum++;
        //$sql = "UPDATE menu SET postnum=$postNum WHERE id=" . $getMenuId;
        $set = array();
        $set['postnum'] = $postNum;
        $where = array();
        $where["id"] = $getMenuId;
        $sql = $mysql->update($table, $set, $where);
        $res2 = $mysql->query($sql);
        echo "<script>location.href='titleList.php?menuId=$getMenuId&page=$page'</script>";
    }

    public function rank_handle($redis, $ip, $redisPort, $cookie_name, $num) {
        $redis->connect("$ip", "$redisPort");
        $num = $redis->incr("$cookie_name:postNum");
        $redis->zAdd('rank', "$num", "$cookie_name");
    }

    public function post_handle($smarty, $mysql, $tablebbs, $cookie_name, $titleName, $getMenuId, $titleContent,$table,
            $page,$redis, $ip, $redisPort, $num) {
        if (trim($_POST['titleName']) != NULL && trim($_POST['titleContent']) != NULL) {
            $titleName = $_POST['titleName'];
            $titleContent = $_POST['titleContent'];
            $tablebbs = "bbs";                    //insert post message
            $this->insert_post($smarty, $mysql, $tablebbs, $cookie_name, $titleName, $getMenuId, $titleContent);

            $this->update_postnum($getMenuId, $mysql, $table, $page);
            $redis = new Redis();     // increase the postNum of cookieName
            $this->rank_handle($redis, $ip, $redisPort, $cookie_name, $num);
        }
    }

}
