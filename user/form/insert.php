<?php


    $con = mysqli_connect('localhost', 'root', '' ,'agrigrocer');

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];
        $cpassword =  $_POST['cpassword'];
        $hashed_pass = password_hash($cpassword,PASSWORD_DEFAULT);

        // if()
        

        $dupemail = mysqli_query($con, "select * from `tbluser` where email = '$email' ");

        $dupusername = mysqli_query($con, "select * from `tbluser` where username = '$name' ");

        if(mysqli_num_rows($dupemail))
        {
            echo"
            <script>
                alert('this email is already taken');
                window.location.href = 'register.php';
            </script>
            ";
        }

        if(mysqli_num_rows($dupusername))
        {
            echo"
            <script>
                alert('this username is already taken');
                window.location.href = 'register.php';
            </script>
            ";
        }
        else if( $password!= $cpassword)
        {
            echo "
            <script>
            alert('Passwords do not match');
            window.location.href = 'register.php';
            </script>
            ";
        }
        else
        {
            mysqli_query($con, "INSERT INTO `tbluser`(`username`, `email`, `number`, `password`) VALUES ('$name','$email','$number','$hashed_pass')");

            echo"
            <script>
                alert('Registered successfully');
                window.location.href = 'login.php';
            </script>
            ";

        }
    }

?>