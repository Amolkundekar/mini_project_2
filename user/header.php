<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       <!-- font awesome cdn -->
       <script src="https://kit.fontawesome.com/d5827a6b8a.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
  session_start();
  $count = 0;
  if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
  }
?>
<nav class="navbar navbar-light bg-success">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2"><h1 class="text-white fw-bold ">Agrigrocer</h1></a>

    <div class="d-flex">
      <a href="index.php" class="text-white text-decoration-none pe-1"><i class="fa-solid fa-house"></i> HOME | </a>

      <a href="viewcart.php" class="text-white text-decoration-none pe-1"><i class="fa-solid fa-cart-shopping"></i> CART (<?php echo $count?>) | </a>

      <span class="text-white">
        <i class="fas fa-user-shield"></i> Hello, 

        <?php
          // session_start();
          if(isset($_SESSION['user'])){
          echo $_SESSION['user'];
          echo "<a href='form/logout.php' class='text-white text-decoration-none '> | <i class='fa-solid fa-right-to-bracket'></i> Logout | </a>";

          }
          else
          {
            echo "<a href='form/login.php' class='text-white text-decoration-none '>| <i class='fa-solid fa-right-to-bracket'></i> Login | </a>";
          }
        ?>

        
        <a href="../admin/mystore.php" class="text-white text-decoration-none  "> Admin </a>
      </span>

    </div>
  </div>
</nav>
    

<div class="bg-primary sticky-top font-monospace">
  <ul class="list-unstyled d-flex justify-content-center">
    <li><a href="fruits.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Fruits</a></li>
    <li><a href="vegetable.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Vegetables</a></li>
    <li><a href="other.php" class="text-decoration-none text-white fw-bold fs-4 px-5">Others</a></li>
  </ul>
</div>
</body>
</html>