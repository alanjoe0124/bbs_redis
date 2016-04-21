<?php
class Register {

    public function register_handle($cookie, $mysql,$redis, $smarty, $userName, $password, $table) {
        if ($userName != NULL && $password != NULL) {
            //  $sql = "select * from member where name='$userName'";
            $where = array();
            $where['name'] = $userName;
            $sql = $mysql->select($table, $cols, $where);
            $res = $mysql->query($sql);
            $num = $mysql->num_rows($res);
            if ($num == 0) {
                //   $sql = "insert into member(name,password) values('$userName','$password')";
                $set = array();
                $set['name'] = $userName;
                $set['password'] = $password;
                $sql = $mysql->insert($table, $set);
                $res = $mysql->query($sql);
                //set cookie 
                 $expire = 3600;
                $s = "userName";
                $cookieName=$cookie->set_cookie($s, $userName, $expire);
                $this->add_rank($redis,$userName);
                echo "<script>location.href='index.php'</script>";
            } else {
                 echo "<script>alert('Name has been used');location.href='register.php';</script>";
            }
        } else {
            $smarty->display("register.html");
        }
    }

    public function add_rank($redis,$userName) {
        $redis->connect('127.0.0.1', 6379);
        $redis->set("$userName:postNum", '0');
        $redis->zAdd('rank', 0, "$userName");
    }
}
?>