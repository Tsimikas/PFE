<!DOCTYPE html>
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
</html>
