<?php $this->load->view('include/header');?>
<?php $this->load->view('include/breadCrumb');?>
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 md-margin-7-rem-bottom">
                    <span class="alt-font margin-20px-bottom text-gradient-sky-blue-pink d-inline-block text-uppercase font-weight-500 letter-spacing-1px">Industries</span>
                    <?php echo $mainDesc['desc']; ?>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('include/industries'); ?>
<?php $this->load->view('include/testimonial'); ?>
<?php $this->load->view('include/footer');?>