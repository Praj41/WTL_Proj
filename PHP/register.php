<?php

// 1. database credentials

$host = "localhost";
$db_name = "MealBox";
$username = "root";
$password = "root";

// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);


// 3. prepare select query
