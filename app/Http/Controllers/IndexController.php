<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public static function auth_bearer($value){
        $ch = curl_init();
        $headers = array(
            'accept: application/json',
            'Authorization: Bearer ' . "maR-xqfRCfLlg_uZv7k4noy3e4i-0TPv",
        );
        curl_setopt($ch, CURLOPT_URL, $value);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        return $ch;
    }
}
