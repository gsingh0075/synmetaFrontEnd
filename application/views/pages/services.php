<?php $this->load->view('include/header');?>
<?php $this->load->view('include/breadCrumb');?>
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 md-margin-7-rem-bottom">
                    <span class="alt-font margin-20px-bottom text-gradient-sky-blue-pink d-inline-block text-uppercase font-weight-500 letter-spacing-1px"><?php echo $service['name']; ?></span>
                        <?php echo $service['b_desc']; ?>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('include/clients'); ?>
<?php $this->load->view('include/footer');?>