<?php

class Verurl{
    public function trocarUrl($url){
        if(empty($url)){
            $url = "secoes/login.php";
        }else{
            $url = "secoes/$url.php";
        }
        include_once($url);
    }
}

?>