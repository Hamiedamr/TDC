<style>
    .account
    {
        background-color:#0d3e7d;
        padding: 15px;
        width:100%;
        min-height: 25px;
        padding: auto;
        border:1px solid #6c7496;
    }
    .fa
    {
        margin-right:5px;
        color:white;
    }
    .login
    {
        color:white;
        font-weight:bold;
    }
    .signup
    {
        color:white;
        font-weight:bold;
    }
    .accountdiv
    {
        float:right;
        padding-bottom:5px;
    }
    .logodisplay .logo
        {
            display:none;
            height: 125px;
            float:right;
            padding: 0 5px;
            margin-left:0 auto;
            width: 10%;
            height: 20%;
            margin-top: -40px;
        }
    @media(max-width:600px)
     {
        .logodisplay .logo
        {
            height: 125px;
            float:right;
            padding: 0 5px;
            margin-left:0 auto;
            width: 10%;
            height: 20%;
            margin-top: -40px;
            
        }
    }
    </style>

<div class="account">
   <!--language dropdown menu-->
    <select id="setLocale">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <option value="{{LaravelLocalization::getLocalizedURL($localeCode, LaravelLocalization::getNonLocalizedURL())}}"
            @if(LaravelLocalization::getCurrentLocale() == $localeCode) selected="true" @endif>{{$properties['native']}}</option>
        @endforeach
    </select>
    <!--login and register-->
    <div class="accountdiv">
        <i class="fa fa-user"> </i>
        <a class="login" href="{{ route('login') }}">{{trans('data.login')}}</a>

        <span style="color:white;">|</span>
        <a class="signup" href="{{ url('/signup') }}">{{trans('data.register')}}</a>
    </div>
    <div class="logodisplay">
            <img class="logo" src="{{asset('custom/images/logo.png')}}">
           </div>

</div>

@section('scripts')
    <script type="application/javascript">
        $(document).ready(function() {
            $('#setLocale').on('change', function (e) {
                e.preventDefault();
                window.location.href = $(this).val();
            });
        });
    </script>
@append