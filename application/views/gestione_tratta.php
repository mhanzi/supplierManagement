<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-eGGPaM9llUR0yx8orD7tKmKgbrBjJ9M&callback=myMap"></script>

<script>
    $(document).ready(function () {
        var slider = new Slider("#sliderdis", {
            ticks: [0, 100],
            ticks_labels: ['Partenza', 'Arrivo'],
            ticks_snap_bounds: 1
        });
        mapPartenza();
        mapArrivo();
    });

    function mapPartenza() {
        var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap1"), mapProp);
    }
    function mapArrivo() {
        var mapProp = {
            center: new google.maps.LatLng(51.508742, -0.120850),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap2"), mapProp);
    }
</script>


    <div align="center" class="container">
        <div class="table-responsive">
            <table class="table table-bordered" style="max-width:50%;">
                <thead>
                    <tr>
                        <th colspan="2" id="rcornerlf"> Gestione Tratta : Evento 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!--Slider goes here -->
                        <td colspan="2" align="center">
                            <br>
                            <br>
                            <div style="max-width: 50%">
                                <input id="sliderdis" type="text" data-slider-ticks="[0, 100]"
                                    data-slider-ticks-snap-bounds="1" data-slider-ticks-labels='["Partenza",  "Arrivo"]'
                                    data-slider-tooltip="hide" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <table class="table table-responsive" style="max-width:50%;">
                                    <thead>
                                        <tr>
                                            <td>
                                                <h5>Partenza</h5>
                                            </td>
                                            <td style="vertical-align:middle; text-align: right">dalle </td>
                                            <td>
                                                <input type="time" class="boderlessTextBox">
                                            </td>
                                            <td style="vertical-align:middle; text-align: right">alle </td>
                                            <td>
                                                <input type="time" class="boderlessTextBox">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="6" align="center">
                                                <select class="form-control">
                                                    <option value="Nazione">Nazione</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center">
                                                <select class="form-control">
                                                    <option value="Nazione">Citta </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center">
                                                <input type="text" class="boderlessTextBox">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center">
                                                <div id="googleMap1" style="width:100%;height:200px"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                        <td>
                            <div>
                                <table class="table table-responsive" style="max-width:50%;">
                                    <thead>
                                        <tr>
                                            <td>
                                                <h5>Arrivo</h5>
                                            </td>
                                            <td style="vertical-align:middle; text-align: right">dalle </td>
                                            <td>
                                                <input type="time" class="boderlessTextBox">
                                            </td>
                                            <td style="vertical-align:middle; text-align: right">alle </td>
                                            <td>
                                                <input type="time" class="boderlessTextBox">
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="6" align="center">
                                                <select class="form-control">
                                                    <option value="Nazione">Nazione</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center">
                                                <select class="form-control">
                                                    <option value="Nazione">Citta </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center">
                                                <input type="text" class="boderlessTextBox">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" align="center">
                                                <div id="googleMap2" style="width:100%;height:200px"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <h4>Filtra articoli</h4>
                        </td>
                    </tr>
                    <tr>
                        <td> <select class="form-control">
                                <option value="Tipologia fornitore">Tipologia fornitore </option>
                            </select></td>
                        <td>
                            <select class="form-control">
                                <option value="Tipologia articolo">Tipologia articolo </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" class="boderlessTextBox" placeholder="Nome fornitore"></td>
                        <td>
                            <input type="text" class="boderlessTextBox" placeholder="Nome articolo">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <div style="width: 50%;display:inline-block;"><select class="form-control">
                                    <option value="Sceigi articolo">Sceigi articolo</option>
                                </select>
                            </div>
                            <div style="width: 20%; display:inline-block;">
                                <button type="button" class="lightButton">+ Articolo</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <tbody>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <div align="left"><button type="button" class="lightButton"> Save Articoli</button></div>
                    <br>
                    <thead>
                        <tr>
                            <th id="rcornerl">Nome Articolo </th>
                            <th>Tipologia Articolo</th>
                            <th>Nome Fornitore</th>
                            <th>Tipologia Fornitore</th>
                            <th>Capienza</th>
                            <th>Capienza raggiunta</th>
                            <th id="rcornerr">Azionu</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Loredana</td>
                            <td>Colombo</td>
                            <td>Loredana</td>
                            <td>Loredana</td>
                            <td>Colombo</td>
                            <td>Loredana</td>
                            <td>
                                <span class="fa fa-trash-o" style="font-size:24px" aria-hidden="true" style="width:30px"></span>Elimina</br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </tbody>
    </div>
