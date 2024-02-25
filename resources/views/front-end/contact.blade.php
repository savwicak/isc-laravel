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
          <h2 data-aos="fade-down">ISC Junior Akhwat</h2>
          <h1 data-aos="fade-down" data-aos-delay="400">Contact Us</h1>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="front-end_asset/assets/img/isc-logo-hd.png" class="img-fluid" alt="logo isc" width="450px" height="450px"> 
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Stay In Touch</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

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

          <div class="col-lg-6">
            <form class="php-email-form" action="/contact" method="post">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  @if(session('success'))
                    <p style="color: lawngreen">{{session('success')}}</p>
                  @endif
                  <div class="error-message">Your Message has been sent!</div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  
                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

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