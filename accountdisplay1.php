<?php
    include('login.php');
?>
<?php
        $email=$_SESSION['email'];
        $sql = "select `phone` from sign where email = '$email'";
        $result =$conn->query($sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    while($row = mysqli_fetch_array($result)){
?>
<section class="services">
    <div class="service-item">
        <p style="width: 100%;" class='phone'><?php echo $row["phone"]; ?>
    </div>
</section>
<?php
        }
?>   
</body>
</html>