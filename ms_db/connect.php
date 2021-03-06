<?php
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
