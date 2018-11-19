   <script>
  $( function() {
    $( "#dal" ).datepicker();
	  $( "#al" ).datepicker();
	
  } );
  </script>
 
<div align="center" class="container">

    
	<h3><span class="label label-default">Sample >> sample </span></h3>
    
    
    </br>
 
     
<div class="table-responsive" style="max-width:60%">   
<form method="post" name="signin" action="<?php echo site_url('suppliers/add_property');?>">  
    <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2" id="rcornerlf"> Aggiungi Fornitore </th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nome Fornitore</td>
        <td><input type="text" class="form-control" id="supplier_name" placeholder="<?php echo $supplier[0]['tbl_supplier_name']; ?>" name="supplier_name"></td>
      </tr>
      <tr>
        <td>Marchio Fornitore</td>
        <td align="center">
			<?php $get_img = $this->db_model->get_images($supplier[0]['marchio']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{
		?>
       <img src="<?php echo  base_url()."/uploads/brands/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="<?php echo $supplier[0]['tbl_supplier_name']; ?>" style="width:142px;height:auto;">
        <?php }
		?></td>
      </tr>
      <tr>
        <td>P.I</td>
        <td><input type="text" class="form-control" id="p_i" placeholder="<?php echo $supplier[0]['partita_IVA']; ?>" name="p_i"></td>
      </tr>
      <tr>
        <td>Descrizione</td>
        <td><textarea rows="4" cols="50" class="form-control" id="sup_desc"> <?php echo $supplier[0]['descrizione']; ?></textarea></td>
      </tr>
      <tr>
        <td>Periodo fornitura</td>
        <td>dal &nbsp; <input type="text" width="80px" id="dal" name="sup_periodo" value="<?php echo $supplier[0]['inizio_fornitura'];?>">
        	al &nbsp; <input type="text" width="80px"  id="al" name="sup_periodo" value="<?php echo $supplier[0]['fine_fornitura'];?>"></td>
      </tr>
      <tr>
        <td>sample</td>
        <td>
        		<select class="form-control" id="sample">
 					<option value="volvo">sample</option>
  					<option value="saab">sample</option>
  					<option value="opel">sample</option>
  					<option value="audi">sample</option>
				</select>
        </td>
      </tr>
	  <tr><td>&nbsp;</td><td>
            <button type="button" class="btn" id="save_btn"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Save</font></font></button>
        </td></tr>
     <tbody>
  </table>
  </form>
</div>
     
     
</div>
