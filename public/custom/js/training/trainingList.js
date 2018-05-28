$(document).ready(function(){



    //this part is for booking complete to display checkbox

   $('#contentBody tr td:has(#checkID)').click(function(){
    $('#contentBody tr #placesID').each(function() {
        var placeValue = $(this).text(); 
        console.log("place value = " + placeValue);
        if(placeValue == 0)
         {
            //console.log("booking complete");
            $('#checkID').hide();
            $('span').removeClass('hide').addClass('msg');
           
         }
        
     }); 
   });



});


