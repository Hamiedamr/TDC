$(document).ready(function(){
    
        //part of fixing navbar by creating sticky class
        window.onscroll = function() {myFunction()};
        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
    
        //change color of navbar tab when user clicks it.
       /* $("a").click(function(){
           $("this).css("background-color", "#fff");
          });
          */
        });
