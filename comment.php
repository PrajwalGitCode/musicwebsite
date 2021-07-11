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
                <div class="carousel-item active" style="background-image: url('images/slid1.jpg');">
                </div>

                <div class="carousel-item" style="background-image: url('images/slid2.jpg');">
                </div>

                <div class="carousel-item" style="background-image: url('images/slid3.jpg');">
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
                <textarea class="form-control" id="exampleFormControlTextarea1" name="fname" placeholder="Describe Yourself Here "
                    rows="12"></textarea><br><br><br><br>
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

.jumbotron {
    background-color: black;
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
}

@media (min-width: 320px) and (max-width: 767px) {
</style>