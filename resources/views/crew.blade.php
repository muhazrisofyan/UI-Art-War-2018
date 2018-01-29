@extends('master')

@section('title')
  <title> Crew | The 6th UI Art War</title>
@endsection

@section('script-content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
    // var slideIndex = 0;
    // carousel();
    //
    // function carousel() {
    //   var i;
    //   var x = document.getElementsByClassName("mySlides1 nonee");
    //   for (i = 0; i < x.length; i++) {
    //     x[i].style.display = "none";
    //   }
    //   slideIndex++;
    //   if (slideIndex > x.length) {slideIndex = 1}
    //   x[slideIndex-1].style.display = "block";
    //   x[slideIndex-1].style.textAlign = "center";
    //   setTimeout(carousel, 2000); // Change image every 2 seconds
    // }

    var slideIndex = [1,1,1,1,1,1];
    // showDivs(slideIndex, 1);
    for (var i = 1; i < 6; i++) {
      showDivs(slideIndex[i], i);
    }


    // function plusDivs(n) {
    //   showDivs(slideIndex += n);
    // }

    function currentDiv(n,a) {
      showDivs(slideIndex[a] = n, a);
    }

    function showDivs(n, a) {
      var i;
      var slides = "mySlides" + a;
      var x = document.getElementsByClassName(slides);
      var dots = document.getElementsByClassName("demo" + a);
      if (n > x.length) {slideIndex[a] = 1}
      if (n < 1) {slideIndex[a] = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-red", "");
      }
      x[slideIndex[a]-1].style.display = "inline-block";
      // x[slideIndex[a]-1].style.position = "initial";
      dots[slideIndex[a]-1].className += " w3-red";
    }

    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

// window.onscroll = function() {myFunction()};
// function myFunction() {
//     var navbar = document.getElementById("myNavbar");
//     var navcon = '';
//
//     // var head = document.getElementById("kontol");
//     // var headcon = head.innerHTML;
//
//     if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
//         navbar.innerHTML = navcon;
//         navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
//         // head.innerHTML = "";
//     } else {
//       navbar.innerHTML = "";
//       navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
//       // head.innerHTML = headcon;
//     }
//
//
//
//
// }

  </script>
@endsection

@section('style-content')
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style media="screen">

  .img-container img{
    max-height: 600px;
    max-width: 600px;
    margin: 0 auto;
  }

  .fulls{
    min-height: 100%;
    padding-top: 100px;
    /*padding-bottom: 100px;*/
    z-index: 100!important;
  }

  body{
    background-image: url('/public/images/bgcrew.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: right top;
    background-attachment: fixed;
  }

  .ourcrew{
    height: 170px;
    margin-top: -30px;
    z-index: 99999!important;
    /*position: sticky!important;*/
    /*margin-bottom: 100px;*/
  }

  .ourcrewmob{
    height: 70px;
    margin-top: 10px;
    z-index: 99999!important;
    /*position: sticky!important;*/
    /*margin-bottom: 100px;*/
  }

  .building{
    z-index: -99999!important;
    vertical-align: bottom;
  }

  .nonee{
    display: none;
  }

  .fadeInUp{
    margin-top: 40px;
  }

  .rotate180 {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
  }

  .scrollto--arrow{
    margin-top: 50px;
    /*width: 50px;*/
  }

  </style>
@endsection

@section('body-content')
  <div class="w3-bar w3-cardw3-animate-top" id="myNavbar" style="position:fixed;">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a><a href="/public" class="w3-bar-item w3-button w3-yellow" style="text-decoration:none;">HOME</a>
  </div>
<img src="/public/images/ourcrew.png" alt="Our Crew" class="ourcrew w3-display-topmiddle w3-hide-small w3-hide-medium" style="position:fixed;">
<img src="/public/images/ourcrew.png" alt="Our Crew" class="ourcrewmob w3-display-topmiddle w3-hide-large" style="position:fixed;">

<div class="w3-container w3-mobile w3-responsive ">
  <img src="/public/images/building2.png" alt="building 2" class="w3-display-right w3-hide-medium w3-hide-small building" style="height:100%;position:fixed;">
  <img src="/public/images/building1.png" alt="building 1" class="w3-display-left w3-hide-medium w3-hide-small building" style="height:100%;position:fixed;">
  <img src="/public/images/building1mob.png" alt="building 1" class="w3-display-left w3-hide-large building" style="height:100%;position:fixed;opacity: 0.3;">
  <img src="/public/images/building2mob.png" alt="building 2" class="w3-display-right w3-hide-large building" style="height:100%;position:fixed;opacity: 0.3;">

  {{-- <img src="/images/KONTEN-01.png" alt="Logo" class="logo w3-display-topleft" style="position:fixed;"> --}}
</div>



{{-- <div class="img-container">
  <img class="mySlides" src="/images/crew/PI/1.png">
  <img class="mySlides" src="/images/crew/PI/2.png">
  <img class="mySlides" src="/images/crew/PI/3.png">

  <div class="w3-center">
    <button class="w3-button" onclick="plusDivs(-1)">&#10094; Prev</button>
    <button class="w3-button" onclick="plusDivs(1)">Next &#10095;</button>

    <button class="w3-button demo" onclick="currentDiv(1)">1</button>
    <button class="w3-button demo" onclick="currentDiv(2)">2</button>
    <button class="w3-button demo" onclick="currentDiv(3)">3</button>
  </div>
</div> --}}

<div id="section0" class="fulls w3-mobile w3-responsive" data-aos="zoom-in">
  {{-- <div class="w3-center">

  </div> --}}
  <div class="f1 w3-center">Pengurus Inti</div>

  <div class="w3-center main">
    {{-- <div class="f1 w3-center">Pengurus Inti</div> --}}
    <img class="mySlides1 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/PI/1.png" style="width:400px;height:100%;">
    <img class="mySlides1 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/PI/2.png" style="width:400px;height:100%;">
    <img class="mySlides1 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/PI/3.png" style="width:400px;height:100%;">
  </div>

  <div class="w3-center">
    <button class="w3-button demo1" onclick="currentDiv(1,1)">PO</button>
    <button class="w3-button demo1" onclick="currentDiv(2,1)">Sekre</button>
    <button class="w3-button demo1" onclick="currentDiv(3,1)">R&P</button>
    <a href="#section1" class="fadeInUp">
		  <p class="scrollto--arrow rotate180 w3-hide-medium w3-hide-small"><img src="/public/images/down.gif" alt="scroll down arrow" height="50px"></p>
    </a>
  </div>

</div>

<div id="section1" class="fulls w3-mobile w3-responsives" data-aos="zoom-in">
  <div class="f1 w3-center">Acara</div>

  <div class="w3-container w3-center main">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/1.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/2.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/3.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/4.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/5.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/6.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/7.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/8.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/9.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/10.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/11.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/12.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/13.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/14.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/15.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/16.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/17.png" style="width:400px;height:100%;">
    <img class="mySlides2 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/acara/18.png" style="width:400px;height:100%;">
  </div>

  <div class="w3-center">
    <button class="w3-button demo2" onclick="currentDiv(1,2)">Koor</button>
    <button class="w3-button demo2" onclick="currentDiv(2,2)">Poster</button>
    <button class="w3-button demo2" onclick="currentDiv(3,2)">Tari</button>
    <button class="w3-button demo2" onclick="currentDiv(4,2)">Cerpen</button>
    <button class="w3-button demo2" onclick="currentDiv(5,2)">Vocal Group</button>
    <button class="w3-button demo2" onclick="currentDiv(6,2)">Teater</button>
    <button class="w3-button demo2" onclick="currentDiv(7,2)">Solo Vokal</button>
    <button class="w3-button demo2" onclick="currentDiv(8,2)">LO</button>
    <button class="w3-button demo2" onclick="currentDiv(9,2)">Film</button><span class="w3-hide-medium w3-hide-small"><br></span>
    <button class="w3-button demo2" onclick="currentDiv(10,2)">GO GC</button>
    <button class="w3-button demo2" onclick="currentDiv(11,2)">Puisi</button>
    <button class="w3-button demo2" onclick="currentDiv(12,2)">Lukis</button>
    <button class="w3-button demo2" onclick="currentDiv(13,2)">Mural</button>
    <button class="w3-button demo2" onclick="currentDiv(14,2)">SUC</button>
    <button class="w3-button demo2" onclick="currentDiv(15,2)">Fotografi</button>
    <button class="w3-button demo2" onclick="currentDiv(16,2)">Monolog</button>
    <button class="w3-button demo2" onclick="currentDiv(17,2)">Band</button>
    <button class="w3-button demo2" onclick="currentDiv(18,2)">Komik</button>
    <a href="#section2" class="scrollto wow fadeInUp delay-5s ">
		  <p class="scrollto--arrow rotate180 w3-hide-medium w3-hide-small"><img src="/public/images/down.gif" alt="scroll down arrow" height="50px"></p>
    </a>
  </div>
</div>



<div id="section2" class="fulls w3-mobile w3-responsive">
  <div class="f1 w3-center">Keuangan</div>
  <div class="w3-container w3-center main">
    <img class="mySlides3 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/keuangan/4.png" style="width:400px;height:100%;">
    <img class="mySlides3 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/keuangan/2.png" style="width:400px;height:100%;">
    <img class="mySlides3 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/keuangan/3.png" style="width:400px;height:100%;">
    <img class="mySlides3 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/keuangan/1.png" style="width:400px;height:100%;">
  </div>

  <div class="w3-center">
    <button class="w3-button demo3" onclick="currentDiv(1,3)">Controller</button>
    <button class="w3-button demo3" onclick="currentDiv(2,3)">Sponsorship</button>
    <button class="w3-button demo3" onclick="currentDiv(3,3)">Treasurer</button>
    <button class="w3-button demo3" onclick="currentDiv(4,3)">Danus</button>
    <a href="#section3" class="scrollto wow fadeInUp delay-5s ">
		  <p class="scrollto--arrow rotate180 w3-hide-medium w3-hide-small"><img src="/public/images/down.gif" alt="scroll down arrow" height="50px"></p>
    </a>
  </div>
</div>

<div id="section3" class="fulls w3-mobile w3-responsive">
  <div class="f1 w3-center">Media Kreatif</div>
  <div class="w3-container w3-center main">
    <img class="mySlides4 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/medkre/1.png" style="width:400px;height:100%;">
    <img class="mySlides4 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/medkre/2.png" style="width:400px;height:100%;">
    <img class="mySlides4 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/medkre/3.png" style="width:400px;height:100%;">
    <img class="mySlides4 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/medkre/4.png" style="width:400px;height:100%;">
    <img class="mySlides4 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/medkre/5.png" style="width:400px;height:100%;">
    <img class="mySlides4 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/medkre/6.png" style="width:400px;height:100%;">
    <img class="mySlides4 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/medkre/7.png" style="width:400px;height:100%;">
  </div>

  <div class="w3-center">
    <button class="w3-button demo4" onclick="currentDiv(1,4)">Koor</button>
    <button class="w3-button demo4" onclick="currentDiv(2,4)">Videografi</button>
    <button class="w3-button demo4" onclick="currentDiv(3,4)">Media Partner</button>
    <button class="w3-button demo4" onclick="currentDiv(4,4)">Dekorasi</button>
    <button class="w3-button demo4" onclick="currentDiv(5,4)">Desain</button>
    <button class="w3-button demo4" onclick="currentDiv(6,4)">Dokumentasi</button>
    <button class="w3-button demo4" onclick="currentDiv(7,4)">Publikasi</button>
    <a href="#section4" class="scrollto wow fadeInUp delay-5s ">
		  <p class="scrollto--arrow rotate180 w3-hide-medium w3-hide-small"><img src="/public/images/down.gif" alt="scroll down arrow" height="50px"></p>
    </a>
  </div>
</div>

<div id="section4" class="fulls w3-mobile w3-responsive">
  <div class="f1 w3-center">Operasional</div>
  <div class="w3-container w3-center main">
    <img class="mySlides5 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/oprasional/1.png" style="width:400px;height:100%;">
    <img class="mySlides5 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/oprasional/2.png" style="width:400px;height:100%;">
    <img class="mySlides5 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/oprasional/3.png" style="width:400px;height:100%;">
    <img class="mySlides5 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/oprasional/4.png" style="width:400px;height:100%;">
    <img class="mySlides5 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/oprasional/5.png" style="width:400px;height:100%;">
    <img class="mySlides5 nonee w3-animate-zoom w3-mobile w3-responsive" src="/public/images/crew/oprasional/6.png" style="width:400px;height:100%;">
  </div>

  <div class="w3-center">
    <button class="w3-button demo5" onclick="currentDiv(1,5)">Koor</button>
    <button class="w3-button demo5" onclick="currentDiv(2,5)">Perizinan</button>
    <button class="w3-button demo5" onclick="currentDiv(3,5)">Produksi</button>
    <button class="w3-button demo5" onclick="currentDiv(4,5)">Perlengkapan</button>
    <button class="w3-button demo5" onclick="currentDiv(5,5)">Konsumsi</button>
    <button class="w3-button demo5" onclick="currentDiv(6,5)">K3</button><br><br>
    <a href="#section0" class="scrollto wow fadeInUp delay-5s ">
		  <p class="scrollto--arrow w3-hide-medium w3-hide-small"><img src="/public/images/down.gif" alt="scroll down arrow" height="50px"></p>
    </a>
    <br>
    <br>
    <hr>
    <hr>
    <br>
  </div>
</div>

@endsection
