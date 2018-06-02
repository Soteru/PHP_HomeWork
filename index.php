<?php
session_start();
require_once './models/todos.php';
$todoModel = new Todo();
if (!empty($_POST)){
    $todoModel -> save($_POST['text']);

}
require_once './view/index.php';