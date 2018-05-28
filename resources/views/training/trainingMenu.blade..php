@extends('layout.index')
@section('title', 'Training Menu')


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/training/trainingMenu.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/training/trainingMenu.js')}}"></script>
@endpush
   

    @section('content')
<!--Form UI-->
<form class="form-horizontal" name="training_menu_form" action="#" method="post">
    {{csrf_field()}}
  <div class="container form">
    <!--Heading-->
    <div class="heading">
        <u><h2>Trainings Menu For <?php echo "Var"?> Month</h2></u>
    </div>
    <div class="allCard">
    <div class="card cardFirst col-md-3">
            <div class="card-body">
              <label id="weekOne" class="card-title">First Week</label>
              <p id="contentOne"  class="card-text">1-7 mars</p>
            </div>
    </div>
    <div class="card cardSecond col-md-3">
            <div class="card-body">
              <label id="weekTwo" class="card-title">Second Week</label>
              <p id="contentTwo" class="card-text">8-14 mars</p>
            </div>
    </div>
    <div class="card cardThird col-md-3">
            <div class="card-body">
              <label id="weekThree" class="card-title">Third Week</label>
              <p id="contentThree" class="card-text">15-21 mars</p>
            </div>
    </div>
    <div class="card cardFourth col-md-3">
            <div class="card-body">
              <label id="weekFour" class="card-title">Fourth Week</label>
              <p id="contentFour" class="card-text">22-28 mars</p>
            </div>
    </div>
</div>

      <!--cancel-->
      <div class="form-group">
      <div class="col-md-2 col-md-push-5">
          <button type="submit" class="btn btn-danger">Cancel</button>
      </div>
    </div> 


    </div>

    </form>
 @endsection