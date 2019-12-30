<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/db.php');
$db = new db;
$id = $_GET['id'];
$task = $db->getTaskByID($id);
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Link Bootstrap -->
	<title>Edit task №<?php echo $id; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-dark bg-dark">
			<a class="navbar-brand" href="../index.php"> &lt;&lt; Back to Tasks Manager</a>
			
		</nav>
		<table class="table table-dark">
		  <thead>
		    <tr>
		      <th style="border: 2px white solid;" scope="col">Task details</th>
		      <th style="border: 2px white solid;" scope="col">Comments</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td style="border: 2px white solid; width: 33.34%">
		      	<?php
		      		echo "<p>Task №" . $task[0]['id'] . "</p>";
		      		$text = $task[0]['task'];
		      		echo '<label>Change text</label>
		      			  <form id="editTask" method="post" action="processing/editTaskData.php">
		      			  <input type="hidden" name="id" value="' . $id . '">
		      			  <input name="text" type="text" class="form-control" value="' . $text . '" aria-describedby="basic-addon1"><br>';
		      		$status = $task[0]['status'];
		      		echo '<label>Select Status</label>
		      			  <select name="status" class="custom-select" id="inputGroupSelect01">
					    	<option value="TODO">TODO</option>
					    	<option value="DOING">DOING</option>
					    	<option value="DONE">DONE</option>
					      </select><br>
					      </form>
					  	  <p></p>
					      <p>Task has been created: <br><i>' . $task[0]["date"] . '</i></p>';
		      	?>
		      	<script>
		      		let status = ("<?php echo $status; ?>");
		      		let els = document.getElementsByTagName("option");
		      		Array.prototype.forEach.call(els, function(el) {
					    let val = el.getAttribute("value");
					    if (val == status) {
					    	el.setAttribute('selected', 'selected');
					    }
					});
		      	</script>
		      </td>

		      <td style="border: 2px white solid; width: 33.34%">
		      	<?php
		      		$comments = $db->getCommentsByID($id);
		      		foreach ($comments as $key => $value) {
		      			echo "<p>" . $comments[$key]['text']. "</p>";
						echo "<hr style = 'background-color: #999da0; color: #999da0; height: 1px;'>";
		      		}
		      	?>
		      </td>
		    </tr>
		    		    <tr>
		      <td style="border: 2px white solid; width: 33.34%">
		      	<button form="editTask" class="btn btn-outline-info" type="submit">Save changes</button>
		      </td>

		      <td style="border: 2px white solid; width: 33.34%">
		      	<button class="btn btn-outline-info" type="submit" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		      		Add comment ↓
		      	</button>

				<div class="collapse" id="collapseExample">
					<br>
					<form id='addComment' name="addComment" method="post" action="processing/addComment.php">
						<?php echo '<input type="hidden" name="id" value="' . $id . '">'; ?>
				      	<br>
				        <textarea class="form-control" placeholder="Comment" name="comment" required></textarea>
					</form>
					<br>
					<button type="submit" form="addComment" class="btn btn-outline-info">Save changes</button>

				</div>
		      </td>
		    </tr>
		  </tbody>
		</table>
	</div>
</body>
</html>