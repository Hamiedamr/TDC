@extends('layout.index')
@section('title', 'Training Lectures List')


@push('styles')
    <link rel="stylesheet" href="{{ asset('custom/css/trainingLecture/trainingLectureList.css')}}">
@endpush

@push('scripts')
    <script src="{{ asset('custom/js/trainingLecture/trainingLectureList.js')}}"></script>
@endpush


@section('content')

    <!--Form UI-->
    <div class="container form">
    @if(Session::has('msg')){!! Session::get('msg') !!}@endif
    <!--Heading-->
        <div class="heading">
            <u><h2>Training Lectures List</h2></u>
        </div>


        <div class="text-center"
        <!--start date-->
        <div class="form-group">
            <label class="lbtext col-md-2 col-md-push-2 control-label">Start Date</label>
            <div class="col-md-3 col-md-push-2">
                <input type="date" class="form-control" name="startDate" required="required">
            </div>
            <span class="starstart">*</span>
        </div>

        <!--end date-->
        <div class="form-group">
            <label class="lbtext col-md-2 col-md-push-2 control-label">End Date</label>
            <div class="col-md-3 col-md-push-2">
                <input type="date" class="form-control" name="endDate" required="required">
            </div>
            <span class="starend">*</span>
        </div>

    </div>


    <table id="myTable" class="col-md-6 col-sm-4 table-responsive">

        <!--heading part-->
        <thead class="row">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Date</th>
            <th>hrs</th>
            <th>In/Out</th>
            <th>Online</th>
            <th>Delete</th>

        </tr>

        </thead>

        <!--content part-->
        <tbody id="contentBody">
        @foreach($lectures as $lecture)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>
                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                        {{ $lecture->training->course->nameA }}
                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                        {{ $lecture->training->course->nameE }}
                    @endif

                </td>
                <td>
                    <label name='date' id='lecturedate'>
                        {{ $lecture->date }}
                    </label>
                </td>
                <td><label>{{ $lecture->hours }}</label></td>
                <td id='row_id'><a href='#' class='btn btn-success'> <i class='fa fa-file'></i>Register</a></td>
                <td><a href='#'><input name='online' type='checkbox'></a></td>
                <td id='remove_id'>
                    {!! Form::open(array(
                                   'style' => 'display: inline-block;',
                                   'method' => 'DELETE',
                                   'onsubmit' => "return confirm('confirm delete');",
                                   'route' => ['lecture.destroy',$lecture->id])) !!}
                    {!! Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit','class' => 'btn btn-xs btn-danger')) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!--add and cancel-->
    <div class="form-group">
        <div class="col-md-4 col-sm-push-5">
            <a class="btn btn-success" href="{{ route('lecture.create') }}">{{trans('data.create')}}</a>
            <button type="submit" class="btn btn-danger">Cancel</button>
        </div>
    </div>

    </div>
@endsection