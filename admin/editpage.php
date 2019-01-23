<?php
/**
 * Created by PhpStorm.
 * User: shahzadmiraj
 * Date: 20/01/2019
 * Time: 1:28 AM
 */
include_once "../server/db_connection.php";
//include_once "functions.php";
session_start();
if(!isset($_SESSION['edit']))
{
    header("location:adminpanel.php");
    //exit();
}
?>
<html>
<head>
    <title>Editing page</title>
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
    <h1 class="text-center my-4 btn-danger"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Edit </span> Movies</h1>
    <div class="w-100">
    <form method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-sm-block col-sm-12 col-md-2 col-lg-2 col-xl-2 mt-auto btn-block btn-primary">
            <label for="movie_title" class="float-md-right"> Movie Title:</label>
        </div>
        <div class=" d-sm-block col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-auto btn-block btn-warning">
            <label for="movie_title" class="float-md-right">

                <?php
                $id=$_SESSION['edit'];
                $query1="SELECT * FROM movies WHERE movie_id=$id";
                $connected=mysqli_query($con,$query1);
                $dataFetch=mysqli_fetch_assoc($connected);
                //print_r($dataFetch);
                echo $dataFetch['movie_name'];
                ?>

            </label>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-block">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                </div>
                <input type="text" class="form-control" id="movie_title" name="title" placeholder="Enter Movie Title" >
            </div>
        </div>
    </div>



        <div class="row">
            <div class="d-sm-block col-sm-12 col-md-2 col-lg-2 col-xl-2 mt-auto btn-block btn-primary">
                <label for="movie_title" class="float-md-right"> Movie address</label>
            </div>
            <div class=" d-sm-block col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-auto btn-block btn-warning">
                <label for="movie_title" class="float-md-right">

                    <?php
                    echo $dataFetch['movie_link'];
                    ?>
                </label>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-block">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="movie_title" name="link" placeholder="Enter Movie link" >
                </div>
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
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-block">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="movie_title" name="year" placeholder="Enter Movie year" >
                </div>
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
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-block">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="file" class="form-control" id="movie_title" name="image" placeholder="Enter Movie Title" >
                </div>
            </div>
        </div>
        <div class="d-block " align="center">

            <input type="submit" name="submitBtn" class="btn-success col-4" id="BUTTON">
        </div>
    </form>
    </div>
</div>
</body>
</html>

<?php

if(isset($_POST['submitBtn']))
{
    $title=$_POST['title'];
    $id=$_SESSION['edit'];
    if($title!='')
    {
        $query="UPDATE `movies` SET `movie_name`='$title' WHERE movie_id='$id'";
        $connected=mysqli_query($con,$query);
    }
    $link=$_POST['link'];
    if($link!="")
    {
        $query="UPDATE `movies` SET `movie_link`='$link' WHERE movie_id='$id'";
        $connected=mysqli_query($con,$query);
    }
    $year=$_POST['year'];
    if($year!="")
    {
        $query="UPDATE `movies` SET `movie_year`='$year' WHERE movie_id='$id'";
        $connected=mysqli_query($con,$query);
    }
    if($_FILES['image']['name']!="")
    {
        $imagename = $_FILES['image']['name'];
        $tempImageName = $_FILES['image']['tmp_name'];
        move_uploaded_file($tempImageName, "../images/$imagename");

        $query = "UPDATE `movies` SET `movie_image`='$imagename' WHERE movie_id='$id'";
        mysqli_query($con, $query);

    }
    ?>

    <script>

    window.open('adminpanel.php','_self');//redirect that page by using javaScript
    </script>

    <?php
}
?>
