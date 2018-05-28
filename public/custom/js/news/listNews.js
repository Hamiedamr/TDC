$(document).ready(function(){
    
      //initialize events 
      var newsID = $("#newsID").val();
      var titleID = $("#titleID").val();
      var importanceID = $("#importanceID").val();
    
    
    //this part is as a test for university name highlight.
      $("#contentBody tr #titleID").mouseover(function(e) {
        $(this).css("cursor", "pointer");
        });
    
        /*
        $("#contentBody tr:has(#titleID)").click(function(e) {
            //getTitle(this.value);
        });

        
        //ajax code to open edit page
        function getTitle(news_id){
			var url = '/editNews';
			$.ajax({
				 url: url ,
				 type: 'post',
				 //parameters
				 data: {news_id:news_id} ,
				 headers: {
				 	'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content ,
				 } ,
				 success: function (data) {
                 //open edit page
                 }
			});
		}
        */
    
    
     
        /*
        $("#contentBody tr:has(#deletebtn)").click(function(e) {
            //Del(this.value);
        });

        
        //ajax code to open edit page
        function Del(news_id){
			var url = '/deleteNews';
			$.ajax({
				 url: url ,
				 type: 'delete',
				 //parameters
				 data: {news_id:news_id} ,
				 headers: {
				 	'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content ,
				 } ,
				 success: function (data) {
                 //delete with no redirection
                 }
			});
		}
        */
      
     

    });
        
  
    