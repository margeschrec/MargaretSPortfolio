<?php

require_once 'dbconnect.php';

//create Portfolio class
class Portfolio
{
	private int $id;
	private string $title;
	private string $year;
	private string $size;
	private string $medium;

	private  $db;

	//connects to db and fetches data
	function getAllArt() {
		$sql = "SELECT * FROM Portfolio";
		//conect and query db
		$result = $this->connect()->query($sql);
		//check for results
		$numRows = $results->num_rows;
		if ($numRows > 0) {
			 while($row = $result->fetch_assoc()) {
			//show results in array
			$data[] = $row;
			}
			return $data;
		}
	}

	function showAllArt() {
		//QUESTION $this- can it refer to last function?
		$datas = $this->getAllArt();
		foreach ($datas as $data) {
			//refer to each column in db
			echo $data['id'];
			echo $data['title'];
			echo $data['year'];
			echo $data['size'];
			echo $data['medium'];
		}
	}

	public function gettitle($title): Portfolio
	{
		self::getDBConn();

		$sql = "SELECT `title` FROM `portfolio`";

		return self::$db->query($sql);
	}

	public function getyear():string {
		return $this->year ?? '';
	}

	public function setyear(string $year) {
		$this->year = $year;
	}

	public function getsize():string {
		return $this->year ?? '';
	}

	public function setsize(string $size) {
		$this->size = $size;
	}


}
