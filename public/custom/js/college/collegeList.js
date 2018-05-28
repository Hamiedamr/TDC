$(document).ready(function(){
  
  
    //initialize events 
    var collegeID = $("#collegeID").val();
    var nameID = $("#college_name").val();

//this part is as a test for college name highlight.
  $("#contentBody tr #college_name").mouseover(function(e) {
    $(this).css("cursor", "pointer");
    });

    $("#contentBody tr:has(#college_name)").click(function(e) {
    $("#contentBody td").removeClass("highlight");
    var clickedCell= $(e.target).closest("#college_name");
    clickedCell.addClass("highlight");
    });

   /* $("#spnText").html(
    'Clicked table cell value is: <b> ' + clickedCell.text() + '</b>');
    });
    */
    

 //this part will be modified

//click on name to go to edit page of selected name
 // $("#college_name").click(function() {
   // console.log(collegeID);
     //$(this).css("background-color", "yellow");   
     /*$objectData = array(collegeID,college_name);
     for(var i = 0; i < objectData.length; i++) {
             $response = objectData[i];
             //test object data
             console.log(response);

             $coll_id = response.collegeID;
             $name_id = response.college_name;
            // JQuery.append(uni_id + name_id);
         }
        // return view("{{url('/ce')}}");
       // return  alert(this.coll_id + " " + this.name_id);
       */
 //});


 //click display button go to college list of selected university
 $('.display').click(function(){
    return view("route{{url('/dl')}}" + collegeID ); 
});
    
   });
  