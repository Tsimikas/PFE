


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');
*{
    font-family: 'Poppins', sans-serif;
}


.wrapper{
    background: #ececec;
    padding: 0 20px 0 20px;
}
.main{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.row{
    width: 900px;
    height: 550px;
    border-radius: 10px;
    background: #fff;
    box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.2);
}
.side-image{
    background-image: url("img/are.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 10px 0 0 10px;
}
img{
    width: 35px;
    position: absolute;
    top: 30px;
    left: 30px;
}
.text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.text p{
    color: #fff;
    font-size: 18px;
}
i{
    font-weight: 400;
    font-size: 15px;
}
.right{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.input-box{
    width: 330px;
    box-sizing: border-box;
}
.input-box header{
    font-weight: 700;
    text-align: center;
    margin-bottom: 45px;
}
.input-field{
    display: flex;
    flex-direction: column;
    position: relative;
    padding: 0 10px 0 10px;
}
.input{
    height: 45px;
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 1px solid rgba(0,0,0,0.2);
    outline: none;
    margin-bottom: 20px;
    color: #40414a;
}
.input-box .input-field label{
    position: absolute;
    top: 10px;
    left: 10px;
    pointer-events: none;
    transition: .5s;
}
.input-field .input:focus ~ label{
    top: -10px;
    font-size: 13px;
}
.input-field .input:valid ~ label{
    top: -10px;
    font-size: 13px;
    color: #5d5076;
}
.input-field .input:focus, .input-field .input:valid{
    border-bottom: 1px solid #743ae1;
}
.submit{
    border: none;
    outline: none;
    height: 45px;
    background: #ececec;
    border-radius: 5px;
    transition: .4s;
}
.submit:hover{
    background: rgba(37, 95, 156,0.9);
    color: #fff;
}
.signin{
    text-align: center;
    font-size: small;
    margin-top: 25px;
}
span a{
    text-decoration: none;
    font-weight: 700;
    color: #000;
    transition: .5s;
}
span a:hover{
    text-decoration: underline;
    color: #000;
}
@media only screen and (max-width: 768px){
    .side-image{
        border-radius: 10px 10px 0 0;
    }
    img{
        
        width: 35px;
        position: absolute;
        top: 20px;
        left: 47%;
    }
    
      .error {

    color:red;
    font-size: 0.8rem;
}


    .text{
        position: absolute;
        top: 70%;
        text-align: center;
    }
    .text p,i{
        font-size: 22px;
    }
    .row{
        max-width: 420px;
        width: 100%;
    }
}
    </style>

</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="" alt="" >
                    <div class="text">
                        <p style="font-size: 1.5em">Welcome to ShipMates</p>
                    </div>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>Login</header>
                     <form class="form" method="POST" action="/login" enctype="multipart/form-data">
                      @csrf
                        <div class="input-field">
                            <input type="text" class="input" id="Username" name="Username" required autocomplete="off">
                            <label for="text">Username</label>
                            @error('Username')
                            <h1 class="error" style=" color:red;
    font-size: 0.8rem;"> {{$message}} </h1>
                             @enderror
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" 
                            name="password" required>
                            <label for="password">Password</label>
                           @error('password')
                           <h1 class="error" style=" color:red;
    font-size: 0.8rem;"> {{$message}} </h1>
                           @enderror
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Log in ">
                            
                        </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>







