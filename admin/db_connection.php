<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "skincare";
$conn = mysqli_connect(hostname: $servername, username: $username, password: $password, database: $dbname);
if ($conn) {
    
}
else {
    echo "connection failed";
}
?>