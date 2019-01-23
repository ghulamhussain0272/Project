<?php
/**
 * Created by PhpStorm.
 * User: Ghulam Hussain
 * Date: 1/21/2019
 * Time: 8:54 PM
 */
include_once "../server/db_connection.php";
//include_once "functions.php";
session_start();
if(!isset($_SESSION['delete']))
{
    header("location:adminpanel.php");
    //exit();
}


?>
<html>
<head>
    <title>Delete page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
        label
        {
            height: 15vh;
        }
        #BUTTON{
            height: 10vh;
        }
    </style>
</head>
<body>
<div class="container border">
    <h1 class="text-center my-4 btn-danger"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Delete </span> Movies</h1>
    <div class="w-100">
    <form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-sm-block col-sm-12 col-md-2 col-lg-2 col-xl-2 mt-auto btn-block btn-primary">
            <label for="movie_title" class="float-md-right"> Movie Title:</label>
        </div>
        <div class=" d-sm-block col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-auto btn-block btn-warning">
            <label for="movie_title" class="float-md-right">

                <?php
                $id=$_SESSION['delete'];
                $query1="SELECT * FROM movies WHERE movie_id=$id";
                $connected=mysqli_query($con,$query1);
                $dataFetch=mysqli_fetch_assoc($connected);
                //print_r($dataFetch);
                echo $dataFetch['movie_name'];
                ?>

            </label>
        </div>
    </div>



        <div class="row">
            <div class="d-sm-block col-sm-12 col-md-2 col-lg-2 col-xl-2 mt-auto btn-block btn-primary">
                <label for="movie_title" class="float-md-right"> Movie address</label>
            </div>
            <div class=" d-sm-block col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-auto btn-block btn-warning">
                <label for="movie_title" class="float-md-right">

                    <?php
                    echo  $dataFetch['movie_link'];
                    ?>
                </label>
            </div>
        </div>


        <div class="row">
            <div class="d-sm-block col-sm-12 col-md-2 col-lg-2 col-xl-2 mt-auto btn-block btn-primary">
                <label for="movie_title" class="float-md-right"> Movie year:</label>
            </div>
            <div class=" d-sm-block col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-auto btn-block btn-warning">
                <label for="movie_title" class="float-md-right">


                    <?php
                    echo $dataFetch['movie_year'];
                    ?>
                </label>
            </div>

        </div>


        <div class="row">
            <div class="d-sm-block col-sm-12 col-md-2 col-lg-2 col-xl-2 mt-auto btn-block btn-primary">
                <label for="movie_title" class="float-md-right"> Movie Image:</label>
            </div>
            <div class=" d-sm-block col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-auto btn-block btn-warning">
                <label for="movie_title" class="float-md-right">

                    <?php
                    echo $dataFetch['movie_image'];
                    ?>
                </label>
            </div>

        </div>
        <div class="d-block " align="center">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <button type="submit" name="delete_movie" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Delete </button>
            </div>
        </div>
    </form>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['delete_movie']))
{
    $id=$_SESSION['delete'];
    $q="delete from movies where movie_id='$id'";
    $connected=mysqli_query($con,$q);
    header("location:adminpanel.php");
}
?>
