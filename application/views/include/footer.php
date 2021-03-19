<section class="padding-100px-tb md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-4 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.6s">
                <h5 class="alt-font font-weight-500 text-dark-purple w-70 d-inline-block letter-spacing-minus-1px m-0 lg-w-100 md-w-50 xs-w-70">Please feel free to get in touch with us</h5>
            </div>
            <!-- start feature box item -->
            <div class="col-12 col-xl-3 col-lg-4 col-sm-6 xs-margin-30px-bottom last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.4s">
                <div class="feature-box feature-box-left-icon">
                    <div class="feature-box-icon margin-5px-top">
                        <i class="line-icon-Geo2-Love icon-extra-medium text-salmon d-block"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="text-dark-purple text-uppercase text-medium font-weight-500 alt-font margin-5px-bottom d-block">SynMeta LLC</span>
                        <p class="m-0"><?php echo $business_address ?></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-sm-6 last-paragraph-no-margin wow animate__fadeInRight" data-wow-delay="0.6s">
                <div class="feature-box feature-box-left-icon">
                    <div class="feature-box-icon margin-5px-top">
                        <i class="line-icon-Mail icon-extra-medium text-salmon d-block"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="text-dark-purple text-uppercase text-medium font-weight-500 alt-font margin-5px-bottom d-block">How can we help?</span>
                        <p class="m-0">
                            <?php if(!empty($business_email)) :?>
                                <?php foreach( $business_email as $em) : ?>
                                    <a href="mailto:<?php echo $em ?>" class="text-salmon-rose-hover"><?php echo $em ?></a><br>
                                <?php endforeach ?>
                            <?php endif ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start footer -->
<footer class="footer-light border-top border-color-medium-gray padding-50px-tb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-3 text-center text-md-left sm-margin-20px-bottom">
                <a href="/" class="footer-logo"><img src="<?php echo base_url('assets/synMetaImages/Logo.png')?>" data-at2x="<?php echo base_url('assets/synMetaImages/Logo.png')?>" alt=""></a>
            </div>
            <div class="col-12 col-md-6 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                <p>&copy; 2021 SynMeta LLC is powered by <a href="https://knack.nyc" target="_blank" class="text-decoration-line-bottom text-extra-dark-gray text-salmon-rose-hover font-weight-500">Knack NY INC</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->