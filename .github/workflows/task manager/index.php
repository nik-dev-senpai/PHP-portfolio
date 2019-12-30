<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/db.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/view.php');
$db = new db;
$view = new view;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tasks</title>
	<!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-dark bg-dark">
			<a class="navbar-brand" href="../index.php">Tasks Manager</a>
			<button class="btn btn-outline-info" data-toggle="modal" data-target="#addTask" type="submit">Add task</button>
			<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="addtask" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="addTask">Add task</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<form id='newTask' method="post" action="processing/addTask.php">
			      	  <label>Task text</label>
			          <input type="text" class="form-control" placeholder="Task" name="task" required>
			          <br>
					  <label>Status</label>
					  <select class="custom-select" id="status" name="status">
					    <option value="TODO">TODO</option>
					    <option value="DOING">DOING</option>
					    <option value="DONE">DONE</option>
					  </select>
					</form>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
			        <button type="submit" class="btn btn-primary" form="newTask">Add task</button>
			      </div>
			    </div>
			  </div>
			</div>
		</nav>
		<table class="table table-dark">
		  <thead>
		    <tr>
		      <th style="border: 2px white solid;" scope="col">TODO</th>
		      <th style="border: 2px white solid;" scope="col">DOING</th>
		      <th style="border: 2px white solid;" scope="col">DONE</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>

		      <td style="border: 2px white solid; width: 33.34%">
		      	<?php
		      		$tasks = $db->getTODO();
		      		$view->representTasks($tasks);
		      	?>
		      </td>

		      <td style="border: 2px white solid; width: 33.34%">
		      	<?php
		      		$tasks = $db->getDOING();
		      		$view->representTasks($tasks);
		      	?>
		      </td>

		      <td style="border: 2px white solid; width: 33.34%">
		      	<?php
		      		$tasks = $db->getDONE();
		      		$view->representTasks($tasks);
		      	?>
		      </td>
		    </tr>
		  </tbody>
		</table>
	</div>
</body>
</html>