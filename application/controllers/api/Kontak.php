<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . '/libraries/REST_Controller.php';
    use Restserver\Libraries\REST_Controller;

    class Kontak extends REST_Controller {

        function __construct($config = 'rest') {
            parent::__construct($config);
            $this->load->database(); //optional
            $this->load->model('M_Kontak');
            $this->load->library('form_validation');
        }    

        function index_get()
        {
            $id = $this->get('id');
            if ($id == '') {
                $data = $this->M_Kontak->fetch_all();
            } else {            
                $data = $this->M_Kontak->fetch_single_data($id);
            }                

            $this->response($data, 200);
        }        
    }
?>