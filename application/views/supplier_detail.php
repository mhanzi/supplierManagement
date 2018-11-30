<script>
 	function viewButtonList(){
		
		var elem = document.getElementById('idList');
		
			if(elem.style.display == '')
				elem.style.display = 'none'; // hide
			else
				elem.style.display = '';
		
		}
 
$(document).ready(function(){

 loads_data();

 function loads_data(query)
 {
  $.ajax({
   url:"<?php echo site_url('suppliers/get_supplier_wise_details');?>",
   method:"POST",
   data:{query:query,id:<?php echo $id;?>},
   success:function(data)
   {
    $('#results').html(data);
   }
  });
 }
 $('#search_texts').keyup(function(){
  var search = $(this).val();

  if(search != '')
  {
   loads_data(search);
  }
  else
  {
   loads_data();
  }
 });
});
</script>
<div align="center" class="container">
<h3><span class="label label-default">Fornitori >> Lista Fornitori >> Lista Articoli Fornitore</span></h3>

  	<form class="form-inline" action="" style="padding-top:20px; padding-bottom:20px">
  		<div class="form-group">
        	<label for="search_texts">Search:</label>
      		<input type="text" class="form-control" id="search_texts" placeholder="Search" name="search_texts">            
    	</div>
     </form>
     
	<?php $get_img = $this->db_model->get_images($supplier[0]['marchio']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{
		?>
       <img align="center"  src="<?php echo  base_url()."/uploads/brands/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="<?php echo $supplier[0]['tbl_supplier_name']; ?>" style="width:150px;height:auto;">
        <?php }
		?>
   
     
    <div class="table-responsive" id="results">
    
</div>
     
     
</div>

<script>

function viewButtonLists(e){
		
		var elem = document.getElementById('idList'+e);
		
			if(elem.style.display == '')
				elem.style.display = 'none'; // hide
			else
				elem.style.display = '';
		
		}

		
		
 </script>