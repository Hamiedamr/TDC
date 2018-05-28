$(document).ready(function(){
    
      //initialize events 
      var codeID = $("#codeID").val();
      var nameID = $("#nameID").val();
      var hoursID = $("#hoursID").val();
      var typeID = $("#typeID").val();
      
    
    
    //this part is as a test for university name highlight.
      $("#contentBody tr #nameID").mouseover(function(e) {
        $(this).css("cursor", "pointer");
        });
    
        $("#contentBody tr:has(#nameID)").click(function(e) {
        $("#contentBody td").removeClass("highlight");
        var clickedCell= $(e.target).closest("#nameID");
        clickedCell.addClass("highlight");
        });
    
        
    
     //this part will be modified
    
    //click on name to go to edit page of selected name
     // $("#nameID").click(function() {
       // console.log(codeID);
         //$(this).css("background-color", "yellow");   
         /*$objectData = array(codeID => array(nameID,hoursID,typeID));
         for(var i = 0; i < objectData.length; i++) {
                 $response = objectData[i];
                 //test object data
                 console.log(response);
    
                 $code_id = response.codeID;
                 $name_id = response.nameID;
                 $hours_id = response.hoursID;
                  $type_id = response.typeID;
                // JQuery.append(code_id + name_id + hours_id + type_id);
             }
            // return view("{{url('/coursee')}}");
           // return  alert(this.code_id + " " + this.name_id + " " + this.hours_id +" " + this.type_id  );
           */
     //});
    
    
        
     });
    