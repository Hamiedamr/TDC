<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale()  }}">
    <head>
        @include('layout.partials.head')
        @stack('styles')
        <style>
            html
           body
            {
                margin:0;
                padding: 0;
              font-family: sans-serif;
            }
           .main
           {
            min-height: 200px;
            width: 100%;
           }
       
           
        /* language ui */
        .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        }

        .switch input {display:none;}

        .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        }
        .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        }

        input:checked + .slider {
        background-color: #2ba76b;
        }

        input:focus + .slider {
        box-shadow: 0 0 1px #2ba76b;
        }

        input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
        }
        .slider.round {
        border-radius: 34px;
        }
        .slider.round:before {
        border-radius: 50%;
        }
        /*this part is about social media styling*/
            .sticky-container{
            padding:0px;
            margin:0px;
            position:fixed;
            right:-130px;
            top:260px;
            width:210px;
            z-index:1100;
        }
        .sticky li{
            list-style-type:none;
            color:#fff;
            font-weight:bold;
            height:50px;
            padding:0px;
            margin:6px;
            -webkit-transition:all 0.25s ease-in-out;
            -moz-transition:all 0.25s ease-in-out;
            -o-transition:all 0.25s ease-in-out;
            transition:all 0.25s ease-in-out;
            cursor:pointer;
        }
        .sticky li:hover{
            margin-left:-115px;
        }
        .sticky li img{
            float:left;
            margin-right:6px;
            width:40px;
            height:40px;
        }
        .sticky li p{
            padding-top:15px;
            margin-left:6px;
            line-height:20px;
            font-size:16px;
            background-color:#e7f9ec;
        }
        .sticky li p a{
            text-decoration:none;
            color:#2C3539;
        }
        .sticky li p a:hover{
            text-decoration:underline;
        }
        
		  @media (max-width:600px)
        {
            body 
            {
                width:100%;
                height:100%;
            }
        }
    
</style>
    </head>


    
    <body>
      
        <header>
               <!--account part-->
               @include('layout.partials.account')
               
               <div>
                  <!--header part + navbar-->
                  @include('layout.partials.header')
               </div> 
        </header>
       <div class="main">

            <!--content part-->
            @yield('content')
            <!--social media part-->
          
           <div class="sticky-container">
                <ul class="sticky">
                    <li>
                        <img src="{{asset('custom/images/facebook.png')}}">
                        <p><a href="https://www.facebook.com/" target="_blank">Facebook</a></p>
                    </li>
                    <li>
                        <img src="{{asset('custom/images/twitter.png')}}">
                        <p><a href="https://twitter.com/" target="_blank">Twitter</a></p>
                    </li>
                    <li>
                        <img src="{{asset('custom/images/youtube.png')}}">
                        <p><a href="https://www.youtube.com/" target="_blank">Youtube</a></p>
                    </li>
                    <li>
                        <img src="{{asset('custom/images/googleplus.png')}}">
                        <p><a href="https://accounts.google.com" target="_blank">Google+</a></p>
                    </li>
                    <li>
                        <img src="{{asset('custom/images/linkedin.png')}}">
                        <p><a href="https://www.linkedin.com/" target="_blank">linkedin</a></p>
                    </li>
                   
                </ul>
            </div>
       </div>

       


        <footer>
            <!--footer part-->
            @include('layout.partials.footer')
        </footer>
  
        <!-- Footer Scripts -->
        @include('layout.partials.scripts')
        @stack('scripts')

    </body>
</html>
