@extends('layout.index')
@section('title')
    {{trans('data.listTraining')}}
@append


@push('styles')
    <link rel="stylesheet" href="{{ asset('custom/css/training/trainingList.css')}}">
@endpush

@push('scripts')
    <script src="{{ asset('custom/js/training/trainingList.js')}}"></script>
@endpush


@section('content')
    <!--Form UI-->
    <form class="form-horizontal" name="training_list_form" action="#" method="post">
        {{csrf_field()}}
        <div class="container form">
        @if(Session::has('msg')){!! Session::get('msg') !!}@endif
        <!--Heading-->
            <div class="heading">
                <u><h2>Trainings List For <?php echo "Var"?> Month</h2></u>
                <u><h2>Week <?php echo "Var"?></h2></u>
            </div>


            <?php
            // foreach($tables as $table)
            // {
            echo "<u>";
            //static data
            echo "<h2 id='day'>" . "Day" . "</h2>";
            echo "</u>";
            ?>

            <table id='myTable' class='col-md-6 col-sm-4 table-responsive'>

                <!--heading part-->
                <thead class="row">
                <tr>
                    <th>#</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>End Date</th>
                    <th>Am/Pm</th>
                    <th>Days#</th>
                    <th>Places</th>
                    <th>Book</th>
                    <th>Waiting List</th>
                </tr>

                </thead>

                <!--content part-->
                <tbody id="contentBody">

                @foreach($trainings as $training)

                    <tr>
                        <td id='trainingID'>{{ $loop->index + 1 }}</td>
                        <td id='codeID'>
                            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                {{ $training->course->codeA}}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                {{  $training->course->codeE }}
                            @endif
                        </td>
                        <td id='nameID'>
                            @if(LaravelLocalization::getCurrentLocale() == 'ar')
                                {{ $training->course->nameA}}
                            @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                {{  $training->course->nameE }}
                            @endif
                        </td>
                        <td id='locationID'>{{ $training->hall->name }}</td>
                        <td id='enddateID'>{{ $training->endDate }}</td>
                        <td id='timeID'>{{ $training->time }}</td>
                        <td id='daysID'>
                            <?php
                            $start =strtotime($training->startDate);
                            $end =strtotime($training->endDate);
                            $diff = abs(strtotime($end) - strtotime($start));
                            $y = date("y", $diff);
                            $m = date("m", $diff);
                            $d = date("d", $diff);
                            if($m > 0){
                                echo $m*30 + $d;
                            }else{
                                echo $d;
                            }

                            ?>
                        </td>
                        <td id='placesID'>{{ $training->hall->name }}</td>
                        <td>
                            <input type='checkbox' id='checkID' required>
                            <span class='hide'>Booking is full</span>
                        </td>
                        <td><input type='checkbox' id='waitingID' required></td>

                    </tr>
                @endforeach
                </tbody>
            </table>


            <!--cancel-->
            <div class="form-group">
                <div class="col-md-2 col-md-push-5">
                    <a class="btn btn-success" href="{{ route('training.create') }}">{{trans('data.create')}}</a>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
            </div>


        </div>

    </form>
@endsection