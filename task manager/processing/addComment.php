<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/db.php');
$db = new db;
$id = $_POST['id'];
$db->addComment($id, $_POST['comment']);
$url = "http://task/editTask.php?id=$id";
header("Location: $url");
?>