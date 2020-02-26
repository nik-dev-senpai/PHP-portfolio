<?php

class db 
{

	public function sqlQuery($query) {
		try{
			$pdo = new PDO('mysql:host=localhost;dbname=tasks', 'root', '');
			$result = $pdo->query($query);
			return $result;
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	public function getTODO() {
		$query = "SELECT * FROM `list` WHERE (status = 'TODO') ORDER BY 'date'";
		$result = $this->sqlQuery($query);
		$result = $result->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getDOING() {
		$query = "SELECT * FROM `list` WHERE (status = 'DOING') ORDER BY 'date'";
		$result = $this->sqlQuery($query);
		$result = $result->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getDONE() {
		$query = "SELECT * FROM `list` WHERE (status = 'DONE') ORDER BY 'date'";
		$result = $this->sqlQuery($query);
		$result = $result->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function addTask($task, $status) {
		$query = "INSERT INTO `list`(`task`, `status`) VALUES ('$task', '$status')";
		$result = $this->sqlQuery($query);
		return true;
	}

	public function getTaskByID($id) {
		$query = "SELECT * FROM `list` WHERE (`id` = $id)";
		$result = $this->sqlQuery($query);
		$result = $result->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getCommentsByID($id) {
		$query = "SELECT * FROM `comments` WHERE (`task id` = $id)";
		$result = $this->sqlQuery($query);
		$result = $result->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function countComments($id) {
		$query = "SELECT COUNT(text) FROM `comments` WHERE (`task id` = $id)";
		$result = $this->sqlQuery($query);
		$result = $result->fetchAll(PDO::FETCH_NUM);
		if ($result[0][0] == false) {
			return 0;
		}
		return $result[0][0];
	}

	public function addComment($id, $comment) {
		$query = "INSERT INTO `comments`(`task id`, `text`) VALUES ($id, '$comment')";
		$result = $this->sqlQuery($query);
		return true;
	}

	public function editTaskData($id, $task, $status) {
		$query = "UPDATE `list` SET `task`='$task', `status`='$status' WHERE id=$id";
		$result = $this->sqlQuery($query);
		return true;
	}	

}