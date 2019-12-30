<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/db.php');
$db = new db;
$db->addTask($_POST['task'], $_POST['status']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Task has been added</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="alert alert-info" role="alert">
		  <h4 class="alert-heading">New task has been successfully added!</h4>
		  <hr>
		  <p class="mb-0"><a href="../index.php">Back to Task Manager</a></p>
		</div>
	</div>
</body>
</html>