<!--<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>-->
<div align="center" class="container">

	<h3><span class="label label-default">Fornitori >> Lista Fornitori</span></h3>

  	<form class="form-inline" action="" style="padding-top:20px; padding-bottom:20px">
  		<div class="form-group">
        	<label for="search">Search:</label>
      		<input type="text" class="form-control" id="search" placeholder="Search" name="search">            
    	</div>
        <div class="form-group">
        	<button type="submit" class="btn btn-default">+ nuovo forn</button>
        </div>
     </form>
     
    <div class="table-responsive">
    <table class="table table-bordered" >
    <thead>
      <tr>
        <th id="rcornerl">Name</th>

        <th>Marchio</th>
        <th>Descrizione</th>
        <th>Inizio fornitura</th>
        <th>Fine fornitura</th>
        <th>Partita IVA</th>
        <th>Tipologia</th>
        <th>Stato</th>
    
        <th id="rcornerr">Azioni</th>
      </tr>
    </thead>
    <tbody>
	<?php

	foreach ($suppliers as $sup) { ?>
      <tr>
        <td><?php echo $sup['tbl_supplier_name']; ?></td>
		 <td align="center">
		<?php $get_img = $this->db_model->get_images($sup['marchio']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{
		?>
       <img src="<?php echo  base_url()."/uploads/brands/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="<?php echo $sup['tbl_supplier_name']; ?>" style="width:142px;height:auto;">
        <?php }
		?>
		</td>
		<td><?php echo $sup['descrizione']; ?></td>
        <td><?php echo $sup['inizio_fornitura']; ?></td>
        <td><?php echo $sup['fine_fornitura']; ?></td>
        <td><?php echo $sup['partita_IVA']; ?></td>
        <td><?php echo $sup['tipologia']; ?></td>
        <td><?php echo $sup['stato']; ?></td>
		<?php  $length = 10;

            $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); ?>
		
		
		
        <td> 
				
		<button type="button" name="viewButton" id="viewButton" class="btn" onclick="viewButtonList()"> Azioni Articolo </button></br>
       <div id="idList" style="display:none">
               <a href="<?php echo site_url('suppliers/supplier_detail/'.$randomString.$sup['tbl_sup_id']);?>"> <span class="fa fa-file-text"> &nbsp;&nbsp; Dettagli </span></a>  </br>
		<a href="<?php echo site_url('suppliers/edit_supplier/'.$randomString.$sup['tbl_sup_id']);?>"><span class="glyphicon glyphicon-edit"> Modifica </span></a>  </br>
		<span class="glyphicon glyphicon-retweet"> Articoli </span>  </br>
			<span class="glyphicon glyphicon-retweet"> Traduci </span>  </br>
		<span class="glyphicon glyphicon-eye-open"> Mostra/Nascondi </span>  </br>
		<span class="glyphicon glyphicon-globe"> Pubblica </span>
      </div>
		
		</td>
      </tr>
	  <?php }  ?>
    </tbody>
  </table>
</div>
     
     
</div>
<script>
 	function viewButtonList(){
		
		var elem = document.getElementById('idList');
		
			if(elem.style.display == '')
				elem.style.display = 'none'; // hide
			else
				elem.style.display = '';
		
		}
 </script>
