@extends('layout.index')
@section('title','Edit Training Lecture')
      
  @push('styles')
  <link rel="stylesheet" href="{{ asset('custom/css/trainingLecture/trainingLectureEdit.css')}}">


  @endpush

      
  @push('scripts')
  <script src="{{ asset('custom/js/trainingLecture/trainingLectureEdit.js')}}"></script>
  @endpush


   @section('content') 

   <!--Form UI-->
 <form class="form-horizontal" name="lecture_edit_form" action="#" method="post">
    <div class="container form">
        <!--Heading-->
     <div class="heading">
        <u><h2>Edit Training Lecture</h2></u>
        </div>

        <!--hint form-->
      <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-6">
                <span class="hintstar">*</span>
                <span class="hint">Required Fields</span>
          </div>
        </div>

        <!--program name-->
      <div class="form-group">
          <label class="lbtext col-md-4 control-label">Program Name</label>
          <div class="col-md-6">
          <input type="text" class="form-control"required="required" maxlenght="191" name="" id="arid"  placeholder="Program Name">
          <span class="form_hint">Min length = 3 and max length= 255</span>
          <span class="star">*</span>
          </div>
      </div>

      

      <!--location-->
     <div class="form-group">
          <label class="lbtext col-md-4 control-label">Location</label>
          <div class="col-md-6">
          <input type="text" class="form-control" required="required" minlength="3" maxlength="255" name="" id="enid" placeholder="Location">
          <span class="form_hint">Min length = 3 and max length= 255</span>
          <span class="star">*</span>
        </div>
      </div>
        
  


   <!--start date-->
 <div class="form-group">
          <label class="lbtext col-md-4 control-label">Start Date</label>
          <div class="col-md-6">
          <input type="date" class="form-control" required="required" maxlenght="14" name="startDate" id="addressid">
          <span class="form_hint">Max length= 14</span>
          <span class="stardate">*</span>
          </div>
      </div>

        <!--end date-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">End Date</label>
        <div class="col-md-6">
        <input type="date" class="form-control" required="required" maxlenght="14" name="endDate" id="addressid" >
        <span class="form_hint">Max length= 14</span>
        <span class="stardate">*</span>
        </div>
    </div>


    
        <!--lecture date-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">Lecture Date</label>
        <div class="col-md-6">
        <input type="date" class="form-control" required="required" maxlenght="14" name="date" id="addressid" placeholder="Lecture Date">
        <span class="form_hint">Max length= 14</span>
        <span class="stardate">*</span>
        </div>
    </div>

            <!--Trainer-->
     <div class="form-group dropdown">
               <label class="lbtext col-md-2 col-md-push-2 control-label" >Trainer</label>
               <div class="col-md-6 col-md-push-2">
               <select id="trainer" name="" required="required">
                  <option value="" disabled="disabled" selected>---------- Select Trainer --------</option>
                 </select>
                 <span class="form_hint">Select form dropdown list one option</span>
                 <span class="startrainer">*</span>
               </div>
     </div>


 <!--lecture hours-->
 <div class="form-group">
        <label class="lbtext col-md-4 control-label">Lecture Hours</label>
        <div class="col-md-6">
        <input type="date" class="form-control" required="required" maxlenght="14" name="hours" id="hours" placeholder="Lecture Hours">
        <span class="form_hint">Max length= 14</span>
        <span class="stardate">*</span>
        </div>
    </div>

           <!--online-->
    <div class="form-group">
      <label class="lbtext col-md-2 col-md-push-2 control-label check">Online</label>
  <div class="form-group col-md-2 col-md-push-2" style="margin-left:20px" >
      <label><input id="check" type="checkbox" name="online"></label>
      <span class="staronline">*</span>
      <span class="form_hint">Check the correct checkbox</span>
  </div>      
  </div>


 <!--attach file-->
 <div id="form1" runat="server" style="margin-bottom:50px;">
            <label class="lbtext col-md-2 col-md-push-2 control-label" >Attach File</label>
          <div><input  id="fileinput" class="col-md-8 col-md-push-2" name="file" type='file' style="margin-left:20px;" />
        </div>
</div>


      <!--save and cancel-->
    <div class="form-group btngroup">
        <div class="col-md-4 col-md-push-5 text-center">
            <button type="submit" class="btn btn-success" id="edit">{{trans('data.save')}}</button>
            <button type="submit" class="btn btn-danger">{{trans('data.cancel')}}</button>
        </div>
    </div>
     
 </div>

  </form>

  @endsection


 

