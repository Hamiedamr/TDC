@extends('layout.index')
@section('title')
{{trans('data.traineeevaluationscreen')}}
@append
      
  @push('styles')
 <link rel="stylesheet" href="{{asset('custom/css/trainee/evaluationScreen.css')}}">
  @endpush

  @push('scripts')
  <script src="{{ asset('custom/js/trainee/evaluationScreen.js')}}"></script>
   @endpush

  @section('content') 
   <!--Form UI-->
 <form class="form-horizontal" name="evaluation_screen_form" action="#" method="POST">
   {{csrf_field()}}
   <div class="container form">

      <!--Heading-->
      <div class="heading">
          <u><h2>{{trans('data.traineeevaluationscreen')}}</h2></u>
      </div>

      <!--hint form-->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-6">
              <span class="hintstar">*</span>
              <span class="hint">{{trans('data.rf')}}</span>
        </div>
      </div>


    <!--Trainer name-->
    <div class="form-group">
    <label class="lbtext col-md-2 col-md-push-3 control-label">{{trans('data.trainername')}}</label>
    <div class="col-md-4 col-md-push-3">
        <label  class="form-control" id="" name="">Mohamed Ahmed</label>
    </div>
  </div>


    <!--Academic Degree-->
    <div class="form-group">
    <label class="lbtext col-md-2 col-md-push-3 control-label">{{trans('data.degree')}}</label>
    <div class="col-md-4 col-md-push-3">
        <label  class="form-control" id="" name="">Teacher Assistant</label>
    </div>
  </div>


  <!--college-->
  <div class="form-group">
  <label class="lbtext col-md-4 col-md-push-1 control-label">{{trans('data.college')}}</label>
  <div class="col-md-4 col-md-push-1">
      <label  class="form-control" id="" name="">Engineering</label>
  </div>
</div>

<!--training workshop-->
<div class="form-group">
<label class="lbtext col-md-4 col-md-push-1 control-label">{{trans('data.trainingworkshop')}}</label>
<div class="col-md-4 col-md-push-1">
    <label  class="form-control" id="" name=""></label>
</div>
</div>


  <!--trainees category-->
<div class="form-group dropdown">
    <label class="col-md-4 col-md-push-1 control-label" >{{trans('data.traineescat')}}</label>
    <div class="col-md-6 col-md-push-1">
    <select id="department" name="department" required="required">
        <option value=""  selected>----------- {{trans('data.straineescat')}} -----------</option>
      </select>
      <span class="starcat">*</span>
    </div>
  </div>


<!--trainees number-->
  <div class="form-group">
  <label class="lbtext col-md-4 col-md-push-1 control-label">{{trans('data.number')}}</label>
  <div class="col-md-4 col-md-push-1">
      <label class="form-control" id="" name="">5</label>
  </div>
</div>


      <!--Note points-->
      <div class="notes">
              <div class="points col-md-5 col-md-push-2">
                  <label >{{trans('data.rules')}}</label>
                    <ol>
                      <li>{{trans('data.rule1')}}</li>
                      <li>{{trans('data.rule2')}}</li>
                      <li>{{trans('data.rule3')}}</li>
                      <li>{{trans('data.rule4')}}</li>
                      <li>{{trans('data.rule5')}}</li>
                    </ol>
             </div>
            <!--Note level-->
            <div class="levels col-md-2 col-md-push-2"> 
              <label >{{trans('data.evaluationpoints')}}</label>
                <ol>
                    <li>{{trans('data.weak')}}</li>
                    <li>{{trans('data.pass')}}</li>
                    <li>{{trans('data.good')}}</li>
                    <li>{{trans('data.vgood')}}</li>
                    <li>{{trans('data.excellent')}}</li>
                  </ol>
          </div>
  </div>


     <!--php for($noofdays as header)-->
      <table id="myTable" class="col-md-6 col-sm-4 table-responsive">
        
       <!--heading part-->
         <thead class="row">
           <tr>
               <th>#</th>
               <th>Trainee Name</th>
                <!--php for($evaluationpoints as header) -->
               <th>First Day</th>
               <th>Second Day</th>
               <th>Cal</th>
               <th>Trainer Notes</th>
             </tr>
            
             <tr>
                <th></th>
                <th></th>
                  <!--php for($evaluationpoints as header) -->
                <th>pagination</th>
                <th>pagination</th>
                <th></th>
                <th></th>
              </tr>
         
         </thead>
        
           <!--content part-->
       <tbody id="contentBody">
            <?php 
             // foreach($rows as $row)
             // {
             echo "<tr>";
               //static data
               echo "<td id='' name=''>" . "1" . "</td>";
               echo "<td id='' name=''>" . "Mohamed Kamal Ahmed" . "</td>";
               echo "<td><select class='dropdown' id='' name='' required='required'><option value='' disabled='disabled' selected>0</option></select></td>";
               echo "<td><select class='dropdown' id='' name='' required='required'><option value='' disabled='disabled' selected>0</option></select></td>";
               echo "<td><textarea class='control-form' id='' name=''  max-length='50'></textarea></td>";
               echo "<td><textarea class='control-form' id='' name=''  max-length='300'></textarea></td>";
               echo "</tr>";
                
     
              // }
            ?>
        </tbody>
      </table>


    
    <!--Trainer Signature....-->
    <div class="form-group">
    <label class="lbtext col-md-2 col-md-push-3 control-label">{{trans('data.signature')}}</label>
    <div class="col-md-4 col-md-push-3">
        <input type="text" class="form-control" id="" name="" placeholder="...................">
        <span class="star">*</span>
    </div>
  </div>
      


  <!--save and cancel-->
    <div class="form-group">
        <div class="col-md-4 col-md-push-4 text-center">
            <button type="submit" class="btn btn-primary">{{trans('data.save')}}</button>
            <button type="submit" class="btn btn-primary">{{trans('data.cancel')}}</button>
        </div>
    </div>
</div>
</form>

  @endsection


 

