<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}




echo '<nav class="navbar navbar-dark " style="background-color: black ;">
<div id="mySidebar" class="sidebar">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><img src="https://img.icons8.com/material-outlined/80/000000/black-jaguar.png"/></a>
        <a href="/musicwebsite/welcome.php"><button type="button">Home Page</button></a>
        <a href="/musicwebsite/artist.php"><button type="button">The Artists</button></a>
        <a href="/musicwebsite/allmusic.php"><button type="button">Stream Music</button></a>
        <a href="/musicwebsite/store.php"><button type="button">Official Store</button></a>
        <a href="/musicwebsite/usage.php"><button type="button">Usage Policy</button></a>';

        if(!$loggedin){
        echo '<a class="nav-link" href="/musicwebsite/login.php"><button type="button">Login Here</button></a>
        <a class="nav-link" href="/musicwebsite/signup.php"><button type="button">Signup Here</button></a>';
        }
        if($loggedin){
        echo '
            <a class="nav-link" href="edituser.php"><button type="button"> User Profile </button></a>
            <a class="nav-link" href="/musicwebsite/logout.php"><button type="button">LogOut Here</button></a>';
            
        }


      
    echo '
		<a href="#">The Alien Music ® ™</a>
	</div>
	   <button class="openbtn" onclick="openNav()"> <img src="https://img.icons8.com/material-outlined/37/000000/black-jaguar.png"/> </button>
    </div>

   
     <a class="navbar-brand" href="#">The Alien Music</a>
   
   
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
            </li>


            <li class="nav-item">
            <a class="nav-link" href="comment.php">Discussion</a>
        </li>


        <li class="nav-item">
        <a class="nav-link" href="upload.php">Creators Forum</a>
    </li>

            <li class="nav-item">
                <a class="nav-link" href="welcome.php#about1">Search Here</a>
              </li>

            </ul>
            <span class="navbar-text"> The Alien Music </span>
        </div>
    </nav>';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>♪ The Alien Music ♪</title>

</head>

<body>


    <script src="main.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

<script>
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

/* When the user clicks on the button,toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}


//-----------------------------slides-----------------------------------------------------------------------//
document.addEventListener('DOMContentLoaded', function() {

    var slideImages = document.querySelectorAll('.slide'),
        dirRight = document.getElementById('dir-control-right'),
        dirLeft = document.getElementById('dir-control-left'),
        current = 0;
    //if javascript is on apply styling
    function jsActive() {
        for (var i = 0; i < slideImages.length; i++) {
            slideImages[i].classList.add('slider-active');
        }
    }
    // Clear images
    function reset() {
        for (var i = 0; i < slideImages.length; i++) {
            slideImages[i].classList.remove('slide-is-active');
        }
    }
    //init slider
    function startSlide() {
        reset();
        slideImages[0].classList.add('slide-is-active');
        setTimeout(function() {
            for (var i = 0; i < slideImages.length; i++) {
                slideImages[i].classList.add('slide-transition');
            }
        }, 20);


    }

    //slide lft
    function slideLeft() {
        reset();
        slideImages[current - 1].classList.add('slide-is-active');
        current--;
    }
    //slide right
    function slideRight() {
        reset();
        slideImages[current + 1].classList.add('slide-is-active');
        current++;
    }

    dirLeft.addEventListener('click', function() {
        if (current === 0) {
            current = slideImages.length;
        }
        slideLeft();
    })

    dirRight.addEventListener('click', function() {
        if (current === slideImages.length - 1) {
            current = -1;
        }
        slideRight();
    })
    //apply styling
    jsActive();
    startSlide();


});
//-----------------------------slides------------=-------------------------------------------------------------------------------//
</script>
<style>
.navbar {
    width: 100%;
    position: fixed;
    z-index: 10;

}

body {
    width: 100%;

}

/*------------------------------------------------- The sidebar menu --------------------------------------------------------*/
.sidebar {
    height: 100%;
    /* 100% Full-height */
    width: 0;
    /* 0 width - change this with JavaScript */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Stay on top */
    top: 0;
    left: 0;
    background-color: rgb(0, 0, 0);
    /* Black*/
    overflow-x: hidden;
    /* Disable horizontal scroll */
    padding-top: 10px;
    /* Place content 60px from the top */
    transition: 0.5s;
    /* 0.5 second transition effect to slide in the sidebar */
    z-index: 10;
}

/* The sidebar links */
.sidebar a {
    padding: 8px 8px 27px 32px;
    text-decoration: none;
    font-size: 17px;
    color: #ffffff;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
    font-size: 20px;
    cursor: pointer;
    background-color: rgb(255, 254, 254);
    color: white;
    padding: 10px 15px;
    border: none;
}

.openbtn:hover {
    background-color: rgb(122, 122, 122);
}


.sidebar img {
    background-color: white;
    margin-top: 5px;
    margin-left: 30px;
}


/* -----------------------------------------------editing buttons of sidebar -----------------------------------------*/
.sidebar button {
    padding: 10px 40px;
    letter-spacing: 1px;
    background-color: rgb(4, 1, 48);
    font-size: 16px;
    border-radius: 24px;
    border-style: none;
    transition-duration: 0.4s;
    color: white;
}

.sidebar button:hover {
    background-color: white;
    color: black;
}


/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidebar {
        padding-top: 15px;
    }

    .sidebar a {
        font-size: 18px;
    }
}

/*.........................................................................................................................*/


/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    /* If you want a transition effect */
    padding: 10px;
}
</style>