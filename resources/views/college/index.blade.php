@extends('layout.index')
@section('title')
 {{trans('data.listCollege')}}
 @append


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/college/collegeList.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/college/collegeList.js')}}"></script>
@endpush
   

    @section('content')
    @if (session('msg'))
        <div class = "alert alert-success">
          {{session('msg')}}
        </div>
 
   @endif
<!--Form UI-->
<form class="form-horizontal" name="college_list_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">

    <!--Heading-->
    <div class="heading">
		@if (isset($university))
			<u><h2>Colleges List Of "{{ $university['nameA'] }}" University</h2></u>
		@else
    <u><h2>{{trans('data.listCollege')}}</h2></u>
		@endif
    </div>

      
<table id="myTable" class="col-md-6 col-sm-4 table-responsive">
   
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>#</th>
          <th>{{trans('data.college')}}</th>
          <th>{{trans('data.department')}}</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
	@foreach ($colleges as $college)
		<tr>
			<td id="collegeID">{{ $loop->index + 1 }}</td>
			<td id="college_name"><a href="{{ route('college.edit', $college['id']) }}">{{ $college['nameA'] }}</a></td>
			<td><a href="{{ route('college.department', $college['id']) }}" class="btn btn-primary"><i class="fa fa-file"></i>{{trans('data.display')}}</a></td>
		</tr>
	@endforeach
   </tbody>
 </table>

       <!--add and cancel-->
      <div class="form-group">
        <div class="col-md-4 col-sm-push-5">
			<a class="btn btn-success" href="{{ route('college.create') }}">{{trans('data.create')}}</a>
          <button type="reset" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
      </div>

</div>
</form>
 @endsection