<?php

//while did we not make this db a class? QUESTION

    function dbConn(): mysqli
    {
        //properties
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpassword = '';
         $dbname = 'artportfolio';

        //conect to db OOP
        $conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
      //   echo "Connected successfully";
        return $conn;
    }

      function closeConnection(mysqli $conn)
      {
        $conn->close();
      }
