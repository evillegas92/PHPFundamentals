<?php
$dbPassword = "92playa*";
$dbUserName = "phpfundamentals";
$dbServer = "localhost";
$dbName = "testdb";

$connection = new mysqli ($dbServer, $dbUserName, $dbPassword, $dbName);

if ($connection->connect_errno)
{
    exit ("Database connection failed. Reason: ".$connection->connect_error);
}
