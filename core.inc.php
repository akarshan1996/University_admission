<?php
/**
 * Created by PhpStorm.
 * User: cube
 * Date: 16/10/17
 * Time: 2:58 AM
 */
session_start();

function logged(){
    if(isset($_SESSION['user_id'])){
        if(!empty($_SESSION['user_id'])){
            return true;
        }
        else
            return false;
    }
}

?>