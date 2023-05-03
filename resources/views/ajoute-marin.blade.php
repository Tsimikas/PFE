<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un marin</title>
    <style>
        /* Form Styles */
        form {
            max-width: 500px;
            margin: 0 auto;
        }
        h1 {
            max-width: 500px;
            margin: 0 auto;

        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="number"],
        input[type="profil"] {
            display: block;
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            font-size: 1rem;
            margin-top: 0.25rem;
        }
        button[type="submit"] {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            font-size: 1rem;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
        /* Error Styles */
        .error {

            color:red;
            margin-top: 0.25rem;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <h1>Ajouter marin</h1>
    <form method="POST" action="/ajoute-marin" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="Nom">Nom</label>
            <input type="text" id="Nom" name="Nom"  value="{{ old('Nom') }}" required>
            @error('Nom')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="Prenom">Prenom</label>
            <input type="text" id="Prenom" name="Prenom"  value="{{ old('Prenom') }}" required>
            @error('Prenom')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="Matricule">Matricule</label>
            <input type="text" id="Matricule" name="Matricule" value="{{ old('Matricule') }}"required>
            @error('Matricule')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="Date_Naissance">Date de Naissance</label>
            <input type="date" id="Date_Naissance" name="Date_Naissance" value="{{ old('Date_Naissance') }}" required>
            @error('Date_naissance')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"  value="{{ old('email') }}" required>
            @error('email')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>
        <div class="form-group">
            <label for="Post_travail">Post de travail</label>
            <input type="text" id="Post_travail" name="Post_travail"  value="{{ old('Post_travail') }}" required>
            @error('Post_travail')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="Numero_telephone">Numero de Telephone</label>
            <input type="number" id="Numero_telephone" name="Numero_telephone"  value="{{ old('Numero_telephone') }}" required>
            @error('Numero_telephone')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="equipage_id">Equipage</label>
            <input type="number" id="equipage_id" name="equipage_id"  value="{{ old('equipage_id') }}" required>
            @error('equipage_id')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>







        <button type="submit">Ajouter Marin</button>
    </form>
</body>
</html>
