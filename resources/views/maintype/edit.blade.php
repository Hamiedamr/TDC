@extends('layout.index')
@section('title','Edit Main Program')
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/mainProgram/mainProgramEdit.css')}}">
 @endpush

      
  @push('scripts')
  <script src="{{ asset('custom/js/mainProgram/mainProgramEdit.js')}}"></script>
  @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal" name="main_edit_form" action="{{ route('course.category.update', $type['id']) }}" method="post">
    {{csrf_field()}}
	{{ method_field('patch') }}

  <div class="container form">
        <!--Heading-->
     <div class="heading">
        <u><h2>Edit Main Program</h2></u>
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
          <input type="text" value="{{ $type['nameA'] }}" class="form-control"required="required" minlength="3" maxlength="255" name="nameA" id="mainprogram_ar" placeholder="Arabic Name">
          <span class="form_hint">Min length = 3 and max length= 255</span>
          <span class="star">*</span>
          </div>
      </div>

      

      <!--english name-->
     <div class="form-group">
          <label class="lbtext col-md-4 control-label">English Name</label>
          <div class="col-md-6">
          <input type="text" value="{{ $type['nameE'] }}" class="form-control" required="required" minlength="3" maxlength="255" name="nameE" id="mainprogram_en" placeholder="English Name">
             <span class="form_hint">Min length = 3 and max length= 255</span>
          <span class="star">*</span>
             
          </div>
      </div>
        
  
   <!--edit and cancel-->
   <div class="form-group">
      <div class="col-md-4 col-sm-push-5 text-center">
          <button type="submit" class="btn btn-success">{{trans('data.save')}}</button>
          <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
      </div>
 </div>

 
</div>
  </form>

  @endsection


 

