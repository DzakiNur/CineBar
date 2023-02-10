<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/home.css">
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
    <div class="container">
        <p class="judul">Popular on CineBar</p>
        <center>
            <div class="container2">
            </div>
        </center>
    </div>
    <p class="judul">Check Also</p>
    <center>
        <div class="container3">
            <div class="gambar1">
                <p class="mantap">Blade Runner 2049 (2017)</p>
            </div>
            <div class="gambar2">
                <p class="mantap">Whiplash (2014)</p>
            </div>
            <div class="gambar3">
                <p class="mantap">Interstellar (2014)</p>
            </div>
            <div class="gambar4">
                <p class="mantap">Nightcrawler (2014)</p>
            </div>
        </div>
    </center>
    <center>
        <p class="judulcenter">News</p>
    </center>
    <div class="news">
        <div class="newsatas">
            <div class="newskiri"></div>
            <div class="newskanan">
                <p class="sourcenews">Source : CNN International</p>
                <p class="judulnews">"Blade Runner 2049" took the top spot at the box office this weekend, but it still failed to meet expectations.</p>
                <p class="desknews">The production company A24 has released a first look at “The Lighthouse,” the second film from “The Witch” director Robert Eggers. If this trailer is any indication, the psychological horror movie promises to be just as spine-chilling as his first.</p>
            </div>
        </div>
        <br><br>
        <div class="newsatas">
            <div class="newskiri"></div>
            <div class="newskanan">
                <p class="sourcenews">Source : CNN International</p>
                <p class="judulnews">"Blade Runner 2049" took the top spot at the box office this weekend, but it still failed to meet expectations.</p>
                <p class="desknews">The production company A24 has released a first look at “The Lighthouse,” the second film from “The Witch” director Robert Eggers. If this trailer is any indication, the psychological horror movie promises to be just as spine-chilling as his first.</p>
            </div>
        </div>
    </div> 
    

    
    <script src="https://kit.fontawesome.com/c199db07f7.js" crossorigin="anonymous"></script>
</body>
</html>