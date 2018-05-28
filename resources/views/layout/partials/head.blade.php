<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<META NAME="Author name" CONTENT="ASU project">
<title>@yield('title' , 'Home')</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />


<link rel="stylesheet" href="{{ asset('main/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('main/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
{{-- 
@if(App::isLocale('ar'))
<link rel="stylesheet" href="{{ asset('custom/css/ar.css')}}">
@endif --}}
