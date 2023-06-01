{{--<!DOCTYPE html>
<html>
<head>
  <title>Bondembarquement</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="date"],
    .form-group input[type="text"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .submit-btn {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .error {

color:red;
margin-top: 0.25rem;
font-size: 0.8rem;
}
  </style>
</head>
<body>
  <div class="container">
    <h2>Bondembarquement</h2>
    <form method="POST" action="/bondembarquement" enctype="multipart/form-data">
        @csrf


      <div class="form-group">
        <label for="date_embarquement">Date embarquement:</label>
        <input type="date" id="date_embarquement" name="date_embarquement" value="{{ old('date_embarquement') }}" required>
        @error('date_embarquement')
        <p class="error"> {{$message}} </p>
        @enderror
       </div>



      <div class="form-group">
        <label for="date_debarquement">Date débarquement:</label>
        <input type="date" id="date_debarquement" name="date_debarquement" value="{{ old('date_debarquement') }}"required>
        @error('date_debarquement')
        <p class="error"> {{$message}} </p>
        @enderror
      </div>



      <div class="form-group">
        <label for="marin_name">Nom du Marin:</label>
        <input type="text" id="marin_name" name="marin_name" required>
        @error('marin_name')
        <p class="error"> {{$message}} </p>
        @enderror
      </div>
      <input type="submit" value="Enregistrer" class="submit-btn">
    </form>
  </div>
</body>
    </html> --}}


    
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
    <h1 style="margin-bottom: 10px;">Bon d'embarquement</h1>
    <form method="POST" action="/bondembarquement"" enctype="multipart/form-data">
        @csrf

      <input placeholder="Nom du Marin" type="text" id="marin_name" name="marin_name" required 
      value="{{ old('marin_name') }}" />
      @error('marin_name')
      <p class="error"> {{$message}} </p>
      @enderror
  
      <input placeholder="Date Embarquement" type="date" id="date_embarquement" name="date_embarquement"required />
      @error('date_embarquement')
      <p class="error"> {{$message}} </p>
      @enderror

      <input placeholder="Date Debarquement" type="date" id="date_debarquement" name="date_debarquement" required />
      @error('date_debarquement')
      <p class="error"> {{$message}} </p>
      @enderror

      <button class="formBtn" type="submit">Embarquer le marin</button>
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

    });
  </script>
</body>
</html> 


