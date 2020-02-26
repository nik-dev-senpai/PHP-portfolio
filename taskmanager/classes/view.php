<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/classes/db.php');

class view
{
	
	function __construct()
	{
		$this->db = new db;
	}

	public function representTasks($tasks) {
	foreach ($tasks as $key => $value) {
	echo $tasks[$key]['task'];
	echo "<br><h6><i>Created: " . $tasks[$key]['date'] . "</i></h6>";
	$ID = $tasks[$key]['id'];
	echo <<<EOD
		<p>
		<form name="taskData" id="$ID" method="get" action="editTask.php">
		<input type="hidden" name="id" value="$ID">
	    <button form="$ID" class="btn btn-outline-info" type="submit">Details</button>
	    </form>
	    </p>
EOD;
	echo "<hr style = 'background-color: #999da0; color: #999da0; height: 1px;'>";

	$commentsAmount = $this->db->countComments($tasks[$key]['id']);
	echo "<small>Comments: " . $commentsAmount . "</small>";

	echo "<br><hr style = 'background-color:white; color: white; height: 3px;'>";
	}
	}
}