


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
<form class="form" method="POST" action="/bondembarquement" enctype="multipart/form-data">
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


     <input class="input" placeholder="Fonction Actuel" type="text" id="post_actuel" name="post_actuel" required
           value="{{old('post_actuel')}}"/>
    @error('post_actuel')
    <p class="error"> {{$message}} </p>
    @enderror

    <input class="input" placeholder="Nouvelle Fonction" type="text" id="nouveau_post" name="nouveau_post" required
           value="{{old('nouveau_post')}}"/>
    @error('nouveau_post')
    <p class="error"> {{$message}} </p>
    @enderror

    <input class="input" placeholder="Cause de la familiarisation" type="text" id="cas_familiarisation" name="cas_familiarisation" required
           value="{{old('cas_familiarisation')}}"/>
    @error('cas_familiarisation')
    <p class="error"> {{$message}} </p>
    @enderror


          <button class="btn" type="submit">ok </button>
</form>
  </body>
</html>
