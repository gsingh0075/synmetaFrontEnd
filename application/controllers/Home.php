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

        $this->data['title'] = 'SynMeta LLC - About Us';
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

    /* All Services Page */

    public function services() {

        $this->data['title'] = 'SynMeta LLC - All Services';
        $this->data['view'] = 'pages/allServices';

        $this->data['pageBreadCrumbMain'] = 'Services';

        $this->data['pageBreadLinks'] = array(
            array(
                'name' => 'Home',
                'link' => '/'
            )
        );

        $this->data['services']  = getServices();
        $this->data['clients']  = getClients();

        $this->load->view('template', $this->data);

    }
    /* Each Service Page */
    public function service( $service = null ){

          if( $service == null ) {
              $this->not_found();
          }

          $allServices = getServices();
          $currentService = array();

          $this->data['pageBreadLinks'] = array(
            array(
                'name' => 'Home',
                'link' => '/'
            ),
            array(
                  'name' => 'Services',
                  'link' => '/services'
            )
          );

          if(isset($allServices) && !empty($allServices) ){

              foreach ( $allServices as $ser ){

                  if( isset($ser['seo-url']) && !empty($ser['seo-url']) ){

                      if( $ser['seo-url'] == $service) {
                            array_push($currentService, $ser);
                      }
                  }
              }
          }


          if( count($currentService) === 0 ) {
              $this->not_found();
          }

          $this->data['title'] = 'SynMeta LLC - '.$currentService[0]['name'];
          $this->data['view'] = 'pages/services';

          $this->data['pageBreadCrumbMain'] = $currentService[0]['name'];

          $this->data['service']  = $currentService[0];
          $this->data['clients']  = getClients();

          $this->load->view('template', $this->data);
    }

    /* Get Industries */
    public function industries(){

        $this->data['title'] = 'SynMeta LLC - Industries';
        $this->data['view'] = 'pages/industries';

        $this->data['pageBreadCrumbMain'] = 'Industries';

        $this->data['pageBreadLinks'] = array(
            array(
                'name' => 'Home',
                'link' => '/'
            )
        );

        $this->data['industries']  = getIndustries();
        $this->data['mainDesc'] = mainDescIndustries();
        $this->data['testimonials'] = getTestimonials();
        $this->load->view('template', $this->data);

    }

    /* Get Testimonials */
    public function testimonials(){

        $this->data['title'] = 'SynMeta LLC - Testimonials';
        $this->data['view'] = 'pages/testimonials';

        $this->data['pageBreadCrumbMain'] = 'Testimonials';

        $this->data['pageBreadLinks'] = array(
            array(
                'name' => 'Home',
                'link' => '/'
            )
        );

        $this->data['testimonials'] = getTestimonials();
        $this->data['clients']  = getClients();

        $this->load->view('template', $this->data);

    }

    /* Get Contact Page */
    public function contact(){

        $this->data['stylesheets'][] = 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css';
        $this->data['scripts'][] = 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js';
        $this->data['scripts'][] = base_url('assets/js/contact.js');

        $this->data['title'] = 'SynMeta LLC - Contact Us';
        $this->data['view'] = 'pages/contact';

        $this->data['pageBreadCrumbMain'] = 'Contact Us';

        $this->data['pageBreadLinks'] = array(
            array(
                'name' => 'Home',
                'link' => '/'
            )
        );

        $this->load->view('template', $this->data);

    }

    /* Process Contact Form */
    public function sendContact(){


        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('comment', 'Message', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(array('status' => false, 'errors' => $this->form_validation->error_array()));
        } else {

            /*$config['protocol']     = 'smtp';
            $config['smtp_host']    = '';
            $config['smtp_user']    = '';
            $config['smtp_pass']    = '';
            $config['smtp_port']    = '587';
            $this->load->library('email');
            $this->email->initialize($config);
            $this->email->from($this->input->post('email'), $this->input->post('first_name').' '.$this->input->post('last_name'));
            $this->email->to('jean.vieville@conexsolution.com,nicolas.lorin@conexsolution.com');
            $this->email->subject("You've been contacted by " . $this->input->post('first_name').' '.$this->input->post('last_name'));
            $this->email->message($this->input->post('comments'));

            if($this->email->send()) {
                echo json_encode(array('status' => True, 'message' => 'Your Message is sent sucessfully. We will contact you soon'));
            }else {
                echo json_encode(array('status' => false, 'errors' => array('error_message' => 'Mail Failed')));
            }*/

            echo json_encode(array('status' => True, 'message' => 'Your Message is sent sucessfully. We will contact you soon'));

        }

    }

    /* Career Page */
    public function careers() {

        $this->data['title'] = 'SynMeta LLC - Careers';
        $this->data['view'] = 'pages/career';

        $this->data['pageBreadCrumbMain'] = 'Career';

        $this->data['pageBreadLinks'] = array(
            array(
                'name' => 'Home',
                'link' => '/'
            )
        );

        $this->data['jobs'] = getJobs();
        $this->data['clients']  = getClients();
        $this->load->view('template', $this->data);



    }
    /* Not Found */
    public function not_found(){

        $this->data['title'] = 'SynMeta LLC - Testimonials';
        $this->data['view'] = 'pages/404';

        $this->load->view('template', $this->data);

    }


}
