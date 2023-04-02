<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Luigi's Profile</title>
</head>
<body>
  
  {{-- Navbar --}}
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#profile">Luigi Profile</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto ">
          <a class="nav-link me-3" aria-current="page" href="#profile">Profile</a>
          <a class="nav-link me-3" href="#about">About</a>
          <a class="nav-link me-3" href="#skills">Skills</a>
          <a class="nav-link me-3" href="#projects">Projects</a>
          <a class="nav-link me-3" href="#education">Education</a>
        </div>
      </div>
    </div>
  </nav>

  
  {{-- Profile --}}
  <section id="profile">
    <img class="crystal" src="img/crystal.png" alt="">
    <img class="brush" src="img/brush.png" alt="">

    <div class="container">
      <div class="row justify-content-around">
        <div id="intro" class="col-6 align-self-center">
          <h1>Hi, I'm <span style="color: #B8621B;">Luigi</span></h1>
          <h3>Student of Computer Science</h3>
          <h5>Welcome to my profile website!</h5>
        </div>
        <div class="col-4">
          <img class="imageluigi" src="img/imageluigi.png" alt="">
        </div>
      </div>
    </div>
  </section>

  {{-- About --}}
  <section id="about">
    <img class="hexagon" src="img/hexagon.png" alt="">
    <div class="abouttitle">
      <h1>ABOUT ME</h1>
    </div>
    <div class="container">
      <div class="row justify-content-evenly">
        <img class="arrow" src="img/arrow.png" alt="">
        <div class="col-3"  data-aos="zoom-in">
          <img id="aboutluigi" src="img/luigi3.png" alt="">
        </div>
        <div id="name" class="col-7 p-4"  data-aos="zoom-in">
          <h2>My name is</h2>
          <h1 class="ms-3" style="color: #B8621B;">STEFANUS LUIGI MARCELLINO</h1>
          <h4 class="ms-5">was born in</h4>
          <span>
            <h5 class="ms-5" style="color: #262A56;">Palembang, Indonesia <span style="color: #000000;">on</span> July 2, 2003</h5>
          </span>
          <h6 class="ms-5">and I don't have any sibilngs</h6>
        </div>
        <img class="dash" src="img/dash-arrow.png" alt="">
      </div>
      <div id="activities" class="row text-start">
        <h1>My Activities</h1>
      </div>
      <div id="activity" class="row justify-content-evenly text-center"  data-aos="fade-up">
        <div class="col-3">
          <h3>01</h3>
          <img src="img/study.png" alt="">
          <h5>Study</h5>
        </div>
        <div class="col-3">
          <h3>02</h3>
          <img src="img/code.png" alt="">
          <h5>Code</h5>
        </div>
        <div class="col-3">
          <h3>03</h3>
          <img src="img/movie.png" alt="">
          <h5>Watch Movies</h5>
        </div>
        <div class="col-3">
          <h3>04</h3>
          <img src="img/pingpong.png" alt="">
          <h5>Pingpong</h5>
        </div>
      </div>
    </div>
    
    <div class="banner-laptop">
      <div class="textcontainer"></div>
      <div class="container text-center">
        <h4>I'm interested in IT world since I was in Junior High School. I learned about programming skills. Then, I decided to take Computer Science Major. Luckily, I get a chance to study at a top university, called Binus University. I study here for free because I got PPTI BCA scholarship. Right now, I'm still fathoming about IT world, especially in developing programming.</h4>
      </div>
      <img src="img/laptop.jpg" alt="">
    </div>
  </section>

  {{-- Skills --}}
  <section id="skills">
    <div class="skillstitle">
      <h1>SKILLS</h1>
    </div>
    <div class="container">
      <div class="row justify-content-around" style="margin-bottom: 3vw;">
        <div class="col-4 text-center">
          <div class="card shadow">
            <div class="card-body">
              <img class="card-icon" src="img/developer.png" alt="">
              <h5 class="card-title mt-3" style="color: #B8621B;">Application Developer</h5>
              <p class="card-text">I like to develop web applications. I use Laravel, PHP, CSS, JS, etc for developing web apps. I will always keep learning to become a best developer.</p>
            </div>
          </div>
        </div>
        <div class="col-4 text-center">
          <div class="card shadow">
            <div class="card-body">
              <img class="card-icon" src="img/ai.png" alt="">
              <h5 class="card-title mt-3" style="color: #B8621B;">Artificial Intelligence</h5>
              <p class="card-text">As technology keeps developing, I'm getting interested in artificial intelligence field. I use Python to do AI related projects.</p>
            </div>
          </div>
        </div>
        <div class="col-4 text-center">
          <div class="card shadow">
            <div class="card-body">
              <img class="card-icon" src="img/database.png" alt="">
              <h5 class="card-title mt-3" style="color: #B8621B;">Database Administration</h5>
              <p class="card-text">Database is one of my favorite topic in IT. With data, I also can get new insights about some fields. I use mySQL to manage databases.</p>
            </div>
          </div>
        </div>
      </div>
  </section>

  {{-- Projects --}}
  <section id="projects">
    <div class="projectstitle">
      <h1>PROJECTS</h1>
    </div>
    <div class="container">
      <div class="row text-center justify-content-center" style="margin-bottom: 3vw">
        <div class="col-md-5">
          <div class="card shadow"  data-aos="fade-right" data-aos-duration="2000">
            <img id="music" src="img/music.png" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Muree</h5>
              <p class="card-text">This project is about Artificial Intelligence song recommendation system with content-based filtering based on genre and release date.</p>
              <a href="https://github.com/StefanusLuigiMarcellino/muree" class="gitlink">Click here to look more...</a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card shadow" data-aos="fade-left" data-aos-duration="2000">
            <img id="library" src="img/library.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">B-Lib</h5>
              <p class="card-text">This project is about library system, like borrowing, returning, extending books in BCA Learning Institute Training Lounge and Library.</p>
              <a href="https://github.com/StefanusLuigiMarcellino/b-lib" class="gitlink">Click here to look more...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Education --}}
  <section id="education">
    <div class="edutitle">
      <h1>EDUCATION</h1>
    </div>
    <div class="container">
      <div class="row justify-content-around text-center">
        <div class="timeline col-3 align-self-center">
          <h1>2009 - 2015</h1>
          <h3>Xaverius 2 Elementary School Palembang</h3>
        </div>
        <div class="col-6">
          <img class="eduimg" src="img/sd.png" alt="" data-aos="zoom-in" data-aos-duration="1500">
        </div>
        <img class="dash-right" src="img/dash-arrow.png" alt="">
      </div>
      <div class="row justify-content-around text-center">
        <div class="col-6">
          <img class="eduimg" src="img/smp.png" alt=""  data-aos="zoom-in" data-aos-duration="1500">
        </div>
        <div class="timeline col-3 align-self-center">
          <h1>2015 - 2018</h1>
          <h3>Xaverius 1 Junior High School Palembang</h3>
        </div>
        <img class="dash-left" src="img/dash-arrow.png" alt="">
      </div>
      <div class="row justify-content-around text-center">
        <div class="timeline col-3 align-self-center">
          <h1>2018 - 2021</h1>
          <h3>Xaverius 1 Senior High School Palembang</h3>
        </div>
        <div class="col-6">
          <img class="eduimg" src="img/sma.jpg" alt=""  data-aos="zoom-in" data-aos-duration="1500">
        </div>
        <img class="dash-right" src="img/dash-arrow.png" alt="">
      </div>
      <div class="row justify-content-around text-center">
        <div class="col-6">
          <img class="eduimg" src="img/bca.png" alt=""  data-aos="zoom-in" data-aos-duration="1500">
        </div>
        <div class="timeline col-3 align-self-center">
          <h1>2021 - Now</h1>
          <h3>BCA Learning Institute x Binus Univeristy</h3>
        </div>
      </div>
    </div>
  </section>

  {{-- Footer --}}
  <div class="footer text-center">
    <div id="insta" class="foot">
      <span>
        <img src="img/ig.png" alt="">
        <h4>stefanus_luigi</h4>
      </span>
    </div>
    <div id="copy" class="foot">
      <h4>&copy Copyright 2023 luigiprofile</h4>
    </div>
    <div id="email" class="foot">
      <span>
        <img src="img/email.png" alt="">
        <h4>luigimarcellino2003@gmail.com</h4>
      </span>
    </div>
  </div>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true
    });
  </script>
</body>
</html>