$(document).ready(function(){
    
        
      var isArabic = /^([\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd])*$/g;
    //arabic code unicode validation
      $("#code_ar").change(function() {
          $(this).toggleClass("has-error", !isArabic.test(this.value));
     });
     $("#code_en").change(function() {
        $(this).toggleClass("has-error", isArabic.test(this.value));
   });
    
     //arabic name unicode validation
    $("#name_ar").change(function() {
        $(this).toggleClass("has-error", !isArabic.test(this.value));
        });

        $("#name_en").change(function() {
            $(this).toggleClass("has-error", isArabic.test(this.value));
            });


//program type- main program- department ajax loading data
/*var rb = $('#radio_button');
var radio_value = rb.val();
var mp = $('#main_program');

//load data from program type to main program
university.change(function(){
    get_main_programs_data(this.value);
});
function get_main_programs_data(radio_value){
var options = '';
// var url = '{!! route('mainProgram.ajax.get') !!}';
// ajax function
$.ajax({
     url: url ,
     type: 'post',
     data: {radio_value:radio_value} ,
     success: function (data) {
         var programs = data.programs;
         $.each(programs , function(index,value){
             var option = '<option value="'+value.id+'">'+value.name+'</option>';
             options += option;
         });
         // put options inside html of city select
         mp.html(options);
     } ,
});
}*/


  //target category loading data from jobstatus table
/*  var ta = $('#target');
  ta.click(function(){
      get_target_data();
  });
  function get_target_data()
  {
      var options = '';
     // var url = '{!! route('jobstatus.ajax.get') !!}';
  $.ajax({
      //url of job status table
      url:'',
      type: 'get',
      dataType: "json",
      response: "callback",
      success: function( response ) {
          var targetList = response[1];

          for (var i = 0; i < targetList.length; i++) {
              $.append('<option value="' + targetList[i] + '">' + targetList.name +'</option>');
          };
      }
  });
  } */

//need to moduify for multi value options
/*var targetValues = new Array();
targetValues = mp.val();
$.ajax({
    url: url ,
    type: 'post',
    data:targetValues ,
    success: function (data) {
       //data is sent
    } 
});
*/




$(".Books_Illustrations").val(targetValues);


  //unallowed departments loading data from maintype table
/*  var unall = $('#unallowed');
  unall.click(function(){
      get_unallowed_data();
  });
  function get_unallowed_data()
  {
      var options = '';
     // var url = '{!! route('maintype.ajax.get') !!}';
  $.ajax({
      //url of main type table
      url:'',
      type: 'get',
      dataType: "json",
      response: "callback",
      success: function( response ) {
          var unallowedList = response[1];

          for (var i = 0; i < unallowedList.length; i++) {
              $.append('<option value="' + unallowedList[i] + '">' + unallowedList.name +'</option>');
          };
      }
  });
  } */
//need to moduify for multi value options
/*var targetValues = new Array();
targetValues = mp.val();
$.ajax({
    url: url ,
    type: 'post',
    data:targetValues ,
    success: function (data) {
       //data is sent
    } 
});
*/
        
$(document).ajaxStart(function() {
    $('select,option').attr('disabled','disabled');
});

$(document).ajaxStop(function() {
    $('select,option').removeAttr('disabled');
});


    });
    
    