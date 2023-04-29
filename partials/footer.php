<style>
  .footer_inner {
    display: flex;
    justify-content: space-between;
  }
.footer_inner .footer_i_sec{
  border-right:0.1px groove #3F3F2944 ;
  padding-right: 13%;
}
  .footer_inner .icon_footer_row {
    display: flex;
    column-gap: 15px;
    margin: 3% 0%;
  }

  .without_icon_footer {
    display: flex;
    flex-direction: column;
  }
  .footer_heading{
    font-weight: 700;
  }
</style>
<?php include_once('service_cta_2.php'); ?>
<section class="footer_inner container my-2 mt-5">
  <div class="footer_i_sec">
    <div class="footer_heading">About</div>
    <div class="icon_footer_row">
      <div class="mcol"> <i class="fa-solid fa-location-dot"></i></div>
      <div class="mcol"> Smoky Arabia<br>
        Exit 29 - Jebel Ali - Lehbab Road<br>
        Dubailand, Dubai, UAE</div>
    </div>
    <div class="icon_footer_row">
      <div class="mcol"> <i class="fa-solid fa-phone"></i></div>
      <div class="mcol"> +971 50 209 2894 </div>
    </div>
    <div class="icon_footer_row">
      <div class="mcol"> <i class="fa-regular fa-envelope text-lg"></i></div>
      <div class="mcol"> askkayzar@smoky-arabia.com </div>
    </div>
  </div>

  <div class="footer_i_sec">
    <div class="footer_heading">Premium Safaris</div>
    <div class="without_icon_footer">
      <a href="">Jeep Safari</a>
      <a href="">Wrangular Safari</a>
      <a href="">Mega Safari</a>
      <a href="">Buggy Safari</a>
      <a href="">Camel Safari</a>
    </div>
  </div>


  <div class="footer_i_sec">
    <div class="footer_heading">Quick Links</div>
    <div class="without_icon_footer">
      <a href="gallery.php">Gallery</a>
      <a href="contact.php">Contact Us</a>
      <a href="events.php">Events</a>
      <a href="faq.php">FAQ</a>
      <a href="sign_in.php">Sigin</a>
    </div>
  </div>

</section>

<footer class="footer pt-5 mt-5">
  <div class="container">
    <div class=" row">
      <div class="col-12">
        <div style="display: flex; justify-content: center; ">
          <ul class="d-flex flex-row ">
            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.facebook.com/smokyarabia" target="_blank">
                <i class="fab fa-facebook text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="https://twitter.com/smokyarabia" target="_blank">
                <i class="fab fa-twitter text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.tiktok.com/search?q=smoky%20arabia&t=1682587774654" target="_blank">
                <i class="fab fa-tiktok text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.instagram.com/smoky.arabia" target="_blank">
                <i class="fab fa-instagram text-lg opacity-8"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link pe-1" href="https://www.youtube.com/@smokyarabia" target="_blank">
                <i class="fab fa-youtube text-lg opacity-8"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="text-center">
          <p class="text-white my-2 text-sm font-weight-normal">
            All rights reserved Copyright © <i class="fa-light fa-star-christmas"></i>
            <script>
              document.write(new Date().getFullYear())
            </script> Smoky Arabia .
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>