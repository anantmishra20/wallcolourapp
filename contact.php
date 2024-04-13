

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:title" property="og:title" content="Color Your World.">
    <link rel="canonical" href="">
    <meta name="description" content="Color Your World a Place Where you can find Modern solutions for a Modern World. Unlock the Art of Living - Color Your World Awaits Your Imagination. The best Interior designing Platform.">
    <meta name="author" content="GK Developers">
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
    
<?php
include 'dbcon.php';
if(isset($_POST['send'])){
  $name = $_POST['name'];
  $number = $_POST['number'];
  $message = $_POST['message'];

  $request = "insert into contact(name,number,message) values('$name','$number','$message') ";

  mysqli_query($con,$request);

  header('location: index.php');

}else{
    echo'.';
}
?>



    <div class="navbar top">
        <div class="nav-main">
            <div id="menuopen" class="nav-menu"><i class="fa-solid fa-bars"></i></div>
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
   
    <div class="main-background contact-page" id="nav">
        <div class="matter">
            <h1>Contact US</h1>
            <p>Transform your vision into reality with Color Your World. Explore inspired interiors and connect with us to begin your personalized design journey.</p>
            <a href="#contact-form">Get In Touch&nbsp;</i></a>
        </div>
    </div>


    
    <div class="contact-container" id="contact-form">
        <div class="contact-image">
            <h2 class="contact-head">Get In Touch</h2>
            <img src="images/contact-from/sendmail.jpeg" alt="send mail">
        </div>
        <div class="form-container">
            <form name="form" action="" method="POST" >
                <div class="input-container">
                  <input type="text" id="username" name="name" required>
                  <label class="input-label" for="username">Name:</label>
                </div>
          
                <div class="input-container">
                  <input type="number" name="number" required>
                  <label class="input-label" for="phone">PhoneNo:</label>
                </div>
    
                <div class="input-container">
                    <textarea id="message" name="message"  required></textarea>
                    <label class="input-label"  for="message">Message:</label>
                  </div>
          
                <button type="submit" name="send">Send</button>
              </form>
        </div>
    </div>

    <div class="see-more"><a href="projects.html#explore">See More...</a></div>

    <a href="#top" id="backtotop">
        <i class="fa fa-arrow-up"></i>
    </a>


    <div class="connect-with-us">
        <h3>Can't find What you are looking for?<br>No problem<a href="tel:9156374557"><span>Contact us...</span></a></h3>
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
                <a href="https://www.instagram.com/mishraaa_anant?igsh=bXVkMnFieHh4enIw" target="_blank"><i class="fa-brands fa-instagram"></i></a>
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

function p1_option_slide(e) { project1(indexvalue = e); }
function p1_arrow_slide(e) { project1(indexvalue += e); }

function p2_option_slide(e) { project2(indexvalue = e); }
function p2_arrow_slide(e) { project2(indexvalue += e); }

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