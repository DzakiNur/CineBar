<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/home.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>
<body>
    <header class="header-coi">
        <nav class="nav-coi">
            <p class="cinebar">CineBar&copy;</p>
            <center>
                <ul class="ul-coi">
                    <li><a href="">Popular</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#reviews">Review</a></li>
                    <p class="profile"><i class="fa-solid fa-user profile-logo"></i>Hi, {{Auth::User()->name}}</p>
                </ul>
            </center>
            <hr class="hr-coi">
        </nav>
    </header>

    {{-- Popular Films --}}
    <div class="container">
        <p class="judul">Popular on CineBar</p>
        <center>
            <div class="container2">
            </div>
        </center>
    </div>

    {{-- Films --}}
    <p class="judul">Check Also</p>
    @foreach($film as $films)
    <center>
        <div class="container3">
            <div class="gambar1">
                <p class="mantap">{{$films->judul}} ({{$films->tahun}})</p>
            </div>
            {{-- <div class="gambar2">
                <p class="mantap">Whiplash (2014)</p>
            </div>
            <div class="gambar3">
                <p class="mantap">Interstellar (2014)</p>
            </div>
            <div class="gambar4">
                <p class="mantap">Nightcrawler (2014)</p>
            </div> --}}
        </div>
    </center>
    @endforeach

    {{-- News --}}
    <center>
        <p class="judulcenter" id="news">News</p>
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

    {{-- Reviews --}}
    <center>
    <p class="judulcenter" id="reviews">Reviews</p>
    </center>
    <center>
        <form action="{{route('postReview')}}" method="post">
            @csrf
            <textarea style="position: absolute; margin-top: -2000px;" name="name_user" id="" cols="30" rows="10">{{Auth::User()->name}}</textarea>
            <input type="text" class="name-movie" name="name_movie" placeholder="Name Movie">
            <br><br>
            <textarea name="review" class="review-movie" id="review" cols="30" rows="10" placeholder="Comment"></textarea>    
            <button type="submit" class="sub-btn">SUBMIT</button>
        </form>
    </center>
    @foreach($review as $reviews)
    <center>
    <div class="asik">
        <img src="assets/images/lighthouse2.jpg" alt="" class="profile-image">
        <p class="name-profile">{{$reviews->name_user}}</p>
        <p class="moview">{{$reviews->name_movie}}</p>
    </center>
    <p class="reviewnya">{{$reviews->review}}</p>
    </div>
    @endforeach
    {{-- <center>
    <div class="asik">
        <img src="assets/images/interstellar.jpg" alt="" class="profile-image">
        <p class="name-profile">Christopher Nolan</p>
        <p class="moview">Interstellar</p>
    </center>
   
    <p class="reviewnya">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi repellendus sed animi veritatis recusandae. Quo accusantium quos repudiandae! Officia consequatur nemo voluptatum tempore ad, magnam totam. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In ea excepturi ipsam. Laborum, sit quidem modi ullam eligendi aspernatur, illum, doloremque unde eos temporibus recusandae non quia ut cumque saepe?</p>

    </div>

    <center> --}}
    <div class="footer">
        <p>Copyright &#169; Dzaki Nur Muhammad</p>
    </div>
    </center>
    


    <script>
        // Scroll to specific values
        // scrollTo is the same
        window.scroll({
          top: 2500, 
          left: 0, 
          behavior: 'smooth'
        });
        
        // Scroll certain amounts from current position 
        window.scrollBy({ 
          top: 100, // could be negative value
          left: 0, 
          behavior: 'smooth' 
        });
        
        // Scroll to a certain element
        document.querySelector('.hello').scrollIntoView({ 
          behavior: 'smooth' 
        });
        </script>
    <script src="https://kit.fontawesome.com/c199db07f7.js" crossorigin="anonymous"></script>
</body>
</html>