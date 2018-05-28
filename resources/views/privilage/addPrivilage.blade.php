@extends('layout.index')
@section('title')
{{trans('data.addprivilage')}}
@append
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/privilage/addPrivilage.css')}}">
  @endpush

   
  @push('scripts')
  <script src="{{ asset('custom/js/privilage/addPrivilage.js')}}"></script>
   @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal"  name="privilages_add_form" action="#" method="post">
  {{csrf_field()}}
  <div class="container form">
        <!--Heading-->
     <div class="heading">
        <u><h2>{{trans('data.addprivilage')}}</h2></u>
        </div>

        <!--hint form-->
      <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-6">
                <span class="hintstar">*</span>
                <span class="hint">{{trans('data.rf')}}</span>
          </div>
        </div>

      <!--title-->
      <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.name')}}</label>
        <div class="col-md-6">
          <input type="text" class="form-control" id=""name="" required="required" minlength="3"  placeholder="{{trans('data.name')}}">
          <span class="form_hint">{{trans('data.minmax')}}</span>
          <span class="star">*</span>
        </div>
  </div>

  
      <!--details-->
      <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.details')}}</label>
        <div class="col-md-6">
          <textarea type="text" class="form-control" id="" name=""  placeholder="{{trans('data.details')}}"></textarea>
        </div>
  </div>

    <!--save and cancel-->
    <div class="form-group">
      <div class="col-md-4 col-md-push-5">
        <button type="submit" class="btn btn-success">{{trans('data.save')}}</button>
        <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
      </div>
    </div>
     
  </div>

  </form>

  @endsection


 

