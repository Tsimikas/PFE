 {{-- <section class="px-6 py-8">

    <main class="max-w-lg mx-auto mt-40 bg-gray-300 p-6 rounded-xl ">
        <h1 class="text-center font-bold text-xl">Register!</h1>
    <form action="/register" method="post" class="mt-20">
       <div class="mb-6">

            <label class="block ml-2 uppercase font-bold text-xs text-gray-700"     for="Nom">
                  Nom
          </label>

               <input class="border border-gray-400 p-2 w-full"
                type="text"
                name="Nom"
                id="Nom"
                required>

      </div> --}}

    {{--  <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrer!</title>
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
        input[type="password"],
        input[type="tel"],
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
    <h1>Create User</h1>
    <form method="POST" action="/register" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" id="Username" name="Username" value="{{ old('Username') }}" required>
            @error('Username')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>




        <div class="form-group">
            <label for="profil">Profil</label>
            <select type="profil" id="profil" name="profil"  value="{{ old('profil') }}" required>
                <option value="admin">admin</option>
                <option value="directeur">directeur</option>
                <option value="gestionnaire">gestionnaire</option>
                <option value="ecrivant">ecrivant</option>
            </select>
            @error('profil')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            @error('password')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div> //
        <button type="submit">Create User</button>
    </form>
</body>
</html> --}}

2

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register!</title>
    <style>
        /* Form Styles */
        body {
            background: linear-gradient(135deg, #667eea 0%, #87ceeb 100%);
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 2rem;
            border-radius: 0.25rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
            color: #878aeb;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #878aeb;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="profil"] {
            display: block;
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            font-size: 1rem;
            margin-top: 0.25rem;
        }

        select {
            display: block;
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            font-size: 1rem;
            margin-top: 0.25rem;
            background-color: white;
            color: #878aeb;
        }

        button[type="submit"] {
            display: inline-block;
            background-color: #878aeb;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            font-size: 1rem;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #6ca6cd;
        }

        /* Error Styles */
        .error {
            color: red;
            margin-top: 0.25rem;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <form method="POST" action="/register" enctype="multipart/form-data">
        @csrf
        <h1>Create User</h1>
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" id="Username" name="Username" value="{{ old('Username') }}" required>
            @error('Username')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="profil">Profil</label>
            <select type="profil" id="profil" name="profil" value="{{ old('profil') }}" required>
                <option value="admin">admin</option>
                <option value="directeur">directeur</option>
                <option value="gestionnaire">gestionnaire</option>
                <option value="ecrivant">ecrivant</option>
            </select>
            @error('profil')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            @error('password')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <button type="submit">Create User</button>
    </form>
</body>
</html> 
 