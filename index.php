<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Alma Gonzalez | Web Developer</title>
    </head>

    <body>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <div class="menu" id="menu">
            <a href="javascript:void(0);" class="icon" onclick="myMenuFunction()">&#9776;</a>
            <a href="#home" class="slide-intro">Home</a>
            <a href="#contact" class="slide-contact">Contact</a>
            <a href="#portfolio" class="slide-portfolio">Portfolio</a>
            <a href="#about"  class="slide-about">About</a>
            <a href="#skills" class="slide-skills">Skills</a>
        </div>
        <div class="para" id="intro">
            <div class="text">
                <h1>Hey, I'm Alma.</h1>
                <h2>Full Stack Web Developer</h2>
                <br>
                <pre><a id="hire" class="slide-contact all-links"  href="#contact">Hire Me Now</a></pre>
                <br>
            </div>
            <div class="learn">
                <p href="#skills" class="slide-skills trans">Learn what I do<i class="fa fa-chevron-down"></i></p>
            </div>
        </div>
        <div class="content" id="quote">
            <h2>Alma Gonzalez is a full stack web developer working hard to make the website of your dreams come alive.</h2>
        </div>
        <div class="content" id="skills">
            <h1>My Skills </h1>
            <div class="row">
                <div class="column">
                    <img src="screens2.png" alt=""/>
                    <h2>Fully Responsive</h2>
                    <p>From mobile to desktop, I develop user friendly web applications to be used on any device.</p>
                </div>
                <div class="column">
                    <img src="code2.png" alt=""/>
                    <h2>Code</h2>
                    <p>I love to code from scratch using HTML(5), CSS(3), and a mixture of Javascript and JQuery. Working with front-end frameworks such as Bootstrap are also a piece of cake.</p>
                </div>
            </div>
            <p><a class="all-links"  href="https://drive.google.com/open?id=1rhTItU8qW4ZGbJkjHaISwU-obck2b2BM">My Resume</a></p>
            <div id="skills-extra">
                <br><br>
                    <h2>What I Know</h2>
                    <div class="row">
                        <div class="column">
                            <div class="lang">
                                <div class="lang-icon"><img src="css.png" alt=""></div>
                                <div class="lang-content">  CSS(3) </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="lang">
                                <div class="lang-icon"><img src="html.png" alt=""></div>
                                <div class="lang-content">HTML(5)</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="lang">
                                <div class="lang-icon"><img src="php.png" alt=""></div>
                                <div class="lang-content">PHP</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="lang">
                                <div class="lang-icon"><img src="db.png" alt=""></div>
                                <div class="lang-content">MySQL</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="lang">
                                <div class="lang-icon"><img src="jquery.png" alt=""></div>
                                <div class="lang-content">Javascript & Jquery</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="lang">
                                <div class="lang-icon"><img src="java.png" alt=""></div>
                                <div class="lang-content">Java</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="lang">
                                <div class="lang-icon"><img src="word.png" alt=""></div>
                                <div class="lang-content">WordPress</div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="lang">
                                <div class="lang-icon"><img src="boot.png" alt=""></div>
                                <div class="lang-content">Bootstrap</div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="learn" id="skills-toggle">
                <p>What else do I know<i class="fa fa-chevron-down"></i></p>
            </div>
            <br><br>
        </div>
        <div class="para" id="extra" >
            <br><br>
            <h1>Need a Website?</h1>
            <br>
            <p><a class="slide-contact all-links"  href="#contact">Let's start building &#8595;</a></p>
            <br><br><br>
        </div>
        <div class="content fade" id="portfolio">
            <h1>My Latest Work</h1>
            <p>Some of my creations.</p>
            <br>
            <p><a class="slide-contact all-links"  href="#contact">Let's get you one &#8595;</a></p>
            <div class="row">
                <div class="column">
                    <div class="img-container">
                        <a><img src="para1.jpg"/></a>
                        <div class="img-bottom"><div class="img-text"><i class="fa fa-spinner fa-pulse"></i>Coming Soon</div></div>
                    </div>
                </div>
                <div class="column">
                    <div class="img-container">
                        <a><img src="para1.jpg"/></a>
                        <div class="img-bottom"><div class="img-text"><i class="fa fa-spinner fa-pulse"></i>Coming Soon</div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="para " id="about">
            <h1>About Me</h1>
            <div class="row">
                <div class="column">
                    <img src="me.jpg" alt="Alma Gonzalez">
                </div>
                <div class="column" id="about-list" >
                    <p>Alma is ...</p>
                    <span class="me-list"><i class="fa fa-check-square"></i>a web devloper.</span>
                    <span class="me-list"><i class="fa fa-check-square"></i>a traveler.</span>
                    <span class="me-list"><i class="fa fa-check-square"></i>a photographer.</span>
                    <span class="me-list"><i class="fa fa-check-square"></i>a joker.</span>
                    <span class="me-list"><i class="fa fa-check-square"></i>a friend.</span>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <p>I am a self-taught full stack web developer born and raised from Atlanta, Georgia. I enjoy building websites, simple or complex to visually represent you since 2015.</p>
                </div>
                <div class="column">
                    <p>When I am not freelancing, I can be seen trying new foods, experimenting with photography, and exploring the world.</p>
                </div>
            </div>
            <br>
        </div>
        <div class="row content" id="contact">
            <h1>Get in touch.</h1>
            <h2>Let's build your dream website.</h2>
            <p>I am <span id="work-status">currently</span> accepting new ideas and would love to make yours come alive.
                <br>Let's get in touch and make a dream come true.</p>
            <br>
            <p><a id="hire" class="all-links" href="mailto:alma.gonzalez24@gmail.com">Let's talk</a></p>
            <br>
            <hr>
            <div  class="column">
                <i class="fa fa-phone"></i><br>
                <span>Call me @:</span><br>
                <span>+ 1 678.949.3822</span>
            </div>
            <div class="column">
                <i class="fa fa-envelope"></i><br>
                <span>Email me @:</span><br>
                <span>alma.gonzalez24@gmail.com</span>
            </div>
            <div class="column">
                <i class="fa fa-map-marker"></i><br>
                <span>Locate me @:</span><br>
                <span>Atlanta, Georgia</span>
            </div>
            <div id="map"></div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="icons">
                    <div class="pair"><a class="fa fa-linkedin" href="https://www.linkedin.com/in/almagonzalez26/"></a><span class="itext">Linkedin</span></div>
                    <div class="pair"><a class="fa fa-instagram" href="https://www.instagram.com/"></a><span class="itext">Instagram</span></div>
                    <div class="pair"><a class="fa fa-github" href="https://github.com/agonzalez26"></a><span class="itext">Github</span></div>
                    <br>
                    <p id="icons-text">Let's Connect!</p>
                </div>
            </div>
            <div class="row" id="links">
                <pre><a href="#skills" class="slide-skills">Skills</a> :: <a class="slide-portfolio" href="#portfolio">Portfolio</a> :: <a class="slide-about" href="#about">About</a> :: <a class="slide-contact" href="#contact">Contact</a></pre>
            </div>
            <div class="row">
                <p id="disclaimer">Created by me - 2018.</p>
            </div>
        </div>
        <script>
        $("#skills-toggle").on("click", function (){
            $("#skills-extra").slideToggle(1000);
            $("i", this).toggleClass("fa-chevron-down fa-chevron-up");
        });
            function myMenuFunction() {
                var menu = document.getElementById("menu");
                if (menu.className === "menu") {
                    menu.className += " responsive";
                } else {
                    menu.className = "menu";
                }
            }
            window.onscroll = function () {
                myTop();
            }


            $(window).scroll(function () {
                if ($(this).scrollTop() >= 250) {
                    $("#myBtn:hidden").stop(true, true).fadeIn();
                    $("#menu").css("background","black");
                } else {
                    $("#myBtn").stop(true, true).fadeOut();
                    $("#menu").css("background","transparent");
                }
            });
            $(function () {
                $("#myBtn").click(function () {
                    $("html, body").animate({
                        scrollTop: $("#intro").offset().top}, "1000");
                    return false
                })
            });

            $(function () {
                $(".slide-extra").click(function () {
                    $("html, body").animate({
                        scrollTop: $("#extra").offset().top}, "1000");
                    return false
                })
            });
            $(function () {
                $(".slide-contact").click(function () {
                    $("html, body").animate({
                        scrollTop: $("#contact").offset().top}, "1000");
                    return false
                })
            });
            $(function () {
                $(".slide-skills").click(function () {
                    $("html, body").animate({
                        scrollTop: $("#skills").offset().top}, "1000");
                    return false
                })
            });
            $(function () {
                $(".slide-portfolio").click(function () {
                    $("html, body").animate({
                        scrollTop: $("#portfolio").offset().top}, "1000");
                    return false
                })
            });
            $(function () {
                $(".slide-about").click(function () {
                    $("html, body").animate({
                        scrollTop: $("#about").offset().top}, "1000");
                    return false
                })
            });

            $(function () {
                $(".slide-intro").click(function () {
                    $("html, body").animate({
                        scrollTop: $("#intro").offset().top}, "1000");
                    return false
                })
            });

            function myMap() {
                var mapOptions = {
                    center: new google.maps.LatLng(33.753746, -84.386330),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                }
                var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            }


        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMS-1YVpWUJx5fQl06pQVnQH9TYmgy2i0&callback=myMap"></script>
    </body>
</html>

            <!-- <style media="screen">
            #skill-percent {position:relative;}
                .circle {width:100px; height:100px; border-radius: 50px;background-color: #343d46; color:white;font-size: .75em; text-align: center;
                animation-name: pulse; display: inline-block; margin: auto 5%;}
                @keyframes pulse {
                    from {transform: scale3d(1,1,1);}
                    25% {transform: scale3d(1.25,1.25, 1.25);}
                    50% {transform: scale3d(1.5,1.5,1.5);}
                    75% {transform: scale3d(1.25, 1.25, 1.25);}
                    to {transform: scale3d(1,1,1);}
                }
                @-webkit-keyframes pulse {
                    from {transform: scale3d(1,1,1);}
                    25% {transform: scale3d(1.25,1.25, 1.25);}
                    50% {transform: scale3d(1.5,1.5,1.5);}
                    75% {transform: scale3d(1.25, 1.25, 1.25);}
                    to {transform: scale3d(1,1,1);}
                }

                .animated {-webkit-animation-duration: 1s;animation-duration: 1s;-webkit-animation-fill-mode: both;animation-fill-mode: both;}
                .animated.infinite { -webkit-animation-iteration-count: infinite;  animation-iteration-count: infinite;}
            </style> -->
