
{{--!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Bon Debarquement</title>
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
    <h1 style="margin-bottom: 10px;">Bon debarquement</h1>
    <form method="POST" action="/debarquement"" enctype="multipart/form-data">
        @csrf

      <input placeholder="Matricule du Marin" type="text" id="marin_name" name="marin_name" required
      value="{{ old('marin_name', request('matricule')) }}" />
      @error('marin_name')
      <p class="error"> {{$message}} </p>
      @enderror


      <label for="date_embarquement" id="dateEmbarquementLabel">Date debarquement</label>
      <input placeholder="Date Debarquement" type="date" id="date_debarquement" name="date_debarquement"required />
      @error('date_debarquement')
      <p class="error"> {{$message}} </p>
      @enderror


      <label for="date_embarquement" id="dateEmbarquementLabel">Date embarquement</label>
      <input placeholder="Date Embarquement" type="date" id="date_dembarquement" name="date_dembarquement"required
      value="{{ request('date_embarquement')}}"/>


      <input placeholder="Port debarquement" type="text" id="port" name="port" required />
      @error('port')
      <p class="error"> {{$message}} </p>
      @enderror

      <input placeholder="Navire" type="text" id="navire" name="navire" required />
      @error('navire')
      <p class="error"> {{$message}} </p>
      @enderror --}}

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
<form class="form" action="/debarquement" method="POST" enctype="multipart/form-data">
    @csrf

    <p class="heading">Bon debarquement</p>


    <input class="input" laceholder="Matricule du Marin" type="text" id="marin_name" name="marin_name" required
    value="{{ old('marin_name', request('matricule')) }}">
    @error('marin_name')
    <p class="error"> {{$message}} </p>
    @enderror


    <p>Date Debarquement :</p>
    <input class="input" placeholder="Date Debarquement" type="date" id="date_debarquement" name="date_debarquement"required />
    @error('date_debarquement')
    <p class="error"> {{$message}} </p>
    @enderror

   <p>Date Embarquement :</p>
    <input class="input" placeholder="Date Embarquement" type="date" id="date_dembarquement" name="date_dembarquement"required
    value="{{ request('date_embarquement')}}"/>


    <input class="input" placeholder="Port debarquement" type="text" id="port" name="port" required />
    @error('port')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" placeholder="Navire" type="text" id="navire" name="navire" required />
    @error('navire')
    <p class="error"> {{$message}} </p>
    @enderror


    <button class="btn" type="submit">Debarquer le marin</button>
</form>
  </body>
</html>
