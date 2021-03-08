<?php
const DB_HOST = "localhost";
const DB_NAME = "mswebsite";
const DB_USERNAME = "root";
const DB_PASSWORD = "";

function connect($dbHost, $$dbName, $dbUsername, $dbPassword){
    $db = new mysqli($dbHost,
     $dbPassword,
      $dbUsername,
       $dbPassword
    );
    if($db->connect_error){
        die("Cannot connect to database: \n"
        . $db->connect_error) . "\n"
        . $db->connect_errno
    );
    }
    return $db;
}



function dbConn(): mysqli
{
  $servername = "localhost";
  $username = "ecc";
  $password = "";
  $db = 'ecc_demo';

  $conn = new mysqli($servername, $username, $password, $db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  return $conn;
}

function closeConnection(mysqli $conn)
{
  $conn->close();
}
