<?php $this->load->view('include/header');?>
<?php $this->load->view('include/breadCrumb');?>
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                            <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we’ll be in touch soon!</span>
                            <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                        </div>
                        <div class="col-12">
                            <!-- start contact form -->
                            <?php echo form_open(base_url('/sendContact'), 'id="contactForm"'); ?>
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                        <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Your mobile">
                                    </div>
                                    <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                        <textarea class="medium-textarea h-200px bg-white" name="comment" placeholder="Your message"></textarea>
                                    </div>
                                    <div class="col text-left sm-margin-30px-bottom">
                                        <!-- Privacy Comes here In case needed -->
                                    </div>
                                    <div class="col text-center text-md-right">
                                        <input type="hidden" name="redirect" value="">
                                        <button id="submitContact" class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                                <div class="form-results d-none"></div>
                                 <input name="subject" type="hidden" value="CONTACT FORM WEBSITE" placeholder="Subject"/>
                            <?php echo form_close(); ?>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
<?php $this->load->view('include/footer');?>