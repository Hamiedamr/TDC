$(document).ready(function(){
    
    
       //load news image
         function previewFile() {
            var preview = document.querySelector('img');
            var file    = document.querySelector('input[type=file]').files[0];
            var reader  = new FileReader();
    
            reader.addEventListener("load", function () {
                preview.removeAttribute('src','custom/images/user.png');
                preview.src = reader.result;
            }, false);
    
            if (file) {
                reader.readAsDataURL(file);
            }
            }
         
        });
      
    
    
    
    