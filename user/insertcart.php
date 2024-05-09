<?php
session_start();

if(isset($_SESSION['user'])){



// Initialize cart session if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$product_name = $_POST['pname'];
$product_price = $_POST['pprice'];
$product_quantity = $_POST['pquantity'];

// $productPrice = (float)$value['productprice'];
// $productQuantity = (int)$value['productquantity'];
// $ptotal = $productPrice * $productQuantity;


if(isset($_POST['addcart'])){
   

    // Checking if product is already added in the cart
    $checkproduct = array_column($_SESSION['cart'],'productname');
    if(in_array($product_name, $checkproduct)){
        echo "
            <script>
                alert('Product already added');
                window.location.href = 'index.php';
            </script>
        ";
    } 
    else {
        $_SESSION['cart'][] = array('productname' => $product_name, 'productprice' => $product_price, 'productquantity' => $product_quantity);
        header("location:viewcart.php");
        exit; // Stop further execution after redirecting
    }
}

// // Removing product
if(isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if($value['productname'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:viewcart.php');
            exit; // Stop further execution after redirecting
        }
    }
}


// update product
if(isset($_POST['update'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if($value['productname'] === $_POST['item']) {
            $_SESSION['cart'][$key] = array('productname' => $product_name, 'productprice' => $product_price, 'productquantity' => $product_quantity);    
           
            header('location:viewcart.php');
            exit; // Stop further execution after redirecting
        }
    }
}


}

else
{
    header("location:form/login.php");
}
?>
