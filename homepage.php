<body>
    <link rel="stylesheet" href="style2.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/> -->
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
            <!-- <li><a href="homepage.php">Home</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="index1.php">Sign in</a></li>
            <li><a href="#footer">Contact Us</a></li>
            <li><a href="account.php">Account</a></li> -->
        <!-- </ul>
       
    </section> -->
    <!--===============Banner================-->
    <section class="banner">
        <div class="banner-text-item">
            <div class="banner-heading">
                <h1>Where to Travel Next ?</h1>
            </div>
            <form class="form" action="result.php" method="POST">
                <input type="text" name ="region" list="regionlist" placeholder="Region?" required>
                <datalist id="regionlist">
                    <option>Mountains</option>
                    <option>Beach</option>
                    <option>Snowhills</option>
                    <option>Deserts</option>
                    <option>Backwaters</option>
                    <option>Towns/Cities</option>
                    <option>Farms/CountrySides</option>
                    <option>Islands</option>
                </datalist>
                <input type="text" name ="food" list="foodlist" placeholder="Food?"required>
                <datalist id="foodlist">
                    <option>North-Indian</option>
                    <option>South-Indian</option>
                    <option>Maharashtrian</option>
                    <option>Mughlai/Hyderabadi</option>
                    <option>Continental</option>
                    <option>Chinese</option>
                    <option>International Cuisines</option>
                </datalist>
                <input type="text" name ="budget" list="budgetlist" placeholder="Budget?"required>
                <datalist id="budgetlist">
                    <option>10,000 - 20,000</option>
                    <option>20,000 - 30,000</option>
                    <option>30,000 - 40,000</option>
                    <option>40,000 - 50,000</option>
                    <option>50,000 - 60,000</option>
                    <option>60,000 - 70,000</option>
                    <option>70,000 - 80,000</option>
                    <option>80,000 - 100,000</option>
                </datalist>
                <input type="text" name ="mood" list="moodlist" placeholder="Mood?" required>
                <datalist id="moodlist">
                    <option>Chill</option>
                    <option>Party</option>
                    <option>Calm</option>
                    <option>Explore</option>
                    <option>Soundless</option>
                </datalist>
                <input style="font-weight:bold; background-color:yellow" type="submit" class="submit" name="submit" value="Book">
    
            </form>
        </div>
    </section>
    <!--=========Feedback===============-->
    <?php
        include('feedbackdisplay.php');
    ?>
    
    <!-- <section class="services">
        <div class="service-item">
            <img src="icon.png">
            <h2>Amazing Search.</h2>
        </div>
        <div class="service-item">
            <img src="icon.png">
            <h2>Easy <br>Use.</h2>
        </div>
        <div class="service-item">
            <img src="icon.png">
            <h2>Good Website.</h2>
        </div>
        <div class="service-item">
            <img src="icon.png">
            <h2>Usefull <br>Tool</h2>
        </div>
    </section> -->
    <!--==============Places===================-->
    <section class="places">
        <div class="places-text">
            <small>Top Featured</small>
            <h2>Top Trending Places of This Month.</h2>
        </div>
    
        <div class="cards">
            <div class="card">
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="leh.jpeg">
                    </div>
                </div>
    
                <div class="text">
                    <h2>SnowHills</h2>
                    <div class="card-box">
                        <p class="likes">&#128339; 40% Likes </p>
                        <p class="location">&#9992; Leh, India</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="backwaters.jpeg">
                    </div>
                </div>
    
                <div class="text">
                    <h2>Backwaters</h2>
                    <div class="card-box">
                        <p class="time">&#128339; 20% Likes </p>
                        <p class="location">&#9992; Kerela, India</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="zoom-img">
                    <div class="img-card">
                        <img src="beach.jpeg">
                    </div>
                </div>
    
                <div class="text">
                    <h2>Beach</h2>
                    <div class="card-box">
                        <p class="time">&#128339; 60% Likes </p>
                        <p class="location">&#9992; Goa, India</p>
                    </div>
                </div>
            </div></div>
    </section>
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