@extends('layout.index')
@section('title')
    {{trans('data.listHall')}}
@append


@push('styles')
    <link rel="stylesheet" href="{{ asset('custom/css/halls/hallsList.css')}}">
@endpush

@push('scripts')
    <script src="{{ asset('custom/js/halls/hallsList.js')}}"></script>
@endpush


@section('content')
    <!--Form UI-->
    <div class="container form">
    @if(Session::has('msg')){!! Session::get('msg') !!}@endif
        <!--Heading-->
        <div class="heading">
            <u><h2>{{trans('data.listHall')}}</h2></u>
        </div>


        <table id="myTable" class="col-md-6 col-md-4 table-responsive">

            <!--heading part-->
            <thead class="row">
            <tr>
                <th>#</th>
                <th>{{trans('data.name')}}</th>
                <th>{{trans('data.capacity')}}</th>
                <th>{{trans('data.delete')}}</th>
            </tr>

            </thead>

            <!--content part-->
            <tbody id="contentBody">
            @foreach ($halls as $hall)
                <tr>
                    <td id="hallsID">{{ $loop->index + 1 }}</td>
                    <td id="halls_name"><a href="{{ route('hall.edit', $hall['id']) }}">{{ $hall['name'] }}</a></td>
                    <td id="halls_capacity">{{ $hall['capacity'] }}</td>
                    <td class="danger">
                        {!! Form::open(array(
                                   'style' => 'display: inline-block;',
                                   'method' => 'DELETE',
                                   'onsubmit' => "return confirm('confirm delete');",
                                   'route' => ['hall.destroy',$hall->id])) !!}
                        {!! Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit','class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <!--add and cancel-->
        <div class="form-group">
            <div class="col-md-4 col-md-push-5">
                <a class="btn btn-success" href="{{ route('hall.create') }}">{{trans('data.create')}}</a>
                <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
            </div>
        </div>
    </div>
@endsection