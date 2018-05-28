@extends('layout.index')
@section('title','Login Page')

@push('styles')
    <link rel="stylesheet" href="{{asset('custom/css/account/login.css')}}">
@endpush


@push('scripts')
    <script src="{{ asset('custom/js/account/login.js')}}"></script>
@endpush

@section('content')
    <!--Form UI-->
    <form class="form-horizontal" name="login_form" action="#" method="POST">
        {{csrf_field()}}
        <div class="container form">

            <!--Heading-->
            <div class="heading">
                <u><h2>Login</h2></u>
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


                <!--login manually-->
                <div class="col-md-5  text-center">
                    <!--email-->
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span
                                    class="glyphicon glyphicon-envelope"></span></span>
                        <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1"
                               required>
                        <span class="form_hint">Format: example@gmail.com</span>
                        <span class="star">*</span>
                    </div>
                    <!--password-->
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2"><span
                                    class="glyphicon glyphicon-eye-close"></span></span>
                        <input type="password" class="form-control" minlength="6" maxlength="30" placeholder="Password"
                               aria-describedby="basic-addon2" required>
                        <span class="form_hint">Min length = 6 and max length= 30</span>
                        <span class="star">*</span>
                    </div>

                    <button type="submit" class="btn btn-success">Login</button>
                    <p>Forget password? <a href="#">Request new password</a>.</p>
                    <p>Have account? <a href="#">Sign up now</a>.</p>

                    <div class="form-group">
                        <label class="lbtext col-md-4 col-md-push-4 control-label check">Remember me</label>
                        <div class="col-md-1">
                            <input id="check_box" type="checkbox" name="">
                        </div>
                    </div>

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


 

