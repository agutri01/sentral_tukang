<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('master/Muser');
        if ($this->session->userdata('status_login') == "Oke")
            cek_user();
        else
            redirect('logout');
    }
    public function index()
    {
        $data = array(
            'judul'    => 'User',
            'subjudul' => 'List User',
            'links'    => '<li class="active">User</li>',
            'data'     => $this->Muser->getAll(),
            'content'  => 'master/user/index'
        );
        $this->parser->parse('layout/index', $data);
    }
    public function show()
    {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
        } else {
            $kode  = $this->input->post('kode');
            $jenis = $this->input->post('jenis');
            $d['data'] = $this->Muser->show($kode);
            if ($jenis == 'edit') {
                $this->load->view('master/user/edit', $d);
            } else {
                $this->load->view('master/user/hapus', $d);
            }
        }
    }
    public function update()
    {
        $kode   = $this->input->post('kode', TRUE);
        $nama   = $this->input->post('nama', TRUE);
        $email   = $this->input->post('email', TRUE);
        $alamat  = $this->input->post('alamat', TRUE);
        $pass   = $this->input->post('pass', TRUE);
        $this->Muser->update($kode, $nama, $email, $alamat, $pass);
        $this->session->set_flashdata('pesan', sukses('Anda telah mengubah data user!'));
        redirect('users');
    }
    public function destroy()
    {
        $kode = $this->input->post('kode', TRUE);
        if (!$this->Muser->destroy($kode)) {
            $this->session->set_flashdata('pesan', danger('Anda tidak bisa menghapus data user!'));
        } else {
            $this->session->set_flashdata('pesan', sukses('Anda telah menghapus data user!'));
        }
        redirect('users');
    }
}
