<?php

    include('feedback1.php');

    $sql = "select * from feedback";
    $result =$conn->query($sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style9.css">
</head>
<body>
<?php
    while($row = mysqli_fetch_array($result)){
?>
<section class="review" id="review">
<div class="swiper review-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide box">
        <img src="icon.png">
        <p style="width: 100%;" class="name"><?php echo $row["name"]; ?><br>
        <p style="width: 100%;"  class="message"><?php echo $row["message"];?></p>
        </div>
    </div>
    </div>
</section>
<?php
        } 
?>   
<script src ="script.js"></script>
</body>
</html>