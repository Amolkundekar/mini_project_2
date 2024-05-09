<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
    include '<product/config.php';
    include '<mystore.php';

    $record = mysqli_query($con, "SELECT * FROM `tbluser`");
    $rc = mysqli_num_rows($record);
?>

<div class="container mt-5">
    

    

    <table class="table table-bordered table-hover font-monospace col-md-6">
        <thead class="text-center text-white bg-dark">
            <th>Sr no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Delete</th>
        </thead>
        <tbody class="text-center bg-secondary fs-5">
        <?php
        $i=0;
            while($row = mysqli_fetch_array($record)){
                echo"
                <tr>
                <td> ";?> <?php echo ++$i;?><?php echo"</td>
                <td>$row[username]</td>
                <td>$row[email]</td>
                <td>$row[number]</td>
                <td><a href='deleteuser.php? ID=$row[id]' class='btn btn-outline-danger '>Delete</a></td>
                </tr>
                ";
            }
        ?>

        </tbody>
    </table>
    <div class="card bg-secondary text-white m-auto text-center my-3 font-monospace" style="width: 18rem;">
        <h3 class="card-header ">Total users </h3>
        <h3 class=""><?php echo $rc ?></h3>
    </div>
    </div>
</body>
</html>