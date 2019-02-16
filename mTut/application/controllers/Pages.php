<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pages extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            //echo 'Hello World';
            $data['title'] = 'Home Page';
            $data['message'] = 'Hello World From Alex!';
            //load in our views in the order we want
                //old way
            //$this->load->view('Pages/Elements/page_header', $data); 
            //$this->load->view('Pages/Elements/navigation'); 
            //$this->load->view('Pages/home', $data);
            //$this->load->view('Pages/Elements/footer'); 

            //using master layout
            $this->load->view('layout/master', $data);
            
        }
    }
?>