<!--tells the browser what version of HTML you will be using -->

<html>
   <head> <!-- contains everything that the users dont see in the webpage-->
       <title>Alma Gonzalez</title> <!--what goes on the tab-->
        <link rel="stylesheet" href="style.css" type="text/css"/><!--allows to style the webpage-->
       <script type="text/javascript" href="script.js"></script>
     </head>
     <body>
       <div id="top">
          <div id="icons" style="display:inline;"><ul class="social-icons">
           <li id="icon icon"class="icon icon--facebook"><a href="https://www.facebook.com/alma.gonzalez.370177"><img src="facebook.png"></a></li>
           <li id="icon icon"class="icon icon--linkedin"><a href="https://www.linkedin.com/in/alma-gonzalez-268713109?trk=nav_responsive_tab_profile"><img src="linkedin.png"></a></li>
           <li id="icon icon"class="icon icon--instagram"><a href="https://www.instagram.com/almagonzalez24/?hl=en"><img src="instagram.png"></a></li>
           <li id="icon icon"class="icon icon--github"><a href="https://github.com/agonzalez26"><img src="github.png"></a></li>
         </ul></div>
       <div id="navigation">
         <ul>
           <li id="links"><a href="contact.php">Contact</a></li>
           <li id="links"><a href="https://drive.google.com/open?id=0B-Rd24-D2c7Zb2JKd1hjbDI0ZFU">Resume</a></li>
           <li id="links"><a href="about.php">About</a></li>
           <li id="links"><a href="home.php">Home</a></li>
         </ul>
       </div>
     </div>
     <br><br><br>
     <div id="main">
       <h1>ALMA GONZALEZ</h1>
       <h1>DEVELOPER</h1>
     </div>
     <!-- <div id="footer">
       <footer>Alma Gonzalez 2016</footer>
   </div> -->
     </body>
     <style>
     #main{
       margin-top: 150px;
       padding: 50px;

       text-transform: capitalize;
       font-weight: bolder;
       text-align: center;
       display: block;
       background-color: white;

     }
     .social-icons {
       width: 60%;
       margin: auto;
       display: inline-block;
    }
     .icon {
       float: left;
       position: relative;
       width: 19%;
       height: 0;
       margin: 1% 0.5%;

    a {
        display: inline-block;
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;


    }
}
     </style>

</html>
