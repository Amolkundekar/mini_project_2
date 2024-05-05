<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-success ">
<div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto border bg-white border-primary font-monospace p-3 mt-4">
            <form action="login1.php" method="POST" >
            <div class="mb-3">
                <p class="text-center fw-bold fs-3 text-warning">Log In</p>
            </div>
            <div class="mb-3">
                <label  class="form-label"> Name :</label>
                <input type="text" name="username" class="form-control"  placeholder="Enter User name">
            </div>

            <div class="mb-3">
                <label  class="form-label">Password :</label>
                <input type="password" name="userpass" class="form-control"  placeholder="Enter Password">
            </div>

            
            <button class="bg-primary fs-4 fw-bold my-3 form-control text-white">Login</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>