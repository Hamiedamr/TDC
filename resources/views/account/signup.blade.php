@extends('layout.index')
@section('title','Signup Page')
      
  @push('styles')
 <link rel="stylesheet" href="{{asset('custom/css/account/signup.css')}}">
  @endpush


  @push('scripts')
  <script src="{{ asset('custom/js/account/signup.js')}}"></script>
   @endpush

  @section('content') 
   <!--Form UI-->
 <form class="form-horizontal" name="login_form" action="#" method="POST">
   {{csrf_field()}}
   <div class="container form">

      <!--Heading-->
      <div class="heading">
          <u><h2>Sign Up</h2></u>
      </div>

      <!--hint form-->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
              <span class="hintstar">*</span>
              <span class="hint">Required Fields</span>
        </div>
      </div>

     <div class="col-md-12 text-center">


        <!--sign up manually-->
        <div class="col-md-5  text-center">
           
          <!--image-->
          <div class="input-group">
              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-picture"></span></span>
              <input type="file" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
            </div>

        <!--Username-->
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required minlength="3" maxlength="255">
            <span class="form_hint">Min length = 3 and max length= 255</span>
            <span class="star">*</span>
          </div>

       <!--email-->
       <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
          <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" required>
          <span class="form_hint">Format: example@gmail.com</span>
          <span class="star">*</span>
        </div>


      <!--password-->
       <div class="input-group">
          <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-eye-close"></span></span>
          <input type="password" class="form-control" minlength="6" maxlength="30" placeholder="Password" aria-describedby="basic-addon2" required>
          <span class="form_hint">Min length = 6 and max length= 30</span>
          <span class="star">*</span>
        </div>

         <!--repeat password-->
       <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-eye-close"></span></span>
          <input type="password" class="form-control"  minlength="6" maxlength="30"  placeholder="Repeat Password" aria-describedby="basic-addon1" required>
          <span class="form_hint">Min length = 6 and max length= 30</span>
          <span class="star">*</span>
        </div>

         
                <button type="submit" class="btn btn-success">Sign Up</button>
                <p>Have account? <a href="#">login now</a>.</p>
   
      </div>


        <!--login automatically-->
             <div class="col-md-6 text-center">
                  <a class="btn btn-social btn-facebook btn-primary" href="https://www.facebook.com/">
                      <span class="fa fa-facebook"></span> Sign in with Facebook
                    </a>

                  <a class="btn btn-social btn-twitter twitter" href="https://twitter.com/">
                      <span class="fa fa-twitter"></span> Sign in with Twitter
                    </a>

                    <a class="btn btn-social btn-google btn-danger" href="https://accounts.google.com/">
                        <span class="fa fa-google"></span> Sign in with Google
                      </a>


                      <a class="btn btn-social btn-linkedin btn-primary" href="https://www.linkedin.com/">
                          <span class="fa fa-linkedin"></span> Sign in with LinkedIn
                      </a>
                    </div>
      </div>
       
</div>
</form>

  @endsection


 

