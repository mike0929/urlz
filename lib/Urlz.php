<?php


class Urlz {

    var $_secret = "EnterYourSecretKey";

    function urlz() {

    }

    function encode($arr){
        $serialized = serialize($arr);
        return base64_encode("$serialized|".$this->_secret);

    }

    function decode($s){
        $l = base64_decode($s);
        $serialized = str_replace("|".$this->_secret,"",$l);
        return unserialize($serialized);
    }
}
