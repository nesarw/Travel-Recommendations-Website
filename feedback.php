<body>
<link rel="stylesheet" href="style8.css" />
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
        </header>
            <!-- <li><a href="homepage.php">Home</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="index1.php">Sign in</a></li>
            <li><a href="#footer">Contact Us</a></li>
            <li><a href="account.php">Account</a></li> -->
        <!-- </ul>
       
    </section> -->
    <!--===============Feedback================-->
    <div class="container">
    <form action="feedbackdisplay.php" method="POST">
        <div class="row">
            <h1>FeedBack</h1>
        </div>
        <div class="row">
            <h4 style="text-align:center">We'd love to hear from you!</h4>
        </div>
        <div class="row input-container">
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <div class="name">
                    <input type="text" name="name" required />
					<label>Name</label> 
</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
                <div class="styled-input">
                    <input type="email" name="email" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                    <input type="text"name="phone" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
                <div class="styled-input wide">
                    <textarea name="message" required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
                <input type="submit" class="btn" value="Send Message" name="submit" />
			</div>
        </div>
    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


    <!-- custom js file link -->
    <script src="script.js"></script>
    </body>
    </html>