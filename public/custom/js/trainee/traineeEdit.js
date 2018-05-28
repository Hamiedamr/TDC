$(document).ready(function(){


      //arabic name unicode validation
  var isArabic = /^([\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd])*$/g;
    $("#trainee_ar").change(function() {
      $(this).toggleClass("has-error", !isArabic.test(this.value));
      
  });
  
  /*$("#trainee_en").change(function() {
    $(this).toggleClass("has-error", isArabic.test(this.value));
});*/
    

    
 

    //note: this part will be updated by the best practice method
       //to load static bottom notes from txt files 
    /*
    
       $("#license_id").load("licence.txt");
       
       jQuery.get('license.txt',function(txt)
    {
        $("#license_id").val(txt);
    }
    */

      /*jQuery.get('note.txt',function(txt)
    {
        $("#note_id").val(txt);
    }
    */

   /* jQuery.get('rules.txt',function(txt)
    {
      $("#rules_id").val(txt);
    });

//load data locally from .txt files
     $.ajax({
            url : "C:\xampp\htdocs\Freelance\universityPro\resources\views\trainee\licence.txt",
            dataType: "text",
            success : function (data) {
                $("#license_id").html(data);
            }
        });
    });
    */
    
    