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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <?php require 'partials/_dbconnect.php'?>
    <?php require 'partials/_nav.php'?>

    <section class="when">
        <!-- Search Results -->
        <div class="container my-3" id="maincontainer">
            <h1 class="py-3">Search results for <em>"<?php echo $_GET['search']?>"</em></h1>




            <?php  
        $noresults = true;
        $query = $_GET["search"];
        $sql = "select * from stores where match (namee, dest) against ('$query')"; 
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $title = $row['namee'];
            $desc = $row['dest']; 
            $sno= $row['sno'];
            $url = "store.php?sno=". $sno;
            $noresults = false;




            // Display the search result
            echo '<div class="result">
                        <h3><a href="'. $url. '" class="text-dark">'. $title. '</a> </h3>
                        <p>'. $desc .'</p>
                  </div>'; 
            }




          
            $query = $_GET["search"];
            $sql = "select * from artists where match (namee, dest) against ('$query')"; 
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $title = $row['namee'];
                $desc = $row['dest']; 
                $sno= $row['sno'];
                $url = "artist.php?sno=". $sno;
                $noresults = false;
    



                // Display the search result
                echo '<div class="result">
                            <h3><a href="'. $url. '" class="text-dark">'. $title. '</a> </h3>
                            <p>'. $desc .'</p>
                      </div>'; 
                }




              
                $query = $_GET["search"];
                $sql = "select * from musics where match (namee, dest) against ('$query')"; 
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $title = $row['namee'];
                    $desc = $row['dest']; 
                    $sno= $row['sno'];
                    $url = "music.php?sno=". $sno;
                    $noresults = false;
        




                    // Display the search result
                    echo '<div class="result">
                                <h3><a href="'. $url. '" class="text-dark">'. $title. '</a> </h3>
                                <p>'. $desc .'</p>
                          </div>'; 
                    }





              
                    $query = $_GET["search"];
                    $sql = "select * from instrument where match (namee, dest) against ('$query')"; 
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $title = $row['namee'];
                        $desc = $row['dest']; 
                        $sno= $row['sno'];
                        $url = "instrumental.php?sno=". $sno;
                        $noresults = false;
            
                        // Display the search result
                        echo '<div class="result">
                                    <h3><a href="'. $url. '" class="text-dark">'. $title. '</a> </h3>
                                    <p>'. $desc .'</p>
                              </div>'; 
                        }





        if ($noresults){
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Results Found</p>
                        <p class="lead"> Suggestions: <ul>
                                <li>Make sure that all words are spelled correctly.</li>
                                <li>Try different keywords.</li>
                                <li>Try more general keywords. </li></ul>
                                <li><a href="welcome.php" >Return To Home Page</a> </li>
                        </p>
                    </div>
                 </div>';
        }        
    ?>
















































        </div>
    </section>
    <?php require 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>
<style>
.body {
    height: 100vh;
    width: 100%;

}

.when {
    padding-top: 100px;
    height: 100vh: width:100%;
    padding-bottom: 100px;
}