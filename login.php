<?php
    include('connection.php');
    if (isset($_POST['email']) && isset($_POST['password'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from sign where email = '$email' and password = '$password'";  
        $_SESSION['email'] = $email;

        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1)
        { 
            header("location: homepage.php");
        }  
        else
        {  
            session_destroy();
            echo  '<script>
                    window.location.href = "index.php";
                    alert("Login failed. Invalid email or password!!")
                </script>';
         }     
    }
?>