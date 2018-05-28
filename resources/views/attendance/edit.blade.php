@extends('layout.index')
@section('title', 'Edit Attendance Registration')


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/attendanceLecture/attendance.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/attendanceLecture/attendance.js')}}"></script>
@endpush
    

    @section('content')

<!--Form UI-->
<form class="form-horizontal" name="attendance_add_form" action="{{route('attendance.store')}}" method="POST">
        {{csrf_field()}}
     <div class="container form">
    <!--Heading-->
    <div class="heading">
        <u><h2>Attendance Registration</h2></u>
        </div>

 <!--hint form-->
 <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
              <span class="hintstar">*</span>
              <span class="hint">Required Fields</span>
        </div>
      </div>

 <div class="col-md-12">
    <!--start date-->
    <div class="form-group">
        <label class="lbtext col-md-2 col-md-push-1 control-label">Start Date</label>
        <div class="col-md-3 col-md-push-1">
        <input type="date" class="form-control"required="required"  maxlength="14">
        <span class="form_hint">Max length= 14</span>
        <span class="star">*</span>
        </div>
 
    <!--Lecture date-->
        <label class="lbtext col-md-2 col-md-push-1 control-label">Lecture Date</label>
        <div class="col-md-3 col-md-push-1">
        <input type="date" class="form-control"required="required"  maxlength="14">
        <span class="form_hint">Max length= 14</span>
        <span class="star">*</span>
        </div>
        </div>

</div>

    <!--end date-->
    <div class="form-group">
        <label class="lbtext col-md-2 col-md-push-1 control-label">End Date</label>
        <div class="col-md-3 col-md-push-1">
        <input type="date" class="form-control"required="required"  maxlength="14">
        <span class="form_hint">Max length= 14</span>
        <span class="star">*</span>
        </div>
        </div>

        

<table id="myTable" class="col-md-6 col-md-4 table-responsive">
    
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Attendance</th>
          <th>Deparature</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
       <?php 
      // foreach($rows as $row)
      // {
           echo "<tr>";
            //static data
             echo "<td>" . "1" . "</td>";
             echo "<td>" . "Ahmed Mohamed" . "</td>";
             echo "<td><input name='tIn' type='time' required='required'  maxlength='14'>
                <span class='form_hint'>Max length= 14</span>
                 <span class='startime'>*</span></td>";
             echo "<td><input name='tOut' type='time' required='required'  maxlength='14'>
                <span class='form_hint'>Max length= 14</span>
                 <span class='startime'>*</span></td>";
         echo "</tr>";           
             
      // }
       ?>
       </tbody>
      </table>

       <!--save and cancel-->
   <div class="form-group">
        <div class="col-md-4 col-sm-push-4 text-center">
            <button type="submit" class="btn btn-success" id="save">{{trans('data.save')}}</button>
            <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
 </div>

    </div>
    </form>
 @endsection