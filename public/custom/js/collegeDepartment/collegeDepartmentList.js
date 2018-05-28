$(document).ready(function(){
    
      //initialize events 
      var depID = $("#depID").val();
      var nameID = $("#nameID").val();
     
    
    
    //this part is as a test for university name highlight.
      $("#contentBody tr #nameID").mouseover(function(e) {
        $(this).css("cursor", "pointer");
        });
    
        $("#contentBody tr:has(#nameID)").click(function(e) {
        $("#contentBody td").removeClass("highlight");
        var clickedCell= $(e.target).closest("#nameID");
        clickedCell.addClass("highlight");
        });
    
       /* $("#spnText").html(
        'Clicked table cell value is: <b> ' + clickedCell.text() + '</b>');
        });
        */
        
    
     //this part will be modified
    
    //click on name to go to edit page of selected name
     // $("#nameID").click(function() {
       // console.log(depID);
         //$(this).css("background-color", "yellow");   
         /*$objectData =array(depID,nameID));
         for(var i = 0; i < objectData.length; i++) {
                 $response = objectData[i];
                 //test object data
                 console.log(response);
    
                 $dep_id = response.depID;
                 $name_id = response.nameID;
                
                // JQuery.append(dep_id + name_id);
             }
            // return view("{{url('/de')}}");
           // return  alert(this.dep_id + " " + this.name_id );
           */
     //});
    
     });
    