<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn -->
    <script src="https://kit.fontawesome.com/d5827a6b8a.js" crossorigin="anonymous"></script>
</head>
<?php
  session_start();
  if(!$_SESSION['admin']){
    header("location:form/login.php");
  }
?>
<body>
<nav class="navbar navbar-light bg-success">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>AgriGrocer</h1></a>
    <span>
    <i class="fa-solid fa-user-tie"></i> Hello, <?php echo $_SESSION['admin']; ?>|
    <i class="fa-solid fa-right-from-bracket "></i> <a href="form/logout.php" class="text-decoration-none text-white">Log out</a> |
    <a href="" class="text-decoration-none text-white">UserPanel</a>
    </span>
  </div>
</nav>
    <div class="py-7">
        <h2 class="text-center">Dashboard</h2>
        <div class="col-md-6 m-auto bg-primary text-center">
            <a class="text-decoration-none text-white fs-4 fw-bold px-5 " href="product/index.php">Add Post</a>
            <a class="text-decoration-none text-white fs-4 fw-bold px-5 " href="users.php">Users</a>
        </div>
    </div>
</body>
</html>