<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('info')) {
    function info($pesan)
    {
        $isi = '<div class="alert alert-dismissible" style="background-color: #d9edf7;border-color: #bce8f1;color: #214c61;"><i class="fa fa-exclamation-circle"></i> ' . $pesan . '</div>';
        return $isi;
    }
}
if (!function_exists('danger')) {
    function danger($pesan)
    {
        $isi = '<div class="alert alert-dismissible" style="background-color: #f5d2d2;border-color: #f1c1c0;color: #6b1110;"><i class="fa fa-exclamation-circle"></i> Warning: ' . $pesan . '</div>';
        return $isi;
    }
}
if (!function_exists('sukses')) {
    function sukses($pesan)
    {
        $isi = '<div class="alert alert-dismissible" style="background-color: #cbeacb;border-color: #b9e2b9;color: #398c39;"><i class="fa fa-check-circle"></i> Success: ' . $pesan . '</div>';
        return $isi;
    }
}
if (!function_exists('warning')) {
    function warning($pesan)
    {
        $isi = '<div class="alert" style="background-color: #fff3cd; border-color: #ffeeba; color: #856404;"><i class="fa fa-exclamation-circle"></i> ' . $pesan . '</div>';
        return $isi;
    }
}
if (!function_exists('secondary')) {
    function secondary($pesan)
    {
        $isi = '<div class="alert" style="background-color: #e2e3e5; border-color: #d6d8db; color: #383d41;">' . $pesan . '</div>';
        return $isi;
    }
}
if (!function_exists('verify')) {
    function verify($pesan)
    {
        $isi = '<div class="alert alert-dismissible" style="background-color: #d9edf7;border-color: #bce8f1;color: #214c61;"><h4><i class="fa fa-exclamation-circle"></i> Informasi:</h4> ' . $pesan . '</div>';
        return $isi;
    }
}
