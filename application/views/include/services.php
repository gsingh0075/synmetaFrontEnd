<?php if(isset($services) && !empty($services)) : ?>
<section class="bg-light-blue">
    <div class="container">
        <div class="row justify-content-center wow animate__fadeIn">
            <div class="col-12 col-xl-6 col-lg-7 col-sm-8 text-center margin-5-rem-bottom md-margin-5-rem-bottom">
                <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">our premium services</span>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
         <?php foreach($services as $ser) : ?>
             <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInUp">
                 <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all">
                     <div class="feature-box-content last-paragraph-no-margin">
                         <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray"><?php echo $ser['name'] ?></span>
                         <p><?php echo $ser['s_desc'] ?></p>
                     </div>
                 </div>
             </div>
         <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>
