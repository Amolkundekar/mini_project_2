<?php
    include 'config.php';
    $id = $_GET['ID'];

    if(mysqli_query($con, "DELETE FROM `tblproduct` WHERE id = $id"))
    {
        echo"
        <script>
        alert('product deleted sucessfully.');
        window.location.href = 'index.php';
        </script>
        ";
        // header("location:index.php");
    }
    else{
        echo"
        <script>
        alert('product deletion failed.');
        window.location.href = 'index.php';
        </script>
        ";
        // header("location:index.php");
    }
    
?>
