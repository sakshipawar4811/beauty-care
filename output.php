<?php
session_start();
include "db_connection.php";
$email = $_POST["email"];
$name  = $_POST["name"]; 
$mobile = $_POST["mobile"];
$password  = $_POST["password"]; 

$query = "INSERT INTO tbl_register(register_name,register_email,register_no,register_pass)values('$name','$email','$mobile','$password')";
$result = mysqli_query($conn,$query);

    echo "<script>window.location.href='login.php'</script>";
// if($result->num_rows>0){
//     echo "Login successful";
//     $row = mysqli_fetch_array($result);
//     $_SESSION["login"] = 1;
//     $_SESSION["register_id"]=$row['register_id'];
//     echo "<script>window.location.href='index.php'</script>";
// }
// else{
//     echo "Login not successful";
// }
?> 
lodinoutput.php

