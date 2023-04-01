<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>

        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link href="node_modules\bootstrap-icons\font\bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="style.css">

    </head>
    <body id="home">
       {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navbar">
          <a class="navbar-brand nav-title fs-2 ms-5" href="#home" id="home">Charlene Jovannie</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fs-2 ms-auto mb-2 mb-lg-0 me-5 pe-5">
              <li class="nav-item ms-5">
                <a class="nav-link js-scroll-trigger" href="#home">Home</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link js-scroll-trigger" href="#about">About Me</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link js-scroll-trigger" href="#education">Education</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
              </li>
              <li class="nav-item ms-5">
                <a class="nav-link js-scroll-trigger" href="#mbti">MBTI</a>
              </li>
            </ul>
          </div>
        </nav> 

        {{-- Heading --}}
        <div class="heading" id="heading">
          <div class="heading_content">
            <h1>Hello and welcome!</h1>
            <br>
            <p class="fs-3">Get to know about me more</p>
            <br>
            <a class="btn fs-3 py-2 shadow" href="#about" role="button">About Me</a>

            <div class="social-links">
              {{-- <a href="#" class="twitter"><i class="bi bi-twitter text-dark"></i></a> --}}
              {{-- <a href="#" class="facebook"><i class="bi bi-facebook text-dark"></i></a> --}}
              <a href="https://instagram.com/charlene_j21?igshid=ZDdkNTZiNTM=" class="instagram"><i class="bi bi-instagram text-dark"></i></a>
              {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin text-dark"></i></a> --}}
              <a href="https://github.com/CJ0178" class="github"><i class="bi bi-github ms-5 text-dark"></i></a>
              <a href="#" class="mailbox"><i class="bi bi-mailbox text-dark ms-5"></i></a>
            </div>
          </div>
        </div>
        
        {{-- Profile --}}
        <div class="container-fluid" id="about">
          <div class="profile_header">
            <h1 class="header text-center">ABOUT ME</h1>
            <div class="gif_underline">
              <img class="q-image qu-cursor--default qu-display--block" src="https://qph.cf2.quoracdn.net/main-qimg-c01aee174bdc338aede0a49aa8a0230a">
            </div>
          </div>
          <div class="background_circle1">
            <span class="dot_kanan"></span>
          </div>
          <div class="background_circle2">
            <span class="dot_kiri"></span>
          </div>
          <div class="photo_profile">
            <span class="profile"></span>
          </div>
          <div class="photo my-5">
            <img src="profile_photo.jpg" class="rounded-circle object-fit-cover" alt="Profile Photo">
          </div>
          <div class="d-flex justify-content-center">
            <p class="text text-center">I am college student from BINUS University. I've always had the principle that if someone can achieve success, then I can do it too. If someone can be great, so can I if I keep trying, because in the end we reap what we sow. Our efforts will not be in vain because God sees our hard work.</p>
          </div>
        </div>

        {{-- Education --}}
        <div class="container-fluid container-bg" id="education">
          <h1 class="text-center text-white text-decoration-underline">EDUCATION</h1>
          <br>
          <div class="sekolah text-center fw-bold fs-4">
            <div class="sekolah_bagian_atas d-inline-flex">
              <div class="sekolah1 ">
                <div class="tk">
                  <img src="assets/tk.png" alt="TK Mardi Waluya Cibinong" class="rounded">
                </div>
                <div class="namaSekolah1">
                  <p class="text-center">TK Mardi Waluya Cibinong</p>
                </div>
              </div>
              <div class="sekolah2">
                <div class="sd">
                  <img src="assets/sd.png" alt="SD Mardi Waluya Cibinong" class="rounded">
                </div>
                <div class="namaSekolah2">
                  <p class="text-center">SD Mardi Waluya Cibinong</p>
                </div>
              </div>
              <div class="sekolah3">
                <div class="smp">
                  <img src="assets/smp.png" alt="SMP Mardi Waluya Cibinong" class="rounded">
                </div>
                <div class="namaSekolah3">
                  <p class="text-center">SMP Mardi Waluya Cibinong</p>
                </div>
              </div>
            </div>
            <div class="sekolah_bagian_bawah d-inline-flex my-5">
              <div class="dekorasi1">
                <img class="dekorasikiri" src="assets/image 4.png" alt="Decoration">
              </div>
              <div class="sekolah4">
                <div class="sma">
                  <img class="rounded" src="assets/sma.png" alt="SMA Mardi Waluya Cibinong">
                </div>
                <div class="namaSekolah4">
                  <p class="text-center">SMA Mardi Waluya Cibinong</p>
                </div>
              </div>
              <div class="sekolah5">
                <div class="ppti">
                  <img class="rounded" src="assets/ppti.png" alt="PPTI BCA">
                </div>
                <div class="namaSekolah5">
                  <p class="text-center">PPTI BCA</p>
                </div>
              </div>
              <div class="dekorasi2">
                <img class="dekorasikanan" src="assets/image 5.png" alt="Dekorasi">
              </div>
            </div>
          </div>
        </div>

        {{-- Skill --}}
        <div class="container-fluid mx-0" id="skills">
          <h1 class="skill_header text-decoration-underline ms-5 ps-5">SKILLS</h1>
          <div class="skills_content text-center">
            <div class="gambarAtas d-inline-flex my-5">
              <div class="c_image">
                <img src="assets/c.png" alt="C">
              </div>
              <div class="html_image">
                <img src="assets/html.png" alt="HTML">
              </div>
              <div class="css_image">
                <img src="assets/css.png" alt="CSS">
              </div>
              <div class="js_image">
                <img src="assets/js.png" alt="JavaScript">
              </div>
            </div>
            <div class="gambarBawah d-inline-flex my-5">
              <div class="java_image">
                <img src="assets/java.png" alt="Java">
              </div>
              <div class="python_image">
                <img src="assets/python.png" alt="Phyton">
              </div>
              <div class="mysql_image">
                <img src="assets/mysql.png" alt="MySQL">
              </div>
              <div class="r_image">
                <img src="assets/r.png" alt="R">
              </div>
            </div>
          </div>
        </div>

        {{-- MBTI --}}
        <div class="container-fluid mx-0" id="mbti">
          <h1 class="mbti_header text-end text-decoration-underline me-5 pe-5">MBTI</h1>
          <div class="image_container">
            <img src="assets/mbti.png" alt="MBTI">
          </div>
          <div class="mbti_name">
            <h1 class="text-end">INFP</h1>
          </div>
        </div>

       {{-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> --}}
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="profile.js"></script>
    </body>
</html>
