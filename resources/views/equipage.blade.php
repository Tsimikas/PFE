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
  <h2> CREATE AN EQUIPAGE</h2>
  <form method="POST" action="/equipage" enctype="multipart/form-data">
   @csrf

    <label for="date_debut_membre">Date Debut:</label>
    <input type="date" id="date_debut_membre" name="date_debut_membre" value="{{ old('date_debut_membre') }}" required>
    @error('date_debut_membre')
    <p class="error"> {{$message}} </p>
    @enderror


    <label for="date_fin_membre">Date Fin:</label>
    <input type="date" id="date_fin_membre" name="date_fin_membre" value="{{ old('date_fin_membre') }}" required>
    @error('date_fin_membre')
    <p class="error"> {{$message}} </p>
    @enderror



    <label for="marin">Marin:</label>
    <input type="text" id="marin" name="marin" value="{{ old('marin') }}" equired>
    @error('marin')
    <p class="error"> {{$message}} </p>
    @enderror


    <label for="navire">Navire:</label>
    <select type="text" id="navire" name="navire" value="{{ old('navire') }}" required>
        <option value="Tariq ibn Ziyad">Tariq ibn Ziyad</option>
        <option value="El Djazair II">El Djazair II</option>
        <option value="Tassili II">Tassili II</option>
        <option value="Badji Mokhtar 3">Badji Mokhtar 3</option>

    </select>
    @error('navire')
    <p class="error"> {{$message}} </p>
    @enderror

    <input type="submit" value="Submit">
  </form>
</body>
</html>