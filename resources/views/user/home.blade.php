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
            <div class="newskiri2"></div>
            <div class="newskanan">
                <p class="sourcenews">Source : Startefact</p>
                <p class="judulnews">Who's To Blame for "Fight Club" Box Office Flop? Norton Has a Theory</p>
                <p class="desknews">Fight Club is now considered a classic. A lot of people still quote it, and it earned itself a place in the history of cinema. But back in 1999 it sparked a controversy, received polarized critical responses and failed to meet expectations at the box office, only finding commercial success later, with its home video release.</p>
            </div>
        </div>
    </div> 
    <center>
    <p class="judulcenter">Reviews</p>
    </center>
    <center>
    <div class="asik">
        <img src="assets/images/lighthouse2.jpg" alt="" class="profile-image">
        <p class="name-profile">Robert Pattinson</p>
        <p class="moview">Breaking Bad</p>
        <p class="rate">96</p>
    </center>
   
    <p class="reviewnya">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi repellendus sed animi veritatis recusandae fugiat architecto eos qui. Quo accusantium quos repudiandae! Officia consequatur nemo voluptatum tempore ad, magnam totam. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ea excepturi ipsam. Laborum, sit quidem modi ullam eligendi aspernatur, illum, doloremque unde eos temporibus recusandae non quia ut cumque saepe?</p>

    </div>
    <center>
    <div class="asik">
        <img src="assets/images/interstellar.jpg" alt="" class="profile-image">
        <p class="name-profile">Christopher Nolan</p>
        <p class="moview">Interstellar</p>
        <p class="rate">98</p>
    </center>
   
    <p class="reviewnya">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi repellendus sed animi veritatis recusandae. Quo accusantium quos repudiandae! Officia consequatur nemo voluptatum tempore ad, magnam totam. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ea excepturi ipsam. Laborum, sit quidem modi ullam eligendi aspernatur, illum, doloremque unde eos temporibus recusandae non quia ut cumque saepe?</p>

    </div>

    <center>
    <div class="footer">
        <p>Copyright &#169; Dzaki Rahadian</p>
    </div>
    </center>
    


    
    <script src="https://kit.fontawesome.com/c199db07f7.js" crossorigin="anonymous"></script>
</body>
</html>