<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'dimi'); // user that I created in the database
define('DB_PASS', '123456'); // password that I gave to the user
define('DB_NAME', 'my_db'); // notes NOT the name of the table, the name of the DATABASE 

// Create connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check connection
if ($connection->connect_error) {
    die('Connection failed ' . $connection->connect_error);
}

echo 'CONNECTED!';

// FETCH DATA
$sql = "SELECT * FROM feedback"; // sql is the conventional name for SQL QUERY,  feedback is the name of the TABLE, UPPERCASE is also a convention
$result = mysqli_query($connection, $sql); // so we are passing connection string AND sql query
$myArr = mysqli_fetch_all($result, MYSQLI_ASSOC); // argument 1 is the $result which is like a connection with a query, argument 2: is what I would like Data to be returned as, i.e. Associated Array