<?php
//include "../server/db_connection.php";

session_start();
if(!isset($_SESSION['user_email'])){
    header('location: AdminRights.php?not_admin=You are not Admin!');
}
include_once "functions.php";


if(isset($_POST['Logout']))
{
    header("location:logout.php");
}
//update
if(isset($_POST['edit']))
{
    $movieid=$_POST['edit'];
    $_SESSION['edit']=$movieid;
    header("location:editpage.php");
}
//delete
if(isset($_POST['delete']))
{
    $movieid=$_POST['delete'];
    $_SESSION['delete']=$movieid;
    header("location:delete.php");
}
//movies insertion into table
if(isset($_POST['insert_movie']))
{
    $moviename=$_POST['movie_title'];
    $movieaddress=$_POST['movie_link'];
    $movieyear=$_POST['movie_year'];

    $movieimage = $_FILES['movie_img']['name'];
    $movieimage_tmp = $_FILES['movie_img']['tmp_name'];
    move_uploaded_file($movieimage_tmp,"movie_images/$movieimage");

    $insert_query="insert into movies(movie_name,movie_image,movie_link,movie_year) 
                   values ('$moviename','$movieimage','$movieaddress','$movieyear')";

    $insertmovie=mysqli_query($con,$insert_query);
    if($insertmovie){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Movies</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Movies</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
              <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="movie_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Movie </span> Title:</label>
               </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="movie_title" name="movie_title" placeholder="Enter Movie Title">
                </div>
            </div>


                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="movie_address" class="float-md-right"> <span class="d-sm-none d-md-inline"> Movie </span> Address:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                        </div>
                        <input type="text" class="form-control" id="movie_link" name="movie_link" placeholder="Enter Movie Link">
                        <!--required pattern=".+"-->
                    </div>
                </div>
        </div>
            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="movie_year" class="float-md-right"> <span class="d-sm-none d-md-inline"> Movie </span> Year:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                        </div>
                        <input class="form-control" id="movie_year" name="movie_year" placeholder="Enter Movie Year">
                        <!--required pattern="^\d{4}$"-->
                    </div>
                </div>
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="movie_img" class="float-md-right"><span class="d-sm-none d-md-inline"> Movie </span> Image:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-image"></i></div>
                        </div>
                        <input class="form-control" type="file" id="movie_img" name="movie_img">
                     <!--   required pattern=".+\.png|.+\.jpg"-->
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <button type="submit" name="insert_movie" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
                </div>

            </div>

            <div class="row my-5">
                <?php
                display_Movies();
                ?>
            </div>
        <div class="row my-6">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="Logout" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Logout </button>
            </div>

        </div>


    </form>
</div>
</body>
</html>