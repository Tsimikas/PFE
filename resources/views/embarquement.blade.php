


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Bon Emabarquement</title>
  <style>
    @import "https://fonts.googleapis.com/css?family=Poppins";
    * {
      box-sizing: border-box;
    }


    body {
      margin: 0;
      padding: 0;
      background: #333;
      font-family: Poppins;
      text-transform: uppercase;
      font-size: 11px;
      background: #0f0c29;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #24243e, #302b63, #0f0c29);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    h1 {
      margin: 0;
    }
    #contact {
      margin: 4em auto;
      width: 100px;
      height: 30px;
      line-height: 30px;
      font-weight: 700;
      text-align: center;
      cursor: pointer;
      border: 1px solid white;
    }
    #contact:hover {
      background: #000000;
    }
    #contact:active {
      background: #444;
    }
    #contactForm {

      border: 6px solid 3324be;
      padding: 2em;
      width: 400px;
      text-align: center;
      background: #fff;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
      border-radius: 16px;
    }
    input,
    textarea,select {
      outline: 0;
      background: #f2f2f2;
      width: 100%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
      border-radius: 15px;
    }
    textarea {
      height: 80px;
      resize: none;
    }
    .formBtn {
      outline: 0;
      background: #3324be;
      width: 140px;
      height: 30px;
      border: 0;
      color: #ffffff;
      font-size: 1.2em;
      border-radius: 15px;
      -webkit-transition: all 0.3 ease;
      transition: all 0.3 ease;
      cursor: pointer;
    }



    .error {

color:red;
font-size: 0.8rem;
}


  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div id="contact" class="formBtn">Click here</div>
  <div id="contactForm">
    <h1 style="margin-bottom: 10px;">Bon d'embarquement</h1>
    <form method="POST" action="/bondembarquement"" enctype="multipart/form-data">
        @csrf

      <input placeholder="Matricule du Marin" type="text" id="marin_name" name="marin_name" required
      value="{{ old('marin_name', request('matricule')) }}" />
      @error('marin_name')
      <p class="error"> {{$message}} </p>
      @enderror


      <label for="date_embarquement" id="dateEmbarquementLabel">Date Embarquement</label>
      <input placeholder="Date Embarquement" type="date" id="date_embarquement" name="date_embarquement"required />
      @error('date_embarquement')
      <p class="error"> {{$message}} </p>
      @enderror



      <input placeholder="Wilaya embarquement" type="text" id="wilaya_embarquement" name="wilaya_embarquement" required
      value="{{ old('wilaya_embarquement', request('wilaya')) }}" />
      @error('wilaya_embarquement')
      <p class="error"> {{$message}} </p>
      @enderror

      <input placeholder="Numero bon d'embarquement" type="number" id="numero" name="numero" required />
      @error('numero')
      <p class="error"> {{$message}} </p>
      @enderror



      <input placeholder="Port embarquement" type="text" id="port" name="port" required />
      @error('port')
      <p class="error"> {{$message}} </p>
      @enderror


      <button class="formBtn" onclick="printForm()" type="submit">Imprimer</button>

    </form>



  </div>
  <script>
    $(function() {
      $('#contact').click(function() {
        $('#contactForm').fadeToggle();
      });



      var dateEmbarquementInput = document.getElementById("date_embarquement");
      var dateDebarquementInput = document.getElementById("wilaya_embarquement");
      var dateEmbarquementLabel = document.getElementById("dateEmbarquementLabel");
      var dateDebarquementLabel = document.getElementById("dateDebarquementLabel");

      // Hide the labels when the input fields gain focus
      dateEmbarquementInput.addEventListener("focus", function() {
        dateEmbarquementLabel.style.display = "none";
      });

      dateDebarquementInput.addEventListener("focus", function() {
        dateDebarquementLabel.style.display = "none";
      });

      // Show the labels when the input fields lose focus and are empty
      dateEmbarquementInput.addEventListener("blur", function() {
        if (!dateEmbarquementInput.value) {
          dateEmbarquementLabel.style.display = "block";
        }
      });

      dateDebarquementInput.addEventListener("blur", function() {
        if (!dateDebarquementInput.value) {
          dateDebarquementLabel.style.display = "block";
        }
      });

      // Check if the input fields have values on page load and hide/show the labels accordingly
      if (dateEmbarquementInput.value) {
        dateEmbarquementLabel.style.display = "none";
      } else {
        dateEmbarquementLabel.style.display = "block";
      }

      if (dateDebarquementInput.value) {
        dateDebarquementLabel.style.display = "none";
      } else {
        dateDebarquementLabel.style.display = "block";
      }

    });

    function printForm() {
    window.print();
  }
  </script>
</body>
</html> 


{{-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Bon Emabarquement</title>
</head>
<body>
    <p>
        je suis hayder nee dans <span>{{ old('wilaya_embarquement', request('wilaya')) }}</span>
    </p>
</body>--}}



{{--<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Bon Emabarquement</title>
</head>
<body>
    <form method="POST" action="/bondembarquement" enctype="multipart/form-data">
        @csrf
    
        <p>Matricule du Marin: {{ request('matricule') }}</p>
        <input type="hidden" name="marin_name" value="{{ request('matricule') }}" />
    
        @error('marin_name')
        <p class="error"> {{$message}} </p>
        @enderror
    
        <!-- Other form fields and submit button here -->
    </form>
</body>     thats a good one hayder--}} 

{{--    document bon <!DOCTYPE html>
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
            select{
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
                 select {
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
                    <p style="display: inline-block;"> Date : </p> <input style="display: inline-block;" type="date" />
                </div>
                <div style="border : 1px solid black; width : 100%; " ></div>
                <h2> BON D'EMBARQUEMENT </h2>
                <div style="border : 1px solid black; width : 100%; " ></div>
                <form method="POST" action="/bondembarquement" enctype="multipart/form-data">
                    @csrf
                    <ul><li>
                        <p> Monsieur {{ request('nom') }} {{ request('prenom')}}</p>
                          <input type="hidden" name="marin_name" id="marin_name" value="{{ request('nom') }}" />
                          @error('marin_name')
                          <p class="error"> {{$message}} </p>
                          @enderror
                          {{--<input type="hidden" name="prenom" value="{{ request('prenom') }}" /> 
                    </li></ul>


                    <ul><li>
                    <p style="display: inline-block;">Inscrit Maritime </p> <input type="numbre" name="numero" id="numero" required />
                    @error('numero')
                    <p class="error"> {{$message}} </p>
                    @enderror
                    <p style="display: inline-block;">Livret N° {{request('numero_fasicule')}} 
                    Valable Du  {{request('debut_fasicule')}} Au  {{request('fin_fasicule')}}</p>
                   </li></ul>

                   <ul><li>
                    <p style="display: inline-block;"> Est prévu pour embarquer sur le Car-ferry : </p>
                    <select type="text" name="nom du navire " required>
                        <option value="Tariq ibn Ziyad">Tariq ibn Ziyad</option>
                        <option value="El Djazair II">El Djazair II</option>
                        <option value="Tassili II">Tassili II</option>
                        <option value="Badji Mokhtar 3">Badji Mokhtar 3</option>
                    </select>

                    <p  style="display: inline-block;">A : </p><input  style="display: inline-block;" placeholder="Wilaya d'embarquement" type="text" name="wilaya_embarquement" id="wilaya_embarquement" required >
                    @error('wilaya_embarquement')
                    <p class="error"> {{$message}} </p>
                    @enderror
                    <input  style="display: inline-block;" placeholder="Port d'embarquement" type="text" name="port" id="port" required>
                    @error('port')
                    <p class="error"> {{$message}} </p>
                    @enderror
              
                    <p  style="display: inline-block;">Le : </p><input  style="display: inline-block;" type="date" name="date_embarquement" id="date_embarquement" placeholder="Date d'embarquement" required>
                    @error('date_embarquement')
                    <p class="error"> {{$message}} </p>
                    @enderror
                 <p style="display: inline-block;">En qualité de {{request('post_marin')}}</a>

                  </li></ul>
                  <ul><li>
                    <p style="display: inline-block;">En remplacement De  </p><input style="display: inline-block;" type="text" name="Familiarisation" >
                    <p style="display: inline-block;">Qui débarque le méme jour </p>

                  
                <div style="border : 1px solid black; width : 100%; " ></div>
                <h5 style="display: inline-block;">VISITE MEDICALE VALABLE DU {{request('date_visite')}} AU {{request('fin_visite')}}</h5> 
                <div style="border : 1px solid rgb(54, 39, 39); width : 100%; " ></div>
                <h5 style="display: inline-block;"> BREVET ET CERTIFICAT REQUIS : </h5> <input type="text" name="Brevet" >
                <h5 style="display: inline-block;"> N° : </h5> <input type="date" name="toutou" >
                <h5 style="display: inline-block;"> Date ! </h5> <input type="date" name="date tani" >
                <button style="margin-top: 10px" class="formBtn" onclick="printForm()" type="submit">Imprimer</button>
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