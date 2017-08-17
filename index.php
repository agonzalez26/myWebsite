
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"href="style.css">
    <title>Alma Gonzalez</title>
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <!-- <a href="#contact">Contact</a> -->
        <a href="https://github.com/agonzalez26/" target="_blank">Projects</a>
        <a href="https://drive.google.com/open?id=0B-Rd24-D2c7ZR2JFSDU3YTdhU3c" target="_blank">Resume</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <div class="main" >
        <div  id="home" class="section1">
            <h1>Alma Gonzalez</h1>
            <img src="me.jpg" alt="Alma Gonzalez"/>
            </div>
            <div id="about" class="section2 special">
              <div id="section2content">
                <h1>About Me</h1>
                <p>Hello, my name is Alma Gonzalez and I am a web and software developer from Atlanta, Georgia.
                    I have many hobbies such as jogging, hiking, rock climbing, reading, and coding. I have an extreme
                    passion for new foods and experiencing for new adventures.
                <br>
                    I like photography, painting, and traveling around the world.
                </p>
              </div>
            </div>
            <div id="skills" class="section3 special">
                <h1>What I Do</h1>
                <p>I have an extreme passion for learning new technologies.
                    <br>
                    I am a self-taught web developer in HTML, CSS, Bootstrap, JavaScript, JQuery, PHP.
                    <br>
                    As a software developer, I have experience in Java and Python with a passion to continue growing.
                </p>
            </div>
            <!-- <div id="contact" class="section4 special">
                <h1>Let's Chat</h1>
                <p>Do you want to discuss your ideas for your website? I can help you. Contact me and we can create something great.</p>
                <form id="contactform" method="post" action="">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="NAME" placeholder="Name"/>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="EMAIL" placeholder="Email"/>
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Enter message here." name="MSG"></textarea>
                    <input type="submit" name="SUBMIT"></input>
                </form>
                <br>
            </div> -->
            <div class="footer">
                <a href="https://www.facebook.com/alma.gonzalez.370177" class="fa fa-facebook"></a>
                <a href="mailto:alma.gonzalez24@gmail.com" class="fa fa-google"></a>
                <a href="https://www.linkedin.com/in/almagonzalez26/" class="fa fa-linkedin"></a>
                <a href="https://www.instagram.com/almagonzalez24/" class="fa fa-instagram"></a>
                <a href="https://www.github.com/agonzalez26/"class="fa fa-github"></a>
            </div>
        </div>
    </body>
    <script>function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }</script>
    </html>
