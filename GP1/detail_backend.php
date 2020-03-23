<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "Project1";

$numReviews = 0;

$uComments = [];
$stars = [];


$movie_id = 1;

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn)
{
  echo "error when connecting";
}
else{

$query_result = mysqli_query($conn,"SELECT movie.movie_title, movie.description, movie.movie_thumb, review.comment, review.rating, user.user_name
FROM movie INNER JOIN review ON movie.movie_id = review.m_id INNER JOIN user ON review.user_id = user.user_id WHERE movie_id = '$movie_id'");
//echo "Successful";


}

$title = "";
$description = "";
$image = "";
$avg_rating = 0;
$blub = "";
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
  
array_push($uComments,"<div class='row user-review - a'>
<div class='col user-review-name'>$user</div>
<div class='col user-review-review'><p>$comment</p></div>
<div class='col user-review-rating'>$rating x <img class = 'img-star' src='assets/images/star.png'/></div>
</div>");
}

$numReviews = count($uComments);
$avg_rating = round($avg_rating/$numReviews);

for($i = 1; $i <= $avg_rating; $i++)
{
  array_push($stars, "<img class = 'img-star' src='assets/images/star.png'/>");
}




?>