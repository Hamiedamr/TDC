@extends('layout.index')
@section('title')
    {{trans('data.addtraining')}}
@append


@push('styles')
    <link rel="stylesheet" href="{{ asset('custom/css/training/trainingAdd.css')}}">
@endpush




@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!--Form UI-->
    {{ Form::open(['url' => route('training.store'),'method'=>'POST','name'=>'training_add_list_form','files'=>true,'class'=>'form-horizontal']) }}
    <div class="container form">
        <!--Heading-->
        <div class="heading">
            <u><h2>{{trans('data.addtraining')}}</h2></u>
        </div>

        <!--hint form-->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-6">
                <span class="hintstar">*</span>
                <span class="hint">{{trans('data.rf')}}</span>
            </div>
        </div>

        <div class="col-md-10"><!--start outer div-->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

        <!--program-->
            <div class="form-group dropdown">

                <label class="col-md-1 col-md-push-3 control-label">{{trans('data.program')}}</label>
                <div class="col-md-6 col-md-push-3">
                    <select id="spec" name="course_id" required="required">
                        <option value="" disabled="disabled" selected>{{trans('data.sprogram')}}</option>
                        @foreach($courses as $course)
                            <option value="{{$course->id}}">
                                @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                    {{$course ->nameA }}
                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                    {{$course ->nameE }}
                                @endif
                            </option>
                        @endforeach
                    </select>
                    <span class="form_hint">{{trans('data.selectlist')}}</span>
                    <span class="stardropdown">*</span>
                </div>
            </div>


            <!--hall-->
            <div class="form-group dropdown">

                <label class="col-md-1 col-md-push-3 control-label">{{trans('data.hall')}}</label>
                <div class="col-md-6 col-md-push-3">
                    <select id="spec" name="hall_id" required="required">
                        <option value="" disabled="disabled" selected>{{trans('data.shall')}}</option>
                        @foreach($halls as $hall)
                            <option value="{{$hall->id}}">
                                {{$hall->name}}

                            </option>
                        @endforeach
                    </select>
                </div>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="stardropdown">*</span>
            </div>


            <!--time-->
            <div class="form-group dropdown">

                <label class="col-md-1 col-md-push-3 control-label">{{trans('data.time')}}</label>
                <div class="col-md-6 col-md-push-3">
                    <select id="spec" name="time" required="required">
                        <option value="" disabled="disabled" selected>{{trans('data.selectlist')}}</option>
                        <option value="am">{{trans('data.am')}}</option>
                        <option value="pm">{{trans('data.pm')}}</option>
                    </select>
                </div>
                <label class="control-label">(am-pm)</label>
                <span class="stardropdown">*</span>
            </div>


            <!--start date-->
            <div class="form-group">
                <label class="col-md-4 control-label">{{trans('data.startdate')}}</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" required="required" maxlenght="10" name="startDate"
                           id="arid" placeholder="yy-mm-dd">
                    <span class="form_hint">{{trans('data.pickdate')}}</span>
                    <span class="stardate">*</span>
                </div>
            </div>


            <!--end date-->
            <div class="form-group">
                <label class="col-md-4 control-label">{{trans('data.enddate')}}</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" required="required" maxlenght="10" name="endDate" id="arid"
                           placeholder="yy-mm-dd">
                    <span class="form_hint">{{trans('data.pickdate')}}</span>
                    <span class="stardate">*</span>
                </div>
            </div>

            <!--start registration date-->
            <div class="form-group">
                <label class="col-md-4 control-label">{{trans('data.startbookdate')}}</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" required="required" maxlenght="10" name="bookingStartDate"
                           id="arid" placeholder="yy-mm-dd">
                    <span class="form_hint">{{trans('data.pickdate')}}</span>
                    <span class="stardate">*</span>
                </div>
            </div>

            <!--end registration date-->
            <div class="form-group">
                <label class="col-md-4 control-label">{{trans('data.endbookdate')}}</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" required="required" maxlenght="10" name="bookingEndDate"
                           id="arid" placeholder="yy-mm-dd">
                    <span class="form_hint">{{trans('data.pickdate')}}</span>
                    <span class="stardate">*</span>
                </div>
            </div>


            <!--Heading-->
            <div class="heading">
                <u><h2>{{trans('data.addLecture')}}</h2></u>
            </div>
            <!--lecture date-->
            <div class="form-group">
                <label class="col-md-4 control-label">{{trans('data.lecturedate')}}</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" required="required" maxlenght="10" name="arid" id="arid"
                           placeholder="yy-mm-dd">
                    <span class="form_hint">{{trans('data.pickdate')}}</span>
                    <span class="stardate">*</span>
                </div>
            </div>


            <!--Trainers-->
            <div class="form-group dropdown">

                <label class="col-md-1 col-md-push-3 control-label">{{trans('data.trainers')}}</label>
                <div class="col-md-6 col-md-push-3">
                    <select id="spec" name="spec" required="required">
                        <option value="" disabled="disabled" selected>{{trans('data.selectTrainers')}}</option>
                        @foreach($trainers as $trainer)
                            <option value="">
                                @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                    {{ $trainer->nameA }}
                                @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                    {{ $trainer->nameE }}
                                @endif
                            </option>
                        @endforeach
                    </select>
                </div>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="stardropdown">*</span>
            </div>


            <!--lecture hours-->
            <div class="form-group">
                <label class="col-md-4 control-label">{{trans('data.lecturehrsno')}}</label>
                <div class="col-md-6">
                    <input type="number" class="form-control" required="required" minlenght="1" maxlenght="3"
                           name="arid" id="arid" placeholder="{{trans('data.lecturehrsno')}}">
                    <span class="form_hint">{{trans('data.min1max3')}}</span>
                    <span class="starhrs">*</span>
                </div>
            </div>

            <!--online-->
            <div class="form-group">
                <label class="col-md-2 col-md-push-2 control-label check">{{trans('data.online')}}</label>
                <div class="col-md-8 col-md-push-2" style="margin-left:20px">
                    <input id="check_box" type="checkbox" name="optcheck">
                    
                </div>
            </div>


            <!--attach file-->
            <div style="margin-bottom:70px;">
                <div id="form1" runat="server">
                    <label class="lbtext col-md-2 col-md-push-2 control-label">{{trans('data.attachfile')}}</label>
                    <div><input id="fileinput" class="col-md-6 col-md-push-2" name="file" type='file'/></div>
                </div>
            </div>


            <!--save and cancel-->
            <div class="form-group">
                <div class="col-md-4 col-md-push-5 text-center">
                    <button type="submit" class="btn btn-success" id="save">{{ trans('data.save') }}</button>
                    <button type="submit" class="btn btn-danger">{{ trans('data.cancel') }}</button>
                </div>
            </div>

        </div>


    {{ Form::close() }}

@endsection


 

