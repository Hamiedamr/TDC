@extends('layout.index')
@section('title')
{{trans('data.traineeticker')}}
@append


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/reports/traineeSticker.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/reports/traineeSticker.js')}}"></script>
@endpush
   

    @section('content')
<!--Form UI-->
<form class="form-horizontal" name="trainees_stickers_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">

    <!--Heading-->
    <div class="heading">
        <u><h2>{{trans('data.traineesticker')}}</h2><u>
    </div>

      

 <!--start date-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.startdate')}}</label>
        <div class="col-md-4">
        <input type="date" class="form-control" required="required" maxlenght="14" name="startDate" id="startdate">
        <span class="form_hint">{{trans('data.max14')}}</span>
        <span class="stardate">*</span>
        </div>
    </div>

      <!--end date-->
<div class="form-group">
      <label class="lbtext col-md-4 control-label">{{trans('data.enddate')}}</label>
      <div class="col-md-4">
      <input type="date" class="form-control" required="required" maxlenght="14" name="endDate" id="enddate" >
      <span class="form_hint">{{trans('data.max14')}}</span>
      <span class="stardate">*</span>
      </div>
  </div>


   <!--Program-->
   <div class="form-group dropdown">
        <label class="lbtext col-md-2 col-md-push-2 control-label">{{trans('data.training')}}</label>
        <div class="col-md-4 col-md-push-2">
        <select id="training" name="" required="required">
           <option value="" disabled="disabled" selected>---------- {{trans('data.straining')}}--------</option>
          </select>
          <span class="form_hint">{{trans('data.selectlist')}}</span>
          <span class="starprogram">*</span>
        </div>
</div>

   <div class="container sticker col-md-12" style="float:center;">
       <div class="container left">
            <h2>فاطمة السيد عودة الشيمي</h2>
            <div class="form-group control-form">
                    <label class="lbtext col-md-3  control-label">معيد</label>
                    <label class="lbtext col-md-3  control-label">جامعة عين شمس</label>
                    <label class="lbtext col-md-3 control-label">كلية التربية</label>
                    <label class="lbtext col-md-3  control-label">قسم الفيزياء</label>
            </div>
       </div>
       <div class="container right">
            <img class="logoim" src="{{asset("custom/images/logofin.png")}}">
        </div>
   </div>


  


 
       <!--save and cancel-->
    <div class="form-group">
            <div class="col-md-4 col-md-push-4 text-center">
                <button type="submit" id="pdf_btn" class="btn btn-primary">{{trans('data.pdf')}}</button>
                <button type="submit" class="btn btn-primary">{{trans('data.cancel')}}</button>
            </div>
        </div>
    </div>

    </form>
 @endsection