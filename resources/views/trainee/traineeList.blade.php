@extends('layout.index')
@section('title', 'Trainees List')


@push('styles')
<link rel="stylesheet" href="{{ asset('custom/css/trainee/traineeList.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('custom/js/trainee/traineeList.js')}}"></script>
@endpush
    

    @section('content')

<!--Form UI-->
<form class="form-horizontal" action="#" method="#">
    {{csrf_field()}}
    <div class="container form">
    <!--Heading-->
    <div class="heading">
        <h2>Trainees List</h2>
        </div>

      

<table id="myTable" class="col-md-10 col-md-push-1">
    
  <!--heading part-->
    <thead class="row">
      <tr>
          <th>Trainee's name</th>
          <th>University</th>
          <th>Academic degree</th>
          <th>Edit academic degree</th>
        </tr>
    
    </thead>

      <!--content part-->
  <tbody id="contentBody">
       <?php 
      // foreach($rows as $row)
      // {
           echo "<tr>";
            /* echo "<td>" . $row['noDB'] . "</td>";
             echo "<td>" . $row['facultyDB'] . "</td>";
             echo "<td>" . $row['addressDB'] . "</td>";
             echo "<td>" . $row['universitiesDB'] . "</td>";
             */
            //static data
             echo "<td>" . "Ahmed Mohamed " . "</td>";
             echo "<td>" . "Ain shams " . "</td>";
             echo "<td>" . "Assistant teacher" . "</td>";
             echo "<td class='edit'>
                <i class='fa fa-file'></i>
                </td>";
                echo "</tr>";


                
                echo "<tr>";
            //static data
             echo "<td>" . "nada medhat " . "</td>";
             echo "<td>" . "cairo" . "</td>";
             echo "<td>" . "bachelor degree" . "</td>";
             echo "<td>
                <i class='fa fa-file'></i>
                </td>";
                echo "</tr>";

                  


      // }
       ?>
       </tbody>
      </table>

  <!--cancel-->
  <div class="form-group">
      <div class="col-md-8 col-sm-push-2 text-center">
          <button type="submit" class="btn btn-danger" id="cancel">Cancel</button>
      </div>


     
    </div>
    </form>
 @endsection