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
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Search</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div class="container">
    <div class="row divider">
        <span class = "dvd-title">Check out</span>
    </div>


    <div class="row">
      <div class="col">
       
      </div>
      <div class="col img-container dvd">
       
        
        <form>
          <!-- custom error message -->
        <div class = "custom-error-wrapper" >
        <div class = "custom-error" id = "custom_error-checkout">
        <p class = "custom-error-message" id = "custom_error_message-checkout">Thank you for your purchase!</p>  
        <img class = "custom-error-image" id = "custom_error_image-checkout" src = "assets/images/success.png"/>
        <button class = "custom-error-button" id = "error-checkout" onclick = "">Ok</button>
        </div>
        </div>

            <label class = "label-login">Shipping Address:</label>
        
            <div class="form-group">
              <input type="text" class="form-control" id="name-checkout" placeholder="Enter name">
              <small id="emailHelp" class="form-text text-muted">We will never share your data with anyone else.</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="username-signup" placeholder="Address">
              </div>
            <div class="form-group">
              <input type="text" class="form-control" id="password-signup" placeholder="Zip Code">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="password-signup" placeholder="City">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="password-signup" placeholder="State">
            </div>
            <div class="form-group">
              <label for="password-input">Payment information:</label>
              <input type="text" class="form-control" id="password-signup" placeholder="Cardholder name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="password-signup" placeholder="Credit card number">
            </div>
            <input type="button" onclick = "rentMovie()" class="btn btn-primary" value = "Pay Now!"/>
          </form>

      </div>
      <div class="col">

      </div>
      <div class="col">
        <p class = "checkout-title"> I, Tonya </p>
        <img class = "checkout-image" src = "https://m.media-amazon.com/images/S/aplus-media/sota/936beaf0-0f04-4dfd-9d7c-804be16fa5e4.jpg"/>
      </div>
    </div>
    <div class="row">
      <div class="col">
     
      </div>

      <div class="col img-container">
       
      </div>
      <div class="col ff text-center">
          
      </div>
      <div class="col">
    </div>

    </div>

    <div class = "row">
        
        <div class = "col"></div>
        <div class = "col desc-container"></div>
        <div class = "col"></div>
        <div class = "col"></div>
        
    </div>


    <div class="row divider">
        <span>Blockbluster - We are taking back to where it all started</span>
    </div>
  </div>


<div style = "height:400px"></div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "checkout.js"></script>
  </body>
</html>