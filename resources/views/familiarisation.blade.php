<!DOCTYPE html>
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
  <h2> Familiarisation </h2>
  <form method="POST" action="/familiarisation" enctype="multipart/form-data">
   @csrf


   <label for="marin">Marin:</label>
   <input type="text" id="marin" name="marin" value="{{ old('marin') }}" equired>
   @error('marin')
   <p class="error"> {{$message}} </p>
   @enderror

    <label for="post_actuel">Fonction Actuel :</label>
    <input type="text" id="post_actuel" name="post_actuel" value="{{ old('post_actuel') }}" required>
    @error('post_actuel')
    <p class="error"> {{$message}} </p>
    @enderror

    <label for="nouveau_post">Nouvelle Fonction :</label>
    <input type="text" id="nouveau_post" name="nouveau_post" value="{{ old('nouveau_post') }}" required>
    @error('nouveau_post')
    <p class="error"> {{$message}} </p>
    @enderror


    <label for="cas_familiarisation">Cas de familiarisation :</label>
    <input type="text" id="cas_familiarisation" name="cas_familiarisation" value="{{ old('cas_familiarisation') }}" required>
    @error('cas_familiarisation')
    <p class="error"> {{$message}} </p>
    @enderror





    <input type="submit" value="Submit">
  </form>
</body>
</html>
