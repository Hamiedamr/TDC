@extends('layout.index')
@section('title')
{{trans('data.editUniversity')}}
@append
      
  @push('styles')
 <link rel="stylesheet" href="{{asset('custom/css/university/universityEdit.css')}}">
  @endpush

  @push('scripts')
  <script src="{{ asset('custom/js/university/universityEdit.js')}}"></script>
   @endpush

  @section('content') 
   <!--Form UI-->
 <form class="form-horizontal" name="university_edit_form" action="{{ route('university.update', $university['id']) }}" method="POST">
   {{csrf_field()}}
	{{ method_field('patch') }}
   <div class="container form">

      <!--Heading-->
      <div class="heading">
          <u><h2>{{ trans('data.editUniversity') }}</h2></u>
      </div>

      <!--hint form-->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
              <span class="hintstar">*</span>
              <span class="hint">{{ trans('data.rf') }}</span>
        </div>
      </div>


      <!--arabic name-->
      <div class="form-group block">
        <label class="lbtext col-md-4 control-label">{{ trans('data.arname') }}</label>
        <div class="col-md-6">
            <input type="text" value="{{ $university['nameA'] }}" class="form-control" id="university_ar" name="nameA" required="required" minlength="3" maxlength="255" placeholder="{{ trans('data.arnameholder')}}">
            <span class="form_hint">Min length = 3 and max length= 255</span>
            <span class="star">*</span>
        </div>
      </div>

        <!--english name-->
      <div class="form-group block">
            <label class="lbtext col-md-4 control-label">{{ trans('data.enname') }}</label>
            <div class="col-md-6">
              <input type="text" value="{{ $university['nameE'] }}" class="form-control" id="university_en"name="nameE" required="required" minlength="3" maxlength="255" placeholder="{{ trans('data.ennameholder') }}">
              <span class="form_hint">Min length = 3 and max length= 255</span>
              <span class="star">*</span>
            </div>
        </div>

      <!--address-->
      <div class="form-group block">
            <label class="lbtext col-md-4 control-label">{{ trans('data.address') }}</label>
            <div class="col-md-6">
              <input type="text" value="{{ $university['address'] }}" class="form-control" id="university_address"name="address" required="required" minlength="10" maxlength="65535" placeholder="{{ trans('data.addressholder') }}">
              <span class="form_hint">Min length = 10 and max length= 65535</span>
              <span class="star">*</span>
            </div>
      </div>

  <!--save and cancel-->
    <div class="form-group">
        <div class="col-md-4 col-md-push-5 text-center">
            <button type="submit" class="btn btn-success">{{ trans('data.save') }}</button>
            <button type="submit" class="btn btn-danger">{{ trans('data.cancel') }}</button>
        </div>
    </div>
</div>
</form>

  @endsection


 

