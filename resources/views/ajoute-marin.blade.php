{{--<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Ajouter marin</title>
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
      overflow-y: auto;
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
      max-height: 95vh ;
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
    <h1 style="margin-bottom: 10px;">Creation d'un marin</h1>
    <form method="POST" action="/ajoute-marin" enctype="multipart/form-data">
        @csrf

      <input placeholder="Nom " type="text" id="Nom" name="Nom" required
      value="{{ old('Nom') }}" />
      @error('Nom')
      <p class="error"> {{$message}} </p>
      @enderror

      <input placeholder="Prenom " type="text" id="Prenom" name="Prenom" required
      value="{{old('Prenom')}}"/>
      @error('Prenom')
      <p class="error"> {{$message}} </p>
      @enderror


      <input placeholder="Matricule" type="text" id="Matricule" name="Matricule" required
      value="{{old('Matricule')}}"/>
      @error('Matricule')
      <p class="error"> {{$message}} </p>
      @enderror

      <input placeholder="Email" type="text" id="email" name="email" required
      value="{{old('email')}}"/>
      @error('email')
      <p class="error"> {{$message}} </p>
      @enderror


      <input placeholder="Adress" type="text" id="adress" name="adress" required
      value="{{old('adress')}}"/>
      @error('adress')
      <p class="error"> {{$message}} </p>
      @enderror

      <input placeholder="Wilaya de domicil" type="text" id="wilaya_de_domicile" name="wilaya_de_domicile" required />
      @error('wilaya de domicile')
      <p class="error"> {{$message}} </p>
      @enderror


      <input placeholder="Wilaya de naissance" type="text" id="wilaya_de_naissance" name="wilaya_de_naissance" required />
      @error('wilaya de naissance')
      <p class="error"> {{$message}} </p>
      @enderror




     <label for="Date_Naissance" id="dateLabel">Date Naissance</label>
      <input placeholder="Date Naissance" type="date" id="Date_Naissance" name="Date_Naissance" required
      value="{{old('Date_Naissance')}}">
      @error('Date_Naissance')
      <p class="error"> {{$message}} </p>
      @enderror

      <input  placeholder="Fonction"  type="text" id="Post_travail" name="Post_travail"  value="{{ old('Post_travail') }}" required>
        @error('Post_travail')
        <p class="error"> {{$message}} </p>
        @enderror

        <input  placeholder="Numero telephone"  type="number" id="Numero_telephone" name="Numero_telephone"  value="{{ old('Numero_telephone') }}" required>
        @error('Numero_telephone')
        <p class="error"> {{$message}} </p>
        @enderror

      <button class="formBtn" type="submit">Ajouter le marin</button>
    </form>
  </div>
  <script>
    $(function() {
      $('#contact').click(function() {
        $('#contactForm').fadeToggle();
      });

      var dateInput = document.getElementById("Date_Naissance");
      var dateLabel = document.getElementById("dateLabel");

      // Hide the label when the input field gains focus
      dateInput.addEventListener("focus", function() {
        dateLabel.style.display = "none";
      });

      // Show the label when the input field loses focus and is empty
      dateInput.addEventListener("blur", function() {
        if (!dateInput.value) {
          dateLabel.style.display = "block";
        }
      });

      // Check if the input field has a value on page load and hide/show the label accordingly
      if (dateInput.value) {
        dateLabel.style.display = "none";
      } else {
        dateLabel.style.display = "block";
      }
    });
  </script>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>ShipMates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="css/style.css" rel="stylesheet">
  </head>



  <body style="background-color: #000328; background-image: url('img/oo.jpg');">
<form class="form" method="POST" enctype="multipart/form-data" action="/ajoute-marin">
    @csrf
    <p class="heading">Ajouter un Marin</p>

    <input class="input" placeholder="Nom" type="text" id="Nom" name="Nom" value="{{old('Nom')}}"/>
    @error('Nom')
    <p class="error"> {{$message}} </p>
    @enderror

    <input class="input" required placeholder="Prenom" type="text" id="Prenom" name="Prenom" value="{{old('Prenom')}}"/>
    @error('Prenom')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" required placeholder="Matricule" type="text" id="Matricule" name="Matricule"  value="{{old('Matricule')}}"/>
    @error('Matricule')
    <p class="error"> {{$message}} </p>
    @enderror

    <input class="input"  required placeholder="Email" type="email" value="{{old('email')}}" id="email" name="email"/>
    @error('email')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input"  required placeholder="Adresse" type="text" id="adress" name="adress" required
    value="{{old('adress')}}"/>
    @error('adress')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" placeholder="Wilaya domicile" type="text" id="wilaya_de_domicile" name="wilaya_de_domicile" required
    value="{{old('wilaya_de_domicile')}}"/>
    @error('wilaya_de_domicile')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" placeholder="Wilaya de naissance" type="text" id="wilaya_de_naissance" name="wilaya_de_naissance" required
    value="{{old('wilaya_de_naissance')}}"/>
    @error('wilaya_de_naissance')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" placeholder="Date Naissance" type="date" id="Date_Naissance" name="Date_Naissance" required
    value="{{old('Date_Naissance')}}"/>
    @error('Date_Naissance')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" placeholder="Fonction" type="text" id="Post_travail" name="Post_travail"  value="{{ old('Post_travail') }}" required
    value="{{old('Date_Naissance')}}"/>
    @error('Post_travail')
    <p class="error"> {{$message}} </p>
    @enderror

    <input class="input" placeholder="Numero telephone"  type="number" id="Numero_telephone" name="Numero_telephone"  value="{{ old('Numero_telephone') }}" required>
    @error('Numero_telephone')
    <p class="error"> {{$message}} </p>
    @enderror

    <button class="btn" type="submit">Ajouter Marin</button>
</form>
  </body>
</html>

