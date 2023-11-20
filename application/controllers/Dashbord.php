<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

    public function index()
    {
$data['judul'] = 'dashbord';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashbord');
        $this->load->view('templates/footer');
    }

}

/* End of file Controllername.php */
