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
    echo "<tr> <td colspan='12' align='center'><h1><b>Movies</b></h1></td></tr>";
    echo"<tr>
              <td align='center'> <b>Movie_ID</b></td>
              <td colspan='3' align='center'> <b>Movie_Name</b></td>
              <td align='center'><b>Movie_Year</b></td>
              <td colspan='3' align='center'><b>Movie_Link</b></td>
              <td colspan='2' align='center'><b>Movie_Image</b></td>
              <td align='center'><b>Edit</b></td>
              <td align='center'><b>Delete</b></td>
        </tr>";
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
              <td> <button   type=\"submit\" name=\"edit\" class=\"btn btn-primary btn-block\"><i class=\"fas fa-plus\"></i> Edit </button></td>
              <td> <button   type=\"submit\" name=\"delete\" class=\"btn btn-primary btn-block\"><i class=\"fas fa-plus\"></i> Delete </button></td>
              </tr>
              
              ";

    }
    echo "</table>";
}

?>