<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ISC Junior Akhwat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="front-end_asset/assets/img/isc-logo-hd" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  @include('front-end.inc.css.maincss')

<!-- Vendor CSS Files -->
  @include('front-end.inc.css.vendorcss')

</head>

<body>

  <!-- ======= Header ======= -->
  @include('front-end.inc.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Welcome to,</h2>
          <h1 data-aos="fade-up" data-aos-delay="400">ISC Junior Akhwat</h1>
          <h3 data-aos="fade-up" data-aos-delay="600">We are ready for everyone</h3>
          <div data-aos="fade-up" data-aos-delay="800">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>About Us</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="front-end_asset/assets/img/isc-logo-hd.png" class="img-fluid" alt="logo isc" width="450px" height="450px"> 
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3 padding="10px">Who We Are</h3>
              <h2>ISC or IDN Student Council</h2>
              <p>
              Organisasi Siswa Intra Sekolah (OSIS) SMP IDN merupakan wadah yang dibentuk khusus untuk para siswa SMP guna menciptakan lingkungan yang dinamis, mendukung, dan menyenangkan. OSIS bertujuan untuk melibatkan siswa dalam berbagai kegiatan positif, memajukan suasana sekolah, dan menjadi perwakilan suara siswa.
              </p>
           </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="front-end_asset/assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Programs</h2>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="front-end_asset/assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Achieve more in October</h3>
              <p>Seluruh siswa berlomba-lomba untuk memenuhi tugas yang harus di kerjakan dan akan mendapat hadiah kepada 5 orang tercepat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="front-end_asset/assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Bounding</h3>
              <p>Mengumpulkan seluruh siswa idn untuk bekerja sama dalam suatu game dengan tujuan agar mengerti satu sama yang lain</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="front-end_asset/assets/img/sportfest.png" class="img-fluid" alt="">
              <h3>SportFest</h3>
              <p>Perwakilan dari masing - masing kelas akan berlomba dengan tema sport seperti badminton</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

            </div>
          </div>

      </div>

    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Gallery</h2>
          <p>Check our latest Activity</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">SportFest</li>
              <li data-filter=".filter-card">Bounding</li>
              <li data-filter=".filter-web">Achieve more in October</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="front-end_asset/assets/img/gallery/sportfes1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sport Fest 1</h4>
                <p>Sport Fest</p>
                <div class="portfolio-links">
                  <a href="front-end_asset/assets/img/gallery/sportfes1.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sport Fest Round 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="front-end_asset/assets/img/gallery/aciv3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Achieve more in October 3</h4>
                <p>Achieve more in October</p>
                <div class="portfolio-links">
                  <a href="front-end_asset/assets/img/gallery/aciv3.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Waiting the announcement"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="front-end_asset/assets/img/gallery/sportfes2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sport Fest 2</h4>
                <p>Sport Fest</p>
                <div class="portfolio-links">
                  <a href="front-end_asset/assets/img/gallery/sportfes2.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="9th Grade Contestant"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="front-end_asset/assets/img/gallery/bonding2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bounding 2</h4>
                <p>Bounding</p>
                <div class="portfolio-links">
                  <a href="front-end_asset/assets/img/gallery/bonding2.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Eating together after playing"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="front-end_asset/assets/img/gallery/aciv2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Achieve more in October 2</h4>
                <p>Achieve more in Octoberb</p>
                <div class="portfolio-links">
                  <a href="front-end_asset/assets/img/gallery/aciv2.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="President and vice announcing"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="front-end_asset/assets/img/gallery/sportfes3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sport Fest 3</h4>
                <p>Sport Fest</p>
                <div class="portfolio-links">
                  <a href="front-end_asset/assets/img/gallery/sportfes3.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="8th Grade Contestant"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="front-end_asset/assets/img/gallery/bonding.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bounding 1</h4>
                <p>Bounding</p>
                <div class="portfolio-links">
                  <a href="front-end_asset/assets/img/gallery/bonding.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Participation of cat"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="front-end_asset/assets/img/gallery/bonding3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bounding 3</h4>
                <p>Bounding</p>
                <div class="portfolio-links">
                  <a href="front-end_asset/assets/img/gallery/bonding3.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="While playing"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="front-end_asset/assets/img/gallery/aciv.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Achieve more in October 1</h4>
                <p>Achieve more in October</p>
                <div class="portfolio-links">
                  <a href="front-end_asset/assets/img/gallery/aciv.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="All the winners"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="front-end_asset/assets/img/testimonials/Testimonial.png" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="front-end_asset/assets/img/testimonials/Testimonial.png" class="testimonial-img" alt="">
                  <h3>WLROWLEOEO
                  </h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="front-end_asset/assets/img/testimonials/Testimonial.png" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="front-end_asset/assets/img/testimonials/Testimonial.png" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="front-end_asset/assets/img/testimonials/Testimonial.png" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Members</h2>
          <p>Our hard working Members</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="isc/NailaPutriSyarifa-Disciplinary.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-youtube"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Naila Putri S</h4>
                <span>Discipline Commision<br>anaknya sok santai, padahal panikan</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="isc/president2023.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-youtube"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Quaneisha Syifa N</h4>
                <span>President<br>let us take ibuprofen together, love.</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="isc/FaihaWandaNabilah-VicePresident-9.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-youtube"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Faiha Wanda N</h4>
                <span>Vice President<br>capybara lucu</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="isc/FathiyyaAzkaPutriRakhman-Treasurer-2.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-youtube"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Fathiyya Azka P</h4>
                <span>Treasurer<br>What you learn is yours forever.</span>
              </div>
            </div>
          </div>
          <div class="text-center text-lg-start">
            <a href="/member" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>See Other</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section class="values">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Our Videos</p>
        </header>
        <div class="row gy-4">
          <iframe width="100%" height="630px" src="https://www.youtube.com/embed/mtZlttU-a8M?si=jZairr_sD6IbES3n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Stay In Touch</p>
        </header>

        <div class="row gy-4">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p> Jl. Raya Dayeuh, Sukanegara, Kec. Jonggol,<br> Kabupaten Bogor, Jawa Barat 16830</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+62 858-1166-5776</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>iscjuniorhs@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('front-end.inc.footer')

<!-- Vendor JS Files -->
@include('front-end.inc.script.vendorjs')
<!-- Template Main JS File -->
@include('front-end.inc.script.mainjs')
</body>

</html>