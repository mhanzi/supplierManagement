<div align="center" class="container">


    <h3><span class="label label-default">Sample >> sample </span></h3>

    </br>


    <div class="table-responsive" style="max-width:60%">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="2" id="rcornerlf"> Modifica Articolo: <?php echo $article[0]['sup_tipologie'];?> </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nome</td>
            <td><input type="text" class="form-control" id="nome" placeholder="<?php echo $article[0]['sup_tipologie'];?>" name="nome"></td>
          </tr>
          <tr>
            <td>Immagine</td>
			<?php $get_img = $this->db_model->get_images($article[0]['immagine']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{ ?>
            <td align="center"><img src="<?php echo  base_url()."uploads/article/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="Cinque Terre" style="width:270px;height:auto;"></td>
          <?php } ?>
		  </tr>
          <tr>
            <td>Numero posti</td>
            <td><input type="text" class="form-control" id="numero_posti" placeholder="<?php echo $article[0]['numero_posti'];?>" name="numero_posti"></td>
          </tr>
          <tr>
            <td>Dimensioni</td>
            <td>
              h: <input type="text" width="50px" id="dime_h" value="<?php echo $article[0]['dimensioni_h'];?>" name="dime_h"> cm &nbsp;&nbsp;
              w: <input type="text" width="50px" id="dime_w" value="<?php echo $article[0]['dimensioni_w'];?>" name="dime_w"> cm
            </td>
          </tr>
          <tr>
		  		<?php $get_img = $this->db_model->get_images($article[0]['article_img']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{ ?>
            <td colspan="2" align="center"> <img src="<?php echo  base_url()."uploads/article/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="<?php echo $article[0]['sup_tipologie'];?> "
                style="width:330px;height:auto;"> </td>
				<?php } ?>
          </tr>
        </tbody>
      </table>
    </div>


  </div>
