<?php

$user_name = $_POST['username'];
$user_password = $_POST['password'];
$review = $_POST['review'];
$rating = $_POST['rating'];

$server = "localhost";
$username = "root";
$password = "";
$database = "Project1";


$movie_id = 2;

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn)
{
  echo "error when connecting";
}
else{
    $query_result = mysqli_query($conn,"Select * from user where user_name = '$user_name'");
    {

        $row = mysqli_fetch_assoc($query_result);

        if(mysqli_num_rows($query_result) > 0 && $user_password == $row['password'] )
        {
            
            $user_id = $row['user_id'];
            $query_result = mysqli_query($conn,"Select * from review where user_id = '$user_id' and m_id = '$movie_id'");
            
            if(mysqli_num_rows($query_result)  == 0)
            {
                //insert
                echo "success";

                mysqli_query($conn, "INSERT INTO review (user_id, m_id, rating, comment) VALUES('$user_id', '$movie_id', '$rating', '$review')");
            }
            else
            {
                echo "Error: You already reviewed this movie.";
            }
        }
        else if(mysqli_num_rows($query_result)  == 0)
        {
           //new account 
           
           mysqli_query($conn, "INSERT INTO user (user_name, password) VALUES('$user_name', '$user_password')");
           $user_id = mysqli_fetch_assoc(mysqli_query($conn, "SELECT user_id from user WHERE user_name = '$user_name' AND password = '$user_password'"))['user_id'];
           mysqli_query($conn, "INSERT INTO review (user_id, m_id, rating, comment) VALUES('$user_id', '$movie_id', '$rating', '$review')");
           echo "success";
        }

        else
        {
            echo "Error: Wrong password";
        }
    }
   
    
}




?>