$(document).ready(function(){


    //weeks
    var weekOne = $("#weekOne").val();
    var weekTwo = $("#weekTwo").val();
    var weekThree = $("#weekThree").val();
    var weekFour = $("#weekFour").val();

    //contents
    var contentOne = $("#contentOne").val();
    var contentTwo = $("#contentTwo").val();
    var contentThree = $("#contentThree").val();
    var contentFour = $("#contentFour").val();

    
    
// switch to training list route
        $(".cardFirst").click(function(){
            //we should write route of week 1 
            $(this).css("background-color","red");
            
        });

        $(".cardSecond").click(function(){
            //we should write route of week 2
            $(this).css("background-color","green");
             
        });

        $(".cardThird").click(function(){
            //we should write route of week 3 
            $(this).css("background-color","yellow");
            
        });

        $(".cardFourth").click(function(){
            //we should write route of week 4 
            $(this).css("background-color","blue");
            
        });
        
        
       });


