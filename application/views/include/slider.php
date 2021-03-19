<?php if(isset($slider) && !empty($slider)) : ?>
<section class="p-0">
    <div class="swiper-container white-move mobileoff-fullscreen-top-space md-h-600px sm-h-500px" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
        <div class="swiper-wrapper">
        <?php foreach($slider as $s) : ?>
            <div class="swiper-slide cover-background" style="background-image:url('<?php echo $s['image'] ?>');">
                <div class="overlay-bg bg-gradient-dark-slate-blue"></div>
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column">
                            <p class="alt-font text-extra-medium text-white opacity-7 font-weight-300 margin-40px-bottom xs-margin-20px-bottom"> <?php echo $s['desc'] ?></p>
                            <h2 class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom"><?php echo $s['s_desc'] ?></h2>
                            <div class="d-inline-block">
                                <a href="<?php echo $s['btn_link'] ?>" target="_blank" class="btn btn-fancy btn-medium btn-gradient-sky-blue-pink margin-30px-right xs-margin-15px-bottom"><?php echo $s['btn_text'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>
