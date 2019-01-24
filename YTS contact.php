<?php

if(!isset($_SESSION['email'])){
    header('location: Login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="class%20of%20contact%20yts%20movie.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Movies of all types">
    <meta name="author" content="shahzad miraj">
    <meta name="keywords" content="HTML, CSS">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/signup-signin.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>contact page of YTS MOVIE</title>
</head>
<body>

    <div class="container" >

        <form>

                <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 col-12" ><!--// yts tag-->
                    <img src="images/movie@.jpg" width="160px" height="80px">
                </div>
            <div class="row">
            <div class="header col-lg-12 col-md-12 col-sm-12">
                <div  class="header-left">
                    <a href="Home.php">Home</a>
                    <a href="YTS%20contact.html">Contact us</a>
                    <a href="about_us.php">About us</a>
                    <!--<a href="Login_form.php">Login</a>-->
                </div>
            </div>
            </div>
            <div class="row">  <!--// label contack us-->
                <div class="col-12 label contact">
                    <p> Contact Us</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12"> <!--//text first line for feedback-->
                    <p class="light-show show-sm-none">Please send your feedback and requests to e-mail address:
                        <i>support@yts.ag (the contact form is under maintenance)</i></p>
                </div>
                <div class="col-xl-2 col-lg-2 show-none"></div> <!--//space mid  on feedback and right text-->
                <div class="col-xl-5 col-lg-5  show-none">
                    <p class="light-show"> Please note that any contact messages
                        that are requesting movies will be ignored.</p>
                </div> <!--//text on right side that was note -->
            </div>

            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 label"> <!--//name:-->
                <p>Name:</p>
                </div>
                <div class="col-xl-2 col-lg-2 show-none"> <!--//space mid on name:-->
                </div>
                <div class="col-xl-5 col-lg-5 show-none"> <!--//right side space-->
                </div>

            </div>


            <div class="row">
                <div class="col-xl-5 col-lg-5 col-sm-12 col-md-12 "> <!--//name bar:-->

                    <input class="col-12">
                    <!--<p>bar:</p>-->
                </div>
                <div class="col-xl-2 col-lg-2 show-none "> <!--//space mid on name:-->
                </div>
                <div class="col-xl-5 col-lg-5 show-none"> <!--//right side space-->
                </div>

            </div>

            <div class="row">
                <div class="col-xl-5  col-lg-5  col-md-12  col-sm-12 label"> <!--//E-Mail:-->
                    <p>E-Mail:</p>
                </div>
                <div class="col-xl-2  col-lg-2 show-none"> <!--//space mid on name:-->
                </div>
                <div class="col-xl-5   col-lg-5  show-none"> <!--//right side space-->
                </div>

            </div>

            <div class="row">
                <div class="col-xl-5   col-lg-5 col-md-12 col-sm-12 "> <!--//E-Mail bar:-->
                    <input class="col-12">
                </div>
                <div class="col-xl-2   col-lg-2  show-none"> <!--//space mid on name:-->
                </div>
                <div class="col-xl-5   col-lg-5 show-none"> <!--//right side-->
                    <p>If you want to send a DMCA take down request please keep in mind these will
                        take 2-4 working days to process.</p>
                </div>

            </div>



            <div class="row">
                <div class="col-xl-5    col-lg-5 col-md-6 col-md-12 label col-sm-12"> <!--//Subject:-->
                    <p>Subject:</p>
                </div>
                <div class="col-xl-2  col-lg-2 show-none"> <!--//space mid on name:-->
                </div>
                <div class="col-xl-5  col-lg-5 show-none"> <!--//right side space-->
                </div>

            </div>

            <div class="row">
                <div class="col-xl-5   col-lg-5 col-md-12 col-sm-12"> <!--//Subject bar:-->
                    <input class="col-xl-12">
                </div>
                <div class="col-xl-2  col-lg-2 show-none"> <!--//space mid on name:-->
                </div>
                <div class="col-xl-5   col-lg-5 show-none"> <!--//right side space-->
                </div>

            </div>

            <div class="row">
                <div class="col-xl-5   col-lg-5 label col-md-12 col-sm-12"> <!--//Message::-->
                    <p>Message:</p>
                </div>
                <div class="col-xl-2  col-lg-5  show-none"> <!--//space mid on name:-->
                </div>
                <div class="col-xl-5  col-lg-5 show-none"> <!--//right side space-->
                </div>

            </div>

            <div class="row">
                <div class="col-xl-5  col-lg-5 col-md-12 col-sm-12"> <!--//Message bar:-->
                    <input class="col-12">
                </div>
                <div class="col-xl-2  col-lg-2 show-none"> <!--//space mid on name:-->
                </div>
                <div class="col-xl-5  col-lg-5 show-none"> <!--//right side space-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4  col-lg-4 col-md-12 col-sm-12"> <!--//rebort message bar:-->
                    <p>I'am not a rebot</p>
                </div>
                <div class="col-xl-8  col-lg-8  show-none "> <!--//right side space-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4  col-lg-5 col-md-8 col-sm-8">
                </div>
                <div class="col-xl-1 float-right   col-lg-1  col-md-4 col-sm-4"><button class="col-xl-12">Send</button></div>

                <div class="col-xl-2   col-lg-2  show-none"></div> <!--//send button-->
                <div class="offset-xl-5  col-lg-5  show-none"></div>
            </div>

        </form>

    </div>

</body>
</html>