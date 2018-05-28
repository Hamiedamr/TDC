@extends('layout.index')
@section('title','Update Trainee Academic Degree')
      
  @push('styles')
 
  <link rel="stylesheet" href="{{ asset('custom/css/trainee/traineeEdit.css')}}">
  @endpush

      
  @push('scripts')
  <script src="{{ asset('custom/js/trainee/traineeEdit.js')}}"></script>
  @endpush


   @section('content') 
   <!--Form UI-->
 <form class="form-horizontal" action="" method="post">
    {{csrf_field()}}
  <div class="container form">
        <!--Heading-->
     <div class="heading">
        <h2>Update Trainee Academic Degree</h2>
        </div>

        <!--trainer's name-->
      <div class="form-group">
          <label class="col-md-4 control-label">Trainer's Name</label>
          <div class="col-md-6">
          <input type="text" class="form-control"required="required" id="trainee_edit_ar" name="trainee_edit_ar" required="required" minlength="3" maxlength="10">
          <span class="star">*</span>
          <span class="hint">enter arabic name: min-length=3, max-length=10.</span>
          </div>
      </div>

      

      <!--current academic degree name-->
     <div class="form-group">
          <label class="col-md-4 control-label">Current Academic Degree</label>
          <div class="col-md-6">
          <input type="text" class="form-control" required="required" id="trainee_degree" name="trainee_degree" required="required" minlength="3" maxlength="10">
          <span class="star">*</span>
          <span class="hint">edit academic degree name: min-length=3, max-length=10.</span>
        </div>
      </div>
        
      <!--new academic degree name-->
<div class="form-group">
  
     <label class="col-md-3 col-md-push-1 control-label" >New Academic Degree</label>
     <div class="col-md-2 col-md-push-1">
     <select id="ad" name="ad" required="required">
        <option value="" disabled="disabled" selected>Please select degree</option>
       </select>
       <span class="hint">* edit from loaded academic degree.</span>
     </div>
</div>
  
  <!--attach file-->
 <div id="form1" runat="server" style="margin-bottom:30px;">
    <label class="col-md-2 col-md-push-2 control-label" >Attach File</label>
  <div>
    <input  id="fileinput" class="col-md-3 col-md-push-2" type='file' style="margin-left:20px;" />
</div>
    <span class="optional">optional</span>
</div>

     
    <!--update and cancel-->
    <div class="form-group">
        <div class="col-md-8 col-sm-push-3 text-center">
            <button type="submit" class="btn btn-success">{{trans('data.save')}}</button>
            <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
 </div>
</div>
  </form>

  @endsection


 

