@extends('layout.index')
@section('title')
  {{ trans('data.')}}
 @append
      
  @push('styles')
 <link rel="stylesheet" href="{{ asset('custom/css/.css')}}">
  @endpush

  @push('scripts')
  <script src="{{ asset('custom/js/.js')}}"></script>
   @endpush

  @section('content') 
Staff page



@endsection


 

