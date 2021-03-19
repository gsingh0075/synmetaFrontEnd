<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data;


    public function __construct(){

        parent::__construct();

        $this->data['scripts'] = array();
        $this->data['stylesheets'] = array();

        $this->data['business_phone_number'] = '312-544-0345';
        $this->data['business_address']  =  '203 N LaSalle St, Chicago, IL 60601';
        $this->data['business_email']  =  array('info@synmeta.com', 'careers@synmeta.com');

        $this->data['stylesheets'][] = base_url('assets/css/font-icons.min.css');
        $this->data['stylesheets'][] = base_url('assets/css/theme-vendors.min.css');
        $this->data['stylesheets'][] = base_url().'assets/css/style.css?r='.date('h:i:s');
        $this->data['stylesheets'][] = base_url().'assets/css/responsive.css?r='.date('h:i:s');

        $this->data['scripts'][] = base_url('assets/js/jquery.min.js');
        $this->data['scripts'][] = base_url('assets/js/theme-vendors.min.js');
        $this->data['scripts'][] = base_url('assets/js/main.js');

        $this->data['menu'] = getMenu();

        $this->data['meta_keywords'] = 'SynMeta LLC, Web Application, Cloud Computing, Enterprise Application, Pharmacovigilance,  Clinical Data Management, Statistic Analysis, Database Hosting, Medical Writing';
        $this->data['meta_description'] = 'SynMeta is the best solution for your technology needs in Cloud Computing.';
        $this->data['author'] = 'Knack NY INC';

    }

    /* Home Page */

    public function index(){

        $this->data['title'] = 'SynMeta LLC - Home Page';
        $this->data['view'] = 'pages/home';

        $this->data['slider'] = getSliderImages();
        $this->data['features'] = getFeatures();
        $this->data['industries'] = getIndustries();
        $this->data['services'] = getServices();
        $this->data['clients']  = getClients();
        $this->data['testimonials'] = getTestimonials();

        $this->load->view('template', $this->data);

    }

    /* About Page */

    public function about(){

        $this->data['title'] = 'SynMeta LLC - About Us Page';
        $this->data['view'] = 'pages/about';

        $this->data['pageBreadCrumbMain'] = 'About Us';

        $this->data['pageBreadLinks'] = array(
                                            array(
                                                'name' => 'Home',
                                                'link' => '/'
                                            )
        );
        $this->data['services'] = getServices();
        $this->data['clients']  = getClients();

        $this->load->view('template', $this->data);
    }


}
