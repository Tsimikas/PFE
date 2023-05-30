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
</html>
