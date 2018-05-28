@extends('layout.index')
@section('title')
{{trans('data.editHall')}}
@append
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/halls/hallsEdit.css')}}">
  @endpush


   @section('content') 
   <!--Form UI-->
 <form class="form-horizontal" name="halls_edit_form" action="{{ route('hall.update', $hall['id']) }}" method="POST">
    {{csrf_field()}}
	{{ method_field('patch') }}

  <div class="container form">

        <!--Heading-->
     <div class="heading">
        <u><h2>{{trans('data.editHall')}}</h2></u>
        </div>


        <!--hint form-->
      <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-6">
                <span class="hintstar">*</span>
                <span class="hint">{{trans('data.rf')}}</span>
          </div>
        </div>


        <!--name-->
      <div class="form-group">
          <label class="lbtext col-md-4 control-label">{{trans('data.name')}}</label>
          <div class="col-md-6">
          <input type="text" value="{{ $hall['name'] }}" class="form-control" id="halls_name" name="name" required="required" minlength="3" maxlength="255"  placeholder="{{trans('data.name')}}">
          <span class="form_hint">{{trans('data.minmax')}}</span>
          <span class="star">*</span>
          </div>
      </div>

      

      <!--capacity-->
     <div class="form-group">
          <label class="lbtext col-md-4 control-label">{{trans('data.capacity')}}</label>
          <div class="col-md-6">
          <input type="number" value="{{ $hall['capacity'] }}" class="form-control" required="required"  name="capacity" id="halls_capacity"  min="1" placeholder="{{trans('data.capacity')}}">
           <span class="form_hint">{{trans('data.min1')}}</span>
          <span class="star">*</span>
        </div>
      </div>
        
  
   <!--description-->
 <div class="form-group">
          <label class="lbtext col-md-4 control-label">{{trans('data.description')}}</label>
          <div class="col-md-6">
          <textarea rows="10" cols="10" type="text" class="form-control" required="required" minlength="10" maxlength="65535" name="description" id="halls_description" placeholder="{{trans('data.description')}}">{{ $hall['description'] }}</textarea>
          <span class="form_hint">{{trans('data.desc')}}</span>
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


 

