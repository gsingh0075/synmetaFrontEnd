<?php if(isset($clients) && !empty($clients)): ?>
<section class="padding-100px-tb border-top border-color-medium-gray lg-padding-90px-tb md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn">
    <div class="container">
        <div class="col-12 text-center margin-5-rem-bottom md-margin-5-rem-bottom">
            <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Our Clients</span>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 client-logo-style-05">
    <?php foreach( $clients as $c) : ?>
            <div class="col text-center md-margin-40px-bottom xs-margin-50px-bottom wow animate__fadeIn">
                <img src="<?php echo $c['logo'] ?>" alt="<?php echo $c['name'] ?>" class="w-57">
            </div>
    <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>
