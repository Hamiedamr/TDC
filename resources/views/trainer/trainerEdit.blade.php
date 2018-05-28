@extends('layout.index')
@section('title')
{{trans('data.traineredit')}}
@append

  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/trainer/trainerEdit.css')}}">
  @endpush


  @push('scripts')
    <script type="text/javascript" src="{{asset('custom/js/trainer/trainerEdit.js')}}"></script>
  @endpush

   @section('content')
   <!--Form UI-->
 <form class="form-horizontal" name="trainer_edit_form" action="{{route('trainer.update',$trainer['id'])}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
    <div class="container form">


        <!--Heading-->
         <div class="heading">
             <u><h2>{{trans('data.traineredit')}}</h2></u>
        </div>

        <!--hint form-->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
              <span class="hintstar">*</span>
              <span class="hint">{{trans('data.rf')}}</span>
        </div>
      </div>




<div class="col-md-10"><!--start outer div-->

      <div class="col-md-8 col-md-push-1"><!--start inner div-->
                <!--arabic name-->
            <div class="form-group">
                <label class="lbtext col-md-4 control-label">{{trans('data.arname')}}</label>
                <div class="col-md-8">
                <input type="text" class="form-control"required="required" minlength="3" maxlength="191" name="nameA" value="{{ $trainer->nameA }}" id="trainer_ar" placeholder="{{trans('data.arnameholder')}}">
                <span class="form_hint">{{trans('data.minmax')}}</span>
                <span class="star">*</span>
                </div>
            </div>
            <!--english name-->
            <div class="form-group">
                <label class="lbtext col-md-4 control-label">{{trans('data.enname')}}</label>
                <div class="col-md-8">
                <input type="text" class="form-control" required="required" value="{{ $trainer->nameE }}"  minlength="3" maxlength="191" name="nameE" id="trainer_en" placeholder="{{trans('data.ennameholder')}}">
                <span class="form_hint">{{trans('data.minmax')}}</span>
                <span class="star">*</span>
                </div>
            </div>
            <!--university name-->
            <div class="form-group dropdown">
                <label class="lbtext col-md-4 control-label" >{{trans('data.university')}}</label>
                <div class="col-md-8">
              <select id="university" name="university" required="required">
                <option value="" disabled="disabled"  selected>----- {{trans('data.selectUniversity')}}  ------</option>
                @foreach($universities as $univ)
                <option value="{{$univ->id}}" @if($trainer->department->college->university->id == $univ->id) selected @endif>
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                        {{$univ->nameA}}
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        {{$univ->nameE}}
                        @endif
                </option>
                @endforeach
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="staruni">*</span>
                </div>
            </div>
            <!--college name-->
            <div class="form-group dropdown">
                <label class="lbtext col-md-4 control-label">{{trans('data.college')}}</label>
                <div class="col-md-8">
               <select id="college" name="college" required="required">
                    <option value="" disabled="disabled"  selected>----- {{trans('data.selectCollege')}} ------</option>
                     @foreach($colleges as $college)
                    <option value="{{$college->id}}" @if($trainer->department->college->id == $college->id) selected @endif>
                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                    {{$college->nameA}}
                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                    {{$college->nameE}}
                    @endif
                    </option>
                    @endforeach
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="starcoll">*</span>
                </div>
            </div>
            <!--Department name-->
            <div class="form-group dropdown">
                <label class="lbtext col-md-4 control-label" >{{trans('data.department')}}</label>
                <div class="col-md-8">
                <select id="college" name="department_id" required="required">
                    <option value="" disabled="disabled"  selected>----- {{trans('data.selectDepartment')}}  ------</option>
                     @foreach($departments as $department)
                        <option value="{{$department->id}}" @if($trainer->department->id == $department->id) selected @endif>
                            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{$department->nameA}} 
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{$department->nameE}}
                            @endif
                           
                            
                        </option>
                    @endforeach
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="stardep">*</span>
                </div>
            </div>



            <!--address-->
<div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.address')}}</label>
        <div class="col-md-8">
        <input type="text" class="form-control" name="address" id="trainer_address" value="{{ $trainer->address }}"  placeholder="{{trans('data.address')}}" >
    </div>

    </div>

    <!--Phone no.-->
    <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.phone')}}</label>
        <div class="col-md-8">
        <input type="text" class="form-control" required="required" name="phone" value="{{ $trainer->phone }}" id="trainer_phone" placeholder="{{trans('data.phone')}}" minlength="11" maxlength='191'>
    </div>
    <span class="form_hint">{{trans('data.phonev')}}</span>
    <span class="starphone">*</span>
    </div>


    <!--nationality-->
    <div class="form-group dropdown">
        <label class="lbtext col-md-4 control-label" >{{trans('data.nationality')}}</label>
        <div class="col-md-8">
       <select id="nationality" name="nationality_id" required="required">
                <option value="" disabled="disabled" selected>----- {{trans('data.snationality')}}  ------</option>
                 @foreach($nationalities as $nationality)
                        <option value="{{$nationality->id}}" @if($trainer->nationality_id == $nationality->id) selected @endif>
                                @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                {{$nationality->nameA}} 
                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                {{$nationality->nameE}}
                                @endif
                        </option>
                    @endforeach
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="starnat">*</span>
        </div>
    </div>
      <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.nationalid')}}</label>
        <div class="col-md-8">
        <input type="text" class="form-control" required="required"  value="{{ $trainer->nationalId }}" name="nationalId" id="trainer_phone" placeholder="{{trans('data.nationalid')}}" maxlength="14">
    </div>
    <span class="form_hint">{{trans('data.nationalidv')}}</span>
    <span class="starphone">*</span>
    </div>


    <!--email-->
    <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.email')}}</label>
        <div class="col-md-8">
        <input type="email" class="form-control" minlength="3" maxlength="191" value="{{ $trainer->email }}" required="required" name="email" id="trainer_email" placeholder="{{trans('data.emailholder')}}">
        <span class="form_hint">{{trans('data.emailholder')}}</span>
        <span class="star">*</span>
    </div>
    </div>


    <!--career status-->
    <div class="form-group dropdown">
        <label class="lbtext col-md-4 control-label" >{{trans('data.careerstatus')}}</label>
        <div class="col-md-8">
        <select id="cs" name="job_status_id" required="required" >
                <option value="" disabled="disabled" selected>-----{{trans('data.scareerstatus')}}------</option>
                 @foreach($statuses as $status)
                        <option value="{{$status->id}}" @if($trainer->job_status_id == $status->id) selected @endif>
                            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$status->nameA}}
                                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$status->nameE}}
                                        @endif</option>
                    @endforeach
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="starjob">*</span>
        </div>
    </div>

    <!--gender-->
    <div class="form-group">
        <label class="col-md-4 control-label check">{{trans('data.gender')}}</label>
    <div class="form-group col-md-4" style="margin-left:20px" >
        <label><input id="radio_button1" type="radio" name="gender" value="male" @if($trainer->gender == 'male') checked @endif required>{{trans('data.male')}}</label>
        <label><input id="radio_button2"  type="radio" name="gender" value="female" @if($trainer->gender == 'female') checked @endif>{{trans('data.female')}}</label>
        <span class="starg">*</span>
        <span class="form_hint">Check the correct radio button</span>
    </div>
    </div>


    <!--training programs-->
    <div class="form-group dropdown">

        <label class="col-md-4 control-label" >{{trans('data.trainingPrograms')}}</label>
        <div class="col-md-8">
         <select id="tp" name="course_ids" required="required">
            <option value="" disabled="disabled" >----- {{trans('data.strainingPrograms')}} ------</option>
            @foreach($courses as $course)
                <option value="{{$course->id}}" @if($trainer->course_ids == $course->id) selected @endif>
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                        {{$course->nameA }}
                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        {{ $course->nameE}}
                        @endif</option>
            @endforeach
            </select>
            <span class="form_hint">{{trans('data.selectlist')}}</span>
            <span class="starp">*</span>
        </div>
    </div>



    <!--other programs-->
    <div class="form-group">
        <label class="col-md-4 control-label">{{trans('data.otherPrograms')}}</label>
        <div class="col-md-8">
        <textarea rows="10" cols="10" maxlength="300" type="text" class="form-control" name="otherPrograms" id="trainer_others" placeholder="{{trans('data.otherPrograms')}}">
            {{ $trainer->otherPrograms }}
        </textarea>
    </div>
    </div>




</div><!--end inner div-->


 <!--this div is for image-->
<div class="col-md-3 col-md-push-2">
        <input name="photo" type="file" onchange="previewFile()"><br>.
        <img src="{{asset('/imgs/trainers/'.$trainer->photo)}}" width="200px" height="200px"
                alt="Upload Photo" maxlength="191">

    </div>

</div><!--end outer div-->





<!--save and cancel-->
<div class="form-group">
    <div class="col-md-4 col-sm-push-4 text-center">
        <button type="submit" class="btn btn-success">{{trans('data.save')}}</button>
        <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
    </div>
</div>

 </div>


</div> <!--end of div of all fields-->
  </form>

  @endsection


 

