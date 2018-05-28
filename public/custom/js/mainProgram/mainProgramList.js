$(document).ready(function(){
  
     //initialize events 
     var programID = $("#programID").val();
     var nameID = $("#program_name").val();

//this part is as a test for university name highlight.
  $("#contentBody tr #program_name").mouseover(function(e) {
    $(this).css("cursor", "pointer");
    });

    $("#contentBody tr:has(#program_name)").click(function(e) {
    $("#contentBody td").removeClass("highlight");
    var clickedCell= $(e.target).closest("#program_name");
    clickedCell.addClass("highlight");
    });

    

 //this part will be modified

//click on name to go to edit page of selected name
 // $("#program_name").click(function() {
   // console.log(programID);
     //$(this).css("background-color", "yellow");   
     /*$objectData =array(programID,nameID));
     for(var i = 0; i < objectData.length; i++) {
             $response = objectData[i];
             //test object data
             console.log(response);

             $main_id = response.programID;
             $name_id = response.nameID;
           
            // JQuery.append(main_id + name_id);
         }
        // return view("{{url('/mpe')}}");
       // return  alert(this.main_id + " " + this.name_id);
       */
 //});


 //click display button go to courses list of selected university
 $('.display').click(function(){
    return view("route{{url('/coursel')}}" + programID ); 
});
    
    
 });
    