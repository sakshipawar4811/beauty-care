<?php
session_start();
include("db_connection.php");

$product_id = $_GET["id"];
$customer_id = $_SESSION["register_id"];

// Use a prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO tbl_wishlist (wishlist_product,wishlist_customer_id	) VALUES (?, ?)");
$stmt->bind_param("ii", $product_id, $customer_id);

if ($stmt->execute()) {
    $_SESSION["success"] = "Product added to wishlist successfully.";
    echo "<script>window.location.href='wishlist_add.php'</script>";
} else {
    echo "Error adding to wishlist: " . $conn->error;
}
?>