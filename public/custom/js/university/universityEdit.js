$(document).ready(function(){
    
        //arabic name unicode validation
        
      var isArabic = /^([\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd])*$/g;
    
      $("#university_ar").change(function() {
    
        $(this).toggleClass("has-error", !isArabic.test(this.value));
    
       /* $(this).toggleClass($(this).css({ 'background-color': 'red',
            'color': 'white'}), !isArabic.test(this.value));
            
        */
    });
    
        
    });
    
    