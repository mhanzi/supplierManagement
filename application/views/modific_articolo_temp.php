
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
        <td><input type="text" class="form-control bdred" id="sup_tipologie" placeholder="<?php echo $details[0]['sup_tipologie'];?>" name="sup_tipologie"></td>
      </tr>
      <tr>
        <td>Immagine</td>
		<?php $get_img = $this->db_model->get_images($details[0]['immagine']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{ ?>
        <td align="center"><img src="<?php echo  base_url()."uploads/article/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="<?php echo $details[0]['sup_tipologie'];?>" style="width:270px;height:auto;"></td>
      <?php } ?>
	  </tr>
      <tr>
        <td>Quantita Primi</td>
        <td><input type="text" class="form-control bdred" id="quantita_primi" placeholder="<?php echo $details[0]['quantita_primi'];?>" name="quantita_primi"></td>
      </tr>
      <tr>
        <td>Quantita secondi</td>
        <td><input type="text" class="form-control bdred" id="quantita_secondi" placeholder="<?php echo $details[0]['quantita_secondi'];?>" name="quantita_secondi"></td>
      </tr>
      <tr>
        <td>Quantita contorni</td>
        <td><input type="text" class="form-control bdred" id="quantita_contorni" placeholder="<?php echo $details[0]['quantita_contorni'];?>" name="quantita_contorni"></td>
      </tr>
      <tr>
        <td>Quantita Dolci</td>
        <td><input type="text" class="form-control bdred" id="quantita_dolci" placeholder="<?php echo $details[0]['quantita_dolci'];?>" name="quantita_dolci"></td>
      </tr>
      <tr>
        <td>Frutta</td>
        <td>
		<?php if($details[0]['frutta']== 1){ 
		$style1="color: #000000; background-color: #d17965;border-color:#d17965";
		$style3="color: #000000; background-color: #ffffff;border-color:#d17965";
		}else{
		$style3="color: #ffffff; background-color: #d17965;border-color:#d17965";
		$style1="color: #000000; background-color: #ffffff;border-color:#d17965";
		} ?>
		
		
		
		<input type="text" style="width:40px;<?php echo $style1;?>" id="frutta_si" placeholder="si" name="frutta_si">
           <input type="text" style="width:40px;<?php echo $style3;?>" id="frutta_no" placeholder="no" name="frutta_no">
        </td>
      </tr>
      <tr>
        <td>Bevande</td>
        <td>
		<?php if($details[0]['bevande']== 1){ 
		$style="color: #ffffff; background-color: #d17965;border-color:#d17965";
		$style2="color: #000000; background-color: #ffffff;border-color:#d17965";
		}else{
		$style2="color: #ffffff; background-color: #d17965;border-color:#d17965";
		$style="color: #000000; background-color: #ffffff;border-color:#d17965";
		} ?>
		<input type="text" style="width:40px;<?php echo $style;?>" id="bevande_si" value="si" name="bevande_si">
        	<input type="text" style="width:40px;<?php echo $style2;?>" id="bevande_no" value="no" name="bevande_no">
        </td>
      </tr>
      <tr>
        <td>Prezzo</td>
        <td>
        <div class="form-inline"> 
        	min <input type="text" class="form-control bdred" style="width:60px" id="min_Prezzo" name="min_Prezzo" value="<?php echo $details[0]['min_Prezzo'];?>">  &#8364;  &nbsp;&nbsp;&nbsp;&nbsp;
        	max <input type="text" class="form-control bdred" style="width:60px"  id="max_Prezzo" name="max_Prezzo" value="<?php echo $details[0]['max_Prezzo'];?>"> &#8364;
            </div>
        </td>
      </tr>
     <tbody>
  </table>
</div>
     
     
</div>