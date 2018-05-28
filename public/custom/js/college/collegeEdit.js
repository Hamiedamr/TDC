$(document).ready(function(){
    
    	//arabic name unicode validation
	var isArabic = /^([\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd])*$/g;
    $("#college_ar").change(function() {
      $(this).toggleClass("has-error", !isArabic.test(this.value));
  
  });
  $("#college_en").change(function() {
        $(this).toggleClass("has-error", isArabic.test(this.value));
    
    });

  
   //university loading data

/*  var university = $("#university");
  university.click(function(){
           get_university_data();
   });
   function get_university_data()
   {
           var options = '';
          // var url = '{!! route('university.ajax.get') !!}';
   $.ajax({
           //url of university table
           url:'',
           type: 'get',
           dataType: "json",
           response: "callback",
           success: function( response ) {
                   var universityList = response[1];

                   for (var i = 0; i < universityList.length; i++) {
                           $.append('<option value="' + universityList[i] + '">' + universityList.name +'</option>');
                   };
           }
   });
   } */



//maintype - department ajax loading data
/*var rb = $('#radio_button');
var value = $('#radio_button').val();
var department = $('#department');

//load data from main type to department
rb.change(function(){
       get_department_data(this.value);
});

function get_department_data(value){
var options = '';
// var url = '{!! route('department.ajax.get') !!}';
// ajax function
$.ajax({
       //url you want to sent
          url: url ,
          type: 'post',
          //parameters
          data: {radio_button:radio_button} ,
          success: function (data) {
                  var departments = data.departments;
                  $.each(colleges , function(index,value){
                          var option = '<option value="'+value.id+'">'+value.name+'</option>';
                          options += option;
                  });
                  // put options inside html of department select
                  college.html(options);
          } ,
});
} */
$(document).ajaxStart(function() {
  $('select,option').attr('disabled','disabled');
});

$(document).ajaxStop(function() {
  $('select,option').removeAttr('disabled');
});
  
    });
    
    
       