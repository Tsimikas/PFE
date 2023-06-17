
{{--



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
    textarea {
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
    <h1 style="margin-bottom: 10px;">Creation de la visite</h1>
    <form method="POST" action="/visitemedical" enctype="multipart/form-data">
        @csrf

      <input placeholder="Matricule du Marin" type="text" id="marin" name="marin" required
      value="{{ old('marin', request('matricule'))}}" />
      @error('marin')
      <p class="error"> {{$message}} </p>
      @enderror

      <label for="date_visite" id="dateVisiteLabel">Date de la visite</label>
      <input placeholder="Date de la visite" type="date" id="date_visite" name="date_visite"required />
      @error('date_visite')
      <p class="error"> {{$message}} </p>
      @enderror


      <input placeholder="Date fin de la visite" type="date" id="date_fin" name="date_fin" required
      value="{{ old('date_fin') }}"/>
      @error('date_fin')
      <p class="error"> {{$message}} </p>
      @enderror

      <button class="formBtn" type="submit">Cree la visite</button>
    </form>
  </div>
  <script>
    $(function() {
      $('#contact').click(function() {
        $('#contactForm').fadeToggle();
      });

      var dateVisiteInput = document.getElementById("date_visite");
      var dateVisiteLabel = document.getElementById("dateVisiteLabel");

      // Hide the label when the input field gains focus
      dateVisiteInput.addEventListener("focus", function() {
        dateVisiteLabel.style.display = "none";
      });

      // Show the label when the input field loses focus and is empty
      dateVisiteInput.addEventListener("blur", function() {
        if (!dateVisiteInput.value) {
          dateVisiteLabel.style.display = "block";
        }
      });

      // Check if the input field has a value on page load and hide/show the label accordingly
      if (dateVisiteInput.value) {
        dateVisiteLabel.style.display = "none";
      } else {
        dateVisiteLabel.style.display = "block";
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
<form class="form"  method="POST" action="/visitemedical" enctype="multipart/form-data">
    @csrf
    <p class="heading">Visite medical</p>

    <input class="input" placeholder="Matricule du Marin" type="text" id="marin" name="marin" required
      value="{{ old('marin', request('matricule'))}}" />
      @error('marin')
      <p class="error"> {{$message}} </p>
      @enderror

      <p>Date de la visite</p>
      <input class="input" placeholder="Date de la visite" type="date" id="date_visite" name="date_visite"required />
      @error('date_visite')
      <p class="error"> {{$message}} </p>
      @enderror

      <p>Date fin visite : </p>
      <input class="input" placeholder="Date fin de la visite" type="date" id="date_fin" name="date_fin" required
      value="{{ old('date_fin') }}"/>
      @error('date_fin')
      <p class="error"> {{$message}} </p>
      @enderror



    <button class="btn" type="submit">Cree la visite</button>
</form>
  </body>
</html>


