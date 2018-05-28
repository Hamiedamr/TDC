$(document).ready(function(){
    
      //initialize events 
      var hallsID = $("#hallsID").val();
      var hallsName = $("#halls_name").val();
      var hallsCapacity = $("#halls_capacity").val();
      
      
    //this part is as a test for university name highlight.
    $("#contentBody tr #halls_name").mouseover(function(e) {
      $(this).css("cursor", "pointer");
      });
  
      $("#contentBody tr:has(#halls_name)").click(function(e) {
      $("#contentBody td").removeClass("highlight");
      var clickedCell= $(e.target).closest("#halls_name");
      clickedCell.addClass("highlight");
      });

    //this part will be modified

//click on name to go to edit page of selected name
 // $("#halls_name").click(function() {
   // console.log(hallsID);
     //$(this).css("background-color", "yellow");   
     /*$objectData = array(hallsID => array(hallsName,hallsCapacity));
     for(var i = 0; i < objectData.length; i++) {
             $response = objectData[i];
             //test object data
             console.log(response);

             $halls_id = response.hallsID;
             $name_id = response.hallsName;
             $cap_id = response.hallsCapacity;
            // JQuery.append(halls_id + name_id + cap_id);
         }
        // return view("{{url('/he')}}");
       // return  alert(this.halls_id + " " + this.name_id + " " + this.cap_id);
       */
 //});
    
     });
    