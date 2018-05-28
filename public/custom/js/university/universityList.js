 $(document).ready(function(){

  //initialize events 
  var universityID = $("#universityID").val();
  var nameID = $("#nameID").val();
  var addressID = $("#addressID").val();


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
   // console.log(universityID);
     //$(this).css("background-color", "yellow");   
     /*$objectData = array(universityID => array(nameID,addressID));
     for(var i = 0; i < objectData.length; i++) {
             $response = objectData[i];
             //test object data
             console.log(response);

             $uni_id = response.universityID;
             $name_id = response.nameID;
             $address_id = response.addressID;
            // JQuery.append(uni_id + name_id + address_id);
         }
        // return view("{{url('/ue')}}");
       // return  alert(this.uni_id + " " + this.name_id + " " + this.address_id);
       */
 //});


 //click display button go to college list of selected university
 $('.display').click(function(){
    return view("route{{url('/cl')}}" + universityID ); 
});
    
 });
