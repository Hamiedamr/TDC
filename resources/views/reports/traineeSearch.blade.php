@extends('layout.index')
@section('title')
{{trans('data.traineesdatainsystem')}}
@append



@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/reports/traineeSearch.css')}}">
@endpush


    @section('content')
<!--Form UI-->
<form class="form-horizontal" name="trainee_search_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">

    <!--Heading-->
    <div class="heading">
        <u><h2>{{trans('data.traineesdatainsystem')}}</h2><u>
    </div>
      
 <!--search input-->
<div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.search')}}</label>
        <div class="col-md-4">
        <input type="search" class="form-control" required="required" maxlenght="255" name="" id="searchid">
        </div>
        <div class="col-md-2">
                <button><span class="glyphicon glyphicon-search" style="margin:5px;color:red;font-weight:bold;"></span>{{trans('data.search')}}</button>
        </div>
    </div>


<table id="myTable" class="col-md-6 col-sm-4 table-responsive">
   
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>{{trans('data.code')}}</th>
          <th>{{trans('data.arname')}}</th>
          <th>{{trans('data.enname')}}</th>
          <th>{{trans('data.email')}}</th>
          <th>{{trans('data.phone')}}</th>
          <th>{{trans('data.nationalid')}}</th>
          <th>{{trans('data.university')}}</th>
          <th>{{trans('data.college')}}</th>
          <th>{{trans('data.department')}}</th>
          <th>{{trans('data.degree')}}</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
       <tr>
           <td id='universityID'>746</td>
          <td id='nameID'>اسم المستخدم</td>
          <td id='addressID'>User name</td>
          <td id='addressID'>user@gmail.com</td>
          <td id='addressID'>0109339383</td>
          <td id='addressID'>373677737373</td>
          <td id='addressID'>ASU</td>
          <td id='addressID'>Engineering</td>
          <td id='addressID'>Computer</td>
          <td id='addressID'>Master</td>
        </tr>
           
   </tbody>
 </table>
 
       <!--save and cancel-->
    <div class="form-group">
            <div class="col-md-4 col-md-push-4 text-center">
                <button type="submit" class="btn btn-primary">{{trans('data.cancel')}}</button>
            </div>
        </div>
    </div>

    </form>
 @endsection