@extends('layout.index')
@section('title')
{{trans('data.inoutsheet')}}
@append



@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/reports/inoutSheet.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/reports/inoutSheet.js')}}"></script>
@endpush
   

    @section('content')
<!--Form UI-->
<form class="form-horizontal" name="inout_sheet_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">

    <!--Heading-->
    <div class="heading">
        <u><h2>{{trans('data.inoutsheet')}}</h2><u>
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
      <input type="date" class="form-control" required="required" maxlenght="14" name="endDate" id="addressid" >
      <span class="form_hint">{{trans('data.max14')}}</span>
      <span class="stardate">*</span>
      </div>
  </div>


   <!--Program-->
   <div class="form-group dropdown">
        <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.training')}}</label>
        <div class="col-md-4 col-md-push-2">
        <select id="trainer" name="" required="required">
           <option value="" disabled="disabled" selected>---------- {{trans('data.straining')}}--------</option>
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
          <th>{{trans('data.firstday')}}</th>
          <th>{{trans('data.secondday')}}</th>
          <th>{{trans('data.certificatesignature')}}</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
        <tr>
          <td id="universityID'>1</td>
          <td id="nameID">Mohame Ali</td>
          <td id="firstID">3:44/7:20</td>
          <td id="secondID">1:30/4:01</td>
          <td id="certificateID">done</td>
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