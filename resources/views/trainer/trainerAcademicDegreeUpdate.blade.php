@extends('layout.index')
@section('title')
{{trans('data.trainerupdatedegree')}}
@append
      
  @push('styles')
 
  <link rel="stylesheet" href="{{ asset('custom/css/trainer/trainerEditDegree.css')}}">
  @endpush

      
  @push('scripts')
  <script src="{{ asset('custom/js/trainer/trainerEditDegree.js')}}"></script>
  @endpush


   @section('content') 
   <!--Form UI-->
   {{ Form::open(['url' =>route('trainer.update',$trainer->id),'method'=>'PUT','class'=>'form-horizontal','name' => 'update_degree_form']) }}
 
  <div class="container form">
        <!--Heading-->
     <div class="heading">
        <u><h2>{{trans('data.trainerupdatedegree')}}</h2></u>
        </div>


         <!--hint form-->
      <div class="form-group">
        <label class="lbtext col-md-4 control-label"></label>
        <div class="col-md-6">
              <span class="hintstar">*</span>
              <span class="hint">{{trans('data.rf')}}</span>
        </div>
      </div>


        <!--trainer's name-->
      <div class="form-group">
          <label class="lbtext col-md-4 control-label">{{trans('data.name')}}</label>
          <div class="col-md-6">
          <label class="lbtext col-md-4 control-label">
          @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $trainer->nameA }}
                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{$trainer->nameE}}
                @endif
          
          </label>
          <span class="form_hint">{{trans('data.minmax')}}</span>
          <span class="star">*</span>
          </div>
      </div>

      

      <!--current academic degree name-->
     <div class="form-group">
          <label class="lbtext col-md-4 control-label">{{trans('data.currentdegree')}}</label>
          <div class="col-md-6">
          <label class="lbtext col-md-4 control-label">
          @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $statuses[$trainer->job_status_id-1]->nameA }}
          @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $statuses[$trainer->job_status_id-1]->nameE }}
          @endif
          
          </label>
          <span class="form_hint">{{trans('data.minmax')}}</span>
          <span class="star">*</span>
        </div>
      </div>
        
      <!--new academic degree name-->
<div class="form-group dropdown">
     <label class="lbtext col-md-3 col-md-push-1 control-label" >{{trans('data.newdegree')}}</label>
     <div class="col-md-6 col-md-push-1">
     <select id="ad" name="job_status_id" required="required">
        <option value="" disabled="disabled" selected>-------- {{trans('data.snewdegree')}} --------</option>
        @foreach($statuses as $statu)
                        <option value="{{$statu->id}}">
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $statu['nameA'] }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $statu['nameE'] }}
                            @endif
                        
                        </option>
                        @endforeach
       </select>
      <span class="form_hint">{{trans('data.selectlist')}}</span>
       <span class="star">*</span>
     </div>
</div>
  
  <!--attach file-->
 <div id="form1" runat="server" style="margin-bottom:50px;">
 <label class="lbtext col-md-2 col-md-push-2 control-label" >{{trans('data.attachfile')}}</label>
  <div>
    <input  id="fileinput" class="col-md-3 col-md-push-2" name="file" type='file' style="margin-left:20px;" />
</div>
</div>

     
    <!--update and cancel-->
    <div class="form-group">
        <div class="col-md-4 col-sm-push-5 text-center">
            <button type="submit" class="btn btn-success">{{trans('data.save')}}</button>
            <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
 </div>
</div>
  </form>

  @endsection


 

