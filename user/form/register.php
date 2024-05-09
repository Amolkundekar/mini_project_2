<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER REGISTRATION</title>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-white shadow m-auto mt-5 font-monospace border border-info">
                <p class="text-white bg-success fs-3 fw-bold my-3 text-center">User Register</p>
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="username">User Name : </label>
                        <input type="text" name="name" placeholder="enter  user name" class="form-control" required >
                    </div>

                    <div class="mb-3">
                        <label for="username">User Email : </label>
                        <input type="email" name="email" placeholder="enter  user email" class="form-control" required >
                    </div>

                    <div class="mb-3">
                        <label for="username">User mobile no : </label>
                        <input type="text" name="number" placeholder="enter  user mobile number" class="form-control" required >
                    </div>
                    <!-- <div class="mb-3">
                        <label for="vendor_address" class="form-label">Address</label>
                        <input type="text" id="vendor_address" class="form-control" placeholder="Enter your address" autocomplete="off" reqiured="reqiured" name="vendor_address" />
                    </div> -->

                    <div class="mb-3">
                        <label for="username">User password : </label>
                        <input type="password" name="password" placeholder="enter  user password" class="form-control" required >
                    </div>
                    <div class="mb-3">
                        <label for="username">Confirm password : </label>
                        <input type="password" name="cpassword" placeholder="confirm password" class="form-control" required >
                    </div>
                    
                    <div class="mb-3">

                        <button name="submit" class="w-100 bg-primary fs-4 text-white">Register</button>
                    </div>

                    <div class="mb-3">

                    <button name="submit" class="w-100 bg-primary fs-4 text-white"><a href="login.php" class="text-decoration-none text-white">Already have an account</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>