@extends('layout.index')
@section('title')
{{trans('data.edittraining')}}
@append
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/training/trainingEdit.css') }}">
  @endpush

   
  @push('scripts')
  <script src="{{ asset('custom/js/training/trainingEdit.js')}}"></script>
   @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal"
   name="training_edit_form"
    action="{{route('training.update',$training->id)}}" method="post">
  {{csrf_field()}}
  <div class="container form">
        <!--Heading-->
     <div class="heading">
     <u><h2>{{ trans('data.edittraining') }}</h2></u>
        </div>

        <!--hint form-->
      <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-6">
                <span class="hintstar">*</span>
                <span class="hint">{{ trans('data.rf') }}</span>
          </div>
        </div>


 <!--program-->
 <div class="form-group dropdown">
           <label class="lbtext col-md-1 col-md-push-3 control-label" >{{trans('data.program')}}</label>
           <div class="col-md-6 col-md-push-3">
           <select id="spec" name="" required="required">
              <option value="" disabled="disabled" selected>--------- {{trans('data.sprogram')}} ------</option>
              @foreach($courses as $course)
              <option value="{{$course->id}}" @if($course->id == $training->course_id) {{"selected"}} @endif>
              @if(LaravelLocalization::getCurrentLocale() == 'ar')
                  {{$course ->nameA }}
              @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                {{$course ->nameE }}
               @endif
               </option>
            @endforeach>
              </select>
           </div>
           <span class="form_hint">{{trans('data.selectlist')}}</span>
           <span class="asterisc">*</span>
           <!--<span class="stardropdown">*</span>-->
 </div>
 <!--hall-->
 <div class="form-group dropdown">
        
           <label class="lbtext col-md-1 col-md-push-3 control-label" >{{trans('data.hall')}}</label>
           <div class="col-md-6 col-md-push-3">
           <select id="spec" name="" required="required">
              <option value="" disabled="disabled" selected>---------{{trans('data.shall')}} ------</option>
              @foreach($halls as $hall)
                  <option value="{{$hall->id}}" @if($hall->id == $training->hall_id){{"selected"}} @endif>
                      {{$hall->name}}
                  </option>
              @endforeach
              </select>
           </div>
           <span class="form_hint">{{trans('data.selectlist')}}</span>
           <span class="asterisc">*</span>
           <!--<span class="stardropdown">*</span>-->
 </div>


 <!--time-->
 <div class="form-group dropdown">
        
           <label class="lbtext col-md-1 col-md-push-3 control-label" >{{trans('data.time')}}</label>
           <div class="col-md-6 col-md-push-3">
           <select id="spec" name="time" required="required">
              <option value="" disabled="disabled" selected>--------- {{trans('data.selectlist')}} ------</option>
              @if($training->time == "am")
                  <option value="am" selected>AM</option>
                @elseif($training->time == "pm")
                  <option value="pm" selected>PM</option>
                @endif
              </select>
           </div>
           <label class="control-label" >(am-pm)</label>
           <span class="asterisc">*</span>
           <!--<span class="stardropdown">*</span>-->
 </div>


 <!--start date-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.startdate')}}</label>
        <div class="col-md-6">
        <input value="{{$training->startDate}}" type="date" class="form-control"required="required" maxlenght="10" name="startDate" id="arid"  placeholder="{{trans('data.startdate')}}">
        <span class="form_hint">{{trans('data.minmax')}}</span>
        <span class="asterisc">*</span>
         <!-- <span class="stardate">*</span>-->
        </div>
    </div>


       <!--end date-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.enddate')}}</label>
        <div class="col-md-6">
        <input  value="{{$training->endDate}}" type="date" class="form-control"required="required" maxlenght="10" name="endDate" id="arid"  placeholder="{{trans('data.enddate')}}">
        <span class="form_hint">{{trans('data.minmax')}}</span>
        <span class="asterisc">*</span>
          <!--<span class="stardate">*</span>-->
        </div>
    </div> 

 <!--start registration date-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.startbookdate')}}</label>
        <div class="col-md-6">
        <input  value="{{$training->bookingStartDate}}" type="date" class="form-control"required="required" maxlenght="10" name="bookingStartDate" id="arid"  placeholder="yy-mm-dd">
        <span class="form_hint">{{trans('data.minmax')}}</span>
        <span class="asterisc">*</span>
         <!-- <span class="stardate">*</span>-->
        </div>
    </div>

 <!--end registration date-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.endbookdate')}}</label>
        <div class="col-md-6">
        <input value="{{$training->bookingEndDate}}" type="date" class="form-control"required="required" maxlenght="10" name="bookingEndDate" id="arid"  placeholder="yy-mm-dd">
        <span class="form_hint">{{trans('data.minmax')}}</span>
        <span class="asterisc">*</span>
         <!-- <span class="stardate">*</span>-->
        </div>
    </div>

 <!--Heading-->
 <div class="heading">
       <u><h2>{{trans('data.editLecture')}}</h2></u>
        </div>

 <!--lecture date-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.lecturedate')}}</label>
        <div class="col-md-6">
        <input type="date" class="form-control"required="required" name="" id="arid"  placeholder="yy-mm-dd">
        <span class="form_hint">{{trans('data.minmax')}}</span>
        <span class="asterisc">*</span>
          <!--<span class="stardate">*</span>-->
        </div>
    </div>


 <!--Trainers-->
<div class="form-group dropdown">
        
           <label class="lbtext col-md-1 col-md-push-3 control-label" >{{trans('data.trainers')}}</label>
           <div class="col-md-6 col-md-push-3">
           <select id="spec" name="" required="required">
              <option value="" disabled="disabled" selected>--------- {{trans('data.selectTrainers')}} ------</option>
              @foreach($trainers as $trainer)
					<option value="">
          @if(LaravelLocalization::getCurrentLocale() == 'ar')
            {{ $trainer->nameA }}
            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
              {{ $trainer->nameE }}
            @endif
              </select>
           </div>
           <span class="form_hint">{{trans('data.selectlist')}}</span>
           <span class="asterisc">*</span>
           <!--<span class="stardropdown">*</span>-->
 </div>

<!--lecture hours-->
<div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.lecturehrsno')}}</label>
        <div class="col-md-6">
        <input type="number" class="form-control" required="required" maxlenght="1" maxlenght="3" name="" id="arid"  placeholder="{{trans('data.lecturehrsno')}}">
        </div>
        <span class="form_hint">{{trans('data.minmax')}}</span>
        <span class="asterisc">*</span>
        <!--<span class="starhrs">*</span>-->
    </div>

    <!--online-->
   <div class="form-group">
    <label class="lbtext col-md-2 col-md-push-2 control-label check">{{trans('data.online')}}</label>
   <div class="col-md-8 col-md-push-2" style="margin-left:20px">
      <input id="check_box" type="checkbox" name="">
     
   </div>      
 </div>
         


<!--Attach a file-->
 <div id="form1" runat="server" style="margin-bottom:90px;">
    <label class="col-md-2 col-md-push-2 control-label" >{{trans('data.attachfile')}}</label>
    <div><input  id="fileinput" class="col-md-3 col-md-push-2" name="file" type='file' style="margin-left:20px;" /></div>
    <div class="col-md-2 col-md-push-3">
        <button type="submit" class="btn btn-primary">{{trans('data.addanotherlecture')}}</button>
      
      </div>
  </div>


    <!--add and cancel-->
    <div class="form-group">
      <div class="col-md-4 col-md-push-5">
        <button type="submit" class="btn btn-success">{{ trans('data.save') }}</button>
        <button type="submit" class="btn btn-danger">{{ trans('data.cancel') }}</button>
      </div>
    </div>
     
  </div>

  </form>

  @endsection


 

