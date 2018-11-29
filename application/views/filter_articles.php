
    <div align="center" class="container">
        <h3>
            <span class="label label-default">Evento 1 - Tratta 1</span>
        </h3>
        <br>
        <h4>
            <span class="label label-default">Filtra articoli</span>
        </h4>
        <br>
        <div>
            <table class="table" id="bltbl" style="max-width:60%; ">
                <thead>
                    <tr>
                        <td>
                            <select class="form-control">
                                <option value="Tipologia_fornitore">Tipologia fornitore</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-control">
                                <option value="Tipologia_articolo">Tipologia articolo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="boderlessTextBox" id="txtFornitore" placeholder="Nome fornitore">
                        </td>
                        <td>
                            <input type="text" class="boderlessTextBox" id="txtarticolo" placeholder="Nome articolo">
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive">
            <table class="contact-table table table-curved table-responsive">
                <thead>
                    <tr>
                        <th id="rcornerl"></th>
                        <th>Nome Articolo</th>
                        <th>Tipologia Artocolo</th>
                        <th>Nome formitore</th>
                        <th>Tipologia Fornitore</th>
                        <th id="rcornerr">Capienza</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>  <div class="tag">
                                <input type="checkbox" id="checkbox-2-1" class="regular-checkbox" checked="checked" /><label
                                    for="checkbox-2-1"></label>
                            </div></td>
                        <td>Loredana</td>
                        <td>Colombo</td>
                        <td>Loredana</td>
                        <td>50</td>
                        <td>60</td>
                    </tr>

                    <tr>
                        <td>  <div class="tag">
                                <input type="checkbox" id="checkbox-2-2" class="regular-checkbox"  /><label
                                    for="checkbox-2-2"></label>
                            </div></td>
                        <td>Alessio</td>
                        <td>Speranza</td>
                        <td>Loredana</td>
                        <td>44</td>
                        <td>66</td>
                    </tr>
                </tbody>
                </td>
            </table>
        </div>

        <div>
            <button type="button" class="lightButton" style="width: 20%" >Genera</button>
        </div>

    </div>