$(document).ready(function(){
    /*    //----------------------------------AJAX code -------------------------//
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
  //training list from start and end dates ajax loading data
   var trainingid = $('#trainingid');
   var startid = $('#startid');
   var endid = $('#endid');

   trainingid.change(function(){
           var options = '';
   var url = "training_ajax";
   $.ajax({
        url: url ,
        type: 'PUT',
        dataType:'json',
        data: {startid:this.value, endid:this.value} ,
        success:
         function (data) {
           console.log(data);
            var trainings = data;
            $.each(trainings , function(index,value){
                var option = '<option value="'+value.id+'">'+value.nameA+' '+value.nameE+'</option>';
                options += option;
            });
            
            trainingid.html(options);
        }
         ,
   });
  } ); 

$(document).ajaxStart(function() {
   $('select,option').attr('disabled','disabled');
});

$(document).ajaxStop(function() {
   $('select,option').removeAttr('disabled');
}); */





   });
 



