$(document).ready(function(){


      //-----------------------arabic name unicode validation---------------//
  var isArabic = /^([\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd])*$/g;
    $("#trainee_ar").change(function() {
      $(this).toggleClass("has-error", !isArabic.test(this.value));
  });
  $("#trainee_en").change(function() {
    $(this).toggleClass("has-error", isArabic.test(this.value));
});

       //----------------validation of email format example@eng.asu.edu.eg----------------//
       var isemail =new RegExp("[A-Za-z0-9_.+-]+@+(eng)+\.(asu)+\.(edu)+\.(eg)","g");
       
         $("#contact_email").change(function() {
             $('.form_hintemail').css('display','block');
             $('.form_hintemail').css('background-color','red');
             $('.form_hintemail').css('color','white'); 
             
          }),
          $('#contact_email').blur(function(){
             $(this).toggleClass("has-right", isemail.test(this.value));
             $('.form_hintemail').css('display','block');
             $('.form_hintemail').css('background-color','green');
             $('.form_hintemail').css('color','white'); 
          });
 
     //----------------------------------AJAX code -------------------------//
 $.ajaxSetup({

     headers: {

         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }

 });
 
//university- college- department ajax loading data
 var university = $('#university');
 //test
 $('#test').click(function(){
     alert(university.val());
 });
 
 var college = $('#college');
 var department = $('#department');

 
 //load data from university to college
 university.change(function(){
         var options = '';
 var url = "college_ajax";
 $.ajax({
      url: url ,
      type: 'PUT',
      dataType:'json',
      data: {university:this.value} ,
      success:
       function (data) {
         console.log(data);
          var colleges = data;
          $.each(colleges , function(index,value){
              var option = '<option value="'+value.id+'">'+value.nameA+' '+value.nameE+'</option>';
              options += option;
             // console.log(option);
          });
          
          college.html(options);
      }
       ,
 });
} ); 



//load data from college to department

college.change(function(){
  var options = '';
 var url = 'department_ajax';
$.ajax({
  url: url ,
  type: 'PUT',
  dataType:'json',
  data: {id:this.value} ,
  success: function (data) {
      var departments = data;
      $.each(departments , function(index,value){
          var option = '<option value="'+value.id+'">'+value.nameA+'</option>';
          options += option;
      });
      department.html(options);
  } ,
 });
});



$(document).ajaxStart(function() {
 $('select,option').attr('disabled','disabled');
});

$(document).ajaxStop(function() {
 $('select,option').removeAttr('disabled');
});






    
 
});
   
    
    