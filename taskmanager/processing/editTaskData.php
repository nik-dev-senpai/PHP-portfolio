<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/db.php');
$db = new db;
$id = $_POST['id'];
$db->editTaskData($id, $_POST['text'], $_POST['status']);
$url = "http://taskmanager/editTask.php?id=$id";
header("Location: $url");
?>