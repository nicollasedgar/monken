<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Private_vehicle extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Private Vehicle';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('database/private_vehicle', $data);
        $this->load->view('templates/footer');
    }
}
