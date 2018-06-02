<?php
session_start();
require_once './models/user.php';
if (empty($_POST)) {
    require_once './view/login.php';
    exit ();
}
$user = new User();
if ($user -> login ($_POST ['login'], $_POST ['password']) ) {
    $_SESSION ['user'] = $_POST ['login'];
    header('location: /');

}else{
    echo 'Incorrect login or password';
}

