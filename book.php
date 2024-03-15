<?php

    include('connection.php');
    if (isset($_POST['region'])&& isset($_POST['food'])&& isset($_POST['budget']) && isset($_POST['mood'])) 
    {
        $region = $_POST['region'];
        $food = $_POST['food'];
        $budget = $_POST['budget'];
        $mood = $_POST['mood'];
        $sql = "select * from book where region like '%$region%' and food like '%$food%' and budget like '%$budget%' and mood like '%$mood%'";
        $result =$conn->query($sql); 
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style6.css">
</head>
<body>
<?php
    if($count ==1){
?>
<div class="places-text">
        <h2>Results</h2>
        <small>Recomendation Matching Your Request</small>
    </div>
    <br><br>
<div class="flex">
    <div class="card">
    <div class="zoom-img">
        <p style="width: 100%;" class="location"><?php echo $row["location"]; ?><br>
        </p>
        <input type ="submit" class="submit" name="submit" value="Interested ?">
        <div class="image">
            <img src="<?php echo $row["travel_image"]; ?>" alt="">
        </div>
    </div>
    </div>
</div>
    </div>
  </section>
<?php
    } 
    
    else{
?>
        <div class="places-text"><br><br>
        <h2>No Results Found </h2><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <br><br>
<?php
    }
}
?>
    
</body>
</html>