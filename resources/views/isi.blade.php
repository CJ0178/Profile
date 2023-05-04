@extends('profile')

@section('content')
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
            <div class="sekolah_bagian_bawah d-inline-flex my-3">
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
        <div class="container-fluid mx-0 mb-5" id="skills">
          <h1 class="skillFavorite_header text-decoration-underline ms-5 ps-5">SKILLS</h1>
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

        {{-- SL2 --}}
        <div class="container-fluid mx-0" id="favorite">
            <h1 class="skillFavorite_header text-decoration-underline text-end me-5 pe-5">FAVORITE MANHWA</h1>
            <div class="content w-75 mx-auto">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mt-5">
                            <div class="card text-light zoom">
                                <img class="img-fluid card-img-top gambar" src="{{ asset('assets/' . $product['image']) }}"
                                    alt="{{ $product['name'] }}">
                                    @if($product['rating'] === '4/5')
                                    <div class="card-body text-center product-rating-r">
                                        <div class="product-rating ">
                                            <h4 class="card-title">{{ $product['name'] }}</h4>
                                            <p class="card-text fs-5 text-underline">Rating: {{ $product['rating'] }}</p>
                                            <p class="card-text">Status: {{ $product['status'] }}</p>
                                            <a href="{{ route('product.show', $product['id']) }}" class="btn text-light detail-button fw-bold">Detail</a>
                                        </div>
                                    </div>
                                @elseif($product['rating'] === '4.5/5')
                                <div class="card-body text-center product-rating-sr">
                                    <div class="product-rating ">
                                        <h4 class="card-title">{{ $product['name'] }}</h4>
                                        <p class="card-text fs-5 text-underline">Rating: {{ $product['rating'] }}</p>
                                        <p class="card-text">Status: {{ $product['status'] }}</p>
                                        <a href="{{ route('product.show', $product['id']) }}" class="btn text-light detail-button fw-bold">Detail</a>
                                    </div>
                                </div>
                                @else
                                <div class="card-body text-center product-rating-ssr text-light">
                                    <div class="product-rating ">
                                        <h4 class="card-title">{{ $product['name'] }}</h4>
                                        <p class="card-text fs-5 text-underline">Rating: {{ $product['rating'] }}</p>
                                        <p class="card-text">Status: {{ $product['status'] }}</p>
                                        <a href="{{ route('product.show', $product['id']) }}" class="btn detail-button text-light fw-bold">Detail</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Contact Me --}}
      <div class="container mt-5 text-light mb-5" id="contact">
        <h1 class="fw-bold">Contact Me</h1>
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
</div>
@endsection
