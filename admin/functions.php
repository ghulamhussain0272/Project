<?php
/**
 * Created by PhpStorm.
 * User: Ghulam Hussain
 * Date: 1/19/2019
 * Time: 8:21 PM
 */
require "../server/db_connection.php";
//display movie table data from database
function display_Movies(){
    global $con;
    $getMovieQuery="select * from movies";
    $result=mysqli_query($con,$getMovieQuery);
    echo "<table border='1' align='center'>";
    echo "<tr> <td colspan='10' align='center'><h1><b>Movies</b></h1></td></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        $movietitle=$row['movie_name'];
        $movieyear=$row['movie_year'];
        $movielink=$row['movie_link'];
        $movieimage=$row['movie_image'];
        $movieid=$row['movie_id'];


        echo "
              <tr>
              <td> <b>$movieid</b></td>
              <td colspan='3'> <b>$movietitle</b></td>
              <td><b>$movieyear</b></td>
              <td colspan='3'><b>$movielink</b></td>
              <td colspan='2'><b>$movieimage</b></td>
              </tr>
              
              ";

    }
    echo "</table>";
}

?>