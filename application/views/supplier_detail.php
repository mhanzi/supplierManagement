<div align="center" class="container">
<h3><span class="label label-default">Fornitori >> Lista Fornitori >> Lista Articoli Fornitore</span></h3>

  	<form class="form-inline" action="" style="padding-top:20px; padding-bottom:20px">
  		<div class="form-group">
        	<label for="search">Search:</label>
      		<input type="text" class="form-control" id="search" placeholder="Search" name="search">            
    	</div>
     </form>
     
	<?php $get_img = $this->db_model->get_images($supplier[0]['marchio']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{
		?>
       <img align="center"  src="<?php echo  base_url()."/uploads/brands/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="<?php echo $supplier[0]['tbl_supplier_name']; ?>" style="width:150px;height:auto;">
        <?php }
		?>
   
     
    <div class="table-responsive">
    <table class="table table-bordered">
    <thead id="rounded">
      <tr id="rounded">
        <th id="rcornerl">Tipologie</th>
        <th>Descrizione</th>
        <th>Inizio</th>
        <th>Fine</th>
        <th>Listino</th>
        <th>Sconto</th>
        <th>&nbsp;  </th>
        <th>Stato</th>
        <th id="rcornerr">Azioni</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td><button type="button" class="btn">Azioni Articolo</button></td>
      </tr>
      
      <tr>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td>aaaaaaaaa</td>
        <td><button type="button" class="btn">Azioni Articolo</button>  </br>
             
             	<span class="fa fa-file-text"> &nbsp;&nbsp; Dettagli </span>  </br>
				<span class="glyphicon glyphicon-edit"> Modifica </span>  </br>
				<span class="glyphicon glyphicon-retweet"> Traduci </span>  </br>
				<span class="glyphicon glyphicon-eye-open"> Mostra/Nascondi </span>  </br>
				<span class="glyphicon glyphicon-globe"> Pubblica </span>
      </tr>
    </tbody>
        </td>
  </table>
</div>
     
     
</div>