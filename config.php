<?php
$servername = "sql2.freemysqlhosting.net";
$username = "sql2328833";
$name = "sql2328833";
$password = "zL6!qA1%";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$name", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

