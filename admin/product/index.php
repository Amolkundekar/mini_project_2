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
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-4">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <p class="text-center fw-bold fs-3 text-success">Product Details</p>
            </div>
            <div class="mb-3">
                <label  class="form-label">Product Name :</label>
                <input type="text" name="pname" class="form-control"  placeholder="Enter product name">
            </div>

            <div class="mb-3">
                <label  class="form-label">Product price :</label>
                <input type="text" name="pprice" class="form-control"  placeholder="Enter product price">
            </div>

            <div class="mb-3">
                <label  class="form-label">Product image :</label>
                <input type="file" name="pimage" class="form-control"  placeholder="select product image">
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
            <button name="submit" class="bg-success fs-4 fw-bold my-3 form-control text-white">Upload</button>
            </form>
            </div>
        </div>
    </div>


    <!-- fetch data -->
    <div class="container ">
        <div class="row">
            <div class="col-md-8 m-auto">
                <table class="table table-striped table-hover border border-warning my-5">
                    <thead class="bg-success fs-4 font-monospace text-center text-white">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
                        <th>Update</th>

                        
                    </thead>
                    
                    <tbody class="text-center">
                        <?php
                            include "config.php";
                            
                            $record = mysqli_query($con, "SELECT * FROM `tblproduct`;");
                            while($row = mysqli_fetch_array($record))
                            echo "
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[pname]</td>
                                <td>$row[pprice]</td>
                                <td><img src='$row[pimage]' alt='' height=80 width= 150></td>
                                <td>$row[pcategory]</td>
                                
                                <td>
                                <a href ='delete.php? ID=$row[id]' class = 'btn btn-danger'>Delete </a>
                                </td>

                                <td>
                                    <a href ='update.php? ID=$row[id]' class = 'btn btn-warning'>Update </a>
                                    
                                </td>
                                



                            </tr>            
                            ";
                            
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    
</body>
</html>