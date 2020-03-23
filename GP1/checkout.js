
function rentMovie()
{
   var movie_id = 2;
    //window.alert("fhhe");
    $.ajax({
        
        type : "POST",  
        url  : "checkout_backend.php", 
        data : { movie_id:movie_id},
        success: function(res){  
                                //do what you want here...
                                document.getElementById("custom_error-checkout").style.visibility = "visible";
                                
                }
        
    });

    return false;
}



function populate()
{
    
}

populate();