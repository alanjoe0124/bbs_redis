<?php

        define("BASE_PATH",$_SERVER['DOCUMENT_ROOT']);
        define("SMARTY_PATH","/bbs_smarty4.0/Smarty/");
        require BASE_PATH.SMARTY_PATH."Smarty.class.php"; 
        class Config extends Smarty{
 
            public function __construct() {
                parent::__construct();
            }
            public function __destruct() {
                parent::__destruct();
            }
            public function config_smarty(){
                $this->cache_dir=BASE_PATH.SMARTY_PATH."cache";
                $this->template_dir=BASE_PATH.SMARTY_PATH."templates/";
                $this->compile_dir=BASE_PATH.SMARTY_PATH."templates_c"; 
                $this->config_dir= BASE_PATH.SMARTY_PATH."config/";
            }
        }
?>