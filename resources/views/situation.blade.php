{{--<!DOCTYPE html>
<html>
<head>
  <title>Medical Visit Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .error {

color:red;
margin-top: 0.25rem;
font-size: 0.8rem;
}
  <
  </style>
</head>
<body>
  <h2> Situation </h2>
  <form method="POST" action="/situation" enctype="multipart/form-data">
   @csrf


   <label for="marin">Marin:</label>
   <input type="text" id="marin" name="marin" value="{{ old('marin') }}" equired>
   @error('marin')
   <p class="error"> {{$message}} </p>
   @enderror

   <label for="date_debut">Date Debut:</label>
   <input type="date" id="date_debut" name="date_debut" value="{{ old('date_debut') }}" required>
   @error('date_debut_memebre')
   <p class="error"> {{$message}} </p>
   @enderror


   <label for="date_fin">Date Fin:</label>
   <input type="date" id="date_fin" name="date_fin" value="{{ old('date_fin') }}" required>
   @error('date_fin')
   <p class="error"> {{$message}} </p>
   @enderror



    <label for="situation">Situation</label>
    <select type="situation" id="situation" name="situation"  value="{{ old('situation') }}" required>
        <option value="libre">libre</option>
        <option value="embarquer">embarquer</option>
        <option value="vacance">vacance</option>
    </select>
    @error('situation')
    <p class="error"> {{$message}} </p>
    @enderror

    <input type="submit" value="Submit">
  </form>
</body>
</html> --}}

{{-- 2 --}}

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Visite Medical</title>
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
    <h1 style="margin-bottom: 10px;">Effectuer la situation</h1>
    <form method="POST" action="/situation" enctype="multipart/form-data">
        @csrf

      <input placeholder="Matricule du Marin" type="text" id="marin" name="marin" required
      value="{{ old('marin') }}" />
      @error('marin')
      <p class="error"> {{$message}} </p>
      @enderror

      <label for="date_debut" id="dateDebutLabel">Date debut situation</label>
      <input placeholder="Date debut situation" type="date" id="date_debut" name="date_debut"required />
      @error('date_debut')
      <p class="error"> {{$message}} </p>
      @enderror

      <label for="date_fin" id="dateFinLabel">Date fin situation</label>
      <input placeholder="Date fin situation" type="date" id="date_fin" name="date_fin" required />
      @error('date_fin')
      <p class="error"> {{$message}} </p>
      @enderror



      <select placeholder="Situation" type="situation" id="situation" name="situation" required>
         <option value="libre">libre</option>
         <option value="embarquer">embarquer</option>
         <option value="vacance">vacance</option>
     </select>
      @error('situation')
      <p class="error"> {{$message}} </p>
      @enderror

      <button class="formBtn" type="submit">Effectuer la situation</button>
    </form>
  </div>
  <script>
    $(function() {
      $('#contact').click(function() {
        $('#contactForm').fadeToggle();
      });
      var dateDebutInput = document.getElementById("date_debut");
      var dateFinInput = document.getElementById("date_fin");
      var dateDebutLabel = document.getElementById("dateDebutLabel");
      var dateFinLabel = document.getElementById("dateFinLabel");

      // Hide the labels when the input fields gain focus
      dateDebutInput.addEventListener("focus", function() {
        dateDebutLabel.style.display = "none";
      });

      dateFinInput.addEventListener("focus", function() {
        dateFinLabel.style.display = "none";
      });

      // Show the labels when the input fields lose focus and are empty
      dateDebutInput.addEventListener("blur", function() {
        if (!dateDebutInput.value) {
          dateDebutLabel.style.display = "block";
        }
      });

      dateFinInput.addEventListener("blur", function() {
        if (!dateFinInput.value) {
          dateFinLabel.style.display = "block";
        }
      });

      // Check if the input fields have values on page load and hide/show the labels accordingly
      if (dateDebutInput.value) {
        dateDebutLabel.style.display = "none";
      } else {
        dateDebutLabel.style.display = "block";
      }

      if (dateFinInput.value) {
        dateFinLabel.style.display = "none";
      } else {
        dateFinLabel.style.display = "block";
      }

    });
  </script>
</body>
</html>


