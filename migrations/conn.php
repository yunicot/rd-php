<?php

$dbName = 'trainingland';
$dbUser = 'trainingland';
$dbPass = 'trainingland';

$conn = new \mysqli('localhost', $dbUser, $dbPass, null, 3306);
mysqli_query($conn, 'CREATE DATABASE IF NOT EXISTS ' . $dbName);

mysqli_query($conn, 'USE ' . $dbName);
