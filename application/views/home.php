<!--<script type="text/javascript"> 
function googleTranslateElementInit() { 
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element'); 
} 
</script> 

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
 <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo site_url('suppliers/getallsuppliers');?>",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();

  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
<div align="center" class="container" id="google_translate_element">

	<h3><span class="label label-default">Fornitori >> Lista Fornitori</span></h3>

  	<form class="form-inline" action="" style="padding-top:20px; padding-bottom:20px">
  		<div class="form-group">
        	<label for="search">Search:</label>
      		<input type="text" class="form-control" id="search_text" placeholder="Search" name="search_text">            
    	</div>
        <div class="form-group">
        	<button type="submit" class="btn btn-default">+ nuovo forn</button>
        </div>
     </form>
     
    <div class="table-responsive" id="result">
   
</div>
     
     
</div>
<script>
 	function viewButtonList(e){
		
		var elem = document.getElementById('idList'+e);
		
			if(elem.style.display == '')
				elem.style.display = 'none'; // hide
			else
				elem.style.display = '';
		
		}
		
		
 </script>
