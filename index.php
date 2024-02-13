<?php
session_start();

// Check if the success parameter is present in the URL
if (isset($_GET['success']) && $_GET['success'] == 1) {
    $_SESSION['Registration successful!'] = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPECTRA-2K24</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron&display=swap">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/stylex.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/clock.css">

    <link rel="icon" href="favicon.ico" type="image/x-icon">


</head>

<body>
<div id="successMessage" class="success-message">Successfully registered!</div>

    <nav>
        <div class="container nav_container ">
            <a href="index.php">
                <!-- <h4>SPECTRA</h4> -->
                <img src="./images/Spectra Logo Final.png" width="70px" height="70px">
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
    <!-- end of navbar -->
    <div class="cos">
    <section class="courses">
       

       
        
        
        <div class="do-div">
            <h1 class="new-font">SPECTRA
            </h1>
            <p>Experience the Diversity: Spectra - Where Every Shade Shines!</p><br>
            <a href="register.php"><button class="btn">
                <span class="btn__content">Register now_</span>
                <span class="btn__glitch"></span>
                <span class="btn__label">r25</span>
            </button></a><br>
        
            <div class="countdiv">
                <div id="countdown">
                </div>
            </div>
              

        </div>
    
    </section>
    </div>
    <!-- end of header -->

    <!-- categories -->
 <!--   <section class="categories">
   
        <div class="container categories_container">
        <div class="video-container">
            Embed the video using the <video> element 
            <video autoplay muted loop>
                <source src="bg.mp4" type="video/mp4" style="width:100%">
            </video>
        </div>
            <div class="categories_left">
                <h1>ABOUT EVENT</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente minima laborum quaerat est?
                    Doloremque quam assumenda doloribus? Modi error vitae dolorem inventore velit dolor magnam! Ducimus
                    omnis, a soluta aspernatur eos amet vitae rerum magnam deleniti minima suscipit, voluptas, quis
                    temporibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente minima laborum
                    quaerat est?
                    Doloremque quam assumenda doloribus? Modi error vitae dolorem inventore velit dolor magnam! Ducimus
                    omnis, a soluta aspernatur eos amet vitae rerum magnam deleniti minima suscipit, voluptas, quis
                    temporibus.</p>
                <a href="event.html"> <button class="btn">
                    <span class="btn__content">Schedule_</span>
                    <span class="btn__glitch"></span>
                    <span class="btn__label">r25</span>
                </button></a>
            </div>
            <div class="categories_right">
               
                <iframe width="460" height="215" src="earth1.mp4" frameborder="0" allowfullscreen></iframe>


            </div>
        </div>
    </section>--->
    <section class="courses">
        
        <h2>ABOUT EVENT</h2>
        
        <div class="container categories_containerx">
            <div class="categories_left">
                <h1>ABOUT EVENT</h1>
                <p>🔍 Unveil the excitement of "TryMeze: The Tech Treasure Hunt"! Engage your intellect in a thrilling journey through a maze of technical wonders. Solve each question to unlock the next stage, as you navigate the ultimate adventure in this tech-savvy treasure hunt. 🕵️ #TryMeze #TechAdventure

VIDzard, where the fusion of technical brilliance and visual allure creates unique challenges for participants by engaging their minds in a journey of technical questions, aptitude challenges, and reasoning puzzles, all presented in visually compelling formats.

APTIverse,  In this round, participants will dive into the depths of their analytical abilities, logical thinking, and aptitude. It’s a platform that challenges students to navigate through intricate problems, providing a real test of their enthusiasm for the tech industry.
</p>
                <a href="event.html"> <button class="btn">
                    <span class="btn__content">Schedule_</span>
                    <span class="btn__glitch"></span>
                    <span class="btn__label">r25</span>
                </button></a>
            </div>
            <div class="categories_right">
                <!--video---->
                <iframe width="460" height="215" src="earth1.mp4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
            
        
    </section>

    <!-- END OF CATEGORIES -->
    <hr class="bodx">
    <hr class="bod">
    <!-- COURSES/ROUNDS -->
    <section class="courses">
        <div class="video-container">
            <!-- Embed the video using the <video> element -->
            <video autoplay muted loop>
                <source src="earth1.mp4" type="video/mp4">
            </video>
        </div>
        <h2>EVENT ROUNDS</h2>
        <div class="conatiner courses_container">
            <article class="course">
                <div class="course_image">
                    <img src="./images/aptiverse.png" alt="">
                </div>
                <div class="course_info">
                    <h4>APTIverse</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio recusandae repellendus
                        a
                        reprehenderit dolore enim dignissimos?</p>

                    <!-- <a href="events.html" class="btn btn-primary">learn more</a> -->
                </div>
            </article>
            <article class="course">
                <div class="course_image">
                    <img src="./images/vidzard.png" alt="">
                </div>
                <div class="course_info">
                    <h4>VIDzard</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio recusandae repellendus
                        a
                        reprehenderit dolore enim dignissimos?</p>
                    <!-- <a href="events.html" class="btn btn-primary">learn more</a> -->
                    <!--  -->
                </div>
            </article>
            <article class="course">
                <div class="course_image">
                    <img src="./images/tryme-ze.png" alt="">
                </div>
                <div class="course_info">
                    <h4>TRYme-ze</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio recusandae repellendus
                        a
                        reprehenderit dolore enim dignissimos?</p>
                    <!-- <a href="events.html" class="btn btn-primary">learn more</a> 
                     -->
                </div>
            </article>
        </div>
    </section>
    <!-- END OF COURSES -->
    <hr class="bodx">
    <hr class="bod">


    <!-- testimonial -->




    <section class="container testimonials_container mySwiper">
        <a href="about.html" style=" cursor: pointer;">
            <h2>ORGANIZING TEAM</h2>
        </a>

        <div class="swiper-wrapper">
            <article class="testimonials swiper-slide card-bg">
                <div class="avatar">
                    <img src="./images/avatar1.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>abc</h5>
                    <small>student</small>
                </div>
                <div class="testimomial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo velit fugit delectus,
                        voluptatum perspiciatis maxime!</p>
                </div>
            </article>

            <article class="testimonials swiper-slide card-bg">
                <div class="avatar">
                    <img src="./images/avatar2.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>abc</h5>
                    <small>student</small>
                </div>
                <div class="testimomial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo velit fugit delectus,
                        voluptatum perspiciatis maxime!</p>
                </div>
            </article>

            <article class="testimonials swiper-slide card-bg">
                <div class="avatar">
                    <img src="./images/avatar3.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>abc</h5>
                    <small>student</small>
                </div>
                <div class="testimomial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo velit fugit delectus,
                        voluptatum perspiciatis maxime!</p>
                </div>


            </article>
            <article class="testimonials swiper-slide card-bg">
                <div class="avatar">
                    <img src="./images/avatar4.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>abc</h5>
                    <small>student</small>
                </div>
                <div class="testimomial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo velit fugit delectus,
                        voluptatum perspiciatis maxime!</p>
                </div>


            </article>
            <article class="testimonials swiper-slide card-bg">
                <div class="avatar">
                    <img src="./images/avatar5.jpg">
                </div>
                <div class="testimonial_info">
                    <h5>abc</h5>
                    <small>student</small>
                </div>
                <div class="testimomial_body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo velit fugit delectus,
                        voluptatum perspiciatis maxime!</p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>

    </section>

    <!-- faqs -->

    <section class="faqs">
        <h2>Frequently asked question</h2>
        <div class="container faqs_container">
            <article class="faq">
                <div class="faq_icon"><i class="fa-brands fa-plus"></i></div>
                <div class="question_answer">
                    <h4>Is there a registration fee for the event?</h4>
                    <p>Yes , The registration fee is ₹75 per team.</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="fa-brands fa-plus"></i></div>
                <div class="question_answer">
                    <h4>Can I register alone for the event if i don't have a team?</h4>
                    <p>No, you cannot register as an individual.</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="fa-brands fa-plus"></i></div>
                <div class="question_answer">
                    <h4>Who can be my teammates?</h4>
                    <p>Teams can be formed from the same department and same year , no Cross-Department registration is allowed.</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="fa-brands fa-plus"></i></div>
                <div class="question_answer">
                    <h4>Will there be any breaks during the event?</h4>
                    <p>Yes, there will be scheduled breaks during the event to give you a chance to rest and recharge.</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="fa-brands fa-plus"></i></div>
                <div class="question_answer">
                    <h4>Will refreshments be provided?</h4>
                    <p>Yes the teams which qualify the first round will be given refreshments during the lunch break.</p>
                </div>
            </article>
            <article class="faq">
                <div class="faq_icon"><i class="fa-brands fa-plus"></i></div>
                <div class="question_answer">
                    <h4>How will the winners be announced?</h4>
                    <p>The winners will be announced on the day of the event itself.</p>
                </div>
            </article>
        </div>
    </section>
    <!-- end -->

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
                    <a>spectra@gmail.com</a>
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
