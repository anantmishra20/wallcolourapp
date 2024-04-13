<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:title" property="og:title" content="Color Your World.">
    <link rel="canonical" href="">
    <meta name="description" content="Color Your World a Place Where you can find Modern solutions for a Modern World. Unlock the Art of Living - Color Your World Awaits Your Imagination. The best Interior designing Platform.">
    <meta name="author" content="Harsh & Anant Developers">
    <meta name="keywords"
        content="coloryourworld, Interior desiging,Color Your World, color your world">
    <title>COLOR YOUR WORLD</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Satisfy&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="images/sarthak.jpg" type="image/x-icon">
    
</head>

<body>
    <div class="navbar top">
        <div class="nav-main">
            <div class="nav-menu" id="menuopen"><i class="fa-solid fa-bars"></i></div>
            <div class="nav-logo"><a href="index.html"></a></div>
            <div class="brand">
                <div class="brand-name"><a href="index.html">COLOR YOUR WORLD</a></div>
                <div class="brand-quote"><a class="brand-quote" href="index.html">you dream...we create...</a></div>
            </div>
        </div>

        <div class="nav-items" id="navitems">
            <div class="close" onclick="closemenu()"><i class="fa-solid fa-xmark"></i></div>
            <div><a class="nav-links" href="index.php">Home</a></div>
            <div><a class="nav-links" href="about.php">About</a></div>
            <div><a class="nav-links" href="projects.php">Designers</a></div>
            <div><a class="nav-links" href="gallery.php">Gallery</a></div>
            <div><a class="nav-links" href="contact.php">ContactUs</a></div>
        </div>
    </div>

    <div class="main-background project-page" id="nav">
        <div class="matter">
            <h1>Our Designers</h1>
            <p>Explore Our Showcase of Captivating Creations - Where Imaginations Transforms into Reality.</p>
            <a href="index.html">CYW CHATBOT</a>
        </div>
    </div>

    <div id="explore" class="heading">Designers</div>
    <div class="providings">

        <!-- ------- Project 1 ------- -->
        <div class="container">
            <p><span>NAME</span> : M80 desiging studio<br><span>Phone No</span> : #contactus</p>
            <div class="project project1">
                <div class="images">
                    <img src="images/project1/41.jpg" alt="img1">
                    <img src="images/project1/p6.jpg" alt="img2">
                    <img src="images/project1/p1.jpg" alt="img3">
                    <img src="images/project1/p2.jpg" alt="img4">
                    <img src="images/project1/p4.jpg" alt="img5">
                    <img src="images/project1/p12.jpg" alt="img6">
                    <img src="images/project1/p13.jpg" alt="img7">
                    <img src="images/project1/p14.jpg" alt="img9">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p1_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p1_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p1_option_slide(1)"></span>
                    <span onclick="p1_option_slide(2)"></span>
                    <span onclick="p1_option_slide(3)"></span>
                    <span onclick="p1_option_slide(4)"></span>
                    <span onclick="p1_option_slide(5)"></span>
                    <span onclick="p1_option_slide(6)"></span>
                    <span onclick="p1_option_slide(7)"></span>
                    <span onclick="p1_option_slide(8)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>Great design concept and color scheme <span>👌</span>. Improved storage options and textures would
                    enchance the space futher.
                </span>
            </p>
        </div>

        <!-- ------- Project 2 ------- -->
        <div class="container">
            <p><span>NAME </span> : Jai Maa Jivdani Furniture<br><span>Phone No</span> : #contactus</p>
            <div class="project project2">
                <div class="images">
                    <img src="images/project2/42.jpg" alt="img1">
                    <img src="images/project2/2.jpg" alt="img2">
                    <img src="images/project2/3.jpg" alt="img3">
                    <img src="images/project2/4.jpg" alt="img4">
                    <img src="images/project2/5.jpg" alt="img5">
                    <img src="images/project2/6.jpg" alt="img6">
                    <img src="images/project2/7.jpg" alt="img7">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p2_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p2_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p2_option_slide(1)"></span>
                    <span onclick="p2_option_slide(2)"></span>
                    <span onclick="p2_option_slide(3)"></span>
                    <span onclick="p2_option_slide(4)"></span>
                    <span onclick="p2_option_slide(5)"></span>
                    <span onclick="p2_option_slide(6)"></span>
                    <span onclick="p2_option_slide(7)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>Excellent attention to detail and functionality. Loved the use of natural light. Overall,a
                    fantastic job!<span>😍😊</span>
                </span>
            </p>
        </div>

        <!-- ------- Project 3 ------- -->
        <div class="container">
            <p><span>NAME </span> : Pawan Electrical and Hardware<br><span>Phone No</span> : #contactus</p>
            <div class="project project3">
                <div class="images">
                    <img src="images/project3/43.jpg" alt="img1">
                    <img src="images/project3/4.jpg" alt="img2">
                    <img src="images/project3/3.jpg" alt="img3">
                    <img src="images/project3/1.jpg" alt="img4">
                    <img src="images/project3/5.jpg" alt="img5">
                    <img src="images/project3/2.jpg" alt="img6">
                    <img src="images/project3/7.jpg" alt="img7">
                    <img src="images/project3/8.jpg" alt="img8">
                    <img src="images/project3/9.jpg" alt="img9">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p3_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p3_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p3_option_slide(1)"></span>
                    <span onclick="p3_option_slide(2)"></span>
                    <span onclick="p3_option_slide(3)"></span>
                    <span onclick="p3_option_slide(4)"></span>
                    <span onclick="p3_option_slide(5)"></span>
                    <span onclick="p3_option_slide(6)"></span>
                    <span onclick="p3_option_slide(7)"></span>
                    <span onclick="p3_option_slide(8)"></span>
                    <span onclick="p3_option_slide(9)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>I am thrilled with the interior designing work! The attention to detail and creativity exceeded my expectations.</span>
            </p>
        </div>

        <!-- ------- Project 4 ------- -->
        <div class="container">
            <p><span>NAME </span> : Mahavir Ceramics<br><span>Phone No</span> : #contactus</p>
            <div class="project project4">
                <div class="images">
                    <img src="images/project4/44.jpg" alt="img1">
                    <img src="images/project4/2.jpg" alt="img2">
                    <img src="images/project4/3.jpg" alt="img3">
                    <img src="images/project4/4.jpg" alt="img4">
                    <img src="images/project4/5.jpg" alt="img5">
                    <img src="images/project4/6.jpg" alt="img6">
                    <img src="images/project4/7.jpg" alt="img7">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p4_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p4_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p4_option_slide(1)"></span>
                    <span onclick="p4_option_slide(2)"></span>
                    <span onclick="p4_option_slide(3)"></span>
                    <span onclick="p4_option_slide(4)"></span>
                    <span onclick="p4_option_slide(5)"></span>
                    <span onclick="p4_option_slide(6)"></span>
                    <span onclick="p4_option_slide(7)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>The process was smooth, and the team was professional. My dream space is now a reality. Highly recommened!</span>
            </p>
        </div>

        <!-- ------- Project 5 ------- -->
        <div class="container">
            <p><span>NAME </span> : LP Contractor<br><span>Phone No</span> : #contactus</p>
            <div class="project project5">
                <div class="images">
                    <img src="images/project5/45.jpg" alt="img1">
                    <img src="images/project5/2.jpg" alt="img2">
                    <img src="images/project5/3.jpg" alt="img3">
                    <img src="images/project5/4.jpg" alt="img4">
                    <img src="images/project5/5.jpg" alt="img5">
                    <img src="images/project5/6.jpg" alt="img6">
                    <img src="images/project5/7.jpg" alt="img7">
                    <img src="images/project5/8.jpg" alt="img8">
                    <img src="images/project5/9.jpg" alt="img9">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p5_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p5_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p5_option_slide(1)"></span>
                    <span onclick="p5_option_slide(2)"></span>
                    <span onclick="p5_option_slide(3)"></span>
                    <span onclick="p5_option_slide(4)"></span>
                    <span onclick="p5_option_slide(5)"></span>
                    <span onclick="p5_option_slide(6)"></span>
                    <span onclick="p5_option_slide(7)"></span>
                    <span onclick="p5_option_slide(8)"></span>
                    <span onclick="p5_option_slide(9)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>Your Interior designing service was fantastic! The team's creativity and attention to detail were impressive. I couldn't be happier. Thank you so much!</span>
            </p>
        </div>

         <!-- ------- Project 6 ------- -->
         <div class="container">
            <p><span>NAME </span> : MM Electricals<br><span>Phone No</span> : #contactus</p>
            <div class="project project6">
                <div class="images">
                    <img src="images/project6/46.jpg" alt="img1">
                    <img src="images/project6/4.jpg" alt="img2">
                    <img src="images/project6/7.jpg" alt="img3">
                    <img src="images/project6/9.jpg" alt="img4">
                    <img src="images/project6/10.jpg" alt="img5">
                    <img src="images/project6/14.jpg" alt="img6">
                    <img src="images/project6/1.jpg" alt="img7">
                </div>
                <div class="slide left">
                    <span class="fa fa-angle-left" onclick="p6_arrow_slide(-1)"></span>
                </div>
                <div class="slide right">
                    <span class="fa fa-angle-right" onclick="p6_arrow_slide(1)"></span>
                </div>
                <div class="btns">
                    <span onclick="p6_option_slide(1)"></span>
                    <span onclick="p6_option_slide(2)"></span>
                    <span onclick="p6_option_slide(3)"></span>
                    <span onclick="p6_option_slide(4)"></span>
                    <span onclick="p6_option_slide(5)"></span>
                    <span onclick="p6_option_slide(6)"></span>
                    <span onclick="p6_option_slide(7)"></span>
                </div>
            </div>
            <h3>Listen to our customers</h3>
            <p class="message">
                <span>Excellent attention to detail and functionality. Loved the use of natural light. Overall,a
                    fantastic job!<span>😍</span>
                </span>
            </p>
        </div>

       
    
    </div>


    <a href="#top" id="backtotop">
        <i class="fa fa-arrow-up"></i>
    </a>



    <div class="connect-with-us">
        <h3>Can't find What you are looking for?<br>No problem<a href="tel:9156374557"><span>Contact us...</span></a>
        </h3>
    </div>
    <div class="contact-fixed-phone">
        <div class="phone"><a href="tel:9156374557"><i class="fa-sharp fa-solid fa-phone"></i>Phone</a></div>
        <div class="whatsapp"><a href="https://wa.me/+919156374557" target="_blank"><i
                    class="fa-brands fa-whatsapp"></i>what's App</a></div>
    </div>

    <div class="contact-fixed-ladscape"><a href="https://wa.me/+919156374557" target="_blank"><i
                class="fa-brands fa-square-whatsapp"></i></a>
    </div>

    <footer>
    <div class="footer">
        <div class="section">
            <h3>Contact Us</h3>
            <p>Phone :<a href="tel:9156374557">9156374557</a></p>
            <p>Email :<a href="mailto:anant20042003@gmail.com">anant20042003@gmail.com</a></p>
            <p><a href="https://wa.me/+919156374557" target="_blank">What's App</a></p>
        </div>
        <div class="section">
            <h3>Our Services</h3>
            <p><a href="index.html#carpentry">Carpentry</a></p>
            <p><a href="index.html#ceiling">False Ceiling</a></p>
            <p><a href="index.html#electricals">Electricals</a></p>
            <p><a href="index.html#plumbing">Plumbing</a></p>
            <p><a href="index.html#granites">Granites & Tiles</a></p>
            <p><a href="index.html#painting">Painting</a></p>
            <p><a href="index.html#wallpaper">Wallpaper</a></p>
            <p><a href="index.html#wallpaneling">Wall Paneling</a></p>
        </div>
        <div class="section">
            <h3>Connect With Us</h3>
            <span><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/mishraaa_anant?igsh=bXVkMnFieHh4enIw" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="https://wa.me/+919156374557" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </span>
        </div>
    </div>
    <div class="copyrights" id="bottom">
        Copyright &copy; 2023 All rights reserved. Designed By <a href="">Harsh & Anant Developers</a>
    </div>
    </footer>
    <script src="js/script.js"></script>

    <script>
        var indexvalue = 1;
        project1(indexvalue);
        project2(indexvalue);
        project3(indexvalue);
        project4(indexvalue);
        project5(indexvalue);
        project6(indexvalue);
        project7(indexvalue);

        function p1_option_slide(e) { project1(indexvalue = e); }
        function p1_arrow_slide(e) { project1(indexvalue += e); }

        function p2_option_slide(e) { project2(indexvalue = e); }
        function p2_arrow_slide(e) { project2(indexvalue += e); }

        function p3_option_slide(e) { project3(indexvalue = e); }
        function p3_arrow_slide(e) { project3(indexvalue += e); }

        function p4_option_slide(e) { project4(indexvalue = e); }
        function p4_arrow_slide(e) { project4(indexvalue += e); }

        function p5_option_slide(e) { project5(indexvalue = e); }
        function p5_arrow_slide(e) { project5(indexvalue += e); }

        function p6_option_slide(e) { project6(indexvalue = e); }
        function p6_arrow_slide(e) { project6(indexvalue += e); }

        function p7_option_slide(e) { project7(indexvalue = e); }
        function p7_arrow_slide(e) { project7(indexvalue += e); }

        function project1(e) {
            var i;
            const img = document.querySelectorAll('.project1  img');
            const sliders = document.querySelectorAll('.project1 .btns span');
            if (e > img.length) { indexvalue = 1; }
            if (e < 1) { indexvalue = img.length; }
            for (i = 0; i < img.length; i++) {
                img[i].style.display = "none";

            }
            for (i = 0; i < sliders.length; i++) {
                sliders[i].style.background = "rgba(0,0,0,0.5)";
                sliders[i].style.width = "10px";
            }
            common(img, sliders);
        }

        function project2(e) {
            var i;
            const img = document.querySelectorAll('.project2  img');
            const sliders = document.querySelectorAll('.project2 .btns span');
            if (e > img.length) { indexvalue = 1; }
            if (e < 1) { indexvalue = img.length; }
            for (i = 0; i < img.length; i++) {
                img[i].style.display = "none";

            }
            for (i = 0; i < sliders.length; i++) {
                sliders[i].style.background = "rgba(0,0,0,0.5)";
                sliders[i].style.width = "10px";
            }
            common(img, sliders);
        }

        function project3(e) {
            var i;
            const img = document.querySelectorAll('.project3  img');
            const sliders = document.querySelectorAll('.project3 .btns span');
            if (e > img.length) { indexvalue = 1; }
            if (e < 1) { indexvalue = img.length; }
            for (i = 0; i < img.length; i++) {
                img[i].style.display = "none";

            }
            for (i = 0; i < sliders.length; i++) {
                sliders[i].style.background = "rgba(0,0,0,0.5)";
                sliders[i].style.width = "10px";
            }
            common(img, sliders);
        }

        function project4(e) {
            var i;
            const img = document.querySelectorAll('.project4  img');
            const sliders = document.querySelectorAll('.project4 .btns span');
            if (e > img.length) { indexvalue = 1; }
            if (e < 1) { indexvalue = img.length; }
            for (i = 0; i < img.length; i++) {
                img[i].style.display = "none";

            }
            for (i = 0; i < sliders.length; i++) {
                sliders[i].style.background = "rgba(0,0,0,0.5)";
                sliders[i].style.width = "10px";
            }
            common(img, sliders);
        }

        function project5(e) {
            var i;
            const img = document.querySelectorAll('.project5  img');
            const sliders = document.querySelectorAll('.project5 .btns span');
            if (e > img.length) { indexvalue = 1; }
            if (e < 1) { indexvalue = img.length; }
            for (i = 0; i < img.length; i++) {
                img[i].style.display = "none";

            }
            for (i = 0; i < sliders.length; i++) {
                sliders[i].style.background = "rgba(0,0,0,0.5)";
                sliders[i].style.width = "10px";
            }
            common(img, sliders);
        }

        function project6(e) {
            var i;
            const img = document.querySelectorAll('.project6  img');
            const sliders = document.querySelectorAll('.project6 .btns span');
            if (e > img.length) { indexvalue = 1; }
            if (e < 1) { indexvalue = img.length; }
            for (i = 0; i < img.length; i++) {
                img[i].style.display = "none";

            }
            for (i = 0; i < sliders.length; i++) {
                sliders[i].style.background = "rgba(0,0,0,0.5)";
                sliders[i].style.width = "10px";
            }
            common(img, sliders);
        }

        function project7(e) {
            var i;
            const img = document.querySelectorAll('.project7  img');
            const sliders = document.querySelectorAll('.project7 .btns span');
            if (e > img.length) { indexvalue = 1; }
            if (e < 1) { indexvalue = img.length; }
            for (i = 0; i < img.length; i++) {
                img[i].style.display = "none";

            }
            for (i = 0; i < sliders.length; i++) {
                sliders[i].style.background = "rgba(0,0,0,0.5)";
                sliders[i].style.width = "10px";
            }
            common(img, sliders);
        }

        function common(i, s) {
            i[indexvalue - 1].style.display = "block";
            s[indexvalue - 1].style.background = "rgb(225,206,0)";
            s[indexvalue - 1].style.width = "30px";
            s[indexvalue - 1].style.borderRadius = "20px";
            s[indexvalue - 1].style.transition = "0.3s";
        }
    </script>
</body>

</html>