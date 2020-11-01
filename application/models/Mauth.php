<?php
class Mauth extends CI_Model
{
    public function check_user($email)
    {
        return $this->db->get_where('users', ['email' => $email]);
    }
    public function check_pass($email, $password)
    {
        return $this->db->get_where('users', ['email' => $email, 'password' => md5($password)]);
    }
    public function validate($post)
    {
        $email = $post['email'];
        $password = $post['password'];
        return $this->db->get_where('users', ['email' => $email, 'password' => md5($password)])->row_array();
    }
    
    public function kode()
    {
        $this->db->select('RIGHT(kode_user,8) as kode', FALSE);
        $this->db->order_by('kode_user', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('users');
        if ($query->num_rows() <> 0) {
            $dt = $query->row();
            $kode = intval($dt->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax  = str_pad($kode, 8, "0", STR_PAD_LEFT);
        $kodejadi = "PL" . $kodemax;
        return $kodejadi;
    }

    public function store($post)
    {
        $data = array(
            'kode_user'   => $this->kode(),
            'nama_user'   => $post['nama'],
            'email'  => $post['email'],
            'telp'   => $post['telp'],
            'alamat' => $post['alamat'],
            'password'   => md5($post['pass'])
        );
        return $this->db->insert('users', $data);
    }
}
