<?php include_once('partials/css_ass.php') ?>
<!-- Navbar Transparent -->
<style>
    .accordion-item {
        border-bottom: 3px solid var(--mprimary-color);
        margin: 2% 4%;
        background: #f3f0e8;
        padding: 2%;
    }

    .accordion-item .inner_accordian {
        background: #f3f0e8;
        border-radius: 5px;
        padding: 1%;
        text-align: justify;
        color: #3f3f29;
        border: 2px inset var(--mprimary-color)
    }
    /* .icon_text::before{
        display: block;
    background: url('assets/img/illustrations/star_christmas_icon.svg') no-repeat;
    width: 25px;
    height: 25px;
    float: left;
    } */
    .accordion-body .icon_with_text{
        display: flex;
    }
    .accordion-body img{
        height:35px;
        width: 35px;
        margin-right:1%;
        object-fit: cover;
    }
</style>
<?php include_once('partials/header.php') ?>

<header>
    <div class="page-header min-height-400" style="background-image: url('./assets/img/bg10.jpg');" loading="lazy">
        <span class="mask bg-gradient-dark opacity-8"></span>
    </div>
    <img src="./assets/img/illustrations/door.png" alt="" class="door_page_img">
    <?php include_once('./partials/top_nav.php') ?>
</header>
<div class="mt-5"></div>
<div class="my-5"></div>
<main class="container my-5 accordian_content">
    <div class="my-3">
        <h3 class="text-center">&nbsp;</h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item dropdown-lg">
                <div class="inner_accordian">
                    <h3 class="accordion-header " id="headingOne">
                        <button class="accordion-button big_text2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Lorem ipsum dolor sit amet. #1
                        </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="icon_with_text">
                           <img src="assets/img/illustrations/star_christmas_icon.svg"/>
                           This is the first item's accordion body It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the though the transition does limit overflow.
                           </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item dropdown-lg">
                <div class="inner_accordian">
                    <h3 class="accordion-header " id="headingTwo">
                        <button class="accordion-button collapsed big_text2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lorem ipsum dolor sit amet. #2
                        </button>
                    </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div class="icon_with_text">
                           <img src="assets/img/illustrations/star_christmas_icon.svg"/>
                           This is the first item's accordion body It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the though the transition does limit overflow.
                           </div>                         </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item dropdown-lg">
                <div class="inner_accordian">
                    <h3 class="accordion-header " id="headingThree">
                        <button class="accordion-button collapsed big_text2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lorem ipsum dolor sit amet. #3
                        </button>
                    </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <div class="icon_with_text">
                           <img src="assets/img/illustrations/star_christmas_icon.svg"/>
                           This is the first item's accordion body It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the though the transition does limit overflow.
                           </div>                         </div>
                    </div>
                </div>
            </div>
      
           
        </div>
    </div>
</main>
<?php include_once('partials/footer.php') ?>
<!-- -------- END FOOTER 5 w/ DARK BACKGROUND ------- -->
<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/parallax.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="./assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
</body>

</html>