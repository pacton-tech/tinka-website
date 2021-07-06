<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

if (!function_exists('label_case')) {

    function label_case($text)
    {
        $order = ['_', '-'];
        $replace = ' ';

        $new_text = trim(\Illuminate\Support\Str::title(str_replace('"', '', $text)));
        $new_text = trim(\Illuminate\Support\Str::title(str_replace($order, $replace, $text)));
        $new_text = preg_replace('!\s+!', ' ', $new_text);

        return $new_text;
    }
}

if (!function_exists('status_case')) {

    function status_case($bool)
    {
        if($bool == 1) {
            $status = "<span class='badge badge-success'>Enabled</status>";
        } else {
            $status = "<span class='badge badge-danger'>Disabled</status>";
        }

        return $status;
    }
}

if (!function_exists('slider_url')) {
    function slider_url($image)
    {
        return asset('uploads/slider/'.$image);
    }
}