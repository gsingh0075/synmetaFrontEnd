<!-- start page title -->
<section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-lg-6 text-center text-lg-left">
                <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block"><?php echo $pageBreadCrumbMain; ?></h1>
                <?php if(isset($pageBreadCrumbSecondary)): ?>
                <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top"><?php echo $pageBreadCrumbSecondary ?></span>
                <?php endif ?>
            </div>
            <div class="col-xl-4 col-lg-6 text-center text-lg-right breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                <ul>
                    <?php if(isset($pageBreadLinks) && !empty($pageBreadLinks)): ?>
                        <?php foreach($pageBreadLinks as $link) : ?>
                            <li><a href="<?php echo $link['link'] ?>"><?php echo $link['name'] ?></a></li>
                        <?php endforeach ?>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->