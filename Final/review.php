
<?php include 'sql_connect.php'; ?>
<?php include 'movieInfo.php'; ?>


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
        <span class = "dvd-title" id = "dvdTitle">Review <?php echo $title; ?></span>
    </div>


    <div class="row">
      
  <div class = "container container-user-review">

<div class='row user-review - a'>
<div class='col user-review-name'><img class = 'review-image' src = "<?php echo $image; ?>" /></div>
<div class='col user-review-review'>

<!----->
<form>
<div class = "custom-error-wrapper">
<div class = "custom-error" id = "custom_error">
<p class = "custom-error-message" id = "custom_error_message">Error: Wrong password</p>  
<img class = "custom-error-image" id = "custom_error_image" src = "assets/images/error.png"/>
<button class = "custom-error-button" id = "error" onclick = "hideErrorMessage(event,this.id, <?php echo $movie_id;?>)">Ok</button>
</div>
</div>
  <p>Attention: If you are not registered, your user account will be created automatically</p>
</br>
  <div class="form-group">
    <label for="exampleFormControlInput1">User name</label>
    <input type="text" class="form-control" id="review-username" autofocus required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" class="form-control" id="review-password" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" required>Your rating</label>
    <select class="form-control" id="review-rating">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1" required>Your review</label>
    <textarea class="form-control" id = "review-text" rows="3"></textarea>
  </div>

  <div class = "button-review-wrapper">
  <input type = "button" onclick="validateInput(event, <?php echo $movie_id;?>)" class = "button-review-movie" value = "Review"/>

  <input type = "button"class = "button-review-movie" onclick="window.location.href = 'detail.php?m_id=<?php echo $movie_id;?>';" value = "Cancel"/>
  
</div>
</form>
<!----->

</div>
<div class='col user-review-rating'></div>
</div>
  </div>
<div style = "height:400px"></div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "js/detail.js"></script>
  </body>
</html>