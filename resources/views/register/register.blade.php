<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CineBar</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
    <div class="container">
        <div class="con-kanan">
            <center>
                <p class="login-title">Register</p>
                <form action="{{route('storeRegister')}}" method="post">
                    @csrf
                    <label for="username" class="name-title">Your Username</label><br>
                    <input type="text" class="here-input" name="name" id="name" autofocus required><br><br>
                    <label for="email" class="email-title">Your Email</label><br>
                    <input type="email" class="here-input" name ="email" required><br><br>
                    <label for="password" class="password-title">Your Password</label><br>
                    <input type="password" class="here-input" name="password" required><br><br>
                    <button type="submit" class="submit-button">Register</button><br>
                    <hr>
                </form>
                <p class="dont">Already have an account? <a href="{{route('login')}}" class="login">Login</a></p>
            </center>
        </div>
        <div class="con-kiri">
            <center>
                <div class="apa">
                   <p class="welcome">Welcome Back!</p>

                </div>
            </center>
            <img src="assets/images/lighthouse2.jpg" alt="">
        </div>
        
    </div>



</body>
</html>