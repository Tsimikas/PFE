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
  <h2>Medical Visit Form</h2>
  <form method="POST" action="/visitemedical" enctype="multipart/form-data">
   @csrf

    <label for="date_visite">Date of Visit:</label>
    <input type="date" id="date_visite" name="date_visite" value="{{ old('date_visite') }}" required>
    @error('date_visite')
    <p class="error"> {{$message}} </p>
    @enderror

    <label for="marin">Marin:</label>
    <input type="text" id="marin" name="marin" value="{{ old('marin') }}" equired>
    @error('marin')
    <p class="error"> {{$message}} </p>
    @enderror

    <label for="Duree">Duration:</label>
    <input type="text" id="Duree" name="Duree" value="{{ old('Duree') }}" required>
    @error('Duree')
    <p class="error"> {{$message}} </p>
    @enderror

    <input type="submit" value="Submit">
  </form>
</body>
</html>
