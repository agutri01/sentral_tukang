<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('hargaPesan'))
{
	function hargaPesan($kode)
	{
		$CI   = & get_instance();
		$data = $CI->db->query("SELECT SUM(harga_item) AS harga FROM item_pekerjaan WHERE pesan_item='$kode'")->row_array();
		$harga = $data['harga'];
		return $harga;
	}
}
if ( ! function_exists('bayarPesan'))
{
	function bayarPesan($kode)
	{
		$CI     = & get_instance();
		$data   = $CI->db->query("SELECT * FROM pembayaran WHERE pesan_bayar='$kode'")->row_array();
		$status = $data['status_bayar'];
		return $status;
	}
}