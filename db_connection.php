<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="skincare";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn){
   echo "Connection Sucessfully";
}else{
    echo "Connection Error";
}
?>
