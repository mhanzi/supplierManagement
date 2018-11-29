<div align="center" class="container">

        <h3>
            <span class="label label-default">Evento 1 - Tratta 1</span>
        </h3>

        <br>

        <br>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead id="rounded">
                    <tr id="rounded">
                        <td>
                            <select class="form-control">
                                <option value="Tipologia">Tipologia</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control">
                                <option value="Nazionalita">Nazionalita</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control">
                                <option value="Sesso">Sesso</option>
                                <option value="Femmina">Femmina</option>
                                <option value="Maschio">Maschio</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control">
                                <option value="Utente">Utente</option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="lightButton">+ Aggiungi</button>
                        </td>
                    </tr>
                </thead>
                </td>
            </table>
        </div>
        <div class="table-responsive">
            <table class="contact-table table table-curved table-responsive">
                <thead>
                    <tr>
                        <th id="rcornerl">Tipologia utenete</th>
                        <th>Nazionalita</th>
                        <th>Uomini</th>
                        <th id="rcornerr">Donne</th>
                    </tr>
                </thead>
                <tbody>
				<?php foreach($allCustomers as $allCustomer) { ?>
                    <tr>
                        <td><?php echo $allCustomer['user_type'];?></td>
                        <td><?php echo $allCustomer['customer_nazione'];?></td>
                        <td><?php echo $allCustomer['customer_nazione'];?></td>
                        <td><?php echo $allCustomer['customer_nazione'];?></td>
                    </tr>

                   <?php } ?>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        Totale uomini :370
                    </td>
                    <td>
                        Totale donne :330
                    </td>
                </tbody>
                </td>
            </table>
        </div>

        <div> Totale partecipanti :700 &nbsp;&nbsp;&nbsp;
            <button type="button" class="lightButton">Genera lista</button>
        </div>

    </div>