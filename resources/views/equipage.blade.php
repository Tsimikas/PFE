{{--}}

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Equipage</title>
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
    <h1 style="margin-bottom: 10px;">Creation equipage</h1>
    <form method="POST" action="/equipage" enctype="multipart/form-data">
        @csrf

      <input placeholder="Matricule du Marin" type="text" id="marin" name="marin" required
      value="{{ old('marin') }}" />
      @error('marin')
      <p class="error"> {{$message}} </p>
      @enderror

      <p for="date_debut_membre" id="dateDebutMembrep">Date debut membre</p>
      <input placeholder="Date debut membre" type="date" id="date_debut_membre" name="date_debut_membre"required />
      @error('date_debut_membre')
      <p class="error"> {{$message}} </p>
      @enderror

      <p for="date_fin_membre" id="dateFinMembrep">Date fin membre</p>
      <input placeholder="Date fin membre" type="date" id="date_fin_membre" name="date_fin_membre" required />
      @error('date_fin_membre')
      <p class="error"> {{$message}} </p>
      @enderror



    <select placeholder="Navire" type="navire" id="navire" name="navire" required>
         <option value="Tariq ibn Ziyad">Tariq ibn Ziyad</option>
         <option value="El Djazair II">El Djazair II</option>
         <option value="Tassili II">Tassili II</option>
         <option value="Badji Mokhtar 3">Badji Mokhtar 3</option>
     </select>
      @error('navire')
      <p class="error"> {{$message}} </p>
      @enderror

      <button class="formBtn" type="submit">Cree equipage</button>
    </form>
  </div>
  <script>
    $(function() {
      $('#contact').click(function() {
        $('#contactForm').fadeToggle();
      });


      var dateDebutMembreInput = document.getElementById("date_debut_membre");
      var dateFinMembreInput = document.getElementById("date_fin_membre");
      var dateDebutMembrep = document.getElementById("dateDebutMembrep");
      var dateFinMembrep = document.getElementById("dateFinMembrep");

      // Hide the ps when the input fields gain focus
      dateDebutMembreInput.addEventListener("focus", function() {
        dateDebutMembrep.style.display = "none";
      });

      dateFinMembreInput.addEventListener("focus", function() {
        dateFinMembrep.style.display = "none";
      });

      // Show the ps when the input fields lose focus and are empty
      dateDebutMembreInput.addEventListener("blur", function() {
        if (!dateDebutMembreInput.value) {
          dateDebutMembrep.style.display = "block";
        }
      });

      dateFinMembreInput.addEventListener("blur", function() {
        if (!dateFinMembreInput.value) {
          dateFinMembrep.style.display = "block";
        }
      });

      // Check if the input fields have values on page load and hide/show the ps accordingly
      if (dateDebutMembreInput.value) {
        dateDebutMembrep.style.display = "none";
      } else {
        dateDebutMembrep.style.display = "block";
      }

      if (dateFinMembreInput.value) {
        dateFinMembrep.style.display = "none";
      } else {
        dateFinMembrep.style.display = "block";
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
<form class="form"  method="POST" action="/equipage" enctype="multipart/form-data">
    @csrf
    <p class="heading">Equipage</p>


    <input class="input" placeholder="Matricule du Marin" type="text" id="marin" name="marin" required
    value="{{ old('marin') }}" />
    @error('marin')
    <p class="error"> {{$message}} </p>
    @enderror

    <p>Date debut membre :</p>
    <input class="input" placeholder="Date debut membre" type="date" id="date_debut_membre" name="date_debut_membre"required />
    @error('date_debut_membre')
    <p class="error"> {{$message}} </p>
    @enderror

    <p>Date fin membre :</p>
    <input class="input" placeholder="Date fin membre" type="date" id="date_fin_membre" name="date_fin_membre" required />
    @error('date_fin_membre')
    <p class="error"> {{$message}} </p>
    @enderror



  <select class="input" placeholder="Navire" type="navire" id="navire" name="navire" required>
       <option value="Tariq ibn Ziyad">Tariq ibn Ziyad</option>
       <option value="El Djazair II">El Djazair II</option>
       <option value="Tassili II">Tassili II</option>
       <option value="Badji Mokhtar 3">Badji Mokhtar 3</option>
   </select>
    @error('navire')
    <p class="error"> {{$message}} </p>
    @enderror


    <button class="btn" type="submit">Done</button>
</form>
  </body>
</html>


