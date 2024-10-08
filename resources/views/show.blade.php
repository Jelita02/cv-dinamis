<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Adila</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- untuk menghubungkan Main CSS File -->
  <link rel="stylesheet" href="{{ asset('css/main.css')}}">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <h1 class="sitename">Adila</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#certification">Certification</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
      
        <h2>Hi, I'm Adila </h2>
        <p>I am a graphic designer living in Bali<br></p>
        <a href="#about" class="btn-scroll" title="Scroll Down"><i class="bi bi-chevron-down"></i></a>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/profiladila.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            @foreach ($data as $data)
                <h2>{{$data->nama}} </h2>
                <p class="fst-italic py-3">
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$data->usia}}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$data->alamat}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <p class="py-3">
                    {{$data->keterangan}}  
                    </p>
            @endforeach
            <div class="top-margin-40">
            </div>
            <div class=""row button-section">
              <a type="button" href="assets/pdf/CV_ADILA.pdf" class="btn btn-danger">Download CV</a>
            </div>
            </div> 
          </div>
          
          <div class="container section-title" style="margin-top: 80px;" data-aos="fade-up">
            <h2>Education</h2>
          </div><!-- End Section Title -->
          <div class="container-fluid p-5 my-4 bg-white text-black rounded-3" style="border: 10px solid #9b004d;">
            <div class="row">
              <div class="col-md">
                <img src="assets/img/polije-ngawi.jpg" alt="pnj_logo" width="200px" class="rounded-3 shadow-sm">
              </div>
              <div class="col-auto education-container" style="text-align: right;">
                <br>
                @foreach($education as $education)
                <h4>{{$education->tahun}}</h4>
                <h5>{{$education->sekolah}} </h5>
                <h5>{{$education->jurusan}}</h5> 
                @endforeach
              </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- tampilan skill -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="container-1">

            <div class="section-q">Professional Skills</div>
            <div class="skills-list">
                <div class="skill-item">UI/UX Design</div>
                <div class="skill-item">Web Developer</div>
                <div class="skill-item">Data Mining</div>
                <div class="skill-item">Public Speaking</div>
                <div class="skill-item">Leadership</div>
                <div class="skill-item">Problem Solving</div>
            </div>
            
            <div class="section-q">Languages</div>
            <div class="skills-list">
                <div class="skill-item">HTML</div>
                <div class="skill-item">CSS</div>
                <div class="skill-item">JavaScript</div>
                <div class="skill-item">Python</div>
                <div class="skill-item">PHP</div>
                <div class="skill-item">React.js</div>
            </div>
            </div>
          

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="certification" class="certification section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Certification</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">
          <div class="slider">
            <div class="slide active">
                <div class="certificate-card">
                    <img src="assets/img/Certification/sertifikat1.jpeg" alt="Certificate 1">
                    <div class="certificate-info">
                        <p class="h2">2024</p>
                        <p>Tim Developer Pengembangan Sistem</p>
                        <a href="assets/img/Certification/sertifikat1.jpeg" title=" Certification 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-arrow-right-square-fill"></i></a>
                        <!-- <a href="#">Lihat Sertifikat</a> -->
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="certificate-card">
                    <img src="assets/img/Certification/serifikat2.jpeg" alt="Certificate 2">
                    <div class="certificate-info">
                        <p class="h2">2024</p>
                        <p>Tim Developer Pengembangan Sistem</p>
                        <a href="assets/img/Certification/serifikat2.jpeg" title="Certification 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-arrow-right-square-fill"></i></a>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="certificate-card">
                    <img src="assets/img/Certification/sertifikat3.jpeg" alt="Certificate 3">
                    <div class="certificate-info">
                        <p class="h2">2024</p>
                        <p>Tim Developer Pengembangan Sistem</p>
                    </div>
                    <a href="assets/img/Certification/sertifikat3.jpeg" title="Certification 3" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-arrow-right-square-fill"></i></a>
                </div>
            </div>
        </div>

        <!-- Slider Indicators -->
        <div class="slider-indicators">
          <center>
              <span class="dot active"></span>
              <span class="dot"></span>
              <span class="dot"></span>
          </center>
        </div>

       
        </div>

      </div>

    </section><!-- /Resume Section -->


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Web</li>
            <li data-filter=".filter-branding">Exp</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/portfolio/App1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>R.M ANDINI MINANG</p>
                <a href="assets/img/portfolio/App1.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/portfolio/web.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 1</h4>
                <p>DIFANAR</p>
                <a href="assets/img/portfolio/web.jpeg" title="Web 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details2.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/portfolio/exp1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>exp 1</h4>
                <p>Pelatihan Junior Grapic Designer</p>
                <a href="assets/img/portfolio/exp1.jpeg" title="Experience 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details3.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Denpasar , Bali</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62 895 2302 1842</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>adilajelitaputri58@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <h3 class="sitename">Adila</h3>
      <div class="social-links d-flex justify-content-center">
        <a href="https://www.facebook.com/share/r6aivnXfprcyNGtT/?mibextid=qi2Omg"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/adila_jelitaputri?igsh=MTBodXhrYjB4OHhuZQ"><i class="bi bi-instagram"></i></a>
        <a href="https://id.linkedin.com/in/adila-jelita-putri-4ba643208"><i class="bi bi-linkedin"></i></a>
      </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
