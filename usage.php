
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>♪ The Alien Music ♪</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php require 'partials/_nav.php' ?>
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">About Us</h3>
  <img src="https://img.icons8.com/material-outlined/280/000000/black-jaguar.png"  style="display:inline" width="350" height="350">
  <h3>The Alien Music</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Usage restrictions:</h3>
  <p>If you’re an Independent Creator, Gamer or Vlogger and follow our usage policy, then all Alien Music tracks are free to use across YouTube & Twitch.. </p>
 <p> Simply copy and paste the credit section from the description of our video. If there is not one to copy, please put a link to our upload in your description.</p>
<p>Alien Music music is free to use for independent creators and their UGC (User Generated Content)</p>
<p>If you are using our music on Twitch Stream or YouTube Stream, simply put "Music provided by http://spoti.fi/Alien Music" in your stream description.</p>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Terms And Conditions</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>This page tells you the terms on which you may use certain sound recordings (“Recordings”) and musical compositions (“Compositions”, which together with the Recordings may be referred to as “The Alien Music”).</p>

<p>By using the The Alien Music, you accept the terms and agree to obey them. If you don't accept them, please don't use the The Alien Music.</p>
      
    </div>
    <div class="col-sm-4"> 
      <p>You have permission for temporary use of the The Alien Music, but in certain circumstance we can withdraw or change our service at any time without telling you and without being legally responsible to you (such circumstance include but are not limited to, revocation or cessation of any rights in or to any The Alien Music by any third party rightsholder; your failure to abide by our Usage Policy).</p>
      
    </div>
    <div class="col-sm-4"> 
      <p>You are allowed to make a legal link to our website's homepage and to the applicable The Alien Music on any applicable music digital service providers (DSPs) including but not limited to Spotify and Apple Music from your website if the content on your site meets the standards of our acceptable use policy https://The Alien.io/usagepolicy.  We do infact hope and expect that you will do so.</p>
 
    </div>
  </div>
</div>
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Music Provided</h3>
  <p>All the music in this website is provided by NCS (No Copyright Sounds)</p>
  <p>So make sure that you go through their usage policy and their terms and conditons</p>
  <p>you can click on the link below to go the  official NCS site</p>
  <a  href="https://ncs.io/"> <p> NCS Music </p></a>
</div>
<?php require 'partials/_footer.php' ?>

</body>
</html>


<style>
  body {
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: yellow; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 200px;
    padding-bottom: 70px;
  }


@media (min-width: 320px) and (max-width: 767px){
    .container-fluid {

    width:180%;
}

}
@media (min-width: 768px) and (max-width: 1023px){
    .container-fluid{
        width:180%;
    }
}
  </style>