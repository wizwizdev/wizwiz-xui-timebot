<?php
/*
* WizWiz v7.5.3
* https://github.com/wizwizdev/wizwizxui-timebot
* Copyright (c) @wizwizch
*/

require __DIR__.'/../../baseInfo.php';

$servername = "localhost";
$conn = new mysqli($servername, $dbUserName, $dbPassword, $dbName);
$conn->set_charset("utf8mb4");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


