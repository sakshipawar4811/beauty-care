<?php
session_start();
include 'db_connection.php';

$wishlist_id = $_GET["wishlist_id"];
$user_id = $_SESSION["register_id"];

$query = "DELETE FROM `tbl_wishlist` WHERE wishlist_id = '$wishlist_id' AND ,wishlist_customer_id = '$user_id'";
$result = mysqli_query($conn, $query);
if ($result) {
    $_SESSION["delete"] = "delete successful.";
    echo "<script>window.location.href='wishlist_add.php'</script>";

} else {
    echo "connection error";
}
?>