<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
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
    <?php require 'partials/_nav.php' ?>

    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Creator's Forum</h3>
        <img src="https://img.icons8.com/material-outlined/280/000000/black-jaguar.png" style="display:inline"
            width="350" height="350">
        <h3>The Alien Music</h3>
    </div>


    <div class="container-fluid bg-3 text-center">
        <h3 class="margin">Steps to be followed</h3><br>
        <div class="row">
            <div class="col-sm-4">
                <p>Give your stage name or any name of your choice in the field of Creator provided to you </p>
                <p>Give a name such that it will appeal to the audience and we suggest it to be easily spelled</p>
                <p>The name provided by you should not have any special characters present in it </p>

            </div>
            <div class="col-sm-4">
                <p>Give a good name to your music in the field of "Song Name" provided to you</p>
                <p>Give a name such that it will appeal to the audience and we suggest you to keep the name which is
                    related to your music</p>
                <p>The name provided by you should not have any special characters present in it</p>

            </div>
            <div class="col-sm-4">
                <p>The name of the files uploaded shoud be same as the name of the song provided by you for the field
                    of song name.</p>
                <p> The file should be in "mp3" format and no other files will be accepted</p>
                <p>The file name provided by you should not have any special characters present in it</p>

            </div>
        </div>
    </div>




    <form method="post" enctype="multipart/form-data">

        <div class="pt-5">
            <h1 class="text-center">Upload Your Music</h1>

            <div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <div class="card card-body">

                            <form id="submitForm" action="/login" method="post" data-parsley-validate=""
                                data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input
                                    type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                                <div class="form-group required">
                                    <label for="username">Creator : </label>
                                    <input type="text" class="form-control text-lowercase" name="author">
                                </div>
                                <div class="form-group required">
                                    <lSabel for="username">Song Name : </lSabel>
                                    <input type="text" class="form-control text-lowercase" name="title">
                                </div>
                                <div class="form-group required">
                                    <lSabel for="username">Upload File Here : </lSabel>
                                    <input type="File" name="file">
                                </div>

                                <div class="form-group pt-1">
                                    <button class="btn btn-primary btn-block" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Terms And Conditions</h3><br>
        <div class="row">
            <div class="col-sm-4">
                <p>The audio uploaded by you should not be plaguraized or stolen from any other creator, it should be you own original content</p>

                <p>We test each audio file and make sure it is not found anywhere on the internet or stolen in order to support the real creator of that particular music</p>

            </div>
            <div class="col-sm-4">
                <p>The users should upload a particular music only once and multiple uploads are not entertained, but a creator can upload any number of music which are distinct</p>

                <p>If we find out that a particular creator has uploaded a audio more than once, such music will not be uploaded in out website and such things will not be entertained</p>
            </div>
            <div class="col-sm-4">
                <p>We will reach back to you if there are any flaws in the music and request you to change a particular parts in order to be uploaded</p>
                <p> The uploaded songs mush not contain any inappropriates words, our team will listen to the whole song before accepting your songs</p>
            </div>
        </div>
    </div>



    <?php require 'partials/_footer.php' ?>
</body>

</html>


<?php require 'partials/_dbconnect.php' ?>
<?php
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
        $author = $_POST["author"];
     
    #file name with a random number so that similar dont get replaced
     $pname =$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'uploads';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into files (title,image,author) VALUES('$title','$pname','$author')";
 
    if(mysqli_query($conn,$sql)){
 
    echo 'file sent successfully';
    }
    else{
        echo "Error";
    }
}
 
 
?>

<script>
history.pushState({}, "", "")
</script>

<style>
body {
    background: #E8D426 !important;
    font-family: 'Muli', sans-serif;

}


h1 {
    color: #fff;
    padding-bottom: 2rem;
    font-weight: bold;
}



.form-control:focus {

    color: #000;
    background-color: #fff;
    border: 2px solid #E8D426;
    outline: 0;
    box-shadow: none;

}

.btn {
    background: #E8D426;
    border: #E8D426;
}

.btn:hover {
    background: #E8D426;
    border: #E8D426;
}

.bg-3 {
    background-color: #474e5d;
    /* Dark Blue */
    color: #ffffff;
    height: 100vh;
}







.container-fluid {
    padding-top: 200px;
    padding-bottom: 70px;
}


@media (min-width: 320px) and (max-width: 767px) {
    .container-fluid {

        width: 180%;
    }

}

@media (min-width: 768px) and (max-width: 1023px) {
    .container-fluid {
        width: 180%;
    }
}
</style>