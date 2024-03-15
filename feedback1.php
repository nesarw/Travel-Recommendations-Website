<?php
    include('connection.php');
    if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['message'])) 
    {   
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $sql = "INSERT INTO `feedback`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
        $stmt = $conn->query($sql);

        echo '<script>
                window.location.href = "homepage.php";
                alert("Feedback Send Successfully!!")
            </script>';
        $conn->close();
    }
?> 