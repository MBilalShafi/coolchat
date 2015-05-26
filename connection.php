<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
echo "error!!    ";
    die("Connection failed: " . $conn->connect_error);
}
else
{
echo "Connected successfully";
mysql_select_db("coolchat");
}

?> 
