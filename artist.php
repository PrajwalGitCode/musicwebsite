
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
        <h1>Top Artists</h1>
    </section>
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 2;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM artists";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM artists LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
            $cat = $row['namee'];
            $dog = $row['dest'];
            $bir = $row['price'];
            $kat = $row['imag'];
            echo '<section class= "play">
            <div class="card" style="width: 40rem;">
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
    <section class="pages">
        <ul class="pagination">
            <li><a href="?pageno=1"><button type="button" class="btn btn-light">First</button></a></li>
            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><button
                        type="button" class="btn btn-light">Prev</button></a>
            </li>
            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><button
                        type="button" class="btn btn-light">Next</button></a>
            </li>
            <li><a href="?pageno=<?php echo $total_pages; ?>"><button type="button"
                        class="btn btn-light">Last</button></a></li>
        </ul>
    </section>
    <?php require 'partials/_footer.php' ?>
</body>

</html>


<style>
.play {
    padding-top: 40px;
    background-image: url('https://i.pinimg.com/originals/01/38/47/013847e254bee2b33d4996894e9933fe.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    padding-bottom: 150px;
    padding-left: 440px;
    padding-right: 50px;
}

.card {
    width: 70%
}

.hello {
    padding-top: 80px;
    padding-bottom: 80px;
    background-image: url('https://image.freepik.com/free-vector/neon-grid-background_53876-91657.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
}

.hello h1 {
    color: white;
    padding-left: 580px;
    text-decoration: underline;
}





@media (min-width: 320px) and (max-width: 767px) {
    .play {
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 20px;
        background-image: url('https://i.pinimg.com/originals/01/38/47/013847e254bee2b33d4996894e9933fe.jpg');
        width: 180%;
    }

    .hello h1 {
        color: white;
        padding-left: 150px;
        text-decoration: underline;
        size: 6px;
    }

    .hello {
        width: 180%;
    }

    .pages {
        width: 180%;
    }

}




@media (min-width: 768px) and (max-width: 1023px) {
    .play {
        width: 180%;
        padding-left: 430px;
    }

    .hello {
        width: 180%;
    }

    .pages {
        width: 180%;
    }

    .card {
        width: 90%
    }
}


@media (min-width: 1024px) and (max-width: 1439px) {
    .play {
        width: 100%;
        padding-left: 220px;
    }

    .hello {
        width: 100%;
    }

    .hello h1 {
        color: white;
        padding-left: 350px;
        text-decoration: underline;
        size: 6px;
    }

    .card {
        width: 90%
    }
}

.pagination {
    padding-left: 100px;
    padding-top: 30px;
    padding-bottom: 30px;
    margin-bottom: 0px;
}

.pages {
    background-image: url('https://image.freepik.com/free-vector/neon-grid-background_53876-91657.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

.btn-light {
    margin-left: 40px;

}



audio {
    display: block;
    margin: 1em;
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