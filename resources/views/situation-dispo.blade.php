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
<form class="form" method="POST" action="/situation-dispo" enctype="multipart/form-data">
    @csrf
    <p class="heading">Situation</p>

    <input class="input" placeholder="Matricule du Marin" type="text" id="marin" name="marin" required
    value="{{ request('marin')}}" />
    @error('marin')
    <p class="error"> {{$message}} </p>
    @enderror

    <p> Date debut situation :</p>
    <input class="input" placeholder="Date debut situation" type="date" id="date_debut" name="date_debut"required />
    @error('date_debut')
    <p class="error"> {{$message}} </p>
    @enderror

    <p> Date fin situation :</p>
    <input class="input"  placeholder="Date fin situation" type="date" id="date_fin" name="date_fin" required />
    @error('date_fin')
    <p class="error"> {{$message}} </p>
    @enderror



    <input class="input" placeholder="Situation" type="situation" id="situation" name="situation" required
    value="disponible">
     
    @error('situation')
    <p class="error"> {{$message}} </p>
    @enderror

    <button class="btn" type="submit">Disponible</button>
</form>
  </body>
</html>