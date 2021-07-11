<?php
include_once 'partials/_dbconnect.php';
$result = mysqli_query($conn,"SELECT * FROM commen");
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


<?php
while($row = mysqli_fetch_array($result)) {
?>
<section class="full">
<div class="jumbotron ">
  <h3 class="display-7 ">Comment #<?php echo $row["id"]?></h3>
  <p class="lead">Posted On :<?php echo $row["dt"]; ?></p>
  <hr class="my-4">
  <p><?php echo $row["fname"]; ?></p>
</div>
</section>
<?php
}
?>

 </body>
</html>
