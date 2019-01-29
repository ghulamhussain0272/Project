<?php

include_once "server/db_connection.php";

if(isset($_GET['signup']))
{
    $fname=$_GET['firstname'];
    $lname=$_GET['lastname'];
    $email=$_GET['email'];
    $password=$_GET['psw'];
    $gender=$_GET['gender'];
    $birthday=$_GET['birthday'];
    $insert_query="insert into signup(user_Firstname,user_Lastname,user_Email,user_Password,user_birthday,user_Gender)
     values('$fname','$lname','$email','$password','$birthday','$gender')";


    $insertSignup=mysqli_query($con,$insert_query);
    if($insertSignup){
        header("location:Home.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signupform</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Registration Form">
    <meta name="author" content="Ghulam Hussain">
    <meta name="keywords" content="HTML, CSS">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/signup-signin.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div  class="row">
        <div class="col-lg-12">
            <img src="images/movie@.jpg" width="100" height="80">
        </div>
        <!--<div class="header col-lg-12">
            <div class="header-left">
                <a href="Home.php">Home</a>
                <a href="YTS%20contact.php">Contact_us</a>
                <a href="#about">About_us</a>
                <a href="Login_form.php">Login</a>
            </div>

        </div>-->
    </div>
    <hr>
    <form method="get">

        <h1>
            Sign Up
        </h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="firstname"><b>Firstname</b></label>
        <input type="text" id="firstname" placeholder="Enter Firstname" name="firstname"
               required pattern="^[A-Z a-z]+$">

        <label for="lastname"><b>Lastname</b></label>
        <input type="text" id="lastname" placeholder="Enter Lastname" name="lastname"
               required pattern="^[A-Z a-z]+$">

        <label for="email"><b>Email</b></label>
        <input type="text" id="email" placeholder="Enter Email" name="email"
               required pattern="^[A-Z a-z]+\d*\@gmail\.com$ | ^[A-Z a-z]+\d*\@ucp\.edu\.pk(\.com)?$">

        <label for="psw"><b>Password</b></label>
        <input type="password" id="psw" placeholder="Enter Password" name="psw"
               required pattern="^[A-Z a-z]+\d*[A-Z a-z]*$ | ^\d+[A-Z a-z]*\d*[A-Z a-z]*$ |\d*|[a-z A-z]*">


        <b>Select Gender:</b><br>
        <label for="male">Male</label>
        <input type="radio" name="gender"  value="male" required>
        <br>
        <label for="female">Female</label>
        <input type="radio" name="gender"  value="female" required>
        <br>
        <br>

        <label for="birthday"><b>Birthday</b></label>
        <input type="text" id="birthday" name="birthday"
               required pattern="^[0-2]?[0-9]\/[0-1][0-2]\/\d{4}$|
               ^3[0-1]\/[0-1][0-2]\/\d{4}$|^[0-2]?[0-9]\/0?[1-9]\/\d{4}$"><br><br>
        <label>
            <input type="checkbox" checked="checked" name="remember"
                   style="margin-bottom:15px"> Remember me
        </label>

        <p>By Creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a> </p>

        <div class="clearfix">
            <button type="submit" name="cancelbtn" class="cancelbtn">Cancel</button>
            <button type="submit" name="signup" class="cancelbtn">Sign Up</button>
        </div>


    </form>
    <div class="footer">
        <a href="#about">About_us</a>
        <a href="YTS%20contact.php">Contact_us</a>
    </div>
</div>
</body>
</html>