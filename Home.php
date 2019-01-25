<?php

session_start();
include_once "server/db_connection.php";
include_once "admin/functions.php";

if(!isset($_SESSION['email'])){
    header('location: Login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Movies of all types">
    <meta name="author" content="Ghulam Hussain">
    <meta name="keywords" content="HTML, CSS">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/signup-signin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Home</title>
</head>
<body>

<div class="container ">
<div class="row">
    <div class="col-lg-12">
        <img src="images/movie@.jpg">
    </div>
    <div class="header col-lg-12 col-md-12 col-sm-12">
    <div  class="header-left">
        <a href="Home.php">Home</a>
        <a href="YTS%20contact.php">Contact us</a>
        <a href="about_us.php">About us</a>
       <!-- <a href="Login_form.php">Login</a>-->

    </div>
    </div>
</div>
<hr>
    <h2>Trailers</h2>
    <div class="row" >
        <?php
        displaymovies();
        ?>
    </div>
<div class="col-lg-12 col-md-12 col-sm-12">
<p>
    <h3>Watch Online Movies Purpose / Idea</h3><br>
    Watch Online Movies in HD Print Quality Free Download,Watch Full Movies Online Bollywood Movies
    Download Latest Hollywood Movies in DVD Print Quality Free.<br>
    Watch Online Movies is my hobby and i daily watch 1 or 2 movies online and specially
    the indian movies on their release day i'm always watch on different websites in cam print
    but i always use google search to find the movies,then i decide that i make a platform for
    users where they can see HD/DVD Print Quality movies and i listed all latest movies.<br>
    I also capture the different categories of movies like if you want to see Hollywood movies,
    or you want to see punjabi movies or you are interested in Bollywood movies then i
    have all these type of categories in my website.<br>I also focus on categories of movies
    based on actress and actors , like a person want to see all movies of Amir khan from
    My website there he select category Amir Khan Movis list then All movies of amir khan Will be displayed.<br>
    so we provide the list of movies from all actress and actors so you can find any movie and watch in High Print quality.<br>
    So i try my best to understand the needs of users who want to watch a movie,but still if
    you have any suggestion for me or you want to give me any advice you are always welcome.<br>
    make comment on video i will surely reply you.<br>I provide online Full movies to watch and
    Free Download so always stay connected with our website to enjoy the latest movies and
    if you dont have time to watch just make that movie on download and when will you free then
    you will watch that movie in best print.<br>
    </p>

</div>
    <div class="footer">
        <a href="about_us.php">About_us</a>
        <a href="YTS%20contact.php">Contact_us</a>
        <a href="logout.php">Logout</a>
    </div>
</div>


</body>
</html>