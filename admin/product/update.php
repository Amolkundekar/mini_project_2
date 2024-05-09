<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        $indx =0;
        if(isset($_GET['ID'])) {
    
            $id = $_GET['ID'];
            $indx = $id;
            echo $id;
        }

        include 'config.php';
        $record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE id= $indx");
        $data = mysqli_fetch_array($record);
    ?>

    <!-- <div class="heading">update page</div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-4">
            <form action="update.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <p class="text-center fw-bold fs-3 text-success">Product Update</p>
            </div>
            <div class="mb-3">
                <label  class="form-label">Product Name :</label>
                <input type="text" value = "<?php echo $data['pname']  ?>" name="pname" class="form-control"  placeholder="Enter product name">
            </div>

            <div class="mb-3">
                <label  class="form-label">Product price :</label>
                <input type="text" value = "<?php echo $data['pprice']  ?>" name="pprice" class="form-control"  placeholder="Enter product price">
            </div>

            <div class="mb-3">
                <label  class="form-label">Product image :</label>
                <input type="file" name="pimage" class="form-control"  placeholder="select product image">
                <img src="<?php echo $data['pimage']  ?>"  alt="" height=150 width=300>
            </div>

            <div class="mb-3">
                <label  class="form-label"> Select Product category :</label>
                <select name="pages" class="form-select" aria-label="Default select example">
                    <option value="Home">Home</option>
                    <option value="fruits">Fruits</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="others ">others</option>
                </select>
            </div>
            <input type="hidden" name = 'id' value="<?php echo $data['id']  ?>">
            <button name="update" class="bg-success fs-4 fw-bold my-3 form-control text-white">Update</button>
            </form>
            </div>
        </div>
    </div>

<!-- php update query -->
<?php
    if(isset($_POST['update']))
    {
        $idx = $_POST['id'];
        $product_name = $_POST['pname'];
        $product_price = $_POST['pprice'];
        $product_image = $_FILES['pimage'];
        $image_loc = $product_image['tmp_name'];
        $image_name = $product_image['name'];
        $img_destination = "upload_img/".$image_name;
        $product_category = $_POST['pages'];

        // Move uploaded file to destination
        move_uploaded_file($image_loc, $img_destination);

        include 'config.php';
        mysqli_query($con, "UPDATE `tblproduct` SET `pname`= '$product_name', `pprice`= '$product_price', `pimage`= '$img_destination', `pcategory`= '$product_category' WHERE id = $idx ");

        header("location:index.php");
    }
?>
    
    

    
</body>
</html>
    
    <!-- if(isset($_GET['ID'])) {
    
         $id = $_GET['ID'];
         echo $id;
    }  -->
    

