@extends('layout.index')
@section('title')
{{trans('data.editnews')}}
@append
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/news/editNews.css')}}">
  @endpush

   
  @push('scripts')
  <script src="{{ asset('custom/js/news/editNews.js')}}"></script>
   @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal"  name="news_edit_form" action="#" method="post">
  {{csrf_field()}}
  <div class="container form">
        <!--Heading-->
     <div class="heading">
        <u><h2>{{trans('data.editnews')}}</h2></u>
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
        <label class="lbtext col-md-4 control-label">{{trans('data.newstitle')}}</label>
        <div class="col-md-6">
          <input type="text" class="form-control" id=""name="" required="required" minlength="3"  placeholder="{{trans('data.newstitle')}}">
          <span class="form_hint">{{trans('data.minmax')}}</span>
          <span class="star">*</span>
        </div>
  </div>

  
      <!--details-->
      <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.newsdetails')}}</label>
        <div class="col-md-6">
          <textarea type="text" class="form-control" id="" name="" required="required" minlength="3" maxlength="300" placeholder="{{trans('data.newsdetails')}}"></textarea>
          <span class="form_hint">{{trans('data.minmax')}}</span>
          <span class="star">*</span>
        </div>
  </div>


 <!--this div is for image-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">{{trans('data.newsimage')}}</label>
        <div class="col-md-3">
            <input type="file" onchange="previewFile()" required>
            <span class="form_hint">{{trans('data.minmax')}}</span>
            <span class="starimage">*</span>
            <br>
            <img src="{{asset('custom/images/news.jpg')}}"  alt="Upload Photo" maxlength="191" width=auto height=auto>
           
        </div>
 </div>





    <!--important news-->
   <div class="form-group">
    <label class="lbtext col-md-2 col-md-push-2 control-label check">{{trans('data.newsimportant')}}</label>
   <div class="col-md-8 col-md-push-2" style="margin-left:20px">
      <input id="check_box" type="checkbox" name="">
   </div>      
 </div>
         


    <!--edit and cancel-->
    <div class="form-group">
      <div class="col-md-4 col-md-push-5">
        <button type="submit" class="btn btn-success">{{trans('data.save')}}</button>
        <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
      </div>
    </div>
     
  </div>

  </form>

  @endsection


 

