<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location: Login_form.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="about_us.css">
    <link rel="stylesheet" href="css/signup-signin.css">
    <title>about us</title>
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

<div class="team-section">
    <h1>Our Team</h1>
    <span class="border"></span>
    <div class="ps">
        <a href="https://www.facebook.com/profile.php?id=100005451975439"><img src="https://scontent.fisb6-1.fna.fbcdn.net/v/t1.0-1/p160x160/15542040_610318672493193_1718615648410623555_n.jpg?_nc_cat=111&_nc_ht=scontent.fisb6-1.fna&oh=55b7296e1853feae8acb0c0468222436&oe=5C71D0E3" alt="Danial Sheikh">     </a>
        <a href="https://www.facebook.com/profile.php?id=100004492625959"><img src="https://scontent.fisb6-1.fna.fbcdn.net/v/t1.0-1/c0.5.160.160/p160x160/46502366_1076633619163049_3439363313320853504_n.jpg?_nc_cat=111&_nc_ht=scontent.fisb6-1.fna&oh=e5a30ddb37ff2695bef1c56e79dc2f8f&oe=5CA61D89" alt="Ghulam Hussain">     </a>
        <a href="https://www.facebook.com/shahzadmirajdin?lst=100003496096342%3A100003629940371%3A1543080628"><img src="https://scontent.fisb6-1.fna.fbcdn.net/v/t1.0-1/p160x160/46522845_1397269900403995_1586233092878630912_n.jpg?_nc_cat=106&_nc_ht=scontent.fisb6-1.fna&oh=cfbd63c436e1d191bdd0ff9920d3bc07&oe=5C699957" alt="Shahzad Miraj">     </a>
        <a href="https://www.facebook.com/faizz.buddy"><img src="https://scontent.fisb6-1.fna.fbcdn.net/v/t1.0-1/p160x160/16142952_1102559433203916_6506811294568660643_n.jpg?_nc_cat=111&_nc_ht=scontent.fisb6-1.fna&oh=72c54a94ea048dbf12e21e43a30a03a2&oe=5C68F495" alt="Faizan Ali">   </a>
    </div>
    <div class="section">
        <span class="name">Danial Sheikh</span>
        <span class="border">  </span>
        <p>
            Student at University Of Central Punjab, Student at Toba Tek Singh, Pakistan and member at UCP Debating society
            Studied at Govt degree College Toba Tek Singh.
            Past: Divisional Public School & college Toba Tek Singh
            Lives in Toba Tek Singh, Pakistan
        </p>
    </div>
    <div class="section">
        <span class="name">Ghulam Hussain</span>
        <span class="border">  </span>
        <p>
            Studied at University Of Central Punjab
            Past: Punjab Group Of Colleges
            Lives in Lahore, Pakistan
            From Sakesar, Punjab, Pakistan
        </p>
    </div>

    <div class="section">
        <span class="name">Shahzad Miraj</span>
        <span class="border">  </span>
        <p>
            Studies at UCP University of Central Punjab
            Past: Punjab Group Of Colleges and New Lahore Cantt Public High School Canal Bank
            Lives in Lahore, Pakistan
            From Lahore, Pakistan
        </p>
    </div>
    <div class="section">
        <span class="name">Faizan Ali</span>
        <span class="border">  </span>
        <p>
            Studied at University Of Central Punjab
            Past: Punjab Group Of Colleges
            Lives in Lahore, Pakistan
            From Lahore, Pakistan
        </p>
    </div>
</div>
    <div class="footer">
        <a href="about_us.php">About us</a>
        <a href="YTS%20contact.php">Contact us</a>
    </div>
</div>
</body>
</html>