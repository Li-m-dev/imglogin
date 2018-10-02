<?php
session_start();

if(isset($_POST['submitLogin'])){
    $_SESSION['id'] = 1;
    header('Location: index.php');
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
var_dump('Hi');