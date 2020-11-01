<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('cek_user')) {
	function cek_user()
	{
		$CI = &get_instance();
		if ($CI->session->userdata('status_login') != 'Oke') {
			redirect('logout');
		}
	}
}
if (!function_exists('cek_pelanggan')) {
	function cek_pelanggan()
	{
		$CI = &get_instance();
		if ($CI->session->userdata('user_login') != 'OkeUser') {
			redirect('logoutUser');
		}
	}
}
if (!function_exists('redirectUrl')) {
	function redirectUrl()
	{
		$CI = &get_instance();
		if ($CI->session->userdata('RedirectKe') != null) {
			$url = $CI->session->userdata('RedirectKe');
		} else {
			$url = site_url();
		}
		return $url;
	}
}





if (!function_exists('users')) {
	function users()
	{
		$CI     = &get_instance();
		$kode   = $CI->session->userdata('kode');
		$result = $CI->db->where('kode_user', $kode)->get('users')->row_array();
		$nama   = $result['nama_user'];
		return $nama;
	}
}
if (!function_exists('iduser')) {
	function iduser()
	{
		$CI   = &get_instance();
		$kode = $CI->session->userdata('kode');
		return $kode;
	}
}
