@extends('layout.index')
@section('title')
{{trans('data.editCollege')}}
@append
        

@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/college/collegeEdit.css')}}">
 @endpush

 @push('scripts')
 <script src="{{ asset('custom/js/college/collegeEdit.js')}}"></script>
 @endpush



 @section('content')
<!--Form UI-->
{{ Form::open(['url' =>route('college.update', $college['id']),'method'=>'PUT','class'=>'form-horizontal']) }}

     <div class="container form">
  <!--Heading-->
  <div class="heading">
      <u><h2>{{ trans ('data.editCollege')}}</h2></u>
      </div>
 
       <!--hint form-->
       <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-6">
                  <span class="hintstar">*</span>
                  <span class="hint">{{ trans ('data.rf')}}</span>
            </div>
          </div>
            
  <!--arabic name-->
<div class="form-group">
    <label class="lbtext col-md-4 control-label">{{ trans ('data.arname')}}</label>
    <div class="col-md-6">
    <input type="text" value="{{ $college['nameA'] }}" class="form-control" required="required" minlength="3" maxlength="255" name="nameA" id="college_ar" placeholder="{{ trans ('data.arnameholder')}}">
    <span class="form_hint">Min length = 3 and max length= 255</span>
   <span class="star">*</span>
    </div>
 </div>
 
 <!--english name-->
 <div class="form-group">
    <label class="lbtext col-md-4 control-label">{{ trans ('data.enname')}}</label>
    <div class="col-md-6">
    <input type="text" value="{{ $college['nameE'] }}" class="form-control" required="required"  minlength="3" maxlength="255" name="nameE" id="college_en" placeholder="{{ trans ('data.ennameholder')}}">
    <span class="form_hint">Min length = 3 and max length= 255</span>
   <span class="star">*</span>
    </div>
 </div>
  
 <!--university name-->
 <div class="form-group dropdown">
         
            <label class="col-md-2 col-md-push-2 control-label" >{{ trans ('data.university')}}</label>
            <div class="col-md-6 col-md-push-2">
            <select id="university" name="university_id" required="required">
               <option value="" disabled="disabled" selected>----- {{trans('data.selectUniversity')}} ------</option>
				@foreach ($universities as $university)
					<option value="{{ $university['id'] }}"
						@if ($college->University->id == $university['id'])
							selected
						@endif
					> @if(LaravelLocalization::getCurrentLocale() == 'ar')
                    {{ $university['nameA'] }}
                 @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                    {{ $university['nameE'] }}
                 @endif
                </option>
				@endforeach
              </select>
              <span class="form_hint">{{ trans ('data.selectlist')}}</span>
              <span class="staruni">*</span>
            
            </div>
  </div>
 
 
  <!--college type-->
 <div class="form-group">
      <label class="col-md-2 col-md-push-2 control-label check">{{ trans ('data.typeCollege')}}</label>
     <div class="col-md-8 col-md-push-2" style="margin-left:20px">
		<label><input id="radio_button1" type="radio" name="type" value="theoretical"
			@if ($college['type'] == 'theoretical')
				checked
			@endif
		required>{{trans('data.theoritical')}}</label>
		<label><input id="radio_button2"  type="radio" name="type" value="practical"
			@if ($college['type'] == 'practical')
				checked
			@endif
		>{{trans('data.practical')}}</label>
		<span class="startype">*</span>
         <span class="form_hint">Check the correct radio button</span>
        
     </div>      
   </div>
  
  
 <!--Main Type-->
 <div class="form-group dropdown">
            <label class="col-md-2 col-md-push-2 control-label" >{{trans('data.mtype')}}</label>
            <div class="col-md-6 col-md-push-2">
            <select id="spec" name="main_type_id" required="required">
               <option value="" disabled="disabled" selected>----- {{trans('data.smtype')}} ------</option>
				@foreach ($types as $type)
					<option value="{{ $type['id'] }}"
						@if ($college->MainType->id == $type['id'])
							selected
                        @endif
                    >
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
        <div class="col-md-4 col-md-push-5 text-center">
            <button type="submit" class="btn btn-success" id="save">{{trans('data.save')}}</button>
            <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
   </div>
   
     </div>
</form>
@endsection