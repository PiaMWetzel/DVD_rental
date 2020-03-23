


function reviewDvd()
{
    window.alert("clicked review button");
}


function rentDvd()
{
    window.alert("clicked rent button");
}


function attemptReview()
{


    //window.alert("hfhffhhf");
  // xmlhttp =  new XMLHttpRequest();
   //xmlhttp.open("GET", "review_backend.php?movie_id=2", true);
   //xmlhttp.send();

   var username = document.getElementById("review-username").value;
   var password = document.getElementById("review-password").value;
   var review = document.getElementById("review-text").value;
 
   var e = document.getElementById("review-rating");
   var rating = e.options[e.selectedIndex].value;



  //var error_message = document.getElementById("custom_error");
  
   

   //
//window.alert(review);

   $.ajax({
           type : "POST",  //type of method
           url  : "review_backend.php",  //your page
           data : { username : username, review : review, password : password, rating:rating },// passing the values
           success: function(res){  
                                   //do what you want here...

                                   

                                   if(res.includes('success'))
                                   {
                                    document.getElementById("custom_error_message").innerHTML = "Thank you for your review!";
                                    document.getElementById("custom_error_image").setAttribute('src', 'assets/images/success.png');
                                    document.getElementById("error").setAttribute('id', 'success');
                                    document.getElementById("custom_error").style.visibility = "visible";
                                   
                                   }
                                   else
                                   {
                                    //window.alert(res);
                                    document.getElementById("custom_error_message").innerHTML = res;
                                    document.getElementById("custom_error_image").setAttribute('src', 'assets/images/error.png');
                                    document.getElementById("error").setAttribute('id', 'error');
                                    document.getElementById("custom_error").style.visibility = "visible";
                                   }
                   },
           error:function(e)
           {
               console.log(e);
           }
           
       });
   
       return false;

}

function setImage(imageUrl)
{

}
function setDescription(description)
{
    
}

function setRating(rating)
{
    
}

function setReviews(reviews)
{
    
}

function hideErrorMessage( id)
{
   
    if(id == "error")
    {
        document.getElementById("custom_error").style.visibility = "hidden";
    }
    else
    {
        location.replace("https://www.w3schools.com")
        //window.alert("hehehe");
        
       // return false;
    }
}