<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Portfolio Website</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="portfolio.css">
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
 
</head>
<body>
    <!-- Navbar -->
    <header>
        <a href="image.jpg" class="logo">Sanjeev R</a>
 
        <div class="bx bx-menu" id="menu-icon"></div>
 
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>
    <!-- Home -->
 
    <section class="home" id="home">
        <div class="social">
            <a href="https://www.twitter.com/sanjeev_62"><i class='bx bxl-twitter'></i></a>
            <a href="https://www.facebook.com/sanjeev.r.583"><i class='bx bxl-facebook' ></i></a>
            <a href="https://www.instagram.com/sanjeev_06_"><i class='bx bxl-instagram' ></i></a>
        </div>
        <div class="home-img">
            <img src="image.jpg" alt="">
        </div>
        <div class="home-text">
            <span>Hello, I'm</span>
            <h1>Sanjeev R</h1>
            <h2>Full Stack Web Developer</h2>
            <br><br>
            <!-- <p> <br> adipisicing elit. Minima, consectetur <br> ullam?</p> -->
            <a href="#contact" class="btn">Contact Me</a>
        </div>
 
        <div class="scroll-down">
            <a href="#about">
                <i class='bx bx-mouse' ></i>
                <span>Scroll Down</span>
                <i class='bx bxs-down-arrow-alt' ></i>
            </a>
        </div>
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="heading">
            <h2>About</h2>
            <span>Introduction</span>
        </div>
        <!-- About Content -->
        <div class="about-container">
            <div class="about-img">
                <img src="image2.jpg" alt="" height="600px">
            </div>
            <div class="about-text">
                <p>I'm a creative Web Designer with 1 year experience in <b>Frontend and Backend  Development</b>, project management. I'm creative and have leadership qualities.</p>
                <div class="information">
                    <!-- Box 1 -->
                    <div class="info-box">
                        <i class='bx bxs-user' ></i>
                        <span>Sanjeev R</span>
                    </div>
                    <!-- Box 2 -->
                    <div class="info-box">
                        <i class='bx bxs-phone' ></i>
                        <span>+91 9740824200</span>
                    </div>
                    <!-- Box 3 -->
                    <div class="info-box">
                        <i class='bx bxs-envelope' ></i>
                        <span>sanjeev06022001@gmail.com</span>
                    </div>
                </div>
                <a href="SANJEEVR_InternshalaResume.pdf" class="btn">Download My Cv</a>
            </div>
        </div>
    </section>
    <!-- Skills -->
    <section class="skills" id="skills">
        <div class="heading">
            <h2>Skills</h2>
            <span>My Skills</span>
        </div>
        <!-- Skills Content -->
        <div class="skills-container">
            <div class="bars">
                <!-- Box 1 -->
                <div class="bars-box">
                    <h3>HTML</h3>
                    <span>94%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar html-bar"></div>
                </div>
                <!-- Box 2 -->
                <div class="bars-box">
                    <h3>CSS</h3>
                    <span>84%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar css-bar"></div>
                </div>
                <!-- Box 3 -->
                <div class="bars-box">
                    <h3>JavaScript</h3>
                    <span>74%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar js-bar"></div>
                </div>
                <!-- Box 4 -->
                <div class="bars-box">
                    <h3>BootStrap</h3>
                    <span>50%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar react-bar"></div>
                </div>
                
                <!-- Box 5 -->
                <div class="bars-box">
                    <h3>PHP</h3>
                    <span>70%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar react-bar"></div>
                </div>
            </div>
            
            
        </div>
            <div class="skills-img">
                <img src="#" alt="">
            </div>
        </div>
 
    </section>
    <!-- Services -->
    <section class="services" id="services">
        <div class="heading">
            <h2>Services</h2>
            <span>My Services</span>
        </div>
        <div class="services-content">
            <!-- Box 1 -->
            <div class="services-box">
                <i class='bx bx-code-alt' ></i>
                <h3>Frontend <br>Development</h3>
                <a href="#">Learn More</a>
            </div>
            <!-- Box 2 -->
            <div class="services-box">
                <i class='bx bx-server' ></i>
                <h3>Backend <br>Development</h3>
                <a href="#">Learn More</a>
            </div>
            <!-- Box 3 -->
            <div class="services-box">
                <i class='bx bx-brush' ></i>
                <h3>UI/UX <br>Design</h3>
                <a href="#">Learn More</a>
            </div>
        </div>
    </section>
    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="heading">
            <h2>My Recent Work</h2>
            <span>Covid-19 Testing Management System</span>
        </div>
        <div class="portfolio-content">
            <div class="portfolio-img">
                <img src="image3.jpeg" alt="" height="900px">
            </div>
            <div class="portfolio-img">
                <img src="image4.jpeg" alt="" height="900px">
            </div>
            <div class="portfolio-img">
                <img src="image5.jpeg" alt="" height="900px">
            </div>
            
        </div>
    </section>
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact</h2>
            <span>Connect With Me</span>
        </div>
        <div class="contact-form">
            <form action="">
                <input type="text" placeholder="Your Name">
                <input type="email" name="" id="" placeholder="Your Email">
                <textarea name="" id="" cols="30" rows="10" placeholder="Write Message Here..."></textarea>
                <input type="button" value="Send" class="contact-button">
            </form>
        </div>
    </section>
    <!-- Footer -->
    <div class="footer">
        <h2>Sanjeev R</h2>
        <div class="footer-social">
            <a href="https://www.facebook.com/sanjeev.r.583"><i class='bx bxl-facebook' ></i></a>
            <a href="https://www.twitter.com/sanjeev_62"><i class='bx bxl-twitter' ></i></a>
            <a href="https://www.instagram.com/sanjeev_06_"><i class='bx bxl-instagram' ></i></a>
           
        </div>
 
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; Sanjeev R All Right Reserved. </p>
    </div>
 
 
 
    <!-- Link To JS -->
    <script src="portfolio.js"></script>
</body>
</html>