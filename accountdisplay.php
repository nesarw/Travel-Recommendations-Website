<?php
    include('login.php');
    if(!isset($_SESSION['email'])) {
        header("Location:index.php");
        exit();
      }
        $email=$_SESSION['email'];
        $sql = "select * from sign where email like '%$email%'";
        $result =mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section class="services">
    <div class="service-item">
        <p style="width: 100%;" class="email"><?php echo $row['email'];?><br>
    </div>
</section>
</body>
</html>