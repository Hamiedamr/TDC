@extends('layout.index')
@section('title')
    {{trans('data.addCourse')}}
@append



@push('styles')
    <link rel="stylesheet" href="{{ asset('custom/css/courses/courseAdd.css')}}">
@endpush

@push('scripts')
    <script src="{{ asset('custom/js/courses/courseAdd.js')}}"></script>
@endpush

@section('content')

    {{ Form::open(['url' => route('course.store'),'method'=>'POST','name'=>'trainer_signup_form','class'=>'form-horizontal','id'=>'course_add_form','files'=>true]) }}

    <div class="container form">
        <!--Heading-->
        <div class="heading">
            <u><h2>{{trans('data.addCourse')}}</h2></u>
        </div>

        <!--hint form-->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-6">
                <span class="hintstar">*</span>
                <span class="hint">{{trans('data.rf')}}</span>
            </div>
        </div>


        <!--arabic code-->
        <div class="form-group">
            <label class="lbtext col-md-4 control-label">{{trans('data.arcode')}}</label>
            <div class="col-md-6">
                {{ Form::text('codeA', old('codeA'), array('class' => 'form-control','required'=>true,'id'=>'code_ar',
                       'placeholder'=>trans('data.arcodeholder'))) }}
                <span class="form_hint">{{trans('data.minmax')}}</span>
                <span class="star">*</span>
            </div>
        </div>


        <!--english code-->
        <div class="form-group">
            <label class="lbtext col-md-4 control-label">{{trans('data.encode')}}</label>
            <div class="col-md-6">
                {{ Form::text('codeE', old('codeE'), array('class' => 'form-control','required'=>true,'id'=>'code_en',
                       'placeholder'=>trans('data.encodeholder'))) }}
                <span class="form_hint">{{trans('data.minmax')}}</span>
                <span class="star">*</span>
            </div>
        </div>


        <!--arabic name-->
        <div class="form-group">
            <label class="lbtext col-md-4 control-label">{{trans('data.arname')}}</label>
            <div class="col-md-6">
                {{ Form::text('nameA', old('nameA'), array('class' => 'form-control','required'=>true,'id'=>'name_ar',
                       'placeholder'=>trans('data.arnameholder'))) }}
                <span class="form_hint">{{trans('data.minmax')}}</span>
                <span class="star">*</span>
            </div>
        </div>


        <!--english name-->
        <div class="form-group">
            <label class="lbtext col-md-4 control-label">{{trans('data.enname')}}</label>
            <div class="col-md-6">
                {{ Form::text('nameE', old('nameE'), array('class' => 'form-control','required'=>true,'id'=>'name_en',
                       'placeholder'=>trans('data.ennameholder'))) }}
                <span class="form_hint">{{trans('data.minmax')}}</span>
                <span class="star">*</span>
            </div>
        </div>

        <!--program type-->
        <div class="form-group">
            <label class="lbtext col-md-2 col-md-push-2 control-label check">{{trans('data.programtype')}}</label>
            <div class="col-md-6 col-md-push-2" style="margin-left:20px">
                <label><input id="radio_button" type="radio" name="programType" value="promotion"
                              required> {{trans('data.promotion')}}</label>
                <label><input id="radio_button" type="radio" name="programType"
                              value="external"> {{trans('data.external')}}</label>
                <span class="startype">*</span>
                <span class="form_hint">Check the correct radio button</span>
            </div>
        </div>


        <!--main program-->
        <div class="form-group dropdown">

            <label class="lbtext col-md-2 col-md-push-2 control-label">{{trans('data.mainprogram')}}</label>
            <div class="col-md-6 col-md-push-2">
                <select id="main_program" name="program_id" required="required">
                    <option value="" disabled="disabled" selected>----- {{trans('data.smainprogram')}}------
                    </option>
                    @foreach ($types as $category)
                        <option value="{{ $category['id'] }}">
                            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $category['nameA'] }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $category['nameE'] }}
                            @endif
                        </option>
                    @endforeach
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="starmain">*</span>
            </div>

        </div>

        <!--total hours-->
        <div class="form-group">
            <label class="lbtext col-md-4 control-label">{{trans('data.totalhours')}}</label>
            <div class="col-md-6">
                {{ Form::number('totalHours', old('totalHours'), array('class' => 'form-control','id'=>'course_hr',
                        'placeholder'=>'Total Hours','minlength'=>'1','required'=>true)) }}
                <span class="form_hint">{{trans('data.min1')}}</span>
                <span class="star">*</span>
            </div>
        </div>

        <!--attach file-->
        <div style="margin-bottom:50px;">
            <div id="form1" runat="server">
                <label class="lbtext col-md-2 col-md-push-2 control-label">{{trans('data.attachfile')}}</label>
                <div><input id="fileinput" class="col-md-6 col-md-push-2" name="file" type='file'/></div>
            </div>
        </div>
        `

        
        <!--target groups-->
        <div class="form-group dropdown">
            <label class="lbtext col-md-3 col-md-push-1 control-label">{{trans('data.targetCategories')}}</label>
            <div class="col-md-6 col-md-push-1">
                <select id="target" name="" required="required" multiple>
                    <option value="" disabled="disabled">{{trans('data.stargetCategories')}}</option>
             
                       @foreach($statuses as $statu)
                        <option value="{{$statu->id}}">
                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $statu['nameA'] }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $statu['nameE'] }}
                            @endif
                        
                        </option>
                        @endforeach
                  
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="starunallowed">*</span>
            </div>
        </div>


        <!--unallowed departments-->
        <div class="form-group dropdown">
            <label class="lbtext col-md-3 col-md-push-1 control-label">{{trans('data.excludedcollege')}}</label>
            <div class="col-md-6 col-md-push-1">
                <select id="unallowed" name="main_type_ids[]" required="required" multiple>
                    <option value="" disabled="disabled">{{trans('data.sexcludedcollege')}}</option>
                    @foreach ($types as $type)
                        <option value="{{ $type['id'] }}">
                            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                            {{ $type['nameA'] }}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                            {{ $type['nameE'] }}
                            @endif
                        </option>
                    @endforeach
                </select>
                <span class="form_hint">{{trans('data.selectlist')}}</span>
                <span class="starunallowed">*</span>
            </div>

        </div>


        <!--min number for course registration-->
        <div class="form-group">
            <label class="lbtext col-md-4 control-label">{{trans('data.minnoopen')}}</label>
            <div class="col-md-6">
                {{ Form::number('countToOpen', old('countToOpen'), array('class' => 'form-control','id'=>'arid',
                        'placeholder'=>trans('data.minnoopenholder'),'minlength'=>'1','required'=>true)) }}
                <span class="form_hint">{{trans('data.min1')}}</span>
                <span class="star">*</span>
            </div>
        </div>

        <!--max number for course registration without fees-->
        <div class="form-group">
            <label class="lbtext col-md-4 control-label">{{trans('data.maxno')}}</label>
            <div class="col-md-6">
                {{ Form::number('freeCount', old('freeCount'), array('class' => 'form-control','id'=>'arid',
                        'placeholder'=>trans('data.maxnoholder'),'minlength'=>'1','required'=>true)) }}
                <span class="form_hint">{{trans('data.min1')}}</span>
                <span class="star">*</span>
            </div>
        </div>

        <!--obligatory-->
        <div class="form-group">
            <label class="lbtext col-md-2 col-md-push-2 control-label check">{{trans('data.obligatory')}}</label>
            <div class="col-md-8 col-md-push-2" style="margin-left:20px">
                <input id="check_box" type="checkbox" name="mandatory" value="0" checked hidden>
                <input id="check_box" type="checkbox" name="mandatory" value="1">
                
            </div>
        </div>


        <!--course type-->
        <div class="form-group">
            <label class="lbtext col-md-2 col-md-push-2 control-label check">{{trans('data.coursetype')}}</label>
            <div class="col-md-8 col-md-push-2" style="margin-left:20px">
                <label><input id="radio_button" type="radio" name="type" value="practical"
                              required> {{trans('data.practical')}}</label>
                <label><input id="radio_button" type="radio" name="type"
                              value="theoretical"> {{trans('data.theoritical')}}</label>
                <span class="starcourse">*</span>
                <span class="form_hint">Check the correct radio button</span>
            </div>
        </div>


        <!--save and cancel-->
        <div class="form-group">
            <div class="col-md-4 col-sm-push-5 text-center">
                <button type="submit" class="btn btn-success" id="save">{{trans('data.save')}}</button>
                <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
            </div>
        </div>

    </div>

    {{ Form::close() }}

@endsection


 

