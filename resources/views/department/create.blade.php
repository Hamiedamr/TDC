@extends('layout.index')
@section('title')
{{trans('data.addDepartment')}}
@append
        
@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/collegeDepartment/collegeDepartmentAdd.css')}}">
 @endpush

 @push('scripts')
 <script src="{{ asset('custom/js/collegeDepartment/collegeDepartmentAdd.js')}}"></script>
  @endpush


 @section('content') 

<input id="college_ajax" type="hidden" value="{{ route('university.college_ajax') }}">

<!--Form UI-->
<form class="form-horizontal"name="department_add_form" action="{{ route('department.store') }}" method="POST">

    {{csrf_field()}}
    <div class="container form">

        <!--Heading-->
     <div class="heading">
     <u><h2>{{trans('data.addDepartment')}}</h2></u>
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
   <input type="text" class="form-control"required="required" id="dep_ar" name="nameA" minlength="3" maxlength="191"  placeholder="{{trans('data.arnameholder')}}">
   <span class="form_hint">{{trans('data.minmax')}}</span>
   <span class="star">*</span>
   </div>
</div>



<!--english name-->
<div class="form-group">
   <label class="lbtext col-md-4 control-label">{{trans('data.enname')}}</label>
   <div class="col-md-6">
   <input type="text" class="form-control" required="required" id="dep_en" name="nameE"minlength="3" maxlength="191"  placeholder="{{trans('data.ennameholder')}}">
   <span class="form_hint">{{trans('data.minmax')}}</span>
   <span class="star">*</span>
   </div>
</div>
 
<!--university name-->
<div class="form-group dropdown">
           <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.university')}}</label>
           <div class="col-md-6 col-md-push-2">
           <select id="university" name="university_id" required="required">
              <option value="" disabled="disabled" selected>----- {{trans('data.selectUniversity')}} ------</option>
				@foreach ($universities as $university)
                    <option value="{{ $university['id'] }}">
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                        {{ $university['nameA'] }}
                     @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        {{ $university['nameE'] }}
                     @endif</option>
				@endforeach
             </select>
             <span class="form_hint">{{trans('data.selectlist')}}</span>
             <span class="staruni">*</span>
           </div>
 </div>

 <!--college category-->
<div class="form-group dropdown">
           <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.college')}}</label>
           <div class="col-md-6 col-md-push-2">
           <select id="college" name="college_id" required="required"> 
              <option value="" disabled="disabled" selected>----- {{trans('data.selectCollege')}}------</option>
                    @foreach($colleges as $college)
                        <option value="{{ $college->id }}">
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $college->nameA }}
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $college->nameE }}
                        @endif</option>
                    @endforeach
           </select>
           <span class="form_hint">{{trans('data.selectlist')}}</span>
           <span class="starcoll">*</span>
          </div>
 </div>

<!--Main Type-->
<div class="form-group dropdown">
           <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.mtype')}}</label>
           <div class="col-md-6 col-md-push-2">
           <select id="mainType" name="main_type_id" required="required">
              <option value="" disabled="disabled" selected>----- {{trans('data.smtype')}} ------</option>
				@foreach ($types as $type)
                    <option value="{{ $type['id'] }}">
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                        {{ $type['nameA'] }}
                     @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        {{ $type['nameE'] }}
                     @endif
                    </option>
				@endforeach
             </select>
             <span class="form_hint">{{trans('data.selectlist')}}</span>
             <span class="stardep">*</span>
           </div>
 </div>
 
  <!--save and cancel-->
  <div class="form-group">
    <div class="col-md-4 col-sm-push-5 text-center">
        <button type="submit" class="btn btn-success" id="save">{{trans('data.save')}}</button>
        <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
    </div>
</div>

</div>
    
   

</form>



@endsection