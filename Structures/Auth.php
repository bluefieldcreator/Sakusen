<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/struct/Views.php';
class Auth{
    static function checkAuth(){
        if($_SESSION['userID']){
            return true;
        } else {
            return false;
        }
    }
    static function Authenticate($username, $password){
        
    }
}

?>