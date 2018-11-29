
<script>
    $(document).ready(function () {

        var realValues = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        var labelValues = ["11:00", "11:15", "11:30", "11:45", "12:00", "12:45", "13:00", "14:00", "14:30", "15:00"];

        var r = $('#sliderdis').slider({
            max: 3,
            min: 0,
            step: 1,
            ticks: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            formatter: function (val) {
                return labelValues[val];
            }
        })
            .on('change', function (data) {
                console.log(data);
                var tooltiptext = data.newValue;
                $("#sliderdis").text(data.value.newValue + ' ' + realValues[data.value.newValue])
            });
    });


</script>


     <!-- #endregion Navigation -->

    <div align="center" class="container">
        <h3><span class="label label-default">Modifica ArticoloL Guida </span></h3>
        </br>


        <div class="table-responsive" style="max-width:70%">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="2" id="rcornerlf"> Aggiungi Fornitore </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nome</td>
                        <td><input type="text" class="form-control" id="supplier_name" name="supplier_name" value="<?php echo $supplier[0]['tbl_supplier_name']?>"></td>
                    </tr>
                    <tr>
                        <td>Immagine</td>
                        <td align="center">
						<?php $get_img = $this->db_model->get_images($supplier[0]['marchio']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{
		?>
       <img src="<?php echo  base_url()."/uploads/brands/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt="<?php echo $supplier[0]['tbl_supplier_name']?>"
                                style="width:142px;height:auto;">
								<?php } ?>
								</td>
                    </tr>
                    <tr>
                        <td>Numero posti</td>
                        <td><input type="text" class="form-control" id="numero_guide" value="<?php echo $supplier[0]['numero_guide']?>" name="numero_guide"></td>
                    </tr>
                    <tr>
                        <td>Numero plani</td>
                        <td><input type="text" class="form-control" id="numero_posti_guidea" value="<?php echo $supplier[0]['numero_posti_guidea'];?>" name="numero_posti_guidea"></td>
                    </tr>
                    <tr>
                        <td>Orario</td>
                        <td>
                            <div>
                                <table class="table table-responsive" style="max-width:100%;">
                                    <thead>
                                        <tr>
                                            <td style="vertical-align:middle; text-align: right">dalle </td>
                                            <td><input type="time" class="form-control" id="" name="" value="<?php echo $supplier[0]['orario_dalle'];?>"></td>
                                            <td style="vertical-align:middle; text-align: right">alle </td>
                                            <td><input type="time" class="form-control" id="" name="" value="<?php echo $supplier[0]['orario_alle'];?>"></td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Prezzo a persona</td>
                        <td>
                            <div>
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <td><input type="number" class="form-control" id="prezzo_persona"
                                                   value="<?php echo $supplier[0]['prezzo_persona'];?>" name="prezzo_persona"> </td>
                                            <td>&euro;</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <h3>Tratta</h3> <br>
                            <br>
                            <div style="width: 90%;">
                                <input id="sliderdis" type="text" data-slider-ticks-labels='["11:00","11:15","11:30","11:45","12:00","12:45","13:00","14:00","14:30","15:00"]'
                                    data-slider-value=0>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <h4 style="text-align: left">Piano 1</h4> <br>
									<?php $get_img = $this->db_model->get_images($supplier[0]['article_images']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{
		?>
                            <img src="<?php echo  base_url()."/uploads/seats/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt=""><?php } ?><br>
                            <h4 style="text-align: left">Piano 2</h4> <br>
							<?php $get_img = $this->db_model->get_images($supplier[0]['article_images_2']);

                            if ($get_img[0]['file_name'] == 'noimage.png') {
                               
                            }else{
		?>
                            <img src="<?php echo  base_url()."/uploads/seats/".$get_img[0]['file_name']; ?>" class="img-responsive img-rounded" alt=""><?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>