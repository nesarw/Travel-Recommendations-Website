<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    $conn = new mysqli('localhost','root','','travel');
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    
    if(isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['password'])) 
    {
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `sign` (`email`,`phone`,`password`) VALUES ('$email','$phone','$password')";
        $stmt = $conn->query($sql);
        

        echo '<script>
                window.location.href = "index.php";
                alert("User Registered Successfully!!")
            </script>';
        $conn->close();
    }

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?> 