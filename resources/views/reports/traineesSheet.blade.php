@extends('layout.index')
@section('title')
{{trans('data.traineessheet')}}
@append


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/reports/traineesSheet.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/reports/traineesSheet.js')}}"></script>
@endpush
   

    @section('content')
<!--Form UI-->
<form class="form-horizontal" name="trainees_sheet_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">

    <!--Heading-->
    <div class="heading">
        <u><h2>{{trans('data.traineessheet')}}</h2><u>
    </div>

      

 <!--start date-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.startdate')}}</label>
        <div class="col-md-4">
        <input type="date" class="form-control" required="required" maxlenght="14" name="startDate" id="startid">
        <span class="form_hint">{{trans('data.max14')}}</span>
        <span class="stardate">*</span>
        </div>
    </div>

      <!--end date-->
<div class="form-group">
      <label class="lbtext col-md-4 control-label">{{trans('data.enddate')}}</label>
      <div class="col-md-4">
      <input type="date" class="form-control" required="required" maxlenght="14" name="endDate" id="endid" >
      <span class="form_hint">{{trans('data.max14')}}</span>
      <span class="stardate">*</span>
      </div>
  </div>


   <!--Program-->
   <div class="form-group dropdown">
        <label class="lbtext col-md-2 col-md-push-2 control-label">{{trans('data.training')}}</label>
        <div class="col-md-4 col-md-push-2">
        <select id="trainingid" name="" required="required">
           <option value="" disabled="disabled" selected>---------- {{trans('data.straining')}} --------</option>
          </select>
          <span class="form_hint">{{trans('data.selectlist')}}</span>
         <span class="starprogram">*</span>
        </div>
</div>




 <!--Heading-->
 <div class="heading">
        <u><h2>{{trans('data.traineeslist')}}</h2><u>
    </div> 


<table id="myTable" class="col-md-6 col-sm-4 table-responsive">
   
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>#</th>
          <th>{{trans('data.name')}}</th>
          <th>{{trans('data.degree')}}</th>
          <th>{{trans('data.department')}}</th>
          <th>{{trans('data.college')}}</th>
          <th>{{trans('data.university')}}</th>
          <th>{{trans('data.phone')}}</th>
          <th>{{trans('data.id')}}</th>
          <th>{{trans('data.email')}}</th>
          <th>{{trans('data.note')}}</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
       <tr>
          <td id="universityID">1</td>
          <td id="nameID">Mohame Ali</td>
          <td id="addressID">Bachelor</td>
          <td id="addressID">Electrical</td>
          <td id="addressID">Engineering</td>
          <td id="addressID">ASU</td>
          <td id="addressID">0102837383</td>
          <td id="addressID">45536357464676</td>
          <td id="addressID">mohamed@gmail.com</td>
          <td><textarea type="text" class="form-control" id="" name="" required="required"  maxlength="300"></textarea></td>
      </tr>
            
   </tbody>
 </table>
 
       <!--save and cancel-->
    <div class="form-group">
            <div class="col-md-4 col-md-push-4 text-center">
                <button type="submit" id="pdf_btn" class="btn btn-primary">{{trans('data.csv')}}</button>
                <button type="submit" id="pdf_btn" class="btn btn-primary">{{trans('data.pdf')}}</button>
                <button type="submit" class="btn btn-primary">{{trans('data.cancel')}}</button>
            </div>
        </div>
    </div>

    </form>
 @endsection