<?php
    include('connection.php');
    $email = $_SESSION['email'];
    $sql = "DELETE FROM `sign` WHERE `email` = '$email'";
    $result = $conn->query($sql);
    if($result){
        session_destroy();
        echo '<script>
            window.location.href = "index.php";
            alert("User Deleted Successfully!!")
        </script>';
    }
    else {
        echo '<script>
            alert("Please try again");
        </script>';
    }
    // $conn->close();
?>