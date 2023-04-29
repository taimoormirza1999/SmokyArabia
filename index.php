<?php include_once('partials/css_ass.php') ?>
<?php include_once('partials/header.php') ?>
<style>
    .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      
    }
    .swiper-slide img {
      display: block;
      width: 100%;
      border:10px solid white;
    }
    @media only screen and (max-width: 768px) {
      .swiper{
        width:100%;
      }
  .swiper-slide img {
    border:2px solid white!important;
   
  }}
    
  </style>
<header class="header-2">
  <div class="page-header min-vh-75 relative">
    <span class="mask  opacity-4"></span>
    <!-- <div class="container">
      <div class="row"> -->
        <div class=" mt-4 text-center mx-auto" style="width:100%;text-align: center;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);z-index:111">
          <h1 class="text-white pt-5 mt-n5">Smoky Arabia</h1>
          <p class="  mt-3 big_text3 " style="color:aliceblue">A unique getaway</p>
        </div>
      <!-- </div> -->
    <!-- </div> -->
    <video autoplay muted loop>
      <source src="./assets/videos/jeep_safari.mp4" type="video/mp4">
    </video>
    <img src="./assets/img/illustrations/door_pattern.svg" class="door_svg" alt="" />
    <div class="hero_overlay"></div>
  </div>
  <?php include_once('./partials/top_nav.php') ?>
</header>


<main>
  <?php include_once('partials/service_cta.php') ?>
  <div class="my-5"></div>
  <section class=" py-5 bg-main">
    <h1 class="big_text">Smoky Arabia welcomes you to a memorable adventure in the desert</h1>
    <div class="container">
      <!-- iMGAE AND TEXT -->
      <div class="row align-items-center py-6">
        <div class="col-lg-6 ms-auto ">
          <img src="assets/img/bg10.jpg">
        </div>
        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start px-lg-3">
            <div class="info">
              <p class="mt-3 text-msecondary">WAKE UP FROM A NIGHT UNDER THE STARS</p>
              <h3 class="pe-5  big_text2">A unique glamping experience in the Arabian Dunes</h3>
              <dv class="d-flex justify-content-space-between">
                <button class=" button-msecondary">DISCOVER ACCOMMODATIONS</button>
                <button class="btn-main">BOOK YOUR STAY</button>
              </dv>
            </div>

          </div>

        </div>
      </div>
      <!-- iMGAE AND TEXT -->
      <div class="row align-items-center py-xxl-6 middle_service">

        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start px-lg-3">
            <div class="info">
              <p class="mt-3 text-msecondary">WAKE UP FROM A NIGHT UNDER THE STARS</p>
              <h3 class="pe-5 big_text2">A unique glamping experience in the Arabian Dunes</h3>
              <dv class="d-flex justify-content-space-between">
                <button class=" button-msecondary">DISCOVER ACCOMMODATIONS</button>
                <button class="btn-main">BOOK YOUR STAY</button>
              </dv>
            </div>

          </div>

        </div>
        <div class="col-lg-6 ms-auto ">
          <img src="assets/img/bg10.jpg" alt="">
        </div>
      </div>
      <!-- iMGAE AND TEXT -->
      <div class="row align-items-center py-6 end_service">
        <div class="col-lg-6 ms-auto ">
          <img src="assets/img/bg10.jpg" alt="">
        </div>
        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start px-lg-3">
            <div class="info">
              <p class="mt-3 text-msecondary">WAKE UP FROM A NIGHT UNDER THE STARS</p>
              <h3 class="pe-5 big_text2">A unique glamping experience in the Arabian Dunes</h3>
              <dv class="d-flex justify-content-space-between">
                <button class=" button-msecondary text-mternary">DISCOVER ACCOMMODATIONS</button>
                <button class="btn-main">BOOK YOUR STAY</button>
              </dv>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Gallery -->
  <section class="carousel_owl my-md-5">
    <h2 class="text-center py-3 big_text1">Gallery</h2>
    <h2 class="text-center py-3 big_text2 text-center">A first glimpse into this magical oasis</h2>
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./assets/img/bg9.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="./assets/img/bg9.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="./assets/img/bg10.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="./assets/img/bg10.jpg" />
      </div>
      <div class="swiper-slide">
        <img src="./assets/img/bg10.jpg" />
      </div>
   
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </section>
  </section>
  <h1 class="big_text">Smoky Arabia welcomes you to a memorable adventure in the desert</h1>
  <section class="map my-5" style="background: var(--msecomdary-color);padding:2% 0; ">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.379028736342!2d55.8211083743237!3d25.5590537169511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5e70d46879c63%3A0x7183ab60035e32d8!2sBassata%20Village!5e0!3m2!1sen!2sae!4v1682681780685!5m2!1sen!2sae" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  </section>
</main>

<?php include_once('partials/footer.php') ?>
<?php include_once('partials/js_ass.php') ?>
<script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      loop:true,
      centeredSlides: true,
      breakpoints: {
    // when window width is >= 320px
    300: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    1060: {
      slidesPerView: 4,
      spaceBetween: 20
    },
  },
      
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>