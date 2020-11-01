<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('theme')) {
    function theme()
    {
        $link = base_url() . 'assets/';
        return $link;
    }
}
if (!function_exists('frontend')) {
    function frontend()
    {
        $link = base_url() . 'assets/frontend/';
        return $link;
    }
}

if (!function_exists('rupiah')) {
    function rupiah($uang)
    {
        $format = number_format($uang, 0, ",", ".");
        return $format;
    }
}

if (!function_exists('slug')) {
    function slug($text)
    {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}

if (!function_exists('More')) {
    function More($story_desc,$link) {
        $chars = 100;
        $story_desc = substr($story_desc,0,$chars);
        $story_desc = substr($story_desc,0,strrpos($story_desc,' '));
        $story_desc = $story_desc." ...";
        return $story_desc;  
    }
}
if (!function_exists('cutText')) {
    function cutText($text) {
        if (strlen($text) > 15)
            $hasil = substr($text, 0, 15) . ' ...';
        else
            $hasil = $text;
        return $hasil;
    }
}
