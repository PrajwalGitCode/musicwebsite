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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>♪ The Alien Music ♪</title>
</head>



<body>
    <?php require 'partials/_nav.php' ?>
    <?php require 'partials/_dbconnect.php' ?>


    <section class="hello">
        <div class="card" style="width: 40rem;">
            <img class="card-img-top" src="https://i.pinimg.com/originals/4b/c2/95/4bc295df929c4019ed111e8311f5de2c.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Instrumentals</h5>
                <p class="card-text"></p>
                <a href="/musicwebsite/instrumental.php" class="btn btn-primary"> Click Here </a>
            </div>
        </div>
    </section>



    <section class="hello">
        <div class="card" style="width: 40rem;">
            <img class="card-img-top" src="https://i.pinimg.com/originals/4b/c2/95/4bc295df929c4019ed111e8311f5de2c.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Regular</h5>
                <p class="card-text"></p>
                <a href="/musicwebsite/music.php" class="btn btn-primary"> Click Here </a>
            </div>
        </div>
    </section>


    <section class="hello">
        <div class="card" style="width: 40rem;">
            <img class="card-img-top" src="https://i.pinimg.com/originals/4b/c2/95/4bc295df929c4019ed111e8311f5de2c.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">User uploads</h5>
                <p class="card-text"></p>
                <a href="/musicwebsite/approved.php" class="btn btn-primary"> Click Here </a>
            </div>
        </div>
    </section>

    <?php require 'partials/_footer.php' ?>
    <script src="main.js"></script>
</body>
</html>





<style>

.hello {
    padding-top: 100px;
    padding-bottom: 80px;
    padding-left: 470px;
    background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190521/pngtree-3d-neon-light-abstract-background-image_111011.jpg');
    background-size:cover;
    background-repeat:no-repeat;
    width: 100%;
}


@media (min-width: 320px) and (max-width: 767px) {
    .hello {
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 20px;
        background-color: rgb(0, 6, 27);
        width: 180%;
    }

    .hello img {
        width: 640px;
    }
}

@media (min-width: 768px) and (max-width: 1023px) {
    .hello {
        width: 180%;
        padding-left: 380px;
    }
}
</style>