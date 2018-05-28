@extends('layout.index')
@section('title')
    {{trans('data.listProgram')}}
@append


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
        @if(Session::has('msg')){!! Session::get('msg') !!}@endif
            <!--Heading-->
            <div class="heading">
                <u><h2>{{trans('data.listProgram')}}</h2></u>
            </div>


            <table id="myTable" class="col-md-6 col-md-4 table-responsive">
                <thead class="row">
                <tr>
                    <th>#</th>
                    <th>{{trans('data.name')}}</th>
                    <th>{{trans('data.listCourse')}}</th>
                </tr>

                </thead>
                <!--content part-->
                <tbody id="contentBody">
                <?php $i = 0?>
                @foreach($programs as $program)
                    <?php $i++;?>
                    <tr>
                        <td>{{ $i}}</td>
                        <td>
                        <a href="{{ route('program.edit', $program['id']) }}">
                            @if(LaravelLocalization::getCurrentLocale() == 'en')
                                {{$program->nameE}}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'ar')
                                {{$program->nameA}}
                            @endif
                            </a>
                        </td>
                        <td><a href="{{ route('program.course', $program['id']) }}"><i
                                        class="fa fa-eye fa-2x"></i></a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <!--add and cancel-->
            <div class="form-group">
                <div class="col-md-4 col-sm-push-5">
                    <a href="{{route('program.create')}}" class="btn btn-success" id="new">{{trans('data.create')}}</a>
                    <button type="submit" class="btn btn-danger" id="cancel">{{trans('data.cancel')}}</button>
                </div>
            </div>
        </div>

    </form>
@endsection