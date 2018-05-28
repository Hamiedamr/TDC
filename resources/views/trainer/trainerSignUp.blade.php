@extends('layout.index')
@section('title')
    {{trans('data.trainerSignup')}}
@append

@push('styles')
    <link rel="stylesheet" href="{{asset('custom/css/trainer/trainerSignUp.css')}}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{asset('custom/js/trainer/trainerSignUp.js')}}"></script>
@endpush



@section('content')

    {{ Form::open(['url' => route('trainer.store'),'method'=>'POST','name'=>'trainer_signup_form','files'=>true]) }}
    <div class="container form">

        <!--Heading-->
        <div class="heading">
            <u><h2>{{trans('data.trainerSignup')}}</h2></u>
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

            <div class="col-md-8 col-md-push-1"><!--start inner div-->
                <!--arabic name-->
                <div class="form-group">
                    <label class="lbtext col-md-4 control-label">{{trans('data.arname')}}</label>
                    <div class="col-md-8">
                        {{ Form::text('nameA', old('nameA'), array('class' => 'form-control','id'=>'trainer_ar',
                        'placeholder'=>trans('data.arnameholder'),'minlength'=>'3','maxlength'=>'191')) }}
                        <span class="form_hint">{{trans('data.minmax')}}</span>
                        <span class="star">*</span>
                    </div>
                </div>
                <!--english name-->
                <div class="form-group">
                    <label class="lbtext col-md-4 control-label">{{trans('data.enname')}}</label>
                    <div class="col-md-8">
                        {{ Form::text('nameE', old('nameE'), array('class' => 'form-control','id'=>'trainer_en',
                        'placeholder'=>trans('data.ennameholder'),'minlength'=>'3','maxlength'=>'191')) }}
                        <span class="form_hint">{{trans('data.minmax')}}</span>
                        <span class="star">*</span>
                    </div>
                </div>
                <!--university name-->
                <div class="form-group dropdown">
                    <label class="lbtext col-md-4 control-label">{{trans('data.university')}}</label>
                    <div class="col-md-8">
                        <select id="university" name="university">
                            <option value="">----- {{trans('data.selectUniversity')}} ------</option>
                            @foreach($universities as $univ)
                                <option value="{{$univ->id}}">
                                    @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                        {{$univ->nameA}}
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        {{$univ->nameE}}
                                    @endif
                                </option>
                            @endforeach
                        </select>
                        <span class="form_hint">{{trans('data.selectlist')}}</span>
                        <span class="staruni">*</span>
                    </div>
                </div>
                <!--college name-->
                <div class="form-group dropdown">
                    <label class="lbtext col-md-4 control-label">{{trans('data.college')}}</label>
                    <div class="col-md-8">
                        <select id="college" name="college">
                            <option value="">----- {{trans('data.selectCollege')}} ------</option>

                        </select>
                        <span class="form_hint">{{trans('data.selectlist')}}</span>
                        <span class="starcoll">*</span>
                    </div>
                </div>
                <!--Department name-->
                <div class="form-group dropdown">
                    <label class="lbtext col-md-4 control-label">{{trans('data.department')}}</label>
                    <div class="col-md-8">
                        <select id="department" name="department_id">
                            <option value="">----- {{trans('data.selectDepartment')}} ------</option>
                        </select>
                        <span class="form_hint">{{trans('data.selectlist')}}</span>
                        <span class="stardep">*</span>
                    </div>


                    <!--address-->
                    <div class="form-group">
                        <label class="lbtext col-md-4 control-label">{{trans('data.address')}}</label>
                        <div class="col-md-8">
                            {{ Form::text('address', old('address'), array('class' => 'form-control','id'=>'trainer_address',
                        'placeholder'=>trans('data.address'))) }}
                        </div>

                    </div>

                    <!--Phone no.-->
                    <div class="form-group">
                        <label class="lbtext col-md-4 control-label">{{trans('data.phone')}}</label>
                        <div class="col-md-8">
                            {{ Form::number('phone', old('phone'), array('class' => 'form-control','id'=>'trainer_phone',
                        'placeholder'=>trans('data.phone'),'minlength'=>'11','maxlength'=>'191')) }}
                        </div>
                        <span class="form_hint">{{trans('data.phonev')}}</span>
                        <span class="starphone">*</span>
                    </div>


                    <!--nationality-->
                    <div class="form-group dropdown">
                        <label class="lbtext col-md-4 control-label">{{trans('data.nationality')}}</label>
                        <div class="col-md-8">
                            <select id="nationality" name="nationality_id">
                                <option value="" disabled="disabled" selected>----- {{trans('data.snationality')}}
                                    ------
                                </option>
                                @foreach($nationalities as $nationality)
                                    <option value="{{$nationality->id}}">
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$nationality->nameA}}
                                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                            {{$nationality->nameE}}
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            <span class="form_hint">{{trans('data.selectlist')}}</span>
                            <span class="starnat">*</span>
                        </div>
                    </div>

                    <!----national id-->
                    <div class="form-group">
                        <label class="lbtext col-md-4 control-label">{{trans('data.nationalid')}}</label>
                        <div class="col-md-8">
                            {{ Form::text('nationalId', old('nationalId'), array('class' => 'form-control','id'=>'trainer_national_id',
                        'placeholder'=>trans('data.nationalid'),'pattern'=>'[0-9]{14}')) }}
                        </div>
                        <span class="form_hint">{{trans('data.nationalidv')}}</span>
                        <span class="starphone">*</span>
                    </div>


                    <!--email-->
                    <div class="form-group">
                        <label class="lbtext col-md-4 control-label">{{trans('data.email')}}</label>
                        <div class="col-md-8">
                            <input type="email" class="form-control" minlength="64" maxlength="191" name="email"
                                   id="trainer_email" placeholder="{{trans('data.emailholder')}}">
                            <span class="form_hintemail">{{trans('data.emailholder')}}</span>
                            <span class="star">*</span>
                        </div>
                    </div>


                    <!--career status-->
                    <div class="form-group dropdown">
                        <label class="lbtext col-md-4 control-label">{{trans('data.careerstatus')}}</label>
                        <div class="col-md-8">
                            <select id="cs" name="job_status_id">
                                <option value="" disabled="disabled" selected>----- {{trans('data.scareerstatus')}}
                                    ------
                                </option>
                                @foreach($statuses as $status)
                                    <option value="{{$status->id}}">
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$status->nameA}}
                                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                            {{$status->nameE}}
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            <span class="form_hint">{{trans('data.selectlist')}}</span>
                            <span class="starjob">*</span>
                        </div>
                    </div>

                    <!--gender-->
                    <div class="form-group">
                        <label class="col-md-4 control-label check">{{trans('data.gender')}}</label>
                        <div class="form-group col-md-4" style="margin-left:20px">
                            <label><input id="radio_button1" type="radio" name="gender"
                                          value="male">{{trans('data.male')}}</label>
                            <label><input id="radio_button2" type="radio" name="gender"
                                          value="female">{{trans('data.female')}}</label>
                            <span class="starg">*</span>
                            <span class="form_hint">Check the correct radio button</span>
                        </div>
                    </div>


                    <!--training programs-->
                    <div class="form-group dropdown">

                        <label class="col-md-4 control-label">{{trans('data.trainingPrograms')}}</label>
                        <div class="col-md-8">
                            <select id="tp" name="course_id" multiple>
                                <option>----- {{trans('data.strainingPrograms')}} -----</option>
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                            {{$course->nameA }}
                                        @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                            {{ $course->nameE}}
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            <span class="form_hint">{{trans('data.selectlist')}}</span>
                            <span class="starp">*</span>
                        </div>
                    </div>


                    <!--other programs-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">{{trans('data.otherPrograms')}}</label>
                        <div class="col-md-8">
                                <textarea rows="10" cols="10" maxlength="300" type="text" class="form-control"
                                          name="otherPrograms" id="trainer_others"
                                          placeholder="{{trans('data.otherPrograms')}}"></textarea>
                        </div>
                    </div>


                </div><!--end inner div-->

            </div><!--end outer div-->

            <!--this div is for image-->
            <div class="col-md-3 col-md-push-2 photo">

                <img src="{{asset('custom/images/user.png')}}" alt="Upload Photo" maxlength="191"><br>
                <input type="file" name="photo" onchange="previewFile()">

            </div>

        </div>

        <!--save and cancel-->
        <div class="form-group">
            <div class="col-md-4 col-sm-push-4 text-center buttonsdiv">
                <button type="submit" class="btn btn-success" id="save">{{trans('data.save')}}</button>
                <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
            </div>
        </div>
    </div>
    {{ Form::close() }}
@endsection



