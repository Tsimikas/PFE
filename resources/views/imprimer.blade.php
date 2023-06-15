<!DOCTYPE html>
<html lang="fr">
    <head>
        {{--fontsize in body --}}
        <title>Bon d'embarquement</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <style>
                 body {
                margin: 1cm;
                padding: 0;
                font-size: 10px 
            }
            
            #pdf-container {
                width: 100%;
                height: 100vh;
                overflow: hidden !important;
            }

            #pdf-content {
                width: 100%;
                margin: 0 auto;
                overflow: hidden;
            }

            #logo {
                position: absolute;
                top: 0;
                left: 0;
            }
            
            .rectangle {
                border: 1px solid black;
            }
            
            table {
                border-collapse: collapse;
             }
            
            .centered {
                text-align: center;
            }
            
            table, th, td {
                border: 1px solid black;
                padding: 8px;
            }
            
            .inner-table th,
            .inner-table td {
                border: 1px solid black;
                padding: 6px;
            }
            
            .inner-table input[type="text"] {
                border: none;
                padding: 0;
            }
            
            .inner-table {
                border: none;
            }
            
            .left-align {
                text-align: left;
                margin: 50px;
            }
            
            .right-align {
                text-align: right;
                margin: 50px;
            }
        </style>
     
    </head>
    <body>
        <div id="pdf-container">
            <div id="pdf-content">
                <div class="header">
                    <h4 class="centered">ENTREPRISE NATIONALE DE TRANSPORTS MARITIMES DE VOYAGEURS </h4>
                </div>
                <div id="uno">
                    <h2 class="centered">BON DE DEBARQUEMENT</h2>
                </div>
                <div class="rectangle">
                    <ul><li>
                      <a> Num de role {{request('numero_role')}} </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a> Nom : {{request('nom')}} </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a> Prénom :  {{request('prenom')}} </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a> Matricule : {{request('matricule')}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </li></ul>
                    <ul><li>
                        <a>BREVET (2)</a>
                    </li></ul>
                    <ul><li>
                        <a>Né(e) le : {{request('date_naissance')}}</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a>à  {{request('lieu_naissance')}} </a>
                    </li></ul>
                    <ul><li>
                        <a>Domicilé(e) : {{request('lieu_naissance')}} 
                    </li></ul>
                    <br>
                    <table>
                        <tr>
                            <th>NOM DU NAVIRE</th>
                            <th>PORT ET N° D'ARMEMENT</th>
                            <th>GENRE DE NAVIGATION</th>
                            <th>FONCTION</th>
                            <th>CATEGORIE  MARINE </th>
                            <th>EMBARQUEMENT</th>
                            <th>DEBARQUEMENT</th>
                        </tr>
                        <tr>
                            <td>{{request('navire')}}</td>
                            <td>{{request('port')}}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NR</td>
                            <td>{{request('post_marin')}}</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//</td>
                            <td colspan="1">
                                <table class="inner-table">
                                    <tr>
                                        <th>DATE</th>
                                        <th>PORT</th>
                                    </tr>
                                    <tr>
                                        <td>{{request('datedembarquement')}}</td>
                                        <td>{{request('port')}}</td>
                                    </tr>
                                </table>
                            </td>
                            <td colspan="1">
                                <table class="inner-table">
                                    <tr>
                                        <th>DATE</th>
                                        <th>PORT</th>
                                    </tr>
                                    <tr>
                                        <td>{{request('datedebarquement')}}</td>
                                        <td>{{request('port')}}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <ul><li>
                        <a>Bord le :  {{ $data['today'] }} </a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a >Motif </a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a >A </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a >Le </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </li></ul>
                    <ul><li>
                        <a>Le capitaine  </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a >Nombre jours congé : </a>
                    </li></ul>
                    <br>
                    <br>
                    <p>1-A rendre a la station maritime principale : En un seul (1) exemplaire au port d'ARMEMENT
                                                                    En deux(2) exemplaires dans un port d'escale </p>
                    <br>
                    <p>2-Indication à porter par les services de la S.M.P </p>
                </div>
            </div>
        </div>
        <button class="print-button formBtn" onclick="printForm()">Imprimer</button>
        <script>
            function printForm() {
                window.print();
            }
        </script>
    </body>
</html>

