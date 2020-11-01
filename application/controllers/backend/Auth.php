<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mauth');
    }
    public function index()
    {
        if ($this->session->userdata('status_login') == "Oke") {
            redirect('home');
        } else {
            echo "<script>alert('ETHER YOUR EMAIL/PASSWORD IS INCORRECT PLEASE TRY AGAIN');<script>";
            $this->load->view('auth/login');
            
        }
    }
    public function validate()
    {
        $email = trim($this->input->post('email'));
        $password = trim($this->input->post('password'));
        $check_email = $this->Mauth->check_user($email);
        $check_pass = $this->Mauth->check_pass($email, $password);
        $this->form_validation->set_rules('email', 'Email', 'callback_username_check[' . $check_email->num_rows() . ']');
        $this->form_validation->set_rules('password', 'Password', 'callback_password_check[' . $check_pass->num_rows() . ']');

        if ($this->form_validation->run() == TRUE) {
            $post  = $this->input->post(null, TRUE);
            $value = $this->Mauth->validate($post);
            $this->session->set_userdata('masuk', TRUE);
            if ($this->session->userdata('masuk') == TRUE) {
                $this->session->set_userdata('status_login', 'Oke');
                $this->session->set_userdata('kode', $value['kode_user']);
            } else {
                $this->session->sess_destroy();
            }
           if ($this->session->userdata('masuk')==true){
                    redirect('home');
                } 
            }
        $this->session->set_flashdata('pesan',Danger('Username atau password salah !!!'));
        redirect('validasi');
    }
        public function validasi()
    {
       $this->load->view('auth/validasi');
    }
    public function register()
    {
       $this->load->view('auth/registrasi');
    }
     public function store()
    {
$this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('telp', 'telepon', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('pass', 'password', 'required|min_length[5]');
        $this->form_validation->set_rules('retry', 'konfirmasi password', 'required|matches[pass]');

        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post(null, TRUE);
            $this->Mauth->store($post);
            $json['status'] = true;
            $json['pesan']  = '<div class="alert alert-success"><strong>Success!</strong> Terimah kasih telah melakukan registrasi.<br>Silahkan login <a href="welcome" class="alert-link">disini</a>.</div>';
        } else {
            $json['status'] = false;
            $json['pesan']  = $this->form_validation->error_array();
        }
        echo json_encode($json);
    }
    public function username_check($username, $recordCount)
    {
        if ($username == null) {
            $this->form_validation->set_message('username_check', 'Username is required.');
            return false;
        } else if ($recordCount == 0) {
            $this->form_validation->set_message('username_check', 'Username is not correct.');
            return FALSE;
        } else {

            return true;
        }
    }
    public function password_check($password, $recordCount)
    {
        if ($password == null) {
            $this->form_validation->set_message('password_check', 'Password is required.');
            return false;
        } else if ($recordCount == 0) {
            $this->form_validation->set_message('password_check', 'Password is not correct.');
            return FALSE;
        } else {

            return true;
        }
    }
    public function logout()
    {
        //$this->session->sess_destroy();
        $this->session->unset_userdata('status_login', FALSE);
        $this->session->unset_userdata('kode');
        redirect('welcome');
    }
}
