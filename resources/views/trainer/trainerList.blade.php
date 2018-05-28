@extends('layout.index')
@section('title')
{{trans('data.listTrainer')}}
@append


<?php
use App\University;
use App\JobStatus;
?>
@push('styles')
    <link rel="stylesheet" href="{{ asset('custom/css/trainer/trainerList.css')}}">
@endpush

@push('scripts')
    <script src="{{ asset('custom/js/trainer/trainerList.js')}}"></script>
@endpush


@section('content')

    <!--Form UI-->
    <form class="form-horizontal" name="trainers_list_form" action="#" method="#">
        {{csrf_field()}}
        <div class="container form">
            @if(session('message'))
                <div class="alert alert-success alert-dismissable text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>{{session('message')}}</strong>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissable text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>{{session('error')}}</strong>
                </div>
            @endif

        <!--Heading-->
            <div class="heading">
                <u><h2>{{trans('data.listTrainer')}}</h2></u>
            </div>


            <table id="myTable" class="col-md-6 col-md-4 table-responsive">

                <!--heading part-->
                <thead class="row">
                <tr>
                    <th>{{trans('data.name')}}</th>
                    <th>{{trans('data.degree')}}</th>
                    <th>{{trans('data.university')}}</th>
                    <th>{{trans('data.edit')}}</th>
                    <th>{{trans('data.delete')}}</th>
                </tr>

                </thead>

                <!--content part-->
                <tbody id="contentBody">

                @foreach($trainers as $trainer)
                    <tr>
                        <td><a target ="_blank" href="trainer/{{$trainer->id}}/profile">{{$trainer->nameA}}</a></td>
                        <td>{{JobStatus::find($trainer->job_status_id)->nameA}}</td>
                        <td>{{$departments[($trainer->department_id)-1]->nameA}}</td>
                        <td class="edit"><a href="{{route('trainer.edit',$trainer->id)}}"><i
                                        class="fa fa-file fa-2x"></i></a></td>

                        <td class="danger">
                            {!! Form::open(array(
                                       'style' => 'display: inline-block;',
                                       'method' => 'DELETE',
                                       'onsubmit' => "return confirm('confirm delete');",
                                       'route' => ['trainer.destroy',$trainer->id])) !!}
                            {!! Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit','class' => 'btn btn-xs btn-danger')) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!--cancel-->
            <div class="form-group">
                <div class="col-md-4 col-sm-push-4 text-center">
                        <a href="{{route('trainer.create')}}" style="margin-top: 10px;" class="btn btn-success"
                id="new">{{trans('data.create')}}</a>
                    <a href="" class="btn btn-danger" id="cancel">{{trans('data.cancel')}}</a>
                    
                </div>


            </div>
    </form>
@endsection