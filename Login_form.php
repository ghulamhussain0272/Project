<?php
session_start();
include_once 'server/db_connection.php';
$error_msg='';
if(isset($_GET['login'])){
    $email = $_GET['email'];
    $pass = $_GET['psw'];
    $sel_user = "select * from signup where user_Email='$email' AND user_Password='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg="Password or Email is wrong,try again";
    }
    else{
        $_SESSION['email']=$email;
        if(!empty($_GET['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:Home.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Login in Account">
    <meta name="author" content="Danial Anwaar">
    <meta name="keywords" content="HTML, CSS">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/signup-signin.css">
</head>
<body>
<div class="container">
<div  class="row">
    <div class="col-lg-12 col-md-12">
        <img src="images/movie@.jpg" width="100" height="80">
    </div>
    <!--<div class="header col-lg-12 col-md-12">
        <div class="header-left">
            <a href="Home.php">Home</a>
            <a href="YTS%20contact.php">Contact us</a>
            <a href="about_us.php">About us</a>
            <a href="Signup_form.php">Create new Account</a>
        </div>

    </div>-->
</div>
<hr>
<form method="get" action="Login_form.php" >

        <h1>
            Login
        </h1>
        <hr>
        <div><?php echo $error_msg;?></div>
        <label for="email"><b>Email</b></label>
        <input type="text" id="email" placeholder="Enter Email" name="email"
               value="<?php echo @$_COOKIE['email']?>" required autofocus>

        <label for="psw"><b>Password</b></label>
        <input type="password" id="psw" placeholder="Enter Password" name="psw"
               value="<?php echo @$_COOKIE['psw']?>" required>

    <label>
        <input type="checkbox" checked="checked" name="remember"
               style="margin-bottom:15px"> Remember me
    </label>
    <a href="Forget_password.html">Forget Password?</a>

        <div class="clearfix">
            <button type="submit" name="login" class="cancelbtn">Login</button>
        </div>


</form>

<div class="footer">
    <a href="about_us.php">About us</a>
    <a href="YTS%20contact.php">Contact us</a>
    <a href="Signup_form.php">Create new Account</a>
</div>
</div>
</body>
</html>