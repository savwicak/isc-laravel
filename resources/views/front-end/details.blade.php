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

  <main id="main">
    <div class="container">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="front-end_asset/assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="front-end_asset/assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="front-end_asset/assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <!-- <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li>
                <li><strong>Project date</strong>: 01 March, 2020</li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div> -->
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    </div>

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  @include('front-end.inc.footer')

<!-- Vendor JS Files -->
@include('front-end.inc.script.vendorjs')
<!-- Template Main JS File -->
@include('front-end.inc.script.mainjs')
</body>

</html>