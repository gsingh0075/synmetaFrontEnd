<!-- start section -->
<?php if(isset($features) && !empty($features)) : ?>
<section class="border-top border-color-medium-gray">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center margin-5-rem-bottom md-margin-5-rem-bottom">
                <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Our Features</span>
            </div>
            <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                <ul class="nav nav-tabs text-uppercase justify-content-center text-center alt-font font-weight-500 margin-7-rem-bottom md-margin-5-rem-bottom sm-margin-20px-bottom">
                <?php $j=1; foreach($features as $ft):?>
                    <li class="nav-item"><a class="nav-link <?php if($j === 1): ?> active <?php endif?>" data-toggle="tab" href="#feature-<?php echo $ft['id'] ?>"><?php echo $ft['name'] ?></a><span class="tab-border bg-extra-dark-gray"></span></li>
                <?php $j++; endforeach ?>
                </ul>
                <div class="tab-content">
                <?php $i=1; foreach($features as $ft):?>
                    <div id="feature-<?php echo $ft['id'] ?>" class="tab-pane fade in <?php if($i === 1): ?> active show <?php endif?>">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 text-right sm-margin-40px-bottom">
                                <img src="<?php echo $ft['image'] ?>" alt="<?php echo $ft['name'] ?>" />
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-1 col-md-6 text-center text-sm-left">
                                <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"><?php echo $ft['name'] ?></h5>
                                <p class="w-85 lg-w-100"><?php echo $ft['desc'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php $i++;endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ?>