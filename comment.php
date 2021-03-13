<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $fname = $_POST["fname"];



	$sql = "INSERT INTO `commen` ( `fname`,`dt`) VALUES ('$fname', current_timestamp())";
	$result = mysqli_query($conn, $sql);
}
	?>

<!DOCTYPE html>

<html>

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
    <?php require 'partials/_dbconnect.php'?>
    <?php require 'partials/_nav.php'?>

    <section class="slider-section">
        <div id="carousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"
                    style="background-image: url('https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/laptops/max-q/geforce-rtx-max-q-1200x627-meta-image@2x.jpg');">
                </div>

                <div class="carousel-item"
                    style="background-image: url('https://pbs.twimg.com/media/DBPYs2TUwAAedZU.png');">
                </div>

                <div class="carousel-item"
                    style="background-image: url('https://cdn.vox-cdn.com/thumbor/KTlrW3P1HToOn36NBhzYSWYHCoI=/1400x788/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/16303094/ryzen_3000_cpus_lede_2.jpg');">
                </div>
            </div>


            <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </section>


    <section class="great">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <form action="comment.php" method="post">
                <textarea type="text" name="fname" rows="10" cols="200"
                    placeholder="Describe yourself here..."></textarea><br><br><br><br>
                <input type="submit" name="insert" value="Post Comment">
            </form>
        </div>
    </section>

    <?php require 'retrieve.php' ?>
    <?php require 'partials/_footer.php' ?>

</body>

</html>

<script>
history.pushState({}, "", "")
</script>



<style>
.carousel-item {
    margin-top: 73px;
    height: 80vh;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;

}

.great {
    padding-top: 700px;
}

input[type="text"i] {
    padding: 150px 550px;
}

</style>