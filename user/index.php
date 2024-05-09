<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- bootstrap cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <?php
        include 'header.php';
       ?>
       
</head>
<body >

<!-- coursal -->
<div class="slider">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="img/images/banner-01.jpg"
              class="d-block w-100 carousel-img"
              alt="..." 
            />
            <div class="carousel-caption d-none d-md-block">
              <h1>Welcome to Agrigrocer</h1>
              <p>Welcome to the shop. Grab your fresh groceries now.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img
              src="img/images/banner-02.jpg"
              class="d-block w-100"
              alt="..." 
            />
            <div class="carousel-caption d-none d-md-block">
              <h1>Fresh Products Directly from the farm</h1>
              <p>
                Get fresh product directly from the farmers without any market
                dealers
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              src="img/images/banner-03.jpg"
              class="d-block w-100"
              alt="..." 
            />
            <div class="carousel-caption d-none d-md-block">
              <h1>Your daily basket</h1>
              <p>
                One stop solution for your daily groceries with freshness of
                quality and trust
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <hr />
<!-- Category Section -->
<!-- Category Section -->
<div class="container-fluid px-5 font-monospace ">
    <div class="row">
        <div class="col">
            <div class="category-heading text-center py-4 font-monospace">
                <h2>Available Categories</h2>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                    <div class="card">
                        <img src="img\images\categories_img_01.jpg" class="card-img-top" alt="Category Image 01">
                        
                        <div class="card-body">
                        <a href="fruits.php" class="text-decoration-none text-dark"><h3 class="card-title text-center fw-bold">Fruits</h3></a>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                    <div class="card">
                        <img src="img/images/categories_img_02.jpg" class="card-img-top" alt="Category Image 02">
                        <div class="card-body">
                        <a href="vegetable.php" class="text-decoration-none text-dark"><h3 class="card-title text-center fw-bold">Vegetables</h3></a>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 shadow p-3 mb-5 bg-white rounded">
                    <div class="card">
                        <img src="img/images/categories_img_03.jpg" class="card-img-top" alt="Category Image 03">
                        <div class="card-body">
                        <a href="other.php" class="text-decoration-none text-dark"><h3 class="card-title text-center fw-bold">Others</h3></a>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- End Category Section -->
<hr/>

<div class="containter-fluid">
    <div class="col-md-12">
        <div class="row">
       
            <h1 class="text-warning text-center font-monospace mt-5 my-3" > HOME</h1>
            
            <?php
                include 'config.php';
                $record = mysqli_query($con, "select * from tblproduct");
                
                while($row = mysqli_fetch_array($record))
                {
                    $cheak_page = $row['pcategory'];
                    if($cheak_page ==='Home')
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

<hr />
   <!-- Gallery -->

<div class="container-fluid">
    <div class="gallery-heading text-center font-monospace py-5">
        <h2>Gallery</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="gallery-container">
                <div class="row flex-nowrap overflow-auto">
                    <div class="col-auto gallery-item">
                        <img src="img/images/instagram-img-01.jpg" alt="Instagram Image 01" class="img-fluid">
                    </div>
                    <div class="col-auto gallery-item">
                        <img src="img/images/instagram-img-02.jpg" alt="Instagram Image 02" class="img-fluid">
                    </div>
                    <div class="col-auto gallery-item">
                        <img src="img/images/instagram-img-03.jpg" alt="Instagram Image 03" class="img-fluid">
                    </div>
                    <div class="col-auto gallery-item">
                        <img src="img/images/instagram-img-04.jpg" alt="Instagram Image 04" class="img-fluid">
                    </div>
                    <div class="col-auto gallery-item">
                        <img src="img/images/instagram-img-05.jpg" alt="Instagram Image 05" class="img-fluid">
                    </div>
                    <div class="col-auto gallery-item">
                        <img src="img/images/instagram-img-06.jpg" alt="Instagram Image 06" class="img-fluid">
                    </div>
                    <div class="col-auto gallery-item">
                        <img src="img/images/instagram-img-07.jpg" alt="Instagram Image 07" class="img-fluid">
                    </div>
                    <!-- Add more gallery items as needed -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery -->
<?php
include 'footer.php';
?>
<!-- Smooth Scrolling Script -->
<script>
    // Smooth scrolling for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            target.scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

</body>
</html>