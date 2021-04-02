<?php

require_once 'db.php';

//create Portfolio class
class Portfolio
{
	private int $id;
	private string $title;
	private string $lastName;
	private string $size;
	private string $medium;

	private \Database $db;

	public function __construct(string $title, string $lastName, string $size, string $medium)
	{
		$this->title = $title;
		$this->lastName = $lastName;
		$this->size = $size;
		$this->medium = $medium;

	}
}

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
