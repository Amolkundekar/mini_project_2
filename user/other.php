<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Others</title>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <?php
        include 'header.php';
       ?>
       
</head>
<body>
    
<div class="containter-fluid">
    <div class="col-md-12">
        <div class="row">

            <h1 class="text-warning text-center font-monospace my-3" > OTHERS</h1>

            <?php
                include 'config.php';
                $record = mysqli_query($con, "select * from tblproduct");
                
                while($row = mysqli_fetch_array($record))
                {
                    $cheak_page = $row['pcategory'];
                    if($cheak_page ==='others ')
                    {

                    
                
                        echo "
                        <div class='col-md-6 col-lg-4 m-auto mb-3' >
                            <form action ='insertcart.php' method='POST'>
                                <div class='card m-auto shadow p-3 mb-5 bg-white rounded' style='width: 18rem;'>
                                <img src='../admin/product/$row[pimage]' width=230 height=192 class = 'card-image-top m-auto '>
                                <div class='card-body text-center '>
                                    <h5 class='card-title  fs-4 fw-bold'>$row[pname]</h5>
                                    
                                    <p class='card-text  fs-6 fw-bold'> RS: $row[pprice] /kg</p>
                                    <input type='hidden' name='pname' value ='$row[pname]' >
                                    <input type='hidden' name='pprice' value ='$row[pprice]' >
                                    <input type='number' name='pquantity' value-'min='1' max ='20'' placeholder = 'Quantity'><br><br>
                                    <input type ='submit' class='btn btn-warning text-white w-100' value='Add to cart' name='addcart'>
                                </div>
                                </div>
                            </form>
                        </div>
                    ";
                }
            }
            ?>

        </div>
    </div>
</div>

    <?php
    include 'footer.php';
    ?>
</body>
</html>