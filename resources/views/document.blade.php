{{--<!DOCTYPE html>
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
             overflow:auto !important;
             position: relative;  }

            #pdf-content {
                width: calc(100% + 17px); /* Adjust for the width of the hidden scrollbar */
                height: 100%;
                overflow: hidden; /* Hide the horizontal scrollbar */
                margin-right: -17px; /* Adjust for the width of the hidden scrollbar */
                padding-right: 17px; /* Adjust for the width of the hidden scrollbar */
                box-sizing: content-box;}

                .dosS{
               display: flex;
               gap: 20px;
            }
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
            h5{
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

        <div id="pdf-container">
            <div id="pdf-content">
                <div class="header">


                <h4>ENTREPRISE NATIONALE DE TRASPORT MARITIME DE VOYAGEURS </h4>
                <h4>DIRECTION ARMEMENT </h4>

                </div>
                <p class=dosS>
                    <span class = two style="display: inline-block;" > Réf : <input type="text" name="Brevet" ></span>
                        <span class = two style="display: inline-block;">Alger, <input type="text" name="sh" ></span>
                </p>
                <h5> DEMANDE DE STAGE DE FAMILIARISATION </h5>
                <h6> (Application procédure n° 4 SMS Manuel Armement )</h6>
                      <a><strong>Commandant du C/F : </a><input type="text" name="Monsieur" >

                    <p> La Direction Armement vous adresse pour embarquement l'inscrit maritime :</p></li></ul>
                    <form>
                   <ul><li>
                    <a>Mr : </a><input type="text" name="Inscrit Maritime" >
                   </li></ul>
                    <ul><li>
                    <a> Date et Liru de Naissance :</a><input type="text" name="numero de fasicule " >
                </li></ul>
                    <ul><li>
                    <a>Inscrit Maritime : </a><input type="text" name="Date fasicule" >
                </li></ul>
                    <ul><li>
                    <a>Poste de travail </a><input type="text" name="date exp fasicule" >
                </li></ul>
                    <ul><li>
                    <p>Compte tenu du  dossier  administratif il vous est demandé de procéder à la familiarisation de l'intéressé : </p>
                   </li></ul>

                   <ul><li>
                    <a>Nouvel inscrit  </a><input type="checkbox" name="wooo " >
                   </li></ul>
                   <ul><li>
                    <a>Nouveau dans la companie </a><input type="checkbox" name="woo" >
                    </li></ul>
                    <ul><li>
                    <a>Nouveau sur votre navire  </a><input type="checkbox" name="date d'embarquement " >
                   </li></ul>
                   <ul><li>
                    <a>N'a pas embarqué sur votre navire depuis plus de 2 ans  </a><input type="checkbox" name="fonction" >
                  </li></ul>
                  <ul><li>
                    <a> Affecté a de nouvelles tâches au poste de :  </a><input type="text" name="date d'embarquement " >
                   </li></ul>

                   <br>
                   <br>



                </form>
                <p>A l'issue du stage la fiche de familiarisation inspirée de l'annexe 4 de la procédure susmentionnée
                    devra être adressée au service de de la sous-direction armement.
                   </p>
                <br>
                <br>
                <h4>LE  SOUS-DIRECTEUR DE L'ARMEMENT </h4>

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
</html> --}}
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Bon d'embarquement</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @page {
      size: A4;
      margin: 0;
    }

    body {
      margin: 2cm;
      padding: 0;
    }

    #pdf-container {
      width: 100%;
      height: 100vh;
      overflow: auto !important;
      position: relative;
    }

    #pdf-content {
      width: calc(100% + 17px);
      /* Adjust for the width of the hidden scrollbar */
      height: 100%;
      overflow: hidden;
      /* Hide the horizontal scrollbar */
      margin-right: -17px;
      /* Adjust for the width of the hidden scrollbar */
      padding-right: 17px;
      /* Adjust for the width of the hidden scrollbar */
      box-sizing: content-box;
    }

    .dosS {
      display: flex;
      gap: 20px;
    }

    h4,
    h6,
    h2,
    h5 {
      text-align: center;
    }

    input[type="numbre"],
    input[type="text"],
    input[type="date"],
    select[type="text"] {
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
        display: none;
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
        <img src="C:\Users\BUYMORE\example-app\Algerie_ferries_entmv_logo.png" alt="logo" id="logo">
        <h4>ENTREPRISE NATIONALE DE TRASPORT MARITIME DE VOYAGEURS</h4>
        <h4>DIRECTION ARMEMENT</h4>
        <h6>SOUS DIRECTION ARMEMENT</h6>
      </div>
      <div id="uno">
        <p style="display: inline-block;"> Date : {{ $data['today'] }} </p>
        <div style="border: 1px solid black; width: 100%; "></div>
        <h2> BON D'EMBARQUEMENT </h2>
        <div style="border: 1px solid black; width: 100%; "></div>
        <form method="POST" action="/bondembarquement" enctype="multipart/form-data">
          @csrf
          <ul>
            <li>
              <p> Monsieur {{ request('nom') }} {{ request('prenom')}}</p>
            </li>
          </ul>
          <ul>
            <li>
              <p style="display: inline-block;">Inscrit Maritime {{request('numero_fasicule')}}</p>
              <p style="display: inline-block;">Livret N° {{request('numero_fasicule')}}
                Valable Du {{request('debut_fasicule')}} Au {{request('fin_fasicule')}}</p>
            </li>
          </ul>
          <ul>
            <li>
              <p style="display: inline-block;"> Est prévu pour embarquer sur le Car-ferry : {{request('navire')}} </p>
              <p style="display: inline-block;">A : {{ $data['wilaya_embarquement'] }}</p>
              <p style="display: inline-block;">Le : {{ $data['date_embarquement']}}</p>
              <p style="display: inline-block;">En qualité de {{request('post_marin')}}</a>
            </li>
          </ul>
          <ul>
            <li>
              <p style="display: inline-block;">En remplacement De </p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <p style="display: inline-block;">Qui débarque le même jour </p>
              <div style="border: 1px solid black; width: 100%; "></div>
              <h5 style="display: inline-block;">VISITE MEDICALE VALABLE DU {{request('date_visite')}} AU {{request('fin_visite')}}</h5>
              <div style="border: 1px solid rgb(54, 39, 39); width: 100%; "></div>
              <h5 style="display: inline-block;"> BREVET ET CERTIFICAT REQUIS</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <h5 style="display: inline-block;"> N° </h5> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <h5 style="display: inline-block;"> Date </h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button class="print-button formBtn" onclick="printForm()">Imprimer</button>
          </ul>
        </form>
      </div>
    </div>
  </div>

  <div id="pdf-container-2">
    <div id="pdf-content-2">
      <div class="header">
        <h4>ENTREPRISE NATIONALE DE TRASPORT MARITIME DE VOYAGEURS</h4>
        <h4>DIRECTION ARMEMENT</h4>
      </div>
      <p class=dosS>
        <span class="two" style="display: inline-block;"> Réf : <input type="text" name="Brevet"></span>
        <span class="two" style="display: inline-block;">Alger, <input type="text" name="sh"></span>
      </p>
      <h5> DEMANDE DE STAGE DE FAMILIARISATION </h5>
      <h6> (Application procédure n° 4 SMS Manuel Armement )</h6>
      <a><strong>Commandant du C/F : </a><input type="text" name="Monsieur">

      <p> La Direction Armement vous adresse pour embarquement l'inscrit maritime :</p>
      </li>
      </ul>
      <form>
        <ul>
          <li>
            <a>Mr : {{ request('nom') }} {{ request('prenom')}}  </a>
        </ul>
        <ul>
          <li>
            <a> Date et Lieu de Naissance  :{{request('date_naissance')}} a {{request('lieu_naissance')}} :
          </li>
        </ul>
        <ul>
          <li>
            <a>Inscrit Maritime : {{request('numero_fasicule')}} </a>
          </li>
        </ul>
        <ul>
          <li>
            <a>Poste de travail : {{request('post_marin')}} </a>
          </li>
        </ul>
        <ul>
          <li>
            <p>Compte tenu du dossier administratif, il vous est demandé de procéder à la familiarisation de l'intéressé:</p>
          </li>
        </ul>
        <ul>
          <li>
            <a>Nouvel inscrit </a><input type="checkbox" name="wooo ">
          </li>
        </ul>
        <ul>
          <li>
            <a>Nouveau dans la compagnie </a><input type="checkbox" name="woo">
          </li>
        </ul>
        <ul>
          <li>
            <a>Nouveau sur votre navire </a><input type="checkbox" name="date d'embarquement ">
          </li>
        </ul>
        <ul>
          <li>
            <a>N'a pas embarqué sur votre navire depuis plus de 2 ans </a><input type="checkbox" name="fonction">
          </li>
        </ul>
        <ul>
          <li>
            <a> Affecté a de nouvelles tâches au poste de : </a><input type="text" name="date d'embarq "> &nbsp; &nbsp; &nbsp; &nbsp;  <input type="checkbox" name="shaima">
          </li>
        </ul>

        <br>
        <br>

      </form>
      <p>A l'issue du stage, la fiche de familiarisation inspirée de l'annexe 4 de la procédure susmentionnée
        devra être adressée au service de de la sous-direction armement.
      </p>
      <br>
      <br>
      <h4>LE SOUS-DIRECTEUR DE L'ARMEMENT </h4>

    </div>
  </div>
  </div>
  <script>
     function printForm() {
                window.print();
            }
  </script>
  </body>

</html>

