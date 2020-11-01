<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') == "Oke")
            cek_user();
        else
            redirect('logout');
    }
    public function index()
    {
        $data = array(
            'judul'    => 'Dashboard',
            'subjudul' => 'PT. UNICO SENTRAL DISTRIBUSI',
            'links'    => '',
            'content'  => 'layout/content'
        );
        $this->parser->parse('layout/index', $data);
    }
}
