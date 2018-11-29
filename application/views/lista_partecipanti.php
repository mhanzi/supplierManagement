
<script>
    function showDiv() {
        var x = document.getElementById("showbutton");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>


    <div align="center" class="container">
        <h4>
            <span class="label label-default">Partecipanti >> Lista Partecipanti</span>
        </h4>
        <h3>
            <span class="label label-default">Evento 1</span>
        </h3>
        <br>

        <br>
        <!-- #region Check Box -->
        <div class="table-responsive">
            <table class="table table-responsive" style="max-width:30%; align-content: center;">
                <thead>
                    <tr>
                        <td class="checkbox" style="text-align: right">
                            Reali
                        </td>
                        <td>
                            <div class="tag">
                                <input type="checkbox" id="checkbox-2-1" class="regular-checkbox big-checkbox" /><label
                                    for="checkbox-2-1"></label>
                            </div>
                        </td>
                        <td class="checkbox" style="text-align: right">
                            Simualti
                        </td>
                        <td>
                            <div class="tag">
                                <input type="checkbox" id="checkbox-2-2" class="regular-checkbox big-checkbox" /><label
                                    for="checkbox-2-2"></label>
                            </div>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <!--#endregion-->

        <div class="table-responsive">
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th id="rcornerl">Nome </th>
                        <th>Cognome</th>
                        <th>Naxione</th>
                        <th>Sesso</th>
                        <th>E-mail</th>
                        <th>Telefono</th>
                        <th id="rcornerr">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Loredana</td>
                        <td>Colombo</td>
                        <td>Loredana</td>
                        <td>50</td>
                        <td>test@test.com</td>
                        <td>4521885-66</td>
                        <td>
                            <button type="button" class="darkButton" onclick="showDiv()">Azioni Partecipanti</button>

                            <div id="showbutton" style="display: none; padding: 15px;">
                                <span class="fa fa-edit" style="font-size:24px" aria-hidden="true"></span>&nbsp;
                                Modifica
                                <br>
                                <span class="fa fa-trash-o" style="font-size:24px" aria-hidden="true"></span>&nbsp;
                                Elimina
                            </div>
                        </td>
                    </tr>
                    <tr>
                            <td>Loredana</td>
                            <td>Colombo</td>
                            <td>Loredana</td>
                            <td>50</td>
                            <td>test@test.com</td>
                            <td>4521885-66</td>
                            <td>
                                <button type="button" class="darkButton" onclick="showDiv()">Azioni Partecipanti</button>
    
                                <div id="showbutton" style="display: none; padding: 15px;">
                                    <span class="fa fa-edit" style="font-size:24px" aria-hidden="true"></span>&nbsp;
                                    Modifica
                                    <br>
                                    <span class="fa fa-trash-o" style="font-size:24px" aria-hidden="true"></span>&nbsp;
                                    Elimina
                                </div>
                            </td>
                        </tr>

                </tbody>
                </td>
            </table>
        </div>
    </div>