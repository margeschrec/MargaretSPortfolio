<?php
require_once 'config.php';

$db = dbConn($servername, $username, $password, $db);

if ($db instanceof mysqli){
    echo "client info: ". $db->client_info. "\n";
    echo "Client version: ". $db->client_version. "\n";
}