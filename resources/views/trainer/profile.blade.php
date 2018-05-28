@extends('layout.index')
@section('title')
{{trans('data.trainerprofile')}}
@append

      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/trainer/trainerProfile.css')}}">
  @endpush


   @section('content') 
   <!--Form UI-->
 <form class="form-horizontal" name="trainer_profile_form" action="#" method="POST">
        {{csrf_field()}}
    <div class="container form">
        

        <!--Heading-->
        <div class="heading">
            <u><h2><i class="glyphicon glyphicon-user"></i>{{trans('data.trainerprofile')}}</h2></u>
        </div>


      
        <div class="profile">

             <!--personal info-->
             <div class="col-md-12">
                    <label class="title">{{trans('data.personalinfo')}}</label>
                    
                  </div>

                   <!--this div is for image-->
                    <div class="image col-md-12">
                            <div class="col-md-10 col-md-push-3 userimage">
                                    <img src="{{asset('custom/images/user.png')}}"  alt="Upload Photo">
                            </div>
                    </div>


                   <!--arabic name-->
                   <div>
                        <label class="txt"><i class="icon glyphicon glyphicon-font"></i>{{trans('data.arname')}}</label>
                        <div class="col-md-10">
                        <label class="valuetxt">
                            {{ $trainer['nameA'] }}
                          </label>
                        </div>
                    </div>



            <!--english name-->
            <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-gbp"></i>{{trans('data.enname')}}</label>
                    <div class="col-md-10">
                    <label class="valuetxt">
                    {{ $trainer['nameE'] }}
                    </label>
                    </div>
                </div>

            <!--address-->
            <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-map-marker"></i>{{trans('data.address')}}</label>
                    <div class="col-md-10">
                    <label class="valuetxt">
                    {{ $trainer['address'] }}
                    </label>
                    </div>
                </div>
        

    <!--Phone no.-->
    <div>
            <label class="txt"><i class="icon glyphicon glyphicon-phone"></i>{{trans('data.phone')}}</label>
            <div class="col-md-10">
            <label class="valuetxt">
            {{ $trainer['phone'] }}
            </label>
            </div>
        </div>
            
    
    <!--nationality-->
    <div>
            <label class="txt"><i class="icon glyphicon glyphicon-globe"></i>{{trans('data.nationality')}}</label>
            <div class="col-md-10">
            <label class="valuetxt">
            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $nationalities[$trainer->nationality_id-1]->nameA }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $nationalities[$trainer->nationality_id-1]->nameE }}
                            @endif

                            </label>
            </div>
        </div>
    
    
    <!--email-->
    <div>
            <label class="txt"><i class="icon glyphicon glyphicon-envelope"></i>{{trans('data.email')}}</label>
            <div class="col-md-10">
            <label class="valuetxt">
           {{ $trainer->email}}
           </label>
            </div>
        </div>
    
    
    <!--career status-->
    <div>
            <label class="txt"><i class="icon glyphicon glyphicon-indent-right"></i>{{trans('data.careerstatus')}}</label>
            <div class="col-md-10">
            <label class="valuetxt">
            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $statuses[$trainer->job_status_id-1]->nameA }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $statuses[$trainer->job_status_id-1]->nameE }}
                            @endif

                            </label>
           
                
            </div>
        </div>
    
    <!--gender-->
    <div>
            <label class="txt"><i class="icon glyphicon glyphicon-user"></i>{{trans('data.gender')}}</label>
            <div class="col-md-10">
            <label class="valuetxt">
            {{$trainer->gender}}
            </label>
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
                    <label class="valuetxt">
                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $university[0]->nameA }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $university[0]->nameE }}
                            @endif
                            </label>
                    </div>
                </div>




            <!--college name-->
            <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-tasks"></i>{{trans('data.college')}}</label>
                    <div class="col-md-10">
                    <label class="valuetxt">
                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $college[0]->nameA }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $college[0]->nameE }}
                            @endif

                            </label>
                    </div>
                </div>



            <!--Department name-->
            <div>
                    <label class="txt"><i class="icon glyphicon glyphicon-education"></i>{{trans('data.department')}}</label>
                    <div class="col-md-10">
                    <label class="valuetxt">
                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $department[0]->nameA }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $department[0]->nameE }}
                            @endif
                            </label>
                            
                    </div>
                </div>



                <!--training programs-->
         <div>
            <label class="txt"><i class="icon glyphicon glyphicon-list-alt"></i>{{trans('data.trainingPrograms')}}</label>
            <div class="col-md-10">
            <label class="valuetxt">
                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $program[0]->nameA }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $program[0]->nameE }}
                            @endif  
             </label>
            </div>
        </div>
    
    
    
    <!--other programs-->
    <div>
            <label class="txt"><i class="icon glyphicon glyphicon-menu-hamburger"></i>{{trans('data.otherPrograms')}}</label>
            <div class="col-md-10">
            <label class="valuetxt">
                {{$trainer->otherPrograms}}
                </label>
            </div>
        </div>
    


     
 </div>


</div> 
  </form>

  @endsection


 

