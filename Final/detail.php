
<?php include 'sql_connect.php';;?>
<?php include 'detail_backend.php';?>
<?php include 'movieInfo.php';?>

<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>

    <title>Blockbluster</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#">Blockbluster</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php">Search</a>
        </li>
      </ul>
      
    </div>
  </nav>


  <div class="container">
    <div class="row divider">
        <span class = "dvd-title" id = "dvdTitle"><?php echo $title;?> </span>
    </div>


    <div class="row">
      <div class="col">
       
      </div>
      <div class="col img-container dvd">
       <img class = "img-dvd" id = "dvdImage" src=<?php echo $image; ?> alt="" >
      </div>
      <div class="col">
        <input type = "image" onclick="window.location.href = 'checkout.php?m_id=<?php echo $movie_id;?>';" class = "button-review" src = "assets/images/rentButton.png"/>
        
        <input type = "image" onclick="window.location.href = 'review.php?m_id=<?php echo $movie_id;?>';" class = "button-review" src = "assets/images/reviewButton.png"/>
      </div>
      <div class="col">

      </div>
    </div>
    <div class="row">
      <div class="col">
     
      </div>

      <div class="col img-container">
         <span class = "title">Average user rating:</span>  </br>
       <?php
          foreach($stars as $star)
          {
            echo $star;
          }
       ?>
       
      </div>
      <div class="col ff text-center">
          
      </div>
      <div class="col">
    </div>

    </div>

    <div class = "row">
        
        <div class = "col"></div>
        <div class = "col desc-container"><p class = "dvd-description" id = "dvdDescription"><?php echo $description; ?></p></div>
        <div class = "col"></div>
        <div class = "col"></div>
        
    </div>


    <div class="row divider">

        <span>User Reviews: (<?php echo $numReviews; ?>)</span>
    </div>
  </div>

  <div class = "container container-user-review">

    <?php foreach($uComments as $uc)
    {
      echo $uc;
    } ?>

  </div>
<div style = "height:400px"></div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src = "js/detail.js"></script>
  </body>
</html>