<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyProfile</title>

        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link href="node_modules\bootstrap-icons\font\bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="style.css">

    </head>
    <body>
       {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navbar">
          <a class="navbar-brand ms-5" href="#heading"><img src="assets/logo.png" alt="Logo"class="logo d-inline-block align-top mt-2"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5 pe-5 fw-bold">
              <li class="nav-item ms-5">
                <a class="nav-link js-scroll-trigger" href="#heading">Home</a>
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
                <a class="nav-link js-scroll-trigger" href="#contact">Contact Me</a>
              </li>
            </ul>
          </div>
        </nav> 
        
        <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" class="scrollspy-example" tabindex="0">
          {{-- Heading --}}
          <div class="container-fluid heading" id="heading">
            <div class="heading_content">
              <h1 class="fw-bold">Hello and Welcome!</h1>
              <p class="my-3">Get to know about me more</p>
              <div class="button">
                <a class="btn shadow text-light fw-bold" href="#about" role="button">About Me</a>
              </div>
            </div>
          </div>
          
          {{-- Profile --}}
          <div class="container-fluid" id="about">
            <div class="profile_header">
              <h1 class="header text-center fw-bold">ABOUT ME</h1>
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
              <img src="assets/profile_photo.jpg" class="rounded-circle object-fit-cover" alt="Profile Photo">
            </div>
            <div class="d-flex justify-content-center">
              <p class="text text-center">I am college student from BINUS University. I've always had the principle that if someone can achieve success, then I can do it too. If someone can be great, so can I if I keep trying, because in the end we reap what we sow. Our efforts will not be in vain because God sees our hard work.</p>
            </div>
          </div>

          {{-- Education --}}
          <div class="container-fluid container-bg" id="education">
            <h1 class="text-center text-white text-decoration-underline fw-bold">EDUCATION</h1>
            <br>
            <div class="sekolah text-center">
              <div class="sekolah_bagian_atas d-inline-flex">
                <div class="sekolah1 text-center">
                  <div class="tk">
                    <img src="assets/tk.png" alt="TK Mardi Waluya Cibinong" class="rounded zoom">
                  </div>
                  <div class="namaSekolah1">
                    <p class="text-center">TK Mardi Waluya Cibinong</p>
                  </div>
                </div>
                <div class="sekolah2">
                  <div class="sd">
                    <img src="assets/sd.png" alt="SD Mardi Waluya Cibinong" class="rounded zoom">
                  </div>
                  <div class="namaSekolah2">
                    <p class="text-center">SD Mardi Waluya Cibinong</p>
                  </div>
                </div>
                <div class="sekolah3">
                  <div class="smp">
                    <img src="assets/smp.png" alt="SMP Mardi Waluya Cibinong" class="rounded zoom">
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
                    <img class="rounded zoom" src="assets/sma.png" alt="SMA Mardi Waluya Cibinong">
                  </div>
                  <div class="namaSekolah4">
                    <p class="text-center">SMA Mardi Waluya Cibinong</p>
                  </div>
                </div>
                <div class="sekolah5">
                  <div class="ppti">
                    <img class="rounded zoom" src="assets/ppti.png" alt="PPTI BCA (BINUS)">
                  </div>
                  <div class="namaSekolah5">
                    <p class="text-center">PPTI BCA (BINUS)</p>
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
                <div class="c_image zoom" >
                  <img src="assets/c.png" alt="C">
                </div>
                <div class="html_image zoom">
                  <img src="assets/html.png" alt="HTML">
                </div>
                <div class="css_image zoom">
                  <img src="assets/css.png" alt="CSS">
                </div>
                <div class="js_image zoom">
                  <img src="assets/js.png" alt="JavaScript">
                </div>
              </div>
              <div class="gambarBawah d-inline-flex my-5">
                <div class="java_image zoom">
                  <img src="assets/java.png" alt="Java">
                </div>
                <div class="python_image zoom">
                  <img src="assets/python.png" alt="Phyton">
                </div>
                <div class="mysql_image zoom">
                  <img src="assets/mysql.png" alt="MySQL">
                </div>
                <div class="r_image zoom">
                  <img src="assets/r.png" alt="R">
                </div>
              </div>
            </div>
          </div>

        <div class="container mt-5 text-light mb-5" id="contact">
          <h1 class="pb-5 fw-bold">Contact Me</h1>
          <form action="https://formsubmit.co/f95cff9b62c29904b977299349938b49" class="row g-3 fs-5" method="POST">
            {{-- honeypot --}}
            <input type="text" name="_honey" style="display:none;">
            {{-- disable capthca --}}
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="http://127.0.0.1:8000/success">
            <div class="col-md-6">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" class="form-control" name="Name" id="name" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Your E-mail</label>
              <input type="email" class="form-control" name="E-mail" id="email" required>
            </div>
            <div class="col-md-8">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" name="Subject" id="subject" required>
            </div>
            <div class="col-md-4">
              <label for="phone" class="form-label">Phone Number (Optional)</label>
              <input type="text" class="form-control" name="PhoneNumber" id="phone" placeholder="+62xxxxxxxxxxx">
            </div>
            <div class="col-md-12">
              <label for="message" class="form-label">Message</label>
              <textarea id="message" rows="10" class="form-control" name="Message" required></textarea>
            </div>
            <div class="col-md-12 text-center">
              <button type="submit" class="btn text-light fw-bold fs-4 mt-4">Submit</button>
            </div>
          </form>
        </div>

        {{-- Footer --}}
        <footer>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4 mt-2 text-light">
                  <p>Copyright © 2023 MyProfile</p>
              </div>
              <div class="col-md-4 text-center mt-2">
                <a href="https://instagram.com/charlene_j21?igshid=ZDdkNTZiNTM=" class="instagram"><i class="bi bi-instagram text-light"></i></a>
                <a href="https://github.com/CJ0178" class="github"><i class="bi bi-github text-light mx-3"></i></a>
              </div>
              <div class="col-md-4 text-md-right mt-2 text-end">
                  <a href="#" class="text-light">Terms of Use</a> 
                  <span class="text-light mx-2">|</span> 
                  <a href="#" class="text-light">Privacy Policy</a>
              </div>
            </div>
          </div>
        </footer>

        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="profile.js"></script>
    </body>
</html>
