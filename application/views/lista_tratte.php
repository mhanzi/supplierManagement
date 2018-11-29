<script>
        function showDiv() {
            var x = document.getElementById("showbutton");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        $(document).ready(function () {



            var slider = new Slider("#sliderdis", {
                ticks: [0, 100],
                ticks_labels: ['Partenza', 'Arrivo'],
                ticks_snap_bounds: 1
            });
        });

    </script>

    <style>
        .slider.slider-horizontal .slider-tick, .slider.slider-horizontal .slider-handle {
            background-color: white;
}
    </style>



    <div align="center" class="container">
        <h4>
            <span class="label label-default">Tratte >> Lista Tratte</span>
        </h4>
        <h3>
            <span class="label label-default">Evento 1</span>
        </h3>
        <br>

        <br>
        <!--Slider Comes Here-->
        <div style="width: 50%">
            <input id="sliderdis" type="text" data-slider-ticks="[0, 100]" data-slider-ticks-snap-bounds="1"
                data-slider-ticks-labels='["Partenza",  "Arrivo"]' data-slider-tooltip="hide" />
        </div>

        <div>
            <table class="table table-responsive" style="max-width:40%">
                <thead>
                    <tr>
                        <td style="vertical-align:middle; text-align: right">Search</td>
                        <td><input type="text" class="boderlessTextBox" id="txtSearch"></td>
                        <td style="vertical-align:middle; text-align: right"><button type="button" class="lightButton">+
                                Nuova
                                tratta</button></td>
                        <td></td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th id="rcornerl">Nome </th>
                        <th>Fornitore</th>
                        <th>Descrizione</th>
                        <th>Partenza</th>
                        <th>Amivo</th>
                        <th>Orario Partenza/ Arrivo</th>
                        <th>Referente</th>
                        <th>Stato</th>
                        <th id="rcornerr">Azioni</th>
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
                        <td>60</td>
                        <td>50</td>
                        <td><button type="button" class="darkButton" onclick="showDiv()">Azioni Tratta</button></br>
                            <div id="showbutton" style="display: none; padding: 15px;">
                                <span class="fa fa-copy" style="font-size:24px" aria-hidden="true" style="width:30px"></span>Dettagi</br>
                                <span class="fa fa-edit" style="font-size:24px" aria-hidden="true" style="width:30px"></span>Modifica<br>
                                <span class="fa fa-language" style="font-size:24px" aria-hidden="true" style="width:30px"></span>Traduci</br>
                                <span class="fa fa-eye" style="font-size:24px" aria-hidden="true" style="width:30px"></span>Mostra
                                / Nascondi</br>
                                <span class="fa fa-user" style="font-size:24px" aria-hidden="true" style="width:30px"></span>Partecipanti</br>
                                <span class="fa fa-globe" style="font-size:24px" aria-hidden="true" style="width:30px"></span>Pubblica</br>
                            </div>
                        </td>
                    </tr>
                </tbody>
                </td>
            </table>
        </div>
    </div>