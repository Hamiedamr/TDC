@extends('layout.index')
@section('title')
{{trans('data.listDepartment')}}
@append


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/collegeDepartment/collegeDepartmentList.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/collegeDepartment/collegeDepartmentList.js')}}"></script>
@endpush
 @section('content')
    @if(session('message'))
    <div class="alert alert-success">
    {{session('message')}}
    </div>
@endif
<!--Form UI-->
<form class="form-horizontal" name="university_list_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">

    <!--Heading-->
    <div class="heading">
		@if (isset($college))
			<u><h2>Departments List Of "{{ $college['nameA'] }}" College</h2></u>
		@else
			<u><h2>{{trans('data.listDepartment')}}</h2></u>
		@endif
    </div>

      
<table id="myTable" class="col-md-6 col-md-4 table-responsive">
   
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>#</th>
          <th>{{trans('data.department')}}</th>
          
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
	@foreach ($departments as $department)
		<tr>
			<td id="depID">{{ $loop->index + 1 }}</td>
      <td id="nameID"><a href="{{ route('department.edit', $department['id']) }}">
          {{ $department['nameA'] }}
      </a>
    </td>
		</tr>
	@endforeach
   </tbody>
 </table>
 <!--<span id="spnText">test</span>-->
 
       <!--add and cancel-->
      <div class="form-group">
        <div class="col-md-4 col-sm-push-5">
			<a class="btn btn-success" href="{{ route('department.create') }}">{{trans('data.create')}}</a>
          <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
      </div>
    </div>

    </form>
 @endsection