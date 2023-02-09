<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CineBar</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="container">
        <div class="con-kiri">
            {{-- <center>
                <div class="apa">
                   <p class="welcome">Welcome Back!</p>
                </div>
            </center> --}}
            <img src="assets/images/interstellar.jpg" alt="">
            <div style="position:absolute; top:25%; left:25%;"><h1>halo</h1></div>
        </div>
        <div class="con-kanan">
            <center>
                <p class="login-title">Login</p>
                <form action="{{route('storeLogin')}}" method="post">
                    @csrf
                    <label for="email" class="email-title">Your Email</label><br>
                    <input type="email" class="here-input" name="email" id="email" autofocus required><br><br>
                    <label for="password" class="password-title">Your Password</label><br>
                    <input type="password" class="here-input" name="password" required><br><br>
                    <button type="submit" class="submit-button">Login</button><br>
                    <hr>
                </form>
                <p class="dont">Don't have an account? <a href="{{route('register')}}" class="register">Register</a></p>
            </center>
        </div>
    </div>


    
</body>
</html>