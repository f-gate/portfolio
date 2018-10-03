<?php
require 'db_querys.php';
$start_data = retrieve_data($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" type="text/css" href="initialscreen.css">.
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,500">
</head>
<body>
<!-- HOME PAGE -->
<div class="headerbox">
    <div class="applicationimages1">
        <img src="html5-original-wordmark.svg" class="logoleft">
        <img src="css3-original-wordmark.svg" class="logoleft">
        <img src="javascript-original.svg" class="logoleft">
    </div>
    <div class="descriptionbox">
        <div class="descrip-holder">
            <h1 class="name">
                Felix Gate
            </h1>
            <h2 class="title">
                full stack developer, website creator
            </h2>
            <div class="downcontainer">
                <a href="#project" >
                    <p class="downlink">
                        explore my work &#8628;
                    </p>
                </a>
            </div>
         </div>
    </div>
    <div class="applicationimages2">
        <img src="php-original.svg" class="logoright">
        <img src="git-original-wordmark.svg" class="logoright">
        <img src="mysql-original-wordmark.svg" class="logoright">
    </div>
</div>
<!-- SITCKY-NAV -->
<div id="portfolio"></div> <!-- portfolio div required for internal links -->
<nav class="stickynav">
    <div class="linkcontainer" >
        <a href="#" class="navlink">
            home
        </a>
        <a href="#portfolio" class="navlink">
            aboutme
        </a>
        <a href="#project" class="navlink">
            porfolio
        </a>
        <a href="#contactme" class="navlink" >
            contact me
        </a>
    </div>
</nav>
<!-- ABOUT ME CONTENT -->
<div class="content-container">
    <section class="aboutme" >
       <div class="title-wrapper">
            <h2 id="metitle">
                About me
            </h2>
       </div>
        <div id="my-photo">
        </div>
        <p id="about-me-content">
            <?php
            echo $start_data[0]['content']
            ?>
        </p>
    </section>
    <!--PORTFOLIO CONTENT-->
    <div id="project"></div>
    <section class="portfolio"  >
        <h2 class="project" > Projects </h2>
        <div class="boxholder">
            <div class="picturelink">
                <div class="front-picture">
                 </div>
                 <div class="back-picture">
                 </div>
             </div>
            <div class="picturelink">
                <div class="front-picture">
                </div>
                <div class="back-picture">
                </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                </div>
                <div class="back-picture">
                </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                </div>
                <div class="back-picture">
                </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                </div>
                <div class="back-picture">
                </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                </div>
                <div class="back-picture">
                </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                </div>
                <div class="back-picture">
                </div>
            </div>
            <div class="picturelink">
                <div class="front-picture">
                </div>
                <div class="back-picture">
                </div>
            </div>
            <div class="picturelink" id="byeblock">
                <div class="front-picture">
                </div>
                <div class="back-picture">
                </div>
            </div>
            </div>
    </section>
</div>
<!--CONTACT INFO-->
<div class="contactme" >
    <div id="contactme"></div> <!-- FOR NAV BAR INTERNAL LINK -->
    <h2 class="contact-me-title">
        Contact me
    </h2>
    <footer class="contactinfo">
        <p>
            <?php
            echo $start_data[0]['email']
            ?>
        </p>
        <p>
            <?php
            echo $start_data[0]['phone_number']
            ?>
        </p>
        <p>
            https://github.com/felixgate13
        </p>
    </footer>
</div>
</body>
</html>