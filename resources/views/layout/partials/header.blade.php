<style>
     .header
     {
        padding: 30px;
        width:100%;
        min-height: 100px;
        margin:auto;
        padding: 10px 5%;
        background-color:rgba(217, 232, 242, 1);
     }
     .headingdiv
     {
         float:center;
         margin: 0 auto;
         min-width:200px;
     }
     .headingdiv .text1
     {
         font-size: 25px;
         text-align: center;
         margin-top:30px;
     }

     .headingdiv .text2
     {
         font-size: 20px;
         text-align: center;
     }
     .slogandiv .slogan
     {
        height: 125px;
        float:left;
         padding:10px;
        margin-left:0 auto;
        width: 10%;
        height: 20%;
     }

     .logodiv .logo
     {
        height: 125px;
        float:right;
        padding: 0 5px;
        margin-left:0 auto;
        width: 10%;
        height: 20%;
        margin-top: -40px;
     }

   




     /* navbar part*/
     .navbar
     {
        font-size: 16px;
        color:#0d3e7d;
     }
     .navbar .navbar-header .icon-bar
     {
        background-color: #0d3e7d;
     }
     .navbar-collapse ul li .navbar-brand
     {
        background-color:#b3d6ec;
        color:#0d3e7d;
        font-weight:bolder;
     }
     .navbar-collapse ul li .link{
        font-weight:bolder;
     }
     .dropdown .title
     {
        font-weight:bolder;
     }
     .dropdown ul
     {
        background-color:#0d3e7d;
        border-top:3px solid #000;
        min-width:200px;
     }
     .dropdown ul .dropdown-header
     {
         color:red;
         font-size:20px;
         font-weight:bolder;
     }
     .dropdown ul li a
     {
        color: #fff;
        font-weight:bolder;
     }




     @media(max-width:600px)
     {
         .header
         {
           min-height:15%;
         }
        .headingdiv .text1
        {
            font-size: 20px;
        }

        .headingdiv .text2
        {
            display: none;
        }
        .slogandiv .slogan
        {
            width:40%;
            height:40%;
            margin-left:30%;
        }
        .logodiv .logo
        {
            width: 50%;
            height: 50%;
            margin-top: -212px;
            display:none;
        }


        /*navbar part responsive*/
        .navbar-collapse ul li .navbar-brand
        {
           width:100%;
           background-color: #0d3e7d;
           margin:5% auto;
           color:#fff;

        }
        .nav .open>a, .nav .open>a:focus, .nav .open>a:hover
        {
            background-color: #ef7878;
            border-color: #337ab7;
            color: #fff;
        }
        .dropdown ul .dropdown-header
        {
            color: #164090;
            font-size: 20px;
            font-weight: bold;
        }
        .dropdown ul li a {
            color: #4787be;
            font-weight: bolder;
        }

     }


    </style>


<div class="header">

    <!--heading part and logos-->
    <div class="container-fluid">
        <div class="slogandiv">
            <img class="slogan" src="{{ asset('custom/images/logofin.png') }}">
        </div>
       <div class="headingdiv">
            <label class="text1 control-label col-md-10 col-sm-2">
                {{ trans('data.headertitle') }}
        </label>
        <label class="text2 col-md-10 col-sm-2">
                {{ trans('data.headersubtitle') }}
        </label>
           <!--<p>hello {{ LaravelLocalization::getCurrentLocale() }} {{ trans('data.welcome') }}</p>-->
       </div>
      <div class="logodiv">
       <img class="logo" src="{{asset('custom/images/logo.png')}}">
      </div>
    </div>




    <!--nav bar part-->
     <nav class="navbar">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed navbar-toggler-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                  <li><a class="navbar-brand" href="{{ url('/')}}">{{ trans('data.home') }}</a></li>
                  <li><a  class="link" href="{{url('/about')}}">{{ trans('data.aboutus') }}</a></li>
                  <li><a  class="link" href="{{url('/book')}}">{{ trans('data.book') }}</a></li>
                  <li><a  class="link" href="{{url('/staff')}}">{{ trans('data.ourstaff') }}</a></li>
                  <li><a  class="link" href="{{url('/news')}}">{{ trans('data.tdcnews') }}</a></li>
                  <li><a  class="link" href="{{url('/services')}}">{{ trans('data.tdcservices') }}</a></li>
                  <li><a class="link"  href="{{url('/bookportal')}}">{{ trans('data.bookportal') }}</a></li>


                  <!--dropdown list-->
                  <li class="dropdown">
                    <a class="title" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{trans('data.screens')}}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">{{trans('data.section1')}}</li>
                        <li><a href="{{route('university.index')}}">{{trans('data.university')}}</a></li>
                        <li><a href="{{route('program.index')}}">{{trans('data.program')}}</a></li>
                        <li><a href="{{route('course.index')}}">{{trans('data.course')}}</a></li>
                        <li><a href="{{route('hall.index')}}">{{trans('data.hall')}}</a></li>

                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">{{trans('data.section2')}}</li>
                        <li><a href="{{route('training.index')}}">{{trans('data.training')}}</a></li>
                        <li><a href="{{route('training.create')}}">{{trans('data.addtraining')}}</a></li>
                        <!--<li><a href="http://localhost:8000/en/traininge">{{trans('data.edittraining')}}</a></li>-->
                        <!--<li><a href="http://localhost:8000/en/trainingm">{{trans('data.menutraining')}}</a></li>-->
                        <li><a href="{{route('lecture.index')}}">{{trans('data.lecture')}}</a></li>
                        <li><a href="{{route('attendance.create')}}">{{trans('data.attendance')}}</a></li>
                        <li><a href="{{route('trainer.index')}}">{{trans('data.trainer')}}</a></li>
                        <li><a href="{{route('trainee.index')}}">{{trans('data.trainee')}}</a></li>
                        <li><a  href="http://localhost:8000/en/tea">{{trans('data.traineeevs')}}</a></li>
                        <li><a  href="http://localhost:8000/en/tes">{{trans('data.trainerevs')}}</a></li>
                        <li><a  href="http://localhost:8000/en/traineru">{{trans('data.trainerupdatedegree')}}</a></li>
                        <li><a  href="http://localhost:8000/en/traineeu">{{trans('data.traineeupdatedegree')}}</a></li>
                        

                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">{{trans('data.section3')}}</li>
                        <li><a  href="http://localhost:8000/en/sheet1">{{trans('data.traineessheet')}}</a></li>
                        <li><a  href="http://localhost:8000/en/sheet2">{{trans('data.inoutsheet')}}</a></li>
                        <li><a  href="http://localhost:8000/en/sheet3">{{trans('data.traineesticker')}}</a></li>
                        <li><a  href="http://localhost:8000/en/sheet4">{{trans('data.traineesdatainsystem')}}</a></li>
                        <li><a  href="http://localhost:8000/en/trp">{{trans('data.trainerprofile')}}</a></li>
                        <li><a  href="http://localhost:8000/en/teep">{{trans('data.traineeprofile')}}</a></li>
                        

                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">{{trans('data.section4')}}</li>
                        <li><a  href="http://localhost:8000/en/an">{{trans('data.addnews')}}</a></li>
                        <li><a  href="http://localhost:8000/en/en">{{trans('data.editnews')}}</a></li>
                        <li><a  href="http://localhost:8000/en/ln">{{trans('data.listnews')}}</a></li>


                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">{{trans('data.section5')}}</li>
                        <li><a  href="http://localhost:8000/en/ap">{{trans('data.addprivilage')}}</a></li>
                        <li><a  href="http://localhost:8000/en/ep">{{trans('data.editprivilage')}}</a></li>
                        <li><a  href="http://localhost:8000/en/lp">{{trans('data.listprivilage')}}</a></li>
                    
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>



    </div>

