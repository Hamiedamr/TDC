@extends('layout.index')
@section('title')
{{trans('data.listUniversity')}}
@append


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/university/universityList.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/university/universityList.js')}}"></script>
@endpush
   

    @section('content')
        @if (session('alert-class'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
   @endif
<!--Form UI-->
<form class="form-horizontal" name="university_list_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">

    <!--Heading-->
    <div class="heading">
        <u><h2>{{trans('data.listUniversity')}}</h2><u>
    </div>


      
<table id="myTable" class="col-md-6 col-sm-4 table-responsive">
   
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>#</th>
          <th>{{trans('data.university')}}</th>
          <th>{{trans('data.address')}}</th>
          <th>{{trans('data.college')}}</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
	@foreach ($universities as $university)
		<tr>
			<td id="universityID">{{ $loop->index + 1 }}</td>
			<td id="nameID"><a href="{{ route('university.edit', $university['id']) }}">{{ $university['nameA'] }}</a></td>
			<td id="addressID">{{ $university['address'] }}</td>
			<td><a href="{{ route('university.college', $university['id']) }}" class="btn btn-primary display"><i class="fa fa-file"></i>{{trans('data.display')}}</a></td>
		</tr>
	@endforeach
   </tbody>
 </table>
 <!--<span id="spnText">test</span>-->
 
       <!--add and cancel-->
      <div class="form-group">
        <div class="col-md-4 col-sm-push-5">
			<a class="btn btn-success" href="{{ route('university.create') }}">{{trans('data.create')}}</a>
          <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
      </div>
    </div>

    </form>
 @endsection