<?php if(isset($testimonials) && !empty($testimonials)) : ?>
<section class="bg-light-blue">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-5-rem-bottom wow animate__fadeIn">
                <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">What people are saying</span>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">What our valuable customer are saying about us?</h5>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
    <?php foreach( $testimonials as $tes ): ?>
        <div class="col col-sm-8 md-margin-30px-bottom wow animate__fadeInUp" data-wow-delay="0.2s">
            <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">
                    <p><?php echo $tes['review'] ?></p>
                </div>
                <div class="author padding-20px-lr">
                    <img class="rounded-circle w-55px h-55px margin-15px-right" src="<?php echo $tes['image'] ?>" alt="">
                    <div class="d-inline-block align-middle">
                        <span class="alt-font text-medium font-weight-500 line-height-24px text-extra-dark-gray d-block"><?php echo $tes['name'] ?></span>
                        <span class="d-block text-small"><?php echo $tes['designation'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>
<!-- end section -->
