<!DOCTYPE html>
<html>
<head>
  <title>The 6th UI Art War</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="/public/css/style.css">
  <link rel="stylesheet" href="/public/css/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }

    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('/public/images/uiaw.png');
        min-height: 100%;
    }

    /* Second image (Teaser) */
    .bgimg-2 {
        background-image: url("/public/images/contenthal1.png");
        min-height: 400px;
    }

    /* Third image (Timeline) */
    .bgimg-3 {
        background-image: url("/public/images/contenthal2.png");
        min-height: 400px;
    }

    /* Fourth image (Testimonials) */
    .bgimg-4 {
        background-image: url("/public/images/contenthal3.png");
        min-height: 400px;
    }

    /* Fifth image (Medpar) */
    .bgimg-5 {
        background-image: url("/public/images/contenthal4.png");
        min-height: 400px;
    }

    #about{
        background-color:#e56e65;f
    }


    .w3-wide {letter-spacing: 10px;}
    .w3-hover-opacity {cursor: pointer;}

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) {
        .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5{
            background-attachment: scroll;
        }
    }


  </style>
</head>
<body class="w3-mobile">

<!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar" style="z-index:99999!important;vertical-align:top;">

    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
      <a href="#teaser" class="w3-bar-item w3-button" onclick="toggleFunction()">TEASER</a>
      <a href="#timeline" class="w3-bar-item w3-button" onclick="toggleFunction()">TIMELINE</a>
      <a href="/public/crew" class="w3-bar-item w3-button">CREW</a>
    </div>
  </div>

  <!-- First Parallax Image with Logo Text -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-topright w3-hide-small" style="white-space:nowrap;padding-right:12%;padding-top:1%">
      <p class="w3-center ban w3-padding-large responsive w3-wide w3-animate-opacity" id="demo" style="text-size:6em;"></p>
      <!-- <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span> -->
    </div>
    <div class="w3-display-topmiddle w3-hide-medium w3-hide-large w3-padding-32" style="white-space:nowrap;">
      <p class="w3-center ban w3-padding-large w3-wide w3-xlarge w3-animate-opacity" id="demoss"></p>
      <!-- <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span> -->
    </div>
  </div>

  <!-- Container (About Section) -->
  <div class="w3-text-white w3-large" style="background-color: #ed8f8b;">
  <div class="w3-content w3-container w3-padding-64" id="about" style="background-color: #ed8f8b;">
    <h3 class="w3-center ban w3-xxlarge">ABOUT UIAW</h3>
    <p class="w3-center w3-xxlarge mr"><em>Tema</em></p>
    <p class="mr" style="text-align: justify;text-justify: inter-word;"><span style="margin-left:4em">UI</span> Art War tahun ini mengangkat tema “Kota Bicara” yang mengandung arti jika kota adalah sebuah entitas yang hidup dan dapat merasa maka kali ini ia ingin mengungkapkan apa yang ia rasa. Tema ini diambil untuk menunjukan bahwa seni  bukan hanya berbicara tentang estetika, tetapi juga mengenai kebermanfaatan seni itu sendiri bagi masyarakat. Dalam hal ini, panitia berfokus pada memberikan kebermanfaatan bagi masyarakat kota. Pemilihan subjek berupa “kota” didasarkan beberapa pertimbangan. Pertama supaya mensinergiskan dengan isu yang diangkat oleh Bidang Sosial dan Politik (Sospol) dan Sosial Lingkungan (Sosling) BEM UI. Kedua, UI berada di Kota Depok. Sehingga perlu bagi UI untuk memberikan kebermanfaatan bagi Kota Depok sebagaimana tri darma perguruan tinggi yakni “pengabdian masyarakat”. Pengabdian masyarakat ini diwujudkan melalui kesenian ruang publik dan mengangkat masalah-masalah yang terjadi di kota, khususnya di Kota Depok.</p>

    <div style="text-align: justify;text-justify: inter-word;">
    <p class="w3-center w3-xxlarge mr"><em>Outline Kegiatan</em></p>
    <div class="mr">
    <p><span style="margin-left:4em">The</span> 6th UI Art War merupakan acara yang dibawahi oleh Departemen Seni dan Budaya BEM UI 2017 dan merupakan acara kompetisi seni terbesar di Universitas Indonesia yang bertemakan Kota Berbicara.</p>

    </p><span style="margin-left:4em">Acara</span> ini tentunya akan melibatkan semua Fakultas yang ada di Universitas Indonesia yang bertujuan untuk meningkatkan kreatifitas dan kecintaan Mahasiswa Universitas Indonesia akan seni. Dimana acara ini akan dihadiri oleh kira-kira 5000 pengunjung secara keseluruhan yang terdiri dari Mahasiswa Universitas Indonesia dan Umum.
        Acara ini akan diselenggarakan dari mulai 27 Oktober-17 November 2017 di Universitas Indonesia dan terdiri dari beberapa cabang lomba seni seperti vocal group, solo vocal, band, cerpen, deklamasi puisi, film, fotografi, lukis, mural, poster, tari, stand up comedy, dan teater.
        Masing-masing dari cabang lomba tersebut akan mempunyai tema turunan tersendiri dari tema umum yang ditetapkan.</p>
    <p><span style="margin-left:4em">Bagaimana</span> tertarik untuk ikut? Dijamin bakal seru banget nih! Ayo jangan lupa datang dan jangan lewatkan setiap keseruan acara The 6th UI Art War. Kapan lagi bisa bergabung dalam acara seni terbesar se-Universitas Indonesia! Berikut ini outline dari keseluruhan rangkaian acara The 6th UI Art War!</p>
    </div>
    </div>
    <div class="w3-center">
      {{-- <a href="/public/crew"><button class="w3-button w3-white w3-xxlarge w3-round-large">Our Crew</button></a> --}}
    </div>
  </div>
</div>

  <!-- Second Parallax Image with Teaser Text -->
  <div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
      <span class="w3-jumbo w3-text-white w3-wide ban">TEASER</span>
    </div>
  </div>

  <!-- Container (Teaser Section) -->
  <div class="w3-text-white" style="background-color:#f9d0c2">
  <div class="w3-content w3-container w3-padding-64" id="teaser">
    <p class="w3-center w3-xlarge ban">Hallo, UI!<br>
      ARE YOU READY FOR THE BIGGEST ART COMPETITION IN UNIVERSITY OF INDONESIA?
      THIS NOVEMBER!<br>
      Don’t miss the hypest event ever!
      Stay tuned for more details!<br>
      Thank You for watching!
    </p><br>

    <div class="w3-row w3-content w3-container">
        <div class="video-container" style="border:16px solid;border-color:#ed8f8b;">
          <iframe style="max-width:100%;height:100%" src="https://www.youtube.com/embed/ZOxh7u-VZzw" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>
        </div>
    </div>
  </div>
</div>

  <!-- Third Parallax Image with timeline Text -->
  <div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
       <span class="w3-jumbo w3-text-white w3-wide ban">TIMELINE</span>
    </div>
  </div>

  <div id='timeline' class="w3-content w3-container w3-padding-64 w3-steel">
    <h3 class="w3-center w3-xxlarge mr">Timeline Events <br> <span class="w3-large w3-opacity-min" style="margin-top:-15px;">Click image for details</span></h3>

    <!-- timeline vertical -->
    <div class="timeline">
      <div class="container left">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/1.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity  w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p>Parade Grand Opening<br>
              <br>Hari/Tanggal : Kamis, 28 oktober 2017
              <br>Tempat: UI
            </p>
          </div>
        </div>
      </div>
      <div class="container right">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Puisi </p>
            <p>
              Tema: “Kota Bicara Tentang Gelap Malam"<br>
              Juri: <br>
              a. Galeh Pramudianto<br>
              b. Irfan Hakim<br>
              c. Hasan Aspahani<br>
              <br>
              Hari, Tanggal: Senin, 6 November 2017<br>
              Tempat: Auditorium ILRC<br>
              Rundown:<br>
              <img src="/public/images/table/1.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container left">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/3.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Poster </p>
            <p>
              Tema: “Kota Bicara Tentang Alam” <br>
              Juri:<br>
              a. Rizki Pasadana (Mahasiswa Aktif IKJ)<br>
              b. Zudarlis Elfira (Eksekutif Producer Trans TV)<br>
              c. Nanang Wahyudi (Dosen Lepas TGP PNJ)<br>
              <br>
              Hari/ Tanggal: Selasa, 7 November 2017<br>
              Tempat	: Auditorium ILRC<br>
              Rundown : <br>
              <img src="/public/images/table/2.jpg" alt="">
            </p>
            <p> Lukis </p>
              <p>
                Tema: “Kota Bicara Anak” <br>
                Juri:<br>
                o Iwa Akhmad Surnawi<br>
                o Guntur Jong Merdeka<br>
                o Dian Ardianto<br>
                <br>
                Hari/ Tanggal: Selasa, 7 November 2017<br>
                Tempat	: Annex, Balairung<br>
                Rundown : <br>
                <img src="/public/images/table/3.jpg" alt="">
              </p>
            <p> Mural </p>
            <p>
              Tema: “Kota Bicara Tentang Kesenjangan Sosial” <br>
              Juri:<br>
              a. Asti Husain<br>
              b. Daan Yahya<br>
              c. Mirazs<br>
              <br>
              Hari/ Tanggal: Selasa, 7 November 2017<br>
              Tempat	: Annex, Balairung<br>
              Rundown : <br>
              <img src="/public/images/table/4.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container right">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/4.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Vocal Group </p>
            <p>
              Tema: “Kota Bicara tentang Romantika Asmara” <br>
              Juri: <br>
              a. Angga Fajar Prayudha<br>
              b. Anton Mirzaputra<br>
              c. Nara Anumila<br>
              <br>
              Hari/Tanggal: Rabu, 8 November 2017<br>
              Tempat: Auditorium Vokasi<br>
              Rundown: <br>
              <img src="/public/images/table/5.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container left">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/5.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Monolog </p>
            <p>
              Tema: “Kota Bicara tentang Integritas” <br>
              Juri:<br>
              a. Junian Rumais Siregar<br>
              b. Andreas Silverius Sinaga<br>
              c. Rangga Saputra (Ranggomambo)<br>
              <br>
              Hari/ Tanggal: Kamis, 9  November 2017<br>
              Tempat: Auditorium Vokasi<br>
              Rundown:<br>
              <img src="/public/images/table/6.jpg" alt=""> <br>
              <img src="/public/images/table/6a.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container right">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/6.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Fotografi </p>
            <p>
              Tema: “Kota Bicara Sepi Dalam Ramai” <br>
              Juri: <br>
              a. Tirto Andayanto <br>
              b. Tamlikho <br>
              c. Stephanus Hannie <br>
              <br>
              Hari/ Tanggal: Jumat, 10  November 2017<br>
              Tempat: Gekom, FISIP<br>
              Rundown:<br>
              <img src="/public/images/table/7.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container left">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/7.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Teater </p>
            <p>
              Tema: “Kota Bicara tentang Pendidikan” <br>
              Juri: <br>
              A. Wimbadi Jaka Prasena <br>
              B. Zeeman Artapuga <br>
              C.Acep Saripudin Martin <br>
              <br>
              Hari/ Tanggal: Sabtu dan Minggu, 11 - 12 November 2017 <br>
              Tempat: Gedung IX FIB <br>
              Rundown: <br>
              <img src="/public/images/table/8.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container right">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/8.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Film </p>
            <p>
              Tema: “Kota Bicara Tentang Hak Perempuan” <br>
              Juri: <br>
              a. Pritagita Arianegara <br>
              b. Hanief Jerry <br>
              c. Fetty  <br>
              <br>
              Hari/ Tanggal: Senin, 13 November 2017 <br>
              Tempat	: Ruang Quantum FTUI <br>
              Rundown : <br>
              <img src="/public/images/table/9.jpg" alt=""> <br>
              <img src="/public/images/table/9a.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container left">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/9.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Stand Up Comedy </p>
            <p>
              Tema: “Kota Bicara Ekspektasi dan Realita” <br>
              Juri: <br>
              a. Reza Pardede <br>
              b. HeriHoreh <br>
              c. Ilham Renzia <br>
              <br>
              Hari/ Tanggal: Senin, 14 November 2017 <br>
              Tempat	: Balairung UI <br>
              Rundown : <br>
              <img src="/public/images/table/10.jpg" alt=""> <br>
              <img src="/public/images/table/10a.jpg" alt="">
            </p>
            <p> Komik </p>
            <p>
              Tema: “Kota berbicara tentang Lelucon” <br>
              Juri: <br>
              a. Adelia Maghfirare, author dari Maghfirare Comic <br>
              b. Fajar, author dari Ghosty Comic <br>
              c. Haryadhi, author dari Komik Strip untuk Umum <br>
              <br>
              Hari/ Tanggal: Selasa, 14 November 2017 <br>
              Tempat	: Auditorium ILRC <br>
              Rundown : <br>
              <img src="/public/images/table/11.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container right">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/10.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Solo Vocal </p>
            <p>
              Tema: “Kota Bicara Nada – Nada Sendu” <br>
              Juri: <br>
              a. Arif Budiman <br>
              b. Nera Kurnia <br>
              c.Avia Athalia <br>
              <br>
              Hari/ Tanggal: Rabu, 15 November 2017 <br>
              Tempat	: Auditorium Vokasi UI <br>
              Rundown : <br>
              <img src="/public/images/table/12.jpg" alt=""> <br>
              <img src="/public/images/table/12a.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container left">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/11.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Tari </p>
            <p>
              Tema: “Kota Berbicara tentang Masa Lalu” <br>
              Juri: <br>
              a. Suryadi <br>
              b. Dwi Septiani <br>
              c. Niluh Made Susana,S.Sn <br>
              <br>
              Hari/Tanggal: Kamis, 16 November 2017 <br>
              Tempat: Balairung, UI <br>
              Rundown: <br>
              <img src="/public/images/table/13.jpg" alt=""> <br>
              <img src="/public/images/table/13a.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="container right">
        <div class="w3-col-m3">
          <img src="/public/images/timeline/12.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-xlarge" alt="The mist over the mountains">
          <div class="w3-hide">
            <p> Band </p>
            <p>
              Tema: “Kota berbicara Euforia” <br>
              Juri: <br>
              a. Rodgrays Silaban <br>
              b. Christ Eleazar Sitinjak <br>
              c. Ambang Priambara <br>
              <br>
              Hari/Tanggal: Sabtu, 18 November 2017 <br>
              Tempat: Parkiran FISIP <br>
              Rundown: <br>
              <img src="/public/images/table/14.jpg" alt="">
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- end of vertical timeline -->
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-white" onclick="this.style.display='none'" >
    <span class="w3-button w3-large w3-white w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-transparent w3-padding-16">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>




  <!-- Fourth Parallax Image with Testimonials Text -->
  <div class="bgimg-4 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
       <span class="w3-jumbo ban w3-text-white">TESTIMONIALS</span>
    </div>
  </div>

  <!-- Container (Testimoni Section) -->
  <div style="background-color:#569ea1">
  <div class="w3-content w3-container-fluid w3-padding-64" id="testimonials">
    <div class="w3-row w3-padding-32 w3-section">
      <div class="w3-mobile w3-responsive w3-content w3-section w3-text-white" style="max-width:100%">

        <div class="mySlides w3-content w3-container" style="width:100%;height:300px">
          <img class="w3-image w3-circle w3-quarter" src="/public/images/Picture1.png" style="padding-top:20px;" alt="Car">
          <div class="w3-threequarter" style="padding-left:15px">
            <h1 class="ban"> KETUA BEM UI 2017 <br> M. Syaeful Mujab (Fisip 2013)</h1>
            <p class="mr w3-large" style="text-align: justify;text-justify: inter-word;">UI Art War (UIAW) bukanlah sebuah pentas seni biasa.
              Ini juga bukan soal kompetisi antar fakultas. UI AW adalah tempat bagi kamu para penikmat
              seni untuk mengapresiasi seni dan seniman yang tumbuh dan berkembang sesuai dengan
              kekhasan masing-masing fakultas. Saya sangat menunggu momen itu, terutama tahun ini.
              Saya yakin UIAW tahun ini akan jadi salah satu yang terbaik dan saya yakin kalian juga menunggunya.</p>
          </div>
        </div>

        <div class="mySlides w3-content w3-container" style="width:100%;height:300px">
          <img class="w3-image w3-circle w3-quarter" src="/public/images/Picture2.png" style="padding-top:20px" alt="Car">
          <div class="w3-threequarter" style="padding-left:15px">
            <h1 class="ban">KETUA LIGA TARI <br> Ridha Aulia Rahmi (Fasilkom 2014)</h1>
            <p class="mr w3-large" style="text-align: justify;text-justify: inter-word;">UI Art War merupakan medan pertempuran buah karya otak kanan manusia yang esensi kehadirannya bukanlah untuk membunuh melainkan untuk mencipta.
            Dari tahun ke tahun, UI Art War selalu berhasil menumbuhkan semangat totalitas berkesenian dalam diri Mahasiswa UI. Semoga seluruh entitas yang terlibat dapat semakin mensukseskan
            penyelenggaraan kompetisi sekaligus panggung seni yang paling dinanti ini.
            Selamat berjuang bagi seluruh punggawa seni Universitas Indonesia dalam UI Art War 2017!</p>
          </div>
        </div>

        <div class="mySlides w3-content w3-container" style="width:100%;height:300px">
          <img class="w3-image w3-circle w3-quarter" src="/public/images/Picture3.png" style="padding-top:20px" alt="Car">
          <div class="w3-threequarter" style="padding-left:15px">
            <h1 class="ban">PO UI ART WAR 2016 <br> Nadia Feby A.R (FH 2014)</h1>
            <p class="mr w3-large" style="text-align: justify;text-justify: inter-word;">UI Art War (UIAW) merupakan acara kompetisi seni antar fakultas di UI yang setiap tahun memiliki tantangan tersendiri bagi para seniman UI.
              Tempat dimana para seniman menunjukkan jati diri mereka dengan seni yang ia ekspresikan melalui karya. UIAW bagi saya adalah acara yang selalu membuat saya dan para
              pecinta seni penasaran untuk selalu menikmati seni yang ditampilkan oleh setiap fakultas. Walaupun kompetisi, nyatanya UI Art War mempunyai satu tujuan yaitu untuk
              menjadikan UI Art War (UIAW) lebih baik lagi dan lagi. Semoga UIAW tahun ini menjadi yang terbaik, untuk panitia teruslah semangat, untuk peserta jangan pernah
              menyerah untuk membanggakan fakultasmu dan memuaskan hasrat senimu.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Fifth Parallax Image with Medpar Text -->
  <div class="bgimg-5 w3-display-container w3-opacity-min w3-mobile w3-responsive">
    <!-- <div class="w3-display-middle">
    </div> -->
    <img src="/public/images/sponsor.png" alt="" style="max-width:100%;" class="w3-display-middle">

  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <a href="http://instagram.com/uiartwar"><i class="fa fa-instagram w3-hover-opacity"></i></a>
      <a href="http://youtube.com/UIArtWar"><i class="fa fa-youtube-play w3-hover-opacity"></i></a>
      <a href="http://line.me/R/ti/p/%40uiartwar"><i class="fa fa-android w3-hover-opacity"></i></a>
    </div>
    <p>Developed with <strong>Love</strong> by <a href="http://callus.ga"><strong>Callus Studio</strong></a>.</p>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer>

  <!-- Add Google Maps -->
  <script>
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

  // Modal Image Gallery
  function onClick(element) {
    //document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    var x = element.nextElementSibling.innerHTML;
    captionText.innerHTML = x;
  }

  // var head = document.getElementById("kontol");
  // var headcon = head.innerHTML;

  // Change style of navbar on scroll
  window.onscroll = function() {myFunction()};
  function myFunction() {
      var navbar = document.getElementById("myNavbar");
      var navcon = '<a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a><a href="#home" class="w3-bar-item w3-button">HOME</a><a href="#about" class="w3-bar-item w3-button w3-hide-small">ABOUT</a><a href="#teaser" class="w3-bar-item w3-button w3-hide-small">TEASER</a><a href="#timeline" class="w3-bar-item w3-button w3-hide-small">TIMELINE</a><a href="/public/crew" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">CREW</a>';

      // var head = document.getElementById("kontol");
      // var headcon = head.innerHTML;

      if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
          navbar.innerHTML = navcon;
          navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
          // head.innerHTML = "";
      } else {
        navbar.innerHTML = "";
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        // head.innerHTML = headcon;
      }




  }

  // Used to toggle the menu on small screens when clicking on the menu button
  function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
      } else {
          x.className = x.className.replace(" w3-show", "");
      }
  }
  var slideIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(carousel, 8000); // Change image every 2 seconds
  }
  </script>
  <script>
  var countDownDate = new Date("Nov 6, 2017 07:00:00").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";

      document.getElementById("demoss").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";

      // If the count down is over, write some text
      if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "\"KOTA BICARA\"";
          document.getElementById("demo").setAttribute("class", "w3-center ban responsive w3-wide w3-animate-opacity");
          document.getElementById("demo").setAttribute("style", "white-space:nowrap;margin-right:60px;padding-top:1%;font-size: 6rem;");
          document.getElementById("demoss").innerHTML = "\"KOTA BICARA\"";
          document.getElementById("demoss").setAttribute("class", "w3-center ban responsive w3-wide w3-animate-opacity");
          document.getElementById("demoss").setAttribute("style", "white-space:nowrap;padding-top:1%;font-size: 2.7rem;");
      }
  }, 1000);
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
  <!--
  To use this code on your website, get a free API key from Google.
  Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
  -->

</body>
</html>
