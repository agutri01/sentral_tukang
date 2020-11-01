<?php
class Muser extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('users')->result_array();
    }
    public function show($kode)
    {
        return $this->db->where('kode_user', $kode)->get('users')->row_array();
    }
    public function update($kode, $nama, $email, $alamat, $pass)
    {
        if (empty($pass)) {
            $data = array(
                'nama_user'  => $nama,
                'email'      => $email,
                'alamat'     => $alamat
            );
        } else {
            $data = array(
                'nama_user'  => $nama,
                'email'      => $email,
                'alamat'     => $alamat,
                'password'   => md5($pass)
            );
        }
        return $this->db->where('kode_user', $kode)->update('users', $data);
    }
    public function destroy($kode)
    {
        return $this->db->simple_query("DELETE FROM users WHERE kode_user='$kode'");
    }
}
