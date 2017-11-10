<?php
/**
 * Created by PhpStorm.
 * User: cube
 * Date: 7/11/17
 * Time: 1:52 AM
 */
session_start();
session_unset('username');
session_unset('first_name');

echo "<script> window.location.href='index.php'; </script>";

?>