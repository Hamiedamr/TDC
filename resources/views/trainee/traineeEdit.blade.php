@extends('layout.index')
@section('title','Edit Trainee')
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/trainee/traineeEdit.css')}}">
  @endpush


  @push('scripts')
    <script  src="{{ asset('custom/js/trainee/traineeEdit.js')}}"></script>
  @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal" name="trainee_edit_form" action="#" method="POST">
        {{csrf_field()}}
    <div class="container form">

        <!--Heading-->
         <div class="heading">
            <u><h2>Edit Trainee</h2></u>
        </div>

          <!--hint form-->
      <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-6">
                  <span class="hintstar">*</span>
                  <span class="hint">Required Fields</span>
            </div>
          </div>

                
      
        
            <!--arabic name-->
        <div class="form-group">
            <label class="lbtext col-md-4 control-label">Arabic Name</label>
            <div class="col-md-6">
            <input type="text" class="form-control"required="required" minlength="3" maxlength="191" name="nameA" id="trainee_ar" placeholder="Arabic Name">
            <span class="star">*</span>
            </div>
        </div>


        <!--english name-->
        <div class="form-group">
            <label class="lbtext col-md-4 control-label">English Name</label>
            <div class="col-md-6">
            <input type="text" class="form-control" required="required" minlength="3" maxlength="191" name="nameE" id="trainee_ar" placeholder="English Name">
            <span class="star">*</span>
           
            </div>
        </div>
            
   
    <!--university name-->
    <div class="form-group dropdown">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >University</label>
            <div class="col-md-6 col-md-push-2">
            <select id="university" name="" required="required">
                <option value="" disabled="disabled"  selected>----- Select University ------</option>
                </select>
                <span class="staruni">*</span>
            </div>
        </div>
    <!--college name-->
    <div class="form-group dropdown">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >College</label>
            <div class="col-md-6 col-md-push-2">
            <select id="college" name="" required="required">
                    <option value="" disabled="disabled"  selected>----- Select College ------</option>
                </select>
                <span class="starcoll">*</span>
            </div>
    </div>
    <!--Department name-->
    <div class="form-group dropdown">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >Department</label>
            <div class="col-md-6 col-md-push-2">
            <select id="department" name="" required="required">
                    <option value="" disabled="disabled"  selected>----- Select Department ------</option>
                </select>
                <span class="stardep">*</span>
            </div>
    </div>


    <!--address-->
    <div class="form-group">
            <label class="lbtext col-md-4 control-label">Address</label>
            <div class="col-md-6">
            <input type="text" class="form-control" name="address" id="trainee_address" placeholder="Optional Field">
            
        </div>
        </div>

        <!--Phone no.-->
        <div class="form-group">
                <label class="lbtext col-md-4 control-label">Phone No.</label>
                <div class="col-md-6">
                <input type="number" class="form-control" required="required" name="phone" maxlength="14" id="trainee_phone" placeholder="Phone No." >
              </div>
              <span class="starphone">*</span>
            </div>
        
    <!--nationality-->
    <div class="form-group dropdown">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >Nationality</label>
            <div class="col-md-6 col-md-push-2">
            <select id="nationality" name="nationality" required="required">
                <option value="" disabled="disabled" selected>----- Select Nationality ------</option>
                </select>
                <span class="starnat">*</span>
            </div>
    </div>

     <!--email-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">Email</label>
        <div class="col-md-6">
        <input type="email" id="contact_email" class="form-control" required="required" name="email" id="trainee_email" placeholder="Email Address In The Format: example@eg.com">
        <span class="star">*</span>
    </div>
    </div>


    <!--career status-->
    <div class="form-group dropdown">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >Career Status</label>
            <div class="col-md-6 col-md-push-2">
            <select id="cs" name="" required="required" >
                <option value="" disabled="disabled" selected>-----Select Career Status ------</option>
                </select>
                <span class="starcareer">*</span>
            </div>
    </div>

        <!--gender-->
    <div class="form-group">
            <label class="lbtext col-md-2 col-md-push-2 control-label check">Gender</label>
        <div class="form-group col-md-8 col-md-push-2" style="margin-left:20px" >
            <label><input id="radio_button1" type="radio" name="" required>Male</label>
            <label><input id="radio_button2"  type="radio" name="">Female</label>
              <span class="stargender">*</span>
        </div>      
        </div>

         <!--license-->
    <div class="form-group">
         <label class="lbtext col-md-2 col-md-push-2 control-label check">License</label>
         <div class="licenceClass col-md-8 col-md-push-2" >
            <label>
                <input  id="license_id" type="checkbox" name="" value="" required>
                اقر بموافقتي علي عدم رد قيمة البرنامج التدريبي و دفع غرامة .....
            </label>
            <span class="alertstar">*</span>
        </div>     
        </div>

         <!--note-->
    <div class="form-group">
            <label class="lbtext col-md-2 col-md-push-2 control-label check">Note</label>
        <div class="noteClass col-md-8 col-md-push-2">
            <label id="note_id">
                <input type="checkbox" name="" value="" required>
                برجاء كتابة كافة البيانات بطريقة صحيحة مع مراعاة ملء كل خانة بما هو مطلوب فيها 
                بدقة و مراجعة الإسم باللغة العربية و اللغة الانجليزية كما هو موجود في بطاقة الرقم القومي 
                و جواز السفر.
            </label>
            <span class="alertstar">*</span>
        </div>     
        </div>

         <!--rules-->
    <div class="form-group">
            <label class="lbtext col-md-2 col-md-push-2 control-label check">Rules</label>
        <div class="rulesClass col-md-8 col-md-push-2">
            <label id="rules_id">
                <input type="checkbox"  name="">
                ضرورة جميع ايام التدريب من الساعة ....
            </label>
            <span class="alertstar">*</span>
        </div>       
        </div>
    
  

     <!--save and cancel-->
   <div class="form-group">
        <div class="col-md-4 col-sm-push-5 text-center">
            <button type="submit" class="btn btn-success" id="save">Edit</button>
            <button type="submit" class="btn btn-danger">Cancel</button>
        </div>
    </div>
     
 </div>

  </form>

  @endsection


 

