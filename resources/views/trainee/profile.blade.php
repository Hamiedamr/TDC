@extends('layout.index')
@section('title')
{{trans('data.traineeprofile')}}
@append
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/trainee/traineeProfile.css')}}">
  @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal" name="trainee_profile_form" action="#" method="POST">
        {{csrf_field()}}
    <div class="container form">

        <!--Heading-->
         <div class="heading">
            <u><h2><i class="glyphicon glyphicon-user"></i>{{trans('data.traineeprofile')}}</h2></u>
        </div>

        <div class="profile">

            <!--personal info-->
                <div class="col-md-12">
                   <label class="title">{{trans('data.personalinfo')}}</label>
                 </div>

                    <!--arabic name-->
                <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-font"></i>{{trans('data.arname')}}</label>
                    <div class="col-md-10">
                        <label class="valuetxt">-------------</label>
                    </div>
                </div>


                    <!--english name-->
                <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-gbp"></i>{{trans('data.enname')}}</label>
                    <div class="col-md-10">
                        <label class="valuetxt">-------------</label>
                    </div>
                </div>

            
               <!--address-->
                <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-map-marker"></i>{{trans('data.address')}}</label>
                    <div class="col-md-10">
                        <label class="valuetxt">-------------</label>
                    </div>
                </div>

                <!--Phone no.-->
                <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-phone"></i>{{trans('data.phone')}}</label>
                    <div class="col-md-10">
                        <label class="valuetxt">-------------</label>
                    </div>
                </div>

                <!--nationality-->
                <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-globe"></i>{{trans('data.nationality')}}</label>
                    <div class="col-md-10">
                        <label class="valuetxt">-------------</label>
                    </div>
                </div>

                 <!--email-->
                <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-envelope"></i>{{trans('data.email')}}</label>
                    <div class="col-md-10">
                        <label class="valuetxt">-------------</label>
                    </div>
                </div>

               <!--career status-->
                <div>
                        <label class="txt"><i class="icon glyphicon glyphicon-indent-right"></i>{{trans('data.careerstatus')}}</label>
                        <div class="col-md-10">
                            <label class="valuetxt">-------------</label>
                        </div>
                    </div>

                <!--gender-->
                <div>
                        <label class="txt"><i class="icon glyphicon glyphicon-user"></i>{{trans('data.gender')}}</label>
                        <div class="col-md-10">
                            <label class="valuetxt">-------------</label>
                        </div>
                    </div>

                

                <!--academic info-->
                <div class="col-md-12">
                        <label class="title">{{trans('data.academicinfo')}}</label>
                    </div>

                         <!--university name-->
                <div>
                        <label class="txt"><i class="icon glyphicon glyphicon-home"></i>{{trans('data.university')}}</label>
                        <div class="col-md-10">
                            <label class="valuetxt">-------------</label>
                        </div>
                    </div>

                   <!--college name-->
                     <div>
                             <label class="txt"><i class="icon glyphicon glyphicon-tasks"></i>{{trans('data.college')}}</label>
                             <div class="col-md-10">
                                <label class="valuetxt">-------------</label>
                            </div>
                     </div>
     
     
                     <!--Department name-->
                     <div>
                         <label class="txt"><i class="icon glyphicon glyphicon-education"></i>{{trans('data.department')}}</label>
                         <div class="col-md-10">
                            <label class="valuetxt">-------------</label>
                        </div>
                        </div>


                      <!--license-->
                <div>
                <label class="txt"><i class="icon glyphicon glyphicon-list"></i>{{trans('data.license')}}</label>
                        <div class="col-md-12">
                        <label class="txt">{{trans('data.licenseholder')}}</label>
                        </div>
                </div>

                 <!--note-->
                <div>
                <label class="txt"><i class="icon glyphicon glyphicon-align-justify"></i>{{trans('data.note')}}</label>
                        <div class="col-md-12">
                        <label class="txt">{{trans('data.noteholder')}}</label>
                        </div>
                     
                </div>

                <!--rules-->
                <div>
                        <label class="txt"><i class="icon glyphicon glyphicon-sort-by-alphabet"></i>{{trans('data.rules')}}</label>
                        <div class="col-md-12">
                            <label class="txt">{{trans('data.rulesholder')}}</label>
                        </div>
                       
                </div>
     
    </div>
 </div>

  </form>

  @endsection


 

