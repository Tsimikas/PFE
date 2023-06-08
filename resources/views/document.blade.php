<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Bon d'embarquement</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <style>
            @page{
                size : A4;
                margin: 0 ;
            }
            body{
              margin:2cm;
              padding:0;
            }

           #pdf-container {
             width:100%;
             height:100vh;
             overflow:hidden;
             position: relative;  }

            #pdf-content {
                width: calc(100% + 17px); /* Adjust for the width of the hidden scrollbar */
                height: 100%;
                overflow: hidden; /* Hide the horizontal scrollbar */
                margin-right: -17px; /* Adjust for the width of the hidden scrollbar */
                padding-right: 17px; /* Adjust for the width of the hidden scrollbar */
                box-sizing: content-box;}
            #logo{
                position: absolute;
                top:0;
                left:0;
            }
            h4{
                text-align:center;
            }
            h6{
                text-align:center;
            }
            h2{
                text-align:center;
            }

            input[type="numbre"], 
            input[type="text"], 
            input[type="date"],
            select[type="text"]{
                border: none;
                outline: none;
                background-color: transparent;
            }

            ul {
                margin: 0;
                padding: 0;
                list-style-type: none;
            }

            li {
                margin-bottom: 5px;
                padding: 0;
            }


            @media print {
                input[type="numbre"],    
                input[type="text"], 
                 input[type="date"],
                 select[type="text"] {
                    border: none !important;
                }
            }

        </style>
    </head>
    <body>

        <div id="pdf-container">
            <div id="pdf-content">
                <div class="header">

                <img src="C:\Users\BUYMORE\example-app\Algerie_ferries_entmv_logo.png" alt="logo" id = "logo">
                <h4>ENTREPRISE NATIONALE DE TRASPORT MARITIME DE VOYAGEURS </h4>
                <h4>DIRECTION ARMEMENT </h4>
                <h6>SOUS DIRECTION ARMEMENT </h6>
                </div>
                <div id="uno">
                    <p style="display: inline-block;"> Date : {{ $data['today'] }} </p>
                <div style="border : 1px solid black; width : 100%; " ></div>
                <h2> BON D'EMBARQUEMENT </h2>
                <div style="border : 1px solid black; width : 100%; " ></div>
                <form method="POST" action="/bondembarquement" enctype="multipart/form-data">
                    @csrf
                    <ul><li>
                        <p> Monsieur {{ request('nom') }} {{ request('prenom')}}</p>
                    </li></ul>


                    <ul><li>
                    <p style="display: inline-block;">Inscrit Maritime {{request('numero_fasicule')}}</p> 
                    <p style="display: inline-block;">Livret N° {{request('numero_fasicule')}} 
                    Valable Du  {{request('debut_fasicule')}} Au  {{request('fin_fasicule')}}</p>
                   </li></ul>

                   <ul><li>
                    <p style="display: inline-block;"> Est prévu pour embarquer sur le Car-ferry : {{request('navire')}} </p>

                    <p  style="display: inline-block;">A : {{ $data['wilaya_embarquement'] }}</p>
                    
                    <p  style="display: inline-block;">Le : {{ $data['date_embarquement']}}</p>
                
                 <p style="display: inline-block;">En qualité de {{request('post_marin')}}</a>

                  </li></ul>
                  <ul><li>
                    <p style="display: inline-block;">En remplacement De  </p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <p style="display: inline-block;">Qui débarque le méme jour </p>

                  
                <div style="border : 1px solid black; width : 100%; " ></div>
                <h5 style="display: inline-block;">VISITE MEDICALE VALABLE DU {{request('date_visite')}} AU {{request('fin_visite')}}</h5> 
                <div style="border : 1px solid rgb(54, 39, 39); width : 100%; " ></div>
                <h5 style="display: inline-block;"> BREVET ET CERTIFICAT REQUIS</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <h5 style="display: inline-block;"> N° </h5> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <h5 style="display: inline-block;"> Date </h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button style="margin-top: 10px" class="formBtn" onclick="printForm()">Imprimer</button>
                </div>
        </div>
               </form>
            </div>
        </div>
        <script>
              function printForm() {
      window.print();
          }
        </script>
    </body>
</html>