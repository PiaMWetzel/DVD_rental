<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "Project1";


$movie_id = $_POST['movie_id'];
$user_id = 1;


$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn)
{
  echo "error when connecting";
}
else{
    
    mysqli_query($conn, "INSERT INTO rental (m_id, u_id) VALUES('$movie_id','$user_id')");
    echo "success";
    
}




?>