@extends('layout.index')
@section('title')
{{trans('data.listCourse')}}
@append


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/courses/courseList.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/courses/courseList.js')}}"></script>
@endpush
   

    @section('content')
<!--Form UI-->
<form class="form-horizontal" name="university_list_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">
  @if(Session::has('msg')){!! Session::get('msg') !!}@endif
    <!--Heading-->
    <div class="heading">
		@if (isset($category))
			<u><h2>Courses List Of "{{ $category['nameA'] }}" Category</h2></u>
		@else
			<u><h2>{{trans('data.listCourse')}}</h2></u>
		@endif
    </div>

      
<table id="myTable" class="col-md-6 col-md-4 table-responsive">
   
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>{{trans('data.code')}}</th>
          <th>{{trans('data.name')}}</th>
          <th>{{trans('data.hours')}}</th>
          <th>{{trans('data.type')}}</th>
          <th>{{trans('data.delete')}}</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
	@foreach ($courses as $course)
		<tr>
			<td id="codeID">{{ $course['codeE'] }}</td>
			<td id="nameID"><a href="{{ route('course.edit', $course['id']) }}">{{ $course['nameA'] }}</a></td>
			<td id="hoursID">{{ $course['totalHours'] }}</td>
			<td id="typeID">{{ $course['type'] }}</td>
            <td class="danger">
                {!! Form::open(array(
                           'style' => 'display: inline-block;',
                           'method' => 'DELETE',
                           'onsubmit' => "return confirm('confirm delete');",
                           'route' => ['course.destroy',$course->id])) !!}
                {!! Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit','class' => 'btn btn-xs btn-danger')) !!}
                {!! Form::close() !!}
            </td>
		</tr>
	@endforeach
   </tbody>
 </table>
 <!--<span id="spnText">test</span>-->
 
       <!--add and cancel-->
      <div class="form-group">
        <div class="col-md-4 col-sm-push-5">
			<a class="btn btn-success" href="{{ route('course.create') }}">{{trans('data.create')}}</a>
          <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
      </div>
    </div>

    </form>
 @endsection