@extends('layout.index')
@section('title','Trainee Evaluation Add')
      
  @push('styles')
 <link rel="stylesheet" href="{{asset('custom/css/trainee/evaluationAdd.css')}}">
  @endpush

  @push('scripts')
  <script src="{{ asset('custom/js/trainee/evaluationAdd.js')}}"></script>
   @endpush

  @section('content') 
   <!--Form UI-->
 <form class="form-horizontal" name="evaluation_add_form" action="#" method="POST">
   {{csrf_field()}}
   <div class="container form">

      <!--Heading-->
      <div class="heading">
          <u><h2>Trainee Evaluation Add</h2></u>
      </div>

      <!--hint form-->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
              <span class="hintstar">*</span>
              <span class="hint">Required Fields</span>
        </div>
      </div>


      
      <div class="form-group">
            <!--Academic Degree-->
            <label class="lbtext col-md-2 control-label">Degree</label>
            <div class="col-md-4">
                <label id="" name="" class="control-label">Academic Degree</label>
            </div>

            <!--date-->
            <label class="lbtext col-md-1 control-label">Date</label>
            <div class="col-md-4">
            <input type="date" class="form-control" id=""name="" required="required">
            <span class="stardate">*</span>
            </div>
      </div>


      <!--Note-->
      <div class="instructions">
            <p>Put beside each point your
                 evaluation degree from: (1= Never  2=Rarely     3-Usually     4-Always)
            </p>
      </div>



      <table id="myTable" class="col-md-6 col-sm-4 table-responsive">
        
       <!--heading part-->
         <thead class="row">
           <tr>
               <th>#</th>
               <th>points</th>
               <th>First Day</th>
               <th>Second Day</th>
             </tr>
         
         </thead>
     
           <!--content part-->
       <tbody id="contentBody">
            <?php 
             // foreach($rows as $row)
             // {
             echo "<tr>";
               //static data
               echo "<td id=''>" . "1" . "</td>";
               echo "<td id=''>" . "Trainer states the aim" . "</td>";
               echo "<td><select class='dropdown' id='' name='' required='required'><option value='' disabled='disabled' selected>0</option></select></td>";
               echo "<td><select class='dropdown' id='' name='' required='required'><option value='' disabled='disabled' selected>0</option></select></td>";
               echo "</tr>";

               echo "<td id=''>" . "2" . "</td>";
               echo "<td id=''>" . "Trainer language obvious" . "</td>";
               echo "<td><select class='dropdown' id='' name='' required='required'><option value='' disabled='disabled' selected>0</option></select></td>";
               echo "<td><select class='dropdown' id='' name='' required='required'><option value='' disabled='disabled' selected>0</option></select></td>";
               echo "</tr>";
     
                
     
              // }
            ?>
        </tbody>
      </table>


      <div class="container areas">
    
    <!--You learn from this course....-->
    <div class="form-group">
        <textarea type="text" class="form-control" id="" name="" required="required"  maxlength="300" placeholder="You learn from this course...."></textarea>
     </div>

        <!--Points i liked-->
        <div class="form-group">
            <textarea type="text" class="form-control" id="" name="" required="required"  maxlength="300" placeholder="Points you liked..."></textarea>
        </div>

        <!--I want you to improve...-->
      <div class="form-group">
        <textarea type="text" class="form-control" id="" name="" required="required"  maxlength="300" placeholder="you want to improve..."></textarea>
    </div>

      <!--Practical work...-->
      <div class="form-group">
          <textarea type="text" class="form-control" id="" name="" required="required"  maxlength="300" placeholder="Practical work..."></textarea>
           
      </div>
</div>


  <!--save and cancel-->
    <div class="form-group">
        <div class="col-md-4 col-md-push-4 text-center">
            <button type="submit" id="pdf_btn" class="btn btn-primary">PDF</button>
            <button type="submit" class="btn btn-primary">Cancel</button>
        </div>
    </div>
</div>
</form>

  @endsection


 

