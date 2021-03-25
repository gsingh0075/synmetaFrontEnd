<!-- start header -->
<header class="header-with-topbar">
    <div class="top-bar bg-light-gray border-bottom border-color-black-transparent d-none d-md-inline-block padding-35px-lr md-no-padding-lr">
        <div class="container-fluid nav-header-container">
            <div class="d-flex flex-wrap align-items-center">
                <div class="col-12 text-center text-sm-left col-sm-auto mr-auto pl-lg-0">
                    <!--<ul class="social-icon padding-5px-tb">
                        <li><a class="text-neon-blue-hover" href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="text-neon-blue-hover" href="http://www.dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        <li><a class="text-neon-blue-hover" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="text-neon-blue-hover" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>-->
                </div>
                <div class="col-auto d-none d-sm-block text-right px-lg-0 font-size-0">
                    <div class="top-bar-contact">
                                <span class="top-bar-contact-list">
                                    <i class="feather icon-feather-phone-call icon-extra-small text-extra-dark-gray"></i>
                                     <?php echo $business_phone_number; ?>
                                </span>
                        <span class="top-bar-contact-list d-none d-md-inline-block no-border-right pr-0">
                                    <i class="feather icon-feather-map-pin icon-extra-small text-extra-dark-gray"></i>
                                   <?php echo $business_address; ?>
                                </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg top-space navbar-light bg-white header-light fixed-top navbar-boxed header-reverse-scroll">
        <div class="container-fluid nav-header-container">
            <div class="col-6 col-lg-2 mr-auto pl-lg-0">
                <a class="navbar-brand" href="/">
                    <img src="<?php echo base_url('assets/synMetaImages/Logo.png')?>" data-at2x="<?php echo base_url('assets/synMetaImages/Logo.png')?>" class="default-logo" alt="">
                    <img src="<?php echo base_url('assets/synMetaImages/Logo.png')?>" data-at2x="<?php echo base_url('assets/synMetaImages/Logo.png')?>" class="alt-logo" alt="">
                    <img src="<?php echo base_url('assets/synMetaImages/Logo.png')?>" data-at2x="<?php echo base_url('assets/synMetaImages/Logo.png')?>" class="mobile-logo" alt="">
                </a>
            </div>
            <div class="col-auto menu-order px-lg-0">
                <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class=" collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <?php if(isset($menu) && !empty($menu)) : ?>
                            <?php foreach( $menu as $m): ?>
                                    <li class="nav-item dropdown <?php if(isset($m['child'])): ?> simple-dropdown <?php endif ?>">
                                        <a href="<?php echo $m['link']; ?>" class="nav-link"><?php echo $m['name'] ?></a>
                                        <?php if(isset($m['child'])): ?>
                                           <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                        <?php endif ?>
                                        <?php if(isset($m['child']) && !empty($m['child'])): ?>
                                            <ul class="dropdown-menu" role="menu">
                                               <?php foreach($m['child'] as $child) : ?>
                                                <li class="dropdown">
                                                    <a href="<?php echo $child['link'] ?>"><?php echo $child['name'] ?></a>
                                                </li>
                                               <?php endforeach ?>
                                            </ul>
                                        <?php endif ?>
                                    </li>
                            <?php endforeach ?>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- end header -->