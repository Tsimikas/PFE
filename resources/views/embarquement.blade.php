

{{--}}
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

      <input placeholder="Navire" type="text" id="navire" name="navire" required />
      @error('navire')
      <p class="error"> {{$message}} </p>
      @enderror

        <button class="formBtn" type="submit">Ok</button>







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
<form class="form" method="POST" action="/bondembarquement"" enctype="multipart/form-data">
    @csrf
    <p class="heading">Bon Embarquement</p>


    <input class="input" placeholder="Matricule du Marin" type="text" id="marin_name" name="marin_name" required
    value="{{ old('marin_name', request('matricule')) }}" />
    @error('marin_name')
    <p class="error"> {{$message}} </p>
    @enderror


    <p>
        Date Embarquement :
    </p>
    <input class="input" placeholder="Date Embarquement" type="date" id="date_embarquement" name="date_embarquement"required />
    @error('date_embarquement')
    <p class="error"> {{$message}} </p>
    @enderror



    <input class="input" placeholder="Wilaya embarquement" type="text" id="wilaya_embarquement" name="wilaya_embarquement" required
    value="{{ old('wilaya_embarquement', request('wilaya')) }}" />
    @error('wilaya_embarquement')
    <p class="error"> {{$message}} </p>
    @enderror

    <input class="input" placeholder="Numero bon d'embarquement" type="number" id="numero" name="numero" required />
    @error('numero')
    <p class="error"> {{$message}} </p>
    @enderror



    <input class="input" placeholder="Port embarquement" type="text" id="port" name="port" required />
    @error('port')
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


    <button class="btn" type="submit">Embarquer le marin </button>
</form>
  </body>
</html>
