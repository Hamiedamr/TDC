@extends('layout.index')
@section('title')
{{trans('data.listprivilage')}}
@append


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/privilage/listPrivilage.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/privilage/listPrivilage.js')}}"></script>
@endpush
   

    @section('content')
<!--Form UI-->
<form class="form-horizontal" name="privilages_list_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">

    <!--Heading-->
    <div class="heading">
        <u><h2>{{trans('data.listprivilage')}}</h2><u>
    </div>

      
<table id="myTable" class="col-md-6 col-sm-4 table-responsive">
   
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>#</th>
          <th>{{trans('data.name')}}</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
      <tr>
          <td id="privilageID">1</td>
         <td id='nameID'>Guest</td>
       </tr>
			 
   </tbody>
 </table>

       <!--add and cancel-->
      <div class="form-group">
        <div class="col-md-4 col-sm-push-5">
          <button type="submit" class="btn btn-success">{{trans('data.add')}}</button>
          <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
      </div>
    </div>

    </form>
 @endsection