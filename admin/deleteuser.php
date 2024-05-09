<?php
    $id = $_GET['ID'];
    echo $id;

    include '<product/config.php';
    if(mysqli_query($con, "DELETE FROM `tbluser` WHERE id = $id"))
    {
        echo"
        <script>
        alert('user deleted sucessfully.');
        window.location.href = 'users.php';
        </script>
        ";
    }

    
?>