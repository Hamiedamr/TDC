@extends('layout.index')
@section('title')
  {{ trans('data.home')}}
 @append
      
  @push('styles')
 <link rel="stylesheet" href="{{ asset('custom/css/home.css')}}">
  @endpush

  @push('scripts')
  <script src="{{ asset('custom/js/home.js')}}"></script>
   @endpush

  @section('content') 


    <!--//////////////////////////////////////    start carousel  ///////////////////////////////-->
	<div id="carousel-example-generic" class="carousel" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <!--we make this ui for loop for images loading from file-->
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        </ol> 

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!--img tag src contains folder of images admin want to show-->
            <div class="item active">
                <img class="img_slider" src="{{asset('custom/images/img2.png')}}" alt="first">
                <div class="carousel-caption hidden-xs">
                    <h1>Start</h1>
                    <p class="lead">This training center is a good place to self-study. Choose your leaning field and select courses add to apply in this course.</p>
                    <div class="btn btn-primary">Read More</div>
               </div>  <!--end of carousel-caption class-->
            </div>  <!--end of item active class-->
        </div>  <!--end of carousel-inner -->

        <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" [%#aria-hidden="true"%] ></span>
              <!--<span class="sr-only">Previous</span>-->
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" [%#aria-hidden="true"%] ></span>
              <!--<span class="sr-only">Next</span>-->
            </a>
          </div>
           <!--//////////////////////////////////////    end carousel  ///////////////////////////////-->




           
           <!--//////////////////////////////////////   start cards part  ///////////////////////////////-->
           <div class="container cardsgroup text-center">
            <div class="col-md-2 card" style="min-width:22%;min-height:200px;background-color:#10c45c">
                    <span class="glyphicon glyphicon-eye-open lg"></span>
                     <p><a href="#" class="card-text">{{trans('data.centervision')}}</a></p>
            </div>
        
            <div class="col-md-2 card" style="min-width:22%;min-height:200px;background-color: #fdc735">
                    <span class="glyphicon glyphicon-book"></span>
                     <p><a href="#"class="card-text">{{trans('data.centermission')}}</a></p>
            </div>
            <div class="col-md-2 card" style="min-width:22%;min-height:200px;background-color:#307ad5">
                    <span class="glyphicon glyphicon-education lg"></span>
                     <p><a href="#" class="card-text">{{trans('data.centerobjectives')}}</a></p>
            </div>
            <div class="col-md-2 card" style="min-width:22%;min-height:200px;background-color:#e948ae">
                    <span class="glyphicon glyphicon-list-alt"></span>
                     <p><a href="#" class="card-text">{{trans('data.certification')}}</a></p>
            </div>
        </div>
          <!--//////////////////////////////////////  end cards part  ///////////////////////////////-->

         

       
     <!--////////////////////////////   start carousel for popular courses /////////////////////-->

     <div class="container courses multi">
        <h1 class="popular">Popular Courses</h1>
        <div class="row">
          <div class="carousel" id="myCarousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-3">
                  <a href="#"><img src="{{asset("custom/images/pro.png")}}" class="img-responsive"></a>
                  <div class="cardtxt">
                      <p class="card-title">Project Management Course</p>
                      <p class="card-text"><?php echo 'dr. '?>person name</p>
                 </div>
                 <div class="col-md-4">
                         <i class="fa fa-comment"></i>
                         <label>2</label>     
                 </div>
                 <div class="col-md-3">
                     <i class="fa fa-user"></i>
                     <label>3</label>
                 </div>
                 <div>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                 </div>
                </div>
              </div>


              <div class="item">
                <div class="col-xs-3"><a href="#">
                  <img src="{{asset("custom/images/security.png")}}" class="img-responsive"></a>
                  <div class="cardtxt">
                      <p class="card-title">Security Course</p>
                      <p class="card-text"><?php echo 'dr. '?>person name</p>
                 </div>
                 <div class="col-md-4">
                         <i class="fa fa-comment"></i>
                         <label>2</label>     
                 </div>
                 <div class="col-md-3">
                     <i class="fa fa-user"></i>
                     <label>3</label>
                 </div>
                 <div>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                 </div>
                 
                </div>
              </div>
              <div class="item">
                <div class="col-xs-3"><a href="#">
                  <img src="{{asset("custom/images/android.png")}}" class="img-responsive"></a>
                  <div class="cardtxt">
                      <p class="card-title">Android Course</p>
                      <p class="card-text"><?php echo 'dr. '?>person name</p>
                 </div>
                 <div class="col-md-4">
                         <i class="fa fa-comment"></i>
                         <label>2</label>     
                 </div>
                 <div class="col-md-3">
                     <i class="fa fa-user"></i>
                     <label>3</label>
                 </div>
                 <div>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                 </div>
                 
                </div>
              </div>
              <div class="item">
                <div class="col-xs-3"><a href="#">
                  <img src="http://placehold.it/500/f4f4f4&amp;text=4" class="img-responsive"></a>
                </div>
              </div>
              <div class="item">
                <div class="col-xs-3"><a href="#">
                  <img src="http://placehold.it/500/f566f5/333&amp;text=5" class="img-responsive"></a>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
       <!--//////////////////////////// end  carousel for popular courses  ///////////////////////-->


    
     <!--//////////////////////////// start section CENTER ACHIEVEMENTS  ///////////////////////-->
     <section class="container stat_table text-center">
            <div>
              <h2>CENTER ACHIEVEMENTS</h2>
              <h4>Here you can review some statistics about our Education Center</h4>
                 <div class="row">
                    <div class="followers_box col-md-3 col-sm-6 col-xs-12">
                         <ul class="list-unstyled">
                           <i class="fa fa-globe fa-3x"></i>
                           <li class="stat">94,533</li>
                           <li class="title">Followers</li>
                          </ul>
                     </div>
                     <div class="followers_box col-md-3 col-sm-6 col-xs-12">
                            <ul class="list-unstyled">
                              <i class="fa fa-bell fa-3x"></i>
                              <li class="stat">11,223</li>
                              <li class="title">Courses Complete</li>
                             </ul>
                        </div>
                        <div class="followers_box col-md-3 col-sm-6 col-xs-12">
                                <ul class="list-unstyled">
                                  <i class="fa fa-user fa-3x"></i>
                                  <li class="stat">282,673</li>
                                  <li class="title">Trainees Number</li>
                                 </ul>
                            </div>
                            <div class="followers_box col-md-3 col-sm-6 col-xs-12">
                                    <ul class="list-unstyled">
                                      <i class="fa fa-list-alt fa-3x"></i>
                                      <li class="stat">37</li>
                                      <li class="title">Certified Trainer</li>
                                      
                                     </ul>
                                </div>
                          </div>	
                  </div>
        </section>
    <!--//////////////////////////// end section CENTER ACHIEVEMENTS  ///////////////////////-->
 


    <!--//////////////////////////// start RECENT POSTS  ///////////////////////-->
    <div class="container courses multi">
        <h1 class="popular">RECENT POSTS</h1>
        <div class="row">
          <div class="carousel" id="myCarousel">
            <div class="carousel-inner">
              <div class="item active">
                <div class="col-xs-3">
                  <a href="#"><img src="{{asset("custom/images/news1.png")}}" class="img-responsive"></a>
                  <div class="cardtxt">
                      <p class="card-title">تهنئة قلبية بمناسبة ...</p>
                      <p class="card-text">تتقدم اسرة مركز التدريب و التطوير بالتهنئة بمناسبة حلول ...</p>
                 </div>
                </div>
              </div>


              <div class="item">
                <div class="col-xs-3"><a href="#">
                  <img src="{{asset("custom/images/news2.png")}}" class="img-responsive"></a>
                  <div class="cardtxt">
                      <p class="card-title">تهنئة قلبية بمناسبة ...</p>
                      <p class="card-text">تتقدم اسرة مركز التدريب و التطوير بالتهنئة بمناسبة حلول ...</p>
                 </div>
                
            </div>
          </div>
          <div class="item">
              <div class="col-xs-3"><a href="#">
                <img src="{{asset("custom/images/news3.png")}}" class="img-responsive"></a>
                <div class="cardtxt">
                    <p class="card-title">تهنئة قلبية بمناسبة ...</p>
                    <p class="card-text">تتقدم اسرة مركز التدريب و التطوير بالتهنئة بمناسبة حلول ...</p>
               </div>
              
          </div>
        </div>
      </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          </div>
        </div>
      </div>
<!--//////////////////////////// end RECENT POSTS ///////////////////////-->





@endsection


 

