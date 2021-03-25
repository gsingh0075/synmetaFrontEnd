<?php $this->load->view('include/header');?>
<?php $this->load->view('include/breadCrumb');?>
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 md-margin-7-rem-bottom">
                    <span class="alt-font margin-20px-bottom text-gradient-sky-blue-pink d-inline-block text-uppercase font-weight-500 letter-spacing-1px">Want to work with us ?</span>
                    <p class="lg-w-95">SynMeta could be a friendly computer code company in California that was designed from the bottom up to be a good place to figure. we tend to work on fascinating comes with sensible individuals, treat everybody royally.</p>
                    <p class="lg-w-95">SynMeta is an equal opportunity company. We have based our HR philosophy on the values of trust, transparency and competency. By choosing the right people for the client’s projects we have ensured not only project success but also achieve complete client satisfaction.</p>
                    <p class="lg-w-95">The non-stress environment at our workplace puts work and play put in the right balance. This has helped us to sustain each team member’s interest in work, greater productive and far lesser attrition rates. We provide our personnel good and congenial work environment, transport and canteen facilities. Facilities for indoor games were arranged at the staff canteen.</p>
                    <p class="lg-w-95">The challenges associated with each client’s project have put our project readiness in question. To counter this challenge effectively we have taken measures to enhance the readiness of personnel for the present and future project challenges.</p>
                    <p class="lg-w-95">The in-house training’s and expert interactive sessions have been made part of the employee orientation and on-job training activities. At SynMeta , skill development by conduct of job enrichment programs is a continuous activity</p>
                    <p class="lg-w-95">The routine at SynMeta includes outings, celebration of birthdays, and arrangement of get-together parties at regular intervals of time. It has been integral to our work culture that good working conditions and healthy social life is a big booster of employee’s productivity, and keeps them focused at work.</p>
                </div>
            </div>
        </div>
    </section>

<?php if(isset($jobs) && !empty($jobs)) : ?>
    <!-- start section -->
    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center margin-7-rem-bottom">
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Current Openings</h5>
                </div>
                <div class="col-12 md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeIn">
                    <div class="panel-group accordion-event accordion-style-03" id="accordion2" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                        <?php $i=1;foreach($jobs as $job):  ?>
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px">
                                <div class="panel-heading active-accordion">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse-<?php echo $i;?>" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500"><?php echo $job['heading']; ?></span>
                                            <i class="indicator fas fa-angle-down text-fast-blue icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapse-<?php echo $i;?>" class="panel-collapse collapse <?php if($i === 1): ?> show <?php endif ?>" data-parent="#accordion2">
                                    <div class="panel-body">
                                        <?php echo $job['desc']; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->

                        <?php $i++; endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
<?php endif ?>
<?php $this->load->view('include/clients'); ?>
<?php $this->load->view('include/footer');?>