
<?php
if(isset($_POST['submit'])) {

    include 'config.php';

    $product_name = $_POST['pname'];
    $product_price = $_POST['pprice'];
    $product_image = $_FILES['pimage'];
    
    // Check if file was uploaded without errors
    if($product_image['error'] === UPLOAD_ERR_OK) {
        $image_loc = $product_image['tmp_name'];
        $image_name = $product_image['name'];
        $img_destination = "upload_img/".$image_name;

        // Move uploaded file to destination
        move_uploaded_file($image_loc, $img_destination);
        $product_category = $_POST['pages'];
        // insert product
        $query = "INSERT INTO `tblproduct`( `pname`, `pprice`, `pimage`, `pcategory`) VALUES ('$product_name', '$product_price','$img_destination','$product_category')";
        mysqli_query($con,$query );

        header("location:index.php");
        
    } else {
        echo "Error: " . $product_image['error'];
    }
}
?>

