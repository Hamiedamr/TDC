@extends('layout.index')
@section('title')
{{trans('data.traineeupdatedegree')}}
@append
      
   @push('styles')
 
  <link rel="stylesheet" href="{{ asset('custom/css/trainee/traineeEditDegree.css')}}">
  @endpush

      
  @push('scripts')
  <script src="{{ asset('custom/js/trainee/traineeEditDegree.js')}}"></script>
  @endpush


   @section('content') 
   <!--Form UI-->
 <form class="form-horizontal" action="../../trainee/updates/{{$trainee->id}}" method="post">
    {{csrf_field()}}
     {{ method_field('PATCH') }}
  <div class="container form">
        <!--Heading-->
     <div class="heading">
        <u><h2>{{trans('data.traineeupdatedegree')}}</h2></u>
        </div>
		
		 <!--hint form-->
      <div class="form-group">
        <label class="lbtext col-md-4 control-label"></label>
        <div class="col-md-6">
              <span class="hintstar">*</span>
              <span class="hint">{{trans('data.rf')}}</span>
        </div>
      </div>
	  
	  
  <!--trainer's name-->
      <div class="form-group">
          <label class="lbtext col-md-4 control-label">{{trans('data.name')}}</label>
          <div class="col-md-6">
          <label>{{$trainee->nameE}}</label>
          </div>
      </div>

     
        
		 <!--current academic degree name-->
     <div class="form-group">
          <label class="lbtext col-md-4 control-label">Current Academic Degree</label>
          <div class="col-md-6">
          <label>{{$statuses1->nameE}} - {{$statuses1->nameA}}</label>
        </div>
      </div>
	  
  
        <!--new academic degree name-->
<div class="form-group dropdown">
     <label class="lbtext col-md-3 col-md-push-1 control-label" >New Academic Degree</label>
     <div class="col-md-6 col-md-push-1">
     <select id="ad" name="job_status_id" required="required">
        <option value="" disabled="disabled" selected>-------- Select Degree --------</option>
		@foreach($statuses as $status)
        <option value="{{$status->id}}" @if($trainee->job_status_id == $status->id) selected @endif>{{$status->nameA}} {{$status->nameE}}</option>
        @endforeach
       </select>
       <span class="stardegree">*</span>
     </div>
</div>

  
     
	  <!--attach file-->
 <div id="form1" runat="server" style="margin-bottom:50px;">
    <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.attachfile')}}</label>
  <div>
    <input  id="fileinput" class="col-md-3 col-md-push-2" name="file" type='file' style="margin-left:20px;" />
</div>
</div>

    <!--update and cancel-->
    <div class="form-group">
        <div class="col-md-4 col-sm-push-5 text-center">
            <button type="submit" class="btn btn-success">{{trans('data.save')}}</button>
            <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
 </div>
</div>
  </form>

  @endsection


 

