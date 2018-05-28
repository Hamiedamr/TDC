
 <style>
    .all
    {
    clear: both;
    width:100%;
    background-color:#0d3e7d;
    min-height: 30px;
    color: #fff;
    float:left;
    padding: 20px 10px 0;
    color: #fff;
    margin-top:70px;
    }

    .grid0
    {
        float: left;
        width:20%;
        margin-right: 5%;
        line-height: 25px;
        text-align:left;
    }
    .gridtxt
    {
        padding:5px;
        font-size:19px;
        
        color:red;
    }

    .grid2
    {
    float: left;
    width:15%;
    margin-right: 5%;
    line-height: 25px;
    text-align:left;
    }
    .grid2 .form-group
    {
        margin-bottom:0px;
    }
    .grid2 .form-group i
    {
        color:#fff;
    }
    .grid2 .form-group a
    {
        font-size:16px;
         margin-left:2%;
         color:#fff;
    }
    .grid2 .form-group hr
    {
        border:1px solid #6c7496;
    }

    .grid1
    {
        float:left;
        width:25%;
        margin-right:5%;
        line-height:25px;
        text-align:left;
    }
  .learn
  {
    border:2px solid #fff;
    font-weight:bold;
    color:#0d3e7d;
    border-radius:20px;
  }
  .grid3
  {
    float:right;
    width:25%;
    line-height: 25px;
    text-align:left;
  }
  .grid3 table tbody tr
  {
    font-weight: bolder; 
    margin-bottom: 10px; 
    border-bottom: 1px dotted #fff;
  }
 .grid3 table tbody tr td
 {
    width:60px;
 }
.divider
{
    border:1px solid #6c7496;
}
.grid4
{
    width:100%;
    margin-bottom:10px;
    height:30px;
}

.end
{
    float:right;
    display:inline;
}
.end u a
{
    margin:0 5px 0 5px;
    color:aqua;
}


  @media (max-width:600px)
  {
      .grid0, .grid1, .grid2, .grid3
      {
          width:100%;
          display:block;
          float:center;
          margin:5%;
      }
      .grid3
      {
         float: none;
      }
      .grid0 .learn
      {
        margin-left: 100px;
      }
	  .end u 
    {
       float:center;
       width:100%;
    }
  }
     </style>
 
 


 <div class="container all text-center">


   <div class="container">
       <!--about us-->
       <div class="grid0">
            <div class="form-group" style="margin-bottom:10px;">
                <label class="gridtxt">{{trans('data.aboutus')}}</label>
            </div>
            <div class="form-group" style="margin-bottom:0px;">
                <p>The TDC center is complete and an integral part of local education in Egypt. Browse this site to join any courses....     
                </p>
                <button class="learn">{{trans('data.learnnow')}}</button>
            </div>
        </div>

        <!--quick links-->
        <div class="grid2">
            <div class="form-group" style="margin-bottom:10px;">
                <label class="gridtxt">{{trans('data.quicklinks')}}</label>
            </div>
            <div class="form-group">
                    <i class="fa fa-chevron-right fa"></i>
                    <a href="#" style="">{{trans('data.privacypolicy')}}</a>
                    <hr/></div>
            <div class="form-group">
                    <i class="fa fa-chevron-right fa"></i>
                    <a href="#">{{trans('data.serviceterms')}}</a>
                    <hr/></div>
            <div class="form-group">
                    <i class="fa fa-chevron-right fa"></i>
                    <a href="#">{{trans('data.sitemap')}}</a>
                    <hr/> </div>
            <div class="form-group">
                    <i class="fa fa-chevron-right fa"></i>
                    <a href="#">{{trans('data.news&events')}}</a>
                    <hr/> </div>
        </div>
        <!--grid contacts-->
            <div class="grid1">
                <div class="form-group" style="margin-bottom:0px;">
                    <label class="gridtxt" >{{trans('data.contactus')}}</label>
                </div>
                   <!--grid heading-->
                <div class="form-group">
                        <i class="fa fa-map-marker fa-2x"  style="color:#fff"> </i>
                        <label style="font-size:16px; margin-left:20px;">
                                {{trans('data.addresscompany')}}
                        </label>
                  </div>

                <div class="form-group">
                    <i class="fa fa-phone fa-2x"  style="color:#fff">
                    <label style="font-size:16px; margin-left:10px;">{{trans('data.phonecompany')}}</label>
                </i>
                </div>
                <div class="form-group">
                    <i class="fa fa-fax fa-2x" style="color:#fff"></i>
                    <label style="font-size:16px;margin-left:2%;">{{trans('data.faxcompany')}}</label>
                
                </div>
                <div class="form-group">
                        <i class="fa fa-inbox fa-2x" style="color:#fff"></i>
                        <label style="font-size:16px;margin-left:2%;">{{trans('data.postcompany')}}</label>
                    
                    </div>
                    <div class="form-group">
                        <i class="fa fa-envelope fa-2x" style="color:#fff"></i>
                        <label style="font-size:16px;margin-left:2%;">{{trans('data.emailcompany')}}</label>
                  
                    </div>
                    <div class="form-group">
                        <i class="fa fa-globe fa-2x" style="color:#fff"></i>
                        <label style="font-size:16px;margin-left:2%;">{{trans('data.websitecompany')}}</label>
                    </div>
                </div>
    <!--working hours-->
    <div class="grid3">
        <div class="form-group" style="margin-bottom:10px;">
                <label class="gridtxt">{{trans('data.workinghours')}}</label>
        </div>  
        <table>
            <tbody>
                <tr>
                    <td>{{trans('data.sunday')}}</td>
                    <td></td>
                    <td>{{trans('data.duration')}}</td>
                </tr>
                <tr>
                    <td>{{trans('data.monday')}}</td>
                    <td></td>
                    <td>{{trans('data.duration')}}</td>
                </tr>
                <tr>
                    <td>{{trans('data.tuesday')}}</td>
                    <td></td>
                    <td>{{trans('data.duration')}}</td>
                </tr>
                <tr>
                    <td>{{trans('data.wednesday')}}</td>
                    <td></td>
                    <td>{{trans('data.duration')}}</td>
                </tr>
                <tr>
                    <td>{{trans('data.thursday')}}</td>
                    <td></td>
                    <td>{{trans('data.duration')}}</td>
                </tr>
        <tr>
                <td>{{trans('data.friday')}}</td>
                <td></td>
                    <td>
                    <div style="padding:10px;">
                        <button class="btn btn-danger" style="height:30px;width:70px;font-size:16px;padding:5px;float:center">{{trans('data.closed')}}</button>
                    </div>
                    </td>
            </tr>

            <tr>
                <td>{{trans('data.saturday')}}</td>
                <td></td>
                <td>
                    <div style="padding:10px;">
                        <button class="btn btn-danger" style="height:30px;width:70px;font-size:16px;padding:5px;float:center">{{trans('data.closed')}}</button>
                    </div>
                    </td>
            </tr>
            </tbody>
        </table>
    </div>
     </div>


      <hr class="divider"/>

    <div class="grid4">
        <div style="float:left;">
              <label style="font-size:15px;">copyright &copy;TDC Center, all rights are reserved 2018 </label>
        </div>
        <div class="end">
             <u>
               <a href="#">HOME</a>
             <a href="#">COURSES</a>
             <a href="#">BLOG</a>
             <a href="#">EVENTS</a>
             <a href="#">GALLERY</a>
            </u>
             <i class="fa fa-twitter"></i>
             <i class="fa fa-facebook"></i>
             <i class="fa fa-camera"></i>
            
        </div>
    </div>
  
              
 </div>




