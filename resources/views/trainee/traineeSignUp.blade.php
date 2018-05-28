@extends('layout.index')
@section('title')
{{trans('data.traineesu')}}
@append
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/trainee/traineeSignUp.css')}}">
  @endpush


  @push('scripts')
    <script  src="{{ asset('custom/js/trainee/traineeSignUp.js')}}"></script>
  @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal" name="trainee_signup_form" action="#" method="POST">
        {{csrf_field()}}
    <div class="container form">
    @if(Session::has('msg')){!! Session::get('msg') !!}@endif

        <!--Heading-->
         <div class="heading">
             <u><h2>{{trans('data.traineesu')}}</h2></u>
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
            <label class="col-md-4 control-label">{{trans('data.arname')}}</label>
            <div class="col-md-6">
            <input type="text" class="form-control"required="required" minlength="3" maxlength="10" name="trainee_ar" id="trainee_ar" placeholder="{{trans('data.arnameholder')}}">
            <span class="form_hint">{{trans('data.minmax')}}</span>
            <span class="star">*</span>
            </div>
        </div>

        

        <!--english name-->
        <div class="form-group">
            <label class="col-md-4 control-label">{{trans('data.enname')}}</label>
            <div class="col-md-6">
            <input type="text" class="form-control" required="required" minlength="3" maxlength="10" name="trainee_en" id="trainee_en" placeholder="{{trans('data.ennameholder')}}">
            <span class="form_hint">{{trans('data.minmax')}}</span>
            <span class="star">*</span>
           
            </div>
        </div>
            
   
    <!--university name-->
    <div class="form-group dropdown">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.university')}}</label>
            <div class="col-md-6 col-md-push-2">
            <select id="university" name="university" required="required">
                <option value=""  selected>----- {{trans('data.selectUniversity')}} ------</option>
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="staruni">*</span>
            </div>
        </div>
    <!--college name-->
    <div class="form-group dropdown">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.college')}}</label>
            <div class="col-md-6 col-md-push-2">
            <select id="college" name="college" required="required">
                    <option value="" disabled="disabled"  selected>----- {{trans('data.selectCollege')}} ------</option>
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="starcoll">*</span>
            </div>
    </div>
    <!--Department name-->
    <div class="form-group dropdown">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.department')}}</label>
            <div class="col-md-6 col-md-push-2">
            <select id="department" name="department" required="required">
                    <option value="" disabled="disabled"  selected>----- {{trans('data.selectDepartment')}} ------</option>
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="stardep">*</span>
            </div>
    </div>


    <!--address-->
    <div class="form-group">
            <label class="col-md-4 control-label">{{trans('data.address')}}</label>
            <div class="col-md-6">
            <input type="text" class="form-control" name="trainee_address" id="trainee_address" placeholder="{{trans('data.address')}}">
            
        </div>
        </div>

        <!--Phone no.-->
        <div class="form-group">
                <label class="col-md-4 control-label">{{trans('data.phone')}}</label>
                <div class="col-md-6">
                <input type="number" class="form-control" required="required" name="trainee_phone" id="trainee_phone" placeholder="{{trans('data.phone')}}" >
                <span class="form_hint">{{trans('data.phonev')}}</span>
                <span class="star">*</span>
                
            </div>
            </div>
        
    <!--nationality-->
    <div class="form-group dropdown">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.nationality')}}</label>
            <div class="col-md-2 col-md-push-3">
            <select id="nationality" name="nationality" required="required">
                <option value="" disabled="disabled" selected>----- {{trans('data.snationality')}} ------</option>
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="stardep">*</span>
            </div>
    </div>

     <!--email-->
 <div class="form-group">
        <label class="col-md-4 control-label">{{trans('data.email')}}</label>
        <div class="col-md-6">
        <input type="email" id="contact_email" class="form-control" required="required" name="trainee_email" id="trainee_email" placeholder="{{trans('data.emailholder')}}">
        <span class="form_hintemail">{{trans('data.emailholder')}}</span>
        <span class="star">*</span>
      
    </div>
    </div>


    <!--career status-->
    <div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label" >{{trans('data.careerstatus')}}</label>
            <div class="col-md-8 col-md-push-2">
            <select id="cs" name="cs" required="required" >
                <option value="" disabled="disabled" selected>----- {{trans('data.scareerstatus')}} ------</option>
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="starcareer">*</span>
            </div>
    </div>

        <!--gender-->
    <div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label check">{{trans('data.gender')}}</label>
        <div class="form-group col-md-8 col-md-push-2" style="margin-left:20px" >
            <label><input id="radio_button1" type="radio" name="optradio">{{trans('data.male')}}</label>
            <label><input id="radio_button2"  type="radio" name="optradio">{{trans('data.female')}}</label>
              <span class="stargender">*</span>
              <span class="form_hint">Check the correct radio button</span>
        </div>      
        </div>

         <!--license-->
    <div class="form-group">
         <label class="col-md-2 col-md-push-2 control-label check">{{trans('data.license')}}</label>
         <div class="licenceClass col-md-8 col-md-push-2" >
            <label>
                <input  id="license_id" type="checkbox" name="optradio" value="">
                {{trans('data.licenseholder')}}
            </label>
            <span class="alertstar">*</span>
        </div>     
        </div>

         <!--note-->
    <div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label check">{{trans('data.note')}}</label>
        <div class="noteClass col-md-8 col-md-push-2">
            <label id="note_id">
                <input type="checkbox" name="optradio" value="">
                {{trans('data.noteholder')}}
            </label>
            <span class="alertstar">*</span>
        </div>     
        </div>

         <!--rules-->
    <div class="form-group">
            <label class="col-md-2 col-md-push-2 control-label check">{{trans('data.rules')}}</label>
        <div class="rulesClass col-md-8 col-md-push-2">
            <label id="rules_id">
                <input type="checkbox"  name="optradio">
                {{trans('data.rulesholder')}}
            </label>
            <span class="alertstar">*</span>
        </div>       
        </div>
    
  

     <!--save and cancel-->
   <div class="form-group">
        <div class="col-md-8 col-sm-push-3 text-center">
            <button type="submit" class="btn btn-success" id="save">{{trans('data.save')}}</button>
            <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
    </div>
     
 </div>

  </form>

  @endsection


 

