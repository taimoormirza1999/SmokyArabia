<?php include_once('partials/css_ass.php') ?>
<!-- Navbar Transparent -->
<?php include_once('partials/header.php') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<style>
    .gallery_row{
        width: 70%;
        margin: 2% auto;
        margin-bottom: 10%;
    }
      
        .swiper {
            width: 100%;
            height: 100%;
           
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 5px solid white;
        }

      

        .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        
        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.6;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }
        .mySwiper2{
    height:411px !important

}
.swiper-wrapper{display: flex; justify-items: center;

}
.swiper-wrapper .swiper-slide{border:5px solid white;

}
@media only screen and (max-width: 768px) {
  .footer_inner {
    flex-direction: column;
    column-gap: 50%;
  }
  .mySwiper {
    height: 100%;
    box-sizing: border-box;
    padding: 10px 0;
}
  .gallery_row {
    width: 90%;
    margin: 2% auto;
    margin-bottom: 30%;
  }}  
     
    </style>
<header>
    <div class="page-header min-height-400" style="background-image: url('./assets/img/bg10.jpg');" loading="lazy">
        <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
    <img src="./assets/img/illustrations/door.png" alt="" class="door_page_img">
    <?php include_once('./partials/top_nav.php') ?>
</header>
<section class=" py-2 bg-main">
    <h2 class="big_text2 text-center">Tomorrowland welcomes you to a memorable adventure in the desert</h2>
  </section>
<section class="position-relative">
    <div class="row gallery_row">
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
        <div class="swiper-wrapper" >
            <div class="swiper-slide">
                <img src="./assets/img/bg10.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="./assets/img/bg9.jpg" />
            </div>
       
            <div class="swiper-slide">
                <img src="./assets/img/bg5.jpg" />
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./assets/img/bg10.jpg" />
            </div>
            <div class="swiper-slide">
                <img src="./assets/img/bg9.jpg" />
            </div>
        
            <div class="swiper-slide">
                <img src="./assets/img/bg5.jpg" />
            </div>
        </div>
    </div>
    </div>

</section>
</div>

<!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->
<?php include_once('partials/footer.php') ?>
<?php include_once('partials/js_ass.php') ?>
  
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 3,
    
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });

// Remove arrows
swiper.navigation.destroy();
  </script>