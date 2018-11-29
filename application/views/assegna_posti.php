
    <div align="center" class="container">
        <h3>
            <span class="label label-default">Evento 1 - Tratta 1</span>

        </h3>
        </br>
        <div class="table-responsive" style="max-width:60%">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="2" id="rcornerlf"> Assegna posti
                        </th>
                    </tr>
                </thead>
                <tbody>
				<?php foreach($seats as $seat) { ?>
                    <tr>
                        <td>
                            <p><?php echo $seat['article'] ;?></p>
                            <br>
                            <button id="btn10_6" type="button" class="btn">Dettagli articolo</button>
                        </td>
                        <td>
							<?php $get_img = $this->db_model->get_images($seat['img_seat']);
                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{ ?>
                            <img src="<?php echo  base_url()."uploads/seats/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="" style="width:270px;height:auto;">
                        <?php } ?>
						</td>
                    </tr>
                   <?php } ?>
                        
                </tbody>
            </table>
        </div>


    </div>