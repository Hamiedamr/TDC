@extends('layout.index')
@section('title', 'Main Program List')


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/mainProgram/mainProgramList.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/mainProgram/mainProgramList.js')}}"></script>
@endpush
   

    @section('content')
<!--Form UI-->
<form class="form-horizontal" name="main_list_form" action="#" method="POST">
    {{csrf_field()}}
  <div class="container form">

    <!--Heading-->
    <div class="heading">
        <u><h2>Main Program List</h2></u>
    </div>

      
<table id="myTable" class="col-md-6 col-md-4 table-responsive">
   
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>#</th>
          <th>Name</th>
          <th>Programs List</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
	@foreach ($types as $type)
		<tr>
			<td id="programID">{{ $loop->index + 1 }}</td>
			<td id="program_name"><a href="{{ route('program.edit', $type['id']) }}">{{ $type['nameA'] }}</a></td>
			<td><a href="{{ route('program.edit', $type['id']) }}" class="btn btn-primary"><i class="fa fa-file"></i>Display</a></td>
		</tr>
	@endforeach
   </tbody>
 </table>

       <!--add and cancel-->
      <div class="form-group">
        <div class="col-md-4 col-sm-push-5">
			<a class="btn btn-success" href="{{ route('program.create') }}">Create</a>
          <button type="submit" class="btn btn-danger">Cancel</button>
        </div>
      </div>
    </div>

    </form>
 @endsection