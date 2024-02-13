<?php
session_start();

// Check if the success parameter is present in the URL
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $_SESSION['registration_success'] = true;
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./css/stylex.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
<div id="successMessage" class="success-message">Successfully Sent !</div>
    <nav>
        <div class="container nav_container ">
            <a href="index.php">
                <h4>SPECTRA</h4>
            </a>
            <ul class="nav_menu">
                <li class="li-d"><a href="index.php">HOME</a></li>
                <li class="li-d"><a href="about.html">ABOUT US</a></li>
                <li class="li-d"><a href="event.html">SCHEDULE</a></li>
                <li class="li-d"><a href="contact.php">CONTACT US</a></li>

            </ul>
            <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>



    <!-- contact us -->
    <section class="contact">
        <div class="container contact_container">
            <aside class="contact_aside">
                <div class="aside_image">
                    <img src="contact.svg">
                </div>
                <h2>contact us</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam numquam minus quidem hic provident
                    ipsum.</p>
                <ul class="contact_details">
                    <li>
                        <i class="fa-solid fa-xmark"></i>
                        <h5>+123456789</h5>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark"></i>
                        <h5>+123456789</h5>
                    </li>
                    <li>
                        <i class="fa-solid fa-xmark"></i>
                        <h5>+123456789</h5>
                    </li>
                </ul>
                <ul class="contact_socials">
                    <li><a href="https://facebook.com"><i class="fa-solid fa-xmark"></i></a></li>
                    <li><a href="https://facebook.com"><i class="fa-solid fa-xmark"></i></a></li>
                    <li><a href="https://facebook.com"><i class="fa-solid fa-xmark"></i></a></li>
                    <li><a href="https://facebook.com"><i class="fa-solid fa-xmark"></i></a></li>
                </ul>
            </aside>


            <!-- form -->
            <form class="contact_form" action="process_form.php" method="post">
                <div class="form_name">
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <input type="email" name="email" placeholder="Your Email Address" required>
                <textarea name="message" rows="7" placeholder="Message"></textarea>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </section>

    <!-- footer -->

    <footer class="footer">
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo">
                    <h4>Address</h4>
                </a>
                <p>MCKV Institute of Engineering 243 G. T. Road (North), Liluah, Howrah – 711204.</p>
            </div>



            <div class="footer_1">
                <h4>CONTACT US</h4>

                <div>
                    <p>+01 234 567 8910</p>
                    <p>spectra@gmail.com</p>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>&nbsp
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <div class="footer_1">
                <h4>Quick links</h4>
                <div>
                    <a>about</a><br>
                    <a>Schedule</a><br>
                    <a>contactus</a>


                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <small>copyright &copy; spectra 2024</small>
        </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/f0e1e3b0bc.js" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        //   when window width >=600px
        breakpoints: {
            600: {
                slidesPerView: 2
            }
        }
    });



        // Check if the success message should be displayed
        if (window.location.search.includes('success=1')) {
            document.getElementById('successMessage').style.display = 'block';
            // Reset the URL to remove the success parameter
            window.history.replaceState({}, document.title, window.location.pathname);

            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000);
        }

</script>

</html>
