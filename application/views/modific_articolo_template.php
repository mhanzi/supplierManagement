
<div align="center" class="container">

    
	<h3><span class="label label-default">Sample >> sample </span></h3>
    
    </br>
 
     
<div class="table-responsive" style="max-width:60%">     
    <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="2" id="rcornerlf"> Modifica Articolo: <?php echo $details[0]['sup_tipologie'];?></th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nome</td>
        <td><input type="text" class="form-control bdred" id="sup_tipologie" value="<?php echo $details[0]['sup_tipologie'];?>" name="sup_tipologie"></td>
      </tr>
      <tr>
        <td>Immagine</td>
        <td align="center">
			<?php $get_img = $this->db_model->get_images($details[0]['immagine']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{ ?>
		
		<img src="<?php echo  base_url()."uploads/article/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="<?php echo $details[0]['sup_tipologie'];?>" style="width:270px;height:auto;"><?php } ?> </td>
      </tr>
      <tr>
        <td>Numero posti</td>
        <td><input type="text" class="form-control bdred" id="numero_posti" value="<?php echo $details[0]['numero_posti'];?>" name="numero_posti"></td>
      </tr>
      <tr>
        <td>Dimensioni</td>
		<?php $x=$details[0]['dimensioni_h'];
		$y=$details[0]['dimensioni_w'];
			$dimen=$x* $y; ?>
        <td><input type="text"  style="width:80%" class="bdred" id="dimen" value="<?php echo $dimen;?>" name="dimen"> m <sup>2</sup> </td>
      </tr>
      <tr>
	     <td colspan="2" align="center"> 
	    		<?php $get_img = $this->db_model->get_images($details[0]['article_img']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{ ?>
     <img src="<?php echo  base_url()."uploads/article/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="<?php echo $details[0]['sup_tipologie'];?>"  style="width:462px;height:auto;"> <?php } ?> </td>
      </tr>
      </tbody>
  </table>
</div>
     
     
</div>
