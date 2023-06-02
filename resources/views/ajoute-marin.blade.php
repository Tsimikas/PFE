{{--<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un marin</title>
    <style>
        /* Form Styles */
        form {
            max-width: 500px;
            margin: 0 auto;
        }
        h1 {
            max-width: 500px;
            margin: 0 auto;

        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="number"],
        input[type="profil"] {
            display: block;
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            font-size: 1rem;
            margin-top: 0.25rem;
        }
        button[type="submit"] {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            font-size: 1rem;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
        /* Error Styles */
        .error {

            color:red;
            margin-top: 0.25rem;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <h1>Ajouter marin</h1>
    <form method="POST" action="/ajoute-marin" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom"  value="{{ old('Nom') }}" required>
            @error('Nom')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="Prenom">Prenom</label>
            <input type="text" id="Prenom" name="Prenom"  value="{{ old('Prenom') }}" required>
            @error('Prenom')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="Matricule">Matricule</label>
            <input type="text" id="Matricule" name="Matricule" value="{{ old('Matricule') }}"required>
            @error('Matricule')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="Date_Naissance">Date de Naissance</label>
            <input type="date" id="Date_Naissance" name="Date_Naissance" value="{{ old('Date_Naissance') }}" required>
            @error('Date_naissance')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"  value="{{ old('email') }}" required>
            @error('email')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="Post_travail">Post de travail</label>
            <input type="text" id="Post_travail" name="Post_travail"  value="{{ old('Post_travail') }}" required>
            @error('Post_travail')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="Numero_telephone">Numero de Telephone</label>
            <input type="number" id="Numero_telephone" name="Numero_telephone"  value="{{ old('Numero_telephone') }}" required>
            @error('Numero_telephone')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>
<button type="submit">Ajouter Marin</button>
    </form>
</body>
</html> --}}




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Familiarisation</title>
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
      display: none;
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
      $(document).mouseup(function(e) {
        var container = $("#contactForm");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
          container.fadeOut();
        }
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
</html> 

