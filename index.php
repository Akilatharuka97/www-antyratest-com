<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>local.antyratest.com</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!--############ hero sectio ############-->
    <div class="hero-container">
        <div class="navbar">
            <div class="navbar-item">
                <img class="logo" src="images/header-logo.png" alt="Header Logo">
            </div>
            <div class="navbar-item">
                <p>CALL US ON &nbsp;</p>
                <div class="navbar-phone">
                    <span><a href="tel:+94777999994">+94 777 999 994</a></span>&nbsp;|&nbsp;
                    <span><a href="tel:+94777428313">+94 777 428 313</a></span>
                </div>
            </div>
        </div>
        <div class="hero-section">
            <img src="images/landing-header-desktop.jpg" alt="Hero Section Image">
            <div class="hero-text">
                <p class="raw-1">WE DESIGN</p>
                <p class="raw-2"><span>Seamless,</span> Building Experiences</p>
                <p class="raw-3">using innovative technology</p>
            </div>
            <div class="hero-text-bottom">
                <div class="ht-btm-txt">
                    <p>Don't Just Build a Building.<br>Build an Experience.</p>
                </div>
                <div class="ht-btm-btn">
                    <a href="">
                        <p>Request For Proposal</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--############ who we are section ############-->

    <div class="about-container">
        <div class="about-content">
            <p class="heading">Who <span>we are</span></p>
            <p class="sub-heading">and what we do</p>
            <p class="content">We are a team of skilled & passionate technology curators who enjoy humanizing building experiences using world-class technologies. Our decade of experience in electronic security, systems integration, automation and ELV Contracting has helped us curate unique experiences for different types of properties. We are a licensed agent of multiple brands in Surveillance, Access Control, Network Equipment, Meeting Room Systems, Intercom Systems, Smart Home Automation, Hotel Door Locks, Guest Room Management Systems, Print Management & Many More</p>
        </div>
    </div>

    <!--############ three card section ############-->

    <div class="card-section">
        <div class="card-bg">
            <div class="card-carousel">
                <div class="card">
                    <div class="img">
                        <img src="images/cctv.png" alt="Card 1">
                    </div>
                    <div class="txt">
                        <p class="heading">Surveillance</p>
                        <p class="contents">We offer Complete Smart Home & Building Solutions as well as cater to one-off requirements</p>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="images/display.png" alt="Card 1">
                    </div>
                    <div class="txt">
                        <p class="heading">Surveillance</p>
                        <p class="contents">We offer unified Office Automation Solutions that go beyond traditional devices & peripherals</p>
                    </div>
                </div>
                <div class="card3">
                    <div class="img">
                        <img src="images/alarm.png" alt="Card 1">
                    </div>
                    <div class="txt">
                        <p class="heading">Alarm & Fire Systems</span></p>
                        <p class="contents">Unique guest and employee experience whether it be at a resort, city hotel or an Airbnb</p>
                    </div>
                </div>
                <button class="prev-button"><i class='bx bx-left-arrow-alt'></i></button>
                <button class="next-button"><i class='bx bx-right-arrow-alt'></i></button>
            </div>
        </div>
    </div>

    <!--############ contact section ############-->


    <div class="contact-section">
        <div class="contact-container">
            <h2 class="contact-heading">Let's get in touch</h2>
            <form action="submit.php" method="POST">
                <div class="form-group">
                    <input type="text" id="name" placeholder="Your Name*" name="name" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" placeholder="Your Email*" name="email" required>
                </div>
                <div class="form-group">
                    <input type="tel" id="phone" placeholder="Your Phone" name="phone">
                </div>
                <div class="form-group">
                    <input type="text" id="subject" placeholder="Subject" name="subject">
                </div>
                <div class="form-group">
                    <textarea id="message" placeholder="Your Message" name="message"></textarea>
                </div>
                <p class="req-field"><span>*</span>Required Fields</p>
                <div class="submit-btn">
                    <a href="">
                        <p>Request For Proposal</p>
                    </a>
                </div>
                <div class="contact-notice">
                    <p>This site is protected by reCAPTCHA and the Google <a href="#" target="_blank">Privacy Policy</a> and <a href="#" target="_blank">Terms of Service</a> apply.</p>
                </div>
            </form>
        </div>
    </div>

    <!--############ footer section ############-->

    <div class="footer-section">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="images/footer-logo.png" alt="Logo">
            </div>
            <div class="footer-info">
                <p>12 Charles Drive, Colombo 03, Sri Lanka</p>
                <p><a href="mailto:hello@anscom.lk">hello@anscom.lk</a> | <a href="tel:+94777999994">+94 777 999 994</a></p>
            </div>
        </div>
        <hr>
        <div class="copyright">
            <p>© 2021 Anscom. All Rights Reserved</p>
            <div class="footer-icons">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
            </div>
            <p>Concept and Design By Antyra Solutions</p>
        </div>
    </div>
</body>

</html>