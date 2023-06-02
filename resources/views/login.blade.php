{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Log In!</title>
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
    <h1>Log In!</h1>
    <form method="POST" action="/login" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="Username">Username</label>
            <input type="Username" id="Username" name="Username"  value="{{ old('Username') }}" required>
            @error('Username')
            <p class="error"> {{$message}} </p>
            @enderror
        </div>

        <div class="form-group">
            <label for="profil">Profil</label>
            <input type="profil" id="profil" name="profil"  value="{{ old('profil') }}" required>
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
        </div>
     <button type="submit">Log In</button>
    </form>
</body>
</html> --}}
{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #87ceeb 100%);
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
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

        input[type="text"],

        input[type="password"],

        input[type="profil"],
        input[type="Username"] {
            display: block;
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            font-size: 1rem;
            margin-top: 0.5rem;
            margin-right: 0;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,

        input[type="password"]:focus,

        input[type="profil"]:focus,
        input[type="Username"]:focus {
            border-color: #87ceeb;
            outline: none;
        }

        .error {
            color: red;
            margin-top: 0.25rem;
            font-size: 0.8rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #878aeb;
        }

        button[type="submit"] {
            display: block;
            margin: 0 auto;
            background-color: #878aeb;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #6ca6cd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="/login" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="Username">Username:</label>
                <input type="Username" id="Username" name="Username" value="{{ old('Username') }}" required>
                @error('Username')
                <p class="error"> {{$message}} </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="profil">Profil:</label>
                <input type="profil" id="profil" name="profil" value="{{ old('profil') }}" required>
                @error('profil')
                <p class="error"> {{$message}} </p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                <p class="error"> {{$message}} </p>
                @enderror
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html> --}}













{{--<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#30142b, #a12727);
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }

        h1 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .form-group {
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .form-group label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
            transform-origin: top left;
        }

        .form-group input:focus ~ label,
        .form-group input:valid ~ label {
            top: -20px;
            left: 0;
            color: #f68e44;
            font-size: 12px;
            transform: scale(0.8);
        }

        button[type="submit"] {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #b79726;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px;
        }

        button[type="submit"]:hover {
            background: #f49803;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #f4c803,
                        0 0 25px #bd9d0b,
                        0 0 50px #f4e403,
                        0 0 100px #d5cf1e;
        }

        button[type="submit"] span {
            position: absolute;
            display: block;
        }

        button[type="submit"] span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #f4c003);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }
            50%,
            100% {
                left: 100%;
            }
        }

        button[type="submit"] span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #f4bc03);
            animation: btn-anim2 1s linear infinite;
            animation-delay: 0.25s;
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }
            50%,
            100% {
                top: 100%;
            }
        }

        button[type="submit"] span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #f4dc03);
            animation: btn-anim3 1s linear infinite;
            animation-delay: 0.5s;
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }
            50%,
            100% {
                right: 100%;
            }
        }

        button[type="submit"] span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #f4b003);
            animation: btn-anim4 1s linear infinite;
            animation-delay: 0.75s;
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }
            50%,
            100% {
                bottom: 100%;
            }
        }
    </style>
    <script>
        window.onload = function () {
            const inputs = document.querySelectorAll('.form-group input');
            inputs.forEach(input => {
                input.addEventListener('focus', function () {
                    const label = this.previousElementSibling;
                    label.style.top = '-20px';
                    label.style.left = '0';
                    label.style.color = '#f68e44';
                    label.style.fontSize = '12px';
                    label.style.transform = 'scale(0.8)';
                });

                input.addEventListener('blur', function () {
                    if (this.value === '') {
                        const label = this.previousElementSibling;
                        label.style.top = '0';
                        label.style.left = '0';
                        label.style.color = '#fff';
                        label.style.fontSize = '16px';
                        label.style.transform = 'scale(1)';
                    }
                });
            });
        };
    </script>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="/login" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input type="Username" id="Username" name="Username" value="{{ old('Username') }}" required>
                <label for="Username">Username</label>
                @error('Username')
                <p class="error"> {{$message}} </p>
                @enderror
            </div>

            <div class="form-group">
                <input type="profil" id="profil" name="profil" value="{{ old('profil') }}" required>
                <label for="profil">Profil</label>
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

            <div class="form-group">
                <button type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Login
                </button>
            </div>
        </form>
    </div>
</body>
</html> --}}

<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .form {
  position: relative;
  display: block;
  padding: 2.2rem;

  background: linear-gradient(14deg, rgba(2,0,36, 0.8) 0%, rgba(24, 24, 65, 0.7) 66%, 
            rgb(20, 76, 99) 100%), radial-gradient(circle, rgba(2,0,36, 0.5) 0%, 
            rgba(32, 15, 53, 0.2) 65%, rgba(14, 29, 28, 0.9) 100%);
  border: 2px solid #fff;
  -webkit-box-shadow: rgba(0,212,255) 0px 0px 50px -15px;
  box-shadow: rgba(0,212,255) 0px 0px 50px -15px;
  overflow: hidden;
  z-index: +1;
}

/*------input and submit section-------*/

.input-container {
  position: relative;
}

.input-container input, .form button {
  outline: none;
  border: 2px solid #ffffff;
  margin: 8px 0;
  font-family: monospace;
}

.input-container input {
  background-color: #fff;
  padding: 6px;
  font-size: 0.875rem;
  line-height: 1.25rem;
  width: 250px;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.input-mail:focus::placeholder {
  opacity: 0;
  transition: opacity .9s;
}

.input-pwd:focus::placeholder {
  opacity: 0;
  transition: opacity .9s;
}

.submit {
  position: relative;
  display: block;
  padding: 8px;
  background-color: #c0c0c0;
  color: #ffffff;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.5);
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 500;
  width: 100%;
  text-transform: uppercase;
  overflow: hidden;
}

.submit:hover {
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
  border-radius: 3.9px;
  box-shadow: 4px 5px 17px -4px #ffffff;
  cursor: pointer;
}

.submit:hover::before {
  -webkit-animation: sh02 0.5s 0s linear;
  -moz-animation: sh02 0.5s 0s linear;
  animation: sh02 .5s 0s linear;
}

.submit::before {
  content: '';
  display: block;
  width: 0px;
  height: 85%;
  position: absolute;
  top: 50%;
  left: 0%;
  opacity: 0;
  background: #fff;
  box-shadow: 0 0 50px 30px #fff;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  -o-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

@keyframes sh02 {
  from {
    opacity: 0;
    left: 0%;
  }

  50% {
    opacity: 1;
  }

  to {
    opacity: 0;
    left: 100%;
  }
}

/*--------signup section---------*/


/*--------header section-----------*/

.form-title {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-family: monospace;
  font-weight: 600;
  text-align: center;
  color: #fff;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
  animation-duration: 1.5s;
  overflow: hidden;
  transition: .12s;
}

.form-title span {
  animation: flickering 2s linear infinite both;
}

.title-2 {
  display: block;
  margin-top: -0.5rem;
  font-size: 2.1rem;
  font-weight: 800;
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  -webkit-text-stroke: #fff 0.1rem;
  letter-spacing: 0.2rem;
  color: transparent;
  position: relative;
  text-shadow: 0px 0px 16px #CECECE;
}

.title-2 span::before,
.title-2 span::after {
  content: '—';
}

@keyframes flickering {
  0%,
  100% {
    opacity: 1;
  }

  41.99% {
    opacity: 1;
  }

  42% {
    opacity: 0;
  }

  43% {
    opacity: 0;
  }

  43.01% {
    opacity: 1;
  }

  47.99% {
    opacity: 1;
  }

  48% {
    opacity: 0;
  }

  49% {
    opacity: 0;
  }

  49.01% {
    opacity: 1;
  }
}

/*---------shooting stars-----------*/


.bg-stars {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -2;
  background-size: cover;
  animation: animateBg 50s linear infinite;
}

@keyframes animateBg {
  0%,100% {
    transform: scale(1);
  }

  50% {
    transform: scale(1.2);
  }
}

.star {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 4px;
  height: 4px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 0 0 4px rgba(255,255,255,0.1),0 0 0 8px rgba(255,255,255,0.1),0 0 20px rgba(255,255,255,0.1);
  animation: animate 3s linear infinite;
}

.star::before {
  content: '';
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 300px;
  height: 1px;
  background: linear-gradient(90deg,#fff,transparent);
}

@keyframes animate {
  0% {
    transform: rotate(315deg) translateX(0);
    opacity: 1;
  }

  70% {
    opacity: 1;
  }

  100% {
    transform: rotate(315deg) translateX(-1000px);
    opacity: 0;
  }
}

.star:nth-child(1) {
  top: 0;
  right: 0;
  left: initial;
  animation-delay: 0s;
  animation-duration: 1s;
}

.star:nth-child(2) {
  top: 0;
  right: 100px;
  left: initial;
  animation-delay: 0.2s;
  animation-duration: 3s;
}

.star:nth-child(3) {
  top: 0;
  right: 220px;
  left: initial;
  animation-delay: 2.75s;
  animation-duration: 2.75s;
}

.star:nth-child(4) {
  top: 0;
  right: -220px;
  left: initial;
  animation-delay: 1.6s;
  animation-duration: 1.6s;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

body {
    background: #0f0c29;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #24243e, #302b63, #0f0c29);
    }
    .error {
        font-size: 0.70rem;
  line-height: 1.75rem;
  font-family: monospace;
  font-weight: 600;
  text-align: center;
  color: #f70a16;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
  animation-duration: 1.5s;
  overflow: hidden;
  transition: .12s;
}
    }


</style>

</head>

<body>
    <div class="container">
    <form class="form" method="POST" action="/login" enctype="multipart/form-data">
        @csrf
        <div class="form-title"><span>sign in to your</span></div>
         <div class="title-2"><span>Account</span></div>
         <div class="input-container">
           <input class="input-mail" type="Username" id="Username" name="Username"placeholder="Enter username">
           @error('Username')
           <p class="error"> {{$message}} </p>
           @enderror
           <span> </span>
         </div>
   
         <section class="bg-stars">
           <span class="star"></span>
           <span class="star"></span>
           <span class="star"></span>
           <span class="star"></span>
         </section>

         <div class="input-container">
            <input class="input-pwd" type="profil" id="profil" name="profil" placeholder="Enter profil">
            @error('profil')
            <p class="error"> {{$message}} </p>
            @enderror
         </div>
   
         <div class="input-container">
           <input class="input-pwd" type="password" id="password" name="password" placeholder="Enter password">
           @error('password')
           <p class="error"> {{$message}} </p>
           @enderror
        </div>
         <button type="submit" class="submit">
           <span class="sign-text">Log in</span>
         </button>
          
      </form>
    </div>
</body>

