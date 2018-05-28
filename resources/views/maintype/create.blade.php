@extends('layout.index')
@section('title','Add Main Program')
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/mainProgram/mainProgramAdd.css')}}">
 @endpush

      
  @push('scripts')
  <script src="{{ asset('custom/js/mainProgram/mainProgramAdd.js')}}"></script>
  @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal" name="main_add_form" action="{{ route('course.category.store') }}" method="POST">
    {{csrf_field()}}
  <div class="container form">
        <!--Heading-->
     <div class="heading">
        <u><h2>Add Main Program</h2></u>
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
          <input type="text" class="form-control"required="required" minlength="3" maxlength="255" name="nameA" id="mainprogram_ar" placeholder="Arabic Name">
          <span class="form_hint">Min length = 3 and max length= 255</span>
          <span class="star">*</span>
          </div>
      </div>

      

      <!--english name-->
     <div class="form-group">
          <label class="lbtext col-md-4 control-label">English Name</label>
          <div class="col-md-6">
          <input type="text" class="form-control" required="required" minlength="3" maxlength="255" name="nameE" id="mainprogram_en" placeholder="English Name">
          <span class="form_hint">Min length = 3 and max length= 255</span>
          <span class="star">*</span>
        
          </div>
      </div>
        
  
   <!--save and cancel-->
   <div class="form-group">
      <div class="col-md-4 col-sm-push-5 text-center">
          <button type="submit" class="btn btn-success">Save</button>
          <button type="submit" class="btn btn-danger">Cancel</button>
      </div>
 </div>

 
</div>
  </form>

  @endsection


 

