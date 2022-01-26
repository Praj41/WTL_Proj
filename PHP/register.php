<?php

// 1. database credentials
/*
$host = "localhost";
$db_name = "MealBox";
$username = "root";
$password = "root";

// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);


// 3. prepare select query
$query = "INSERT INTO user (name, email, username, password) VALUES (?, ?, ?, ?)";
$stmt = $con->prepare($query);


// 4. bind parameters
$stmt->bindParam(1, $_POST['t1']);
*/

echo "Hello" . $_POST['name'];