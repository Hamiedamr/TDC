@extends('layout.index')
@section('title', 'Trainees List')
<?php use App\JobStatus;
use App\University;
?>

@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/trainee/traineeList.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/trainee/traineeList.js')}}"></script>
@endpush
    

    @section('content')

<!--Form UI-->
<form class="form-horizontal" name="trainees_list_form" action="#" method="#">
    {{csrf_field()}}
    <div class="container form">
    @if(Session::has('msg')){!! Session::get('msg') !!}@endif
    <!--Heading-->
    <div class="heading">
        <u><h2>Trainees List</h2></u>
        </div>

      

<table id="myTable" class="col-md-6 col-md-4 table-responsive">
    
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>#</th>
          <th>Name</th>
          <th>University</th>
          <th>Degree</th>
          <th>Edit</th>
        </tr>
    
    </thead>
      <!--content part-->
  <tbody id="contentBody">
  <?php $i = 0?>
    @foreach($trainees as $trainee)
    <tr>
     <td>#{{++$i}}</td>
      <td>{{$trainee->nameE}}</td>
      <td>{{ $trainee->department->college->university->nameE }}</td>
      <td> {{ $trainee->JobStatus->nameE }}</td>
      <td><a href="{{ route('trainee.edit',$trainee->id) }}"><i class="fa fa-file fa-2x btn-primary"></i></a></td>
    </tr>
    @endforeach

       </tbody>
      </table>

  <!--cancel-->
  <div class="form-group">
      <div class="col-md-4 col-sm-push-4 text-center">
          <a href="{{route('trainee.create')}}" style="margin-top: 10px;" class="btn btn-success"
             id="new">{{trans('data.create')}}</a>
          <button type="submit" class="btn btn-danger" id="cancel">Cancel</button>
      </div>


     
    </div>
    </form>
 @endsection