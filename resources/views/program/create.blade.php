@extends('layout.index')
@section('title')
{{trans('data.addProgram')}}
@append
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/mainProgram/mainProgramAdd.css')}}">
 @endpush

      
  @push('scripts')
  <script src="{{ asset('custom/js/mainProgram/mainProgramAdd.js')}}"></script>
  @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal" name="main_add_form" action=" {{ route('program.store') }}" method="POST">
    {{csrf_field()}}
  <div class="container form">
        <!--Heading-->
     <div class="heading">
        <u><h2>{{trans('data.addProgram')}}</h2></u>
        </div>

            
    <!--hint form-->
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
              <span class="hintstar">*</span>
              <span class="hint">{{trans('data.rf')}}</span>
        </div>
      </div>
              

        <!--arabic name-->
      <div class="form-group">
          <label class="lbtext col-md-4 control-label">{{trans('data.arname')}}</label>
          <div class="col-md-6">
          <input type="text" class="form-control"required="required" minlength="3" maxlength="255" name="nameA" id="mainprogram_ar" placeholder="{{trans('data.arnameholder')}}">
          <span class="form_hint">{{trans('data.minmax')}}</span>
          <span class="star">*</span>
          </div>
      </div>

      

      <!--english name-->
     <div class="form-group">
          <label class="lbtext col-md-4 control-label">{{trans('data.enname')}}</label>
          <div class="col-md-6">
          <input type="text" class="form-control" required="required" minlength="3" maxlength="255" name="nameE" id="mainprogram_en" placeholder="{{trans('data.ennameholder')}}">
          <span class="form_hint">{{trans('data.min1')}}</span>
          <span class="star">*</span>
        
          </div>
      </div>
        
  
   <!--save and cancel-->
   <div class="form-group">
      <div class="col-md-4 col-sm-push-5 text-center">
          <button type="submit" class="btn btn-success" href="#">{{trans('data.save')}}</button>
          <button type="submit" class="btn btn-danger" href="#">{{trans('data.cancel')}}</button>
      </div>
 </div>

 
</div>
  </form>

  @endsection


 

