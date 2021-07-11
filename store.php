
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>



<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>♪ The Alien Music ♪</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <?php require 'partials/_nav.php' ?>

    <?php require 'partials/_dbconnect.php' ?>
    <section class="hello">
        <h1>Top Selling</h1>
    </section>
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 2;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM stores";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM stores LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            $cat = $row['namee'];
            $dog = $row['dest'];
            $bir = $row['price'];
            $kat = $row['imag'];
            echo '<section class= "play">
                    <div class="card mx-auto" style="width: 40rem;">
                    <img class="card-img-top" src="images/' . $kat . '" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">' . $cat . '</h5>
                        <p class="card-text">' . $dog . '</p> 
                        <a href="#" class="btn btn-primary"> ' . $bir . ' </a>
                    </div>
                    </div>
            </section>';
        }
        mysqli_close($conn);
    ?>
    <div class="pages">
        <div class="container">
            <div class="row">
                <div class="col"><a href="?pageno=1"><button type="button" class="btn btn-warning">First</button>
                </div>
                <div class="col <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a
                        href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><button
                            type="button" class="btn btn-warning">Prev</button></a>
                </div>
                <div class="col <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a
                        href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><button
                            type="button" class="btn btn-warning">Next</button></a>
                </div>
                <div class="col"><a href="?pageno=<?php echo $total_pages; ?>"><button type="button"
                            class="btn btn-warning">Last</button></a></li>
                </div>
            </div>
        </div>
    </div>


    <?php require 'partials/_footer.php' ?>
</body>

</html>


<style>
.play {
    padding-top: 40px;
    background-image: url('images/play1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    padding-bottom: 150px;
}


.hello {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: url('images/play2.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
}

.hello h1 {
    color: white;
    text-align: center;
    text-decoration: underline;
}

.pages {
    background-image: url('images/play2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 20px;
    padding-bottom: 20px;
}

.btn-warning {
    width: 100%;
}

audio {
    display: block;
    margin: 1em;
}

@media (min-width: 320px) and (max-width: 767px) {
    .play {
        padding-top: 100px;
        padding-bottom: 100px;
        background-image: url('https://i.pinimg.com/originals/01/38/47/013847e254bee2b33d4996894e9933fe.jpg');
    }

    .hello h1 {
        color: white;
        text-decoration: underline;
        size: 6px;
    }

    .card {
        width: 20rem !important;
    }

    .btn-warning {
        margin-top: 30px;
        width: 100%;
    }
}




@media (min-width: 768px) and (max-width: 1023px) {
    .card {
        width: 30rem !important;
    }
}


@media (min-width: 1024px) and (max-width: 1439px) {

    .hello h1 {
        color: white;
        text-decoration: underline;
        size: 6px;
    }
}
</style>



<script>
document.addEventListener('play', function(e) {
    var audios = document.getElementsByTagName('audio');
    for (var i = 0, len = audios.length; i < len; i++) {
        if (audios[i] != e.target) {
            audios[i].pause();
        }
    }
}, true);
</script>