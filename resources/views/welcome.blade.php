<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/welcome.css">
</head>
<body>
    <header class="header-coi">
        <nav class="nav-coi">
            <p class="cinebar">CineBar&copy;</p>
            <center>
                <ul class="ul-coi">
                    <li>Popular</li>
                    <li>News</li>
                    <li>Review</li>
                    <p class="profile"><i class="fa-solid fa-user profile-logo"></i>Hi, {{Auth::User()->name}}</p>
                </ul>
            </center>
            <hr class="hr-coi">
        </nav>
    </header>
    <center>
        <p class="judulatas">WELCOME TO</p>
        <p class="judul">CineBar</p>
    </center>

    
    <script src="https://kit.fontawesome.com/c199db07f7.js" crossorigin="anonymous"></script>
</body>
</html>