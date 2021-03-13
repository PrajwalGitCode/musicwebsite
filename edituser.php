<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>


<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>♪ The Alien Music ♪</title>
</head>



<body>
    <?php require 'partials/_nav.php' ?>
    <section class="profile">
        <img class="card-img-top"
            src="https://image.freepik.com/free-vector/colorful-soundwave-wallpaper_23-2148430972.jpg" />
        <div class="container">
            <div class="text-center">
                <img class="img-avatar rounded-circle"
                    src="https://linkstorage.linkfire.com/medialinks/images/91295981-67cd-41b4-9106-0fc12f186042/artwork-440x440.jpg" />
                <h1> <?php echo $_SESSION['username']?></h1>
                <p class="lead">The Alien Music</p>
            </div>
            <ul class="list-unstyled text-muted">
                <li>You Are Now Logged In</li>
                <li><br></li>
                <a href="logout.php">
                    <li> Logout</li>
                </a>
            </ul>
            <h1>You are Logged in as : <?php echo $_SESSION['username']?></h1>
            <h4> Declaration </h4>
            <p>I acknowledge that I have read, and do hereby accept the terms and conditions contained in this Music
                Website and the Electronic Statement (eStatement) Consent Agreement.</p>
            <p> All the details I have given here are to the best of my knowledge and I can provide the required
                documents when needed.</p>
        </div>
    </section>
    <?php require 'partials/_footer.php' ?>
</body>

</html>


<style>
.profile {
    background-color: rgb(0, 10, 27);
    width: 100%;
    height: 170vh;
}

.img-avatar {
    height: 120px;
    width: 120px;
    margin: -60px auto 0 auto;
}

.card-img-top {
    width: 100%;
    height: 400px;
}

.container {
    height: 1000px;
}

.container h1,
.container h4 {
    color: white;
    padding-top: 50px;
}

.container p {
    color: white;
    padding-top: 50px;
}

@media (min-width: 320px) and (max-width: 767px) {
    .profile {
        height: 200vh;
        width: 180%;
    }

}

@media (min-width: 768px) and (max-width: 1023px) {
    .profile {
        height: 200vh;
        width: 180%;
    }

    .container {
        height: 1000px;
    }
}
</style>