
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
<form class="form" method="POST" enctype="multipart/form-data" action="/ajoute-marin">
    @csrf
    <p class="heading">Ajouter un Marin</p>

    <input class="input" placeholder="Nom" type="text" id="Nom" name="Nom" value="{{old('Nom')}}"/>
    @error('Nom')
    <p class="error"> {{$message}} </p>
    @enderror

    <input class="input" required placeholder="Prenom" type="text" id="Prenom" name="Prenom" value="{{old('Prenom')}}"/>
    @error('Prenom')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" required placeholder="Matricule" type="text" id="Matricule" name="Matricule"  value="{{old('Matricule')}}"/>
    @error('Matricule')
    <p class="error"> {{$message}} </p>
    @enderror

    <input class="input"  required placeholder="Email" type="email" value="{{old('email')}}" id="email" name="email"/>
    @error('email')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input"  required placeholder="Adresse" type="text" id="adress" name="adress" required
    value="{{old('adress')}}"/>
    @error('adress')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" placeholder="Wilaya domicile" type="text" id="wilaya_de_domicile" name="wilaya_de_domicile" required
    value="{{old('wilaya_de_domicile')}}"/>
    @error('wilaya_de_domicile')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" placeholder="Wilaya de naissance" type="text" id="wilaya_de_naissance" name="wilaya_de_naissance" required
    value="{{old('wilaya_de_naissance')}}"/>
    @error('wilaya_de_naissance')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" placeholder="Date Naissance" type="date" id="Date_Naissance" name="Date_Naissance" required
    value="{{old('Date_Naissance')}}"/>
    @error('Date_Naissance')
    <p class="error"> {{$message}} </p>
    @enderror


    <input class="input" placeholder="Fonction" type="text" id="Post_travail" name="Post_travail"  value="{{ old('Post_travail') }}" required
    value="{{old('Date_Naissance')}}"/>
    @error('Post_travail')
    <p class="error"> {{$message}} </p>
    @enderror

    <input class="input" placeholder="Numero telephone"  type="number" id="Numero_telephone" name="Numero_telephone"  value="{{ old('Numero_telephone') }}" required>
    @error('Numero_telephone')
    <p class="error"> {{$message}} </p>
    @enderror
    <button class="btn" type="submit">Ajouter Marin</button>
</form>
  </body>
</html>

