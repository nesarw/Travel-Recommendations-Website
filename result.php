
<body>
<link rel="stylesheet" href="style2.css" />
<link rel="stylesheet" href="style5.css"/>
<link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">

<!--===========Nav Bar=================-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<!--===========Nav Bar=================-->
<header class="header">

    <a href="#" class="logo"> 
    <i class="Fas Fa-Atlas"></i>Go Trip</a>
        <nav class="navbar">
                <a href="homepage.php">Home</a>
                <a href="feedback.php">feedback</a>
                <a href="index1.php">Sign In</a>
                <a href="#footer">Contact Us</a>
                <a href="account.php">Account</a>
        </nav>
        <div class="icons">
            <div  id="menu-btn">&#9776</div>
            </div>
        </div>
    </header>
<!--===============Banner================-->
    <div class="places-text">
        <h2>Results</h2>
        <small>Recomendation Matching Your Request</small>
    </div>
    <br><br>
<?php
    include('book.php');
?>

<!--===========Footer=================-->
  <div class="footer" id="footer">
  <div class="links">
        <h3>Quick Links</h3>
        <a style ="font-family:Barlow condensed; color:white; text-decoration:none; font-size:17px; font-weight:none;" href="#">Instagram</a>
        <a style ="font-family:Barlow condensed; color:white; text-decoration:none; font-size:17px; font-weight:none;" href="#">Facebook</a>
        <a style ="font-family:Barlow condensed; color:white; text-decoration:none; font-weight:none;font-size:17px;" href="#">Twitter</a>
        <a style ="font-family:Barlow condensed; color:white; text-decoration:none; font-weight:none;font-size:17px;" href="#">LinkedIn</a>
        
    </div>
    <div class="links">
        <h3>Explore</h3>
        <a style ="font-family:Barlow condensed; color:white; text-decoration:none; font-size:17px; font-weight:none;" href="homepage.php">Home</a>
        <a style ="font-family:Barlow condensed; color:white; text-decoration:none; font-size:17px; font-weight:none;" href="feedback.php">Feedback</a>
        <a style ="font-family:Barlow condensed; color:white; text-decoration:none; font-weight:none;font-size:17px;" href="index1.php">Sign in</a>
        <a style ="font-family:Barlow condensed; color:white; text-decoration:none; font-weight:none;font-size:17px;" href="account.php">Account</a>
    </div>
    <div class="links">
        <h3>Contact us - </h3>
        <!-- <a style ="font-family:Barlow condensed; color:yellow; text-decoration:none; font-size:17px; font-weight:none;" href="https://maps.app.goo.gl/s4mKvU6oGqyqwusj7">Location</a> -->
        <h4 style ="font-family:Barlow condensed; color:white; text-decoration:none; font-size:17px; font-weight:none;">FnC Corporation</h4>
        <h4 style ="font-family:Barlow condensed; color:white; text-decoration:none; font-size:17px; font-weight:none;">Mumbai - 400 042</h4>
        <h4 style ="font-family:Barlow condensed; color:white; text-decoration:none; font-size:17px; font-weight:none;">India</h4>
        <a style ="font-family:Barlow condensed;  color:white;text-decoration:none; font-weight:none;font-size:17px;" href="tel:7738446159">+91 - 7738446159</a>
        <a style ="font-family:Barlow condensed;  color:white; text-decoration:none; font-weight:none;font-size:17px;" href="mailto:Raunakgond29@gmailcom">Email</a>
    </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script src ="script.js">
</script>
</html>