<?php
include 'config.php';

if(isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    $query = "DELETE FROM `tblproduct` WHERE `id` = $product_id";

    if(mysqli_query($con, $query)) {
        header("location: index.php");
        exit();
    } else {
        echo "Error deleting product: " . mysqli_error($con); // This will display the error message if deletion fails
    }
} else {
    echo "Product ID not set."; // This will display a message if product ID is not received
}
?>
