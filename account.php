<body>

<link rel="stylesheet" href="style4.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
<!--===============Profile================-->
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <?php
                        include('accountdisplay.php');
                    ?>
                      <a onclick="return confirm('Are you sure , you want to Logout Account?')"href="logout.php" type = "submit" class="btn btn-primary">Log out</a>
                      <a onclick="return confirm('Are you sure , you want to Delete Account?')"href="delete.php?id=<?= $row['id']; ?>" class="btn btn-outline-primary">Delete Account</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <!-- <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" >
                      <input type="text" class="form-control" value="Name">
                    </div>
                  </div> -->
                  <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email ID :-</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                        include('accountdisplay.php');
                    ?>
                     <!-- <input type="text" class="form-control" value="Email"> -->
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone No :-</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                        include('accountdisplay1.php');
                    ?>
                     <!-- <input type="text" class="form-control" value="Phone"> -->
                    </div>
                  </div>
                  <!-- <hr>
                  
                  <hr> -->
                  <!-- <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Country</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" value="Country">
                    </div>
                  </div> -->
                  <hr>
                  <!-- <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info ">Save Changes</a>
                    </div> -->
                  </div>
                </div>
              </div>
              </div> 
            </div>
          </div>
        </div>
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
<script src="script.js">
</script>
</php>