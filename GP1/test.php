<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "Project1";


$arr = [];


$movie_id = 1;

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn)
{
  echo "error when connecting";
}
else{

$query_result = mysqli_query($conn,"SELECT movie.movie_title, movie.description, movie.movie_thumb, review.comment, review.rating, user.user_name
FROM movie INNER JOIN review ON movie.movie_id = review.m_id INNER JOIN user ON review.user_id = user.user_id WHERE movie_id = '$movie_id'");
echo "Successful";


}

$title = "";
$description = "";
$image = "";
$avg_rating = 0;

while($result = mysqli_fetch_assoc($query_result))
{
  //echo implode(" ",$result);
  $user = $result["user_name"];
  $comment = $result["comment"];
  $rating = $result["rating"];

  $avg_rating = $avg_rating + intval($rating);

  $title = $result["movie_title"];
  $description = $result["description"];
  $image = $result["movie_thumb"];
  
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo $title;
 echo " ";
 echo  $description;
 echo " ";
 echo "<br>";
 echo "<br>";
 echo  $user;
 echo " ";
 echo $comment;
 echo " ";
 echo $rating;



array_push($arr,json_encode( array('username'=>$user,'rating' => $rating, 'comment' => $comment)));

}
$avg_rating = round($avg_rating/count($arr));

//array_push($arr, json_encode( array('title'=>$title,'decription' => $description, 'image' => $image, 'avg_rating'=> $avg_rating)));
echo "\n\nLength: ".count($arr);
echo "Avg stars: ".$avg_rating;

?>