<?php
/**
 * Created by PhpStorm.
 * User: cube
 * Date: 16/10/17
 * Time: 2:58 AM
 */

function logged(){
    if(isset($_SESSION['username'])){
        if(!empty($_SESSION['username'])){
            return true;
        }
        else
            return false;
    }
}

?>