<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
</head>
<body>

    <?php
        include 'header.php';

    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class='text-center text-warning mb-5 bg-light rounded '>My Cart</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9 ">
                <table class='table text-center border table-bordered'>
                    <thead class='bg-success text-white fs-5'>
                        <th>Sr no</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Product quantity</th>
                        <th>Total price</th>
                        <th>update</th>
                        <th>Delete</th>
                    </thead>

                    <tbody>
                        <?php
                            // session_start();
                            $ptotal = 0;
                            $total = 0;
                            $i=0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){
                                    $ptotal = $value['productprice']*$value['productquantity'];
                                    $total += $value['productprice']*$value['productquantity'];
                                    $i= $key+1;
                                    echo"
                                    <form action='insertcart.php' method='POST'>
                                        <tr>
                                            <td>$i</td>
                                            <td><input type='hidden' name='item' value='$value[productname]'>
                                            <input type='hidden' name='pname' value='$value[productname]'>$value[productname]</td>
                                            <td><input type='hidden' name='pprice' value='$value[productprice]'>$value[productprice]</td>
                                            <td><input type='text' name='pquantity' value='$value[productquantity]'></td>
                                            <td>$ptotal</td>
                                            <td><button class='btn-warning' name='update' >Update</button></td>
                                            <td><button class='btn-danger' name = 'remove'>Delete</button></td>
                                            
                                        </tr>

                                    </form>

                                    ";

                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-3 text-center m-auto">
                <h3>Total</h3>
                <h1 class="bg-warning text-white">
                    <?php
                        echo number_format($total,2)
                    ?>
                </h1>
        </div>
    </div>
    
</body>
</html>