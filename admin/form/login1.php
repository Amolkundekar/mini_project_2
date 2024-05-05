<?php
 session_start();
$con = mysqli_connect('localhost', 'root', '', 'agrigrocer');

    $a_name = $_POST['username'];
    $a_pass = $_POST['userpass'];

    $result = mysqli_query($con, " select * from admin where  username ='$a_name' AND userpass = '$a_pass' " );

   

    if(mysqli_num_rows($result)){
        $_SESSION['admin'] = $a_name;

        echo "
        <script>
        alert('login successfully');
        window.location.href = '../mystore.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
        alert('Invalid Credentials');
        window.location.href = '../login.php';
        </script>
        ";
    }

?>