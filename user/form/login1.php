
<?php

//    if(isset($_POST))

    $name = $_POST['name'];
    $password = $_POST['password'];

    $con = mysqli_connect('localhost', 'root', '' ,'agrigrocer');

    $result = mysqli_query($con, "select * from `tbluser` where username = '$name' OR email= '$name' And password = '$password' ");


    session_start();
    if(mysqli_num_rows($result))
    {
        $_SESSION['user'] = $name;
        echo"
            <script>
                alert('Login Successful');
                window.location.href = '../index.php';
            </script>
            ";
    }

    else
    {
        echo"
            <script>
                alert('Invalid credentials');
                window.location.href = 'login.php';
            </script>
            ";

    }


?>
