<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationYearsController extends Controller
{
    public static function get_education_years(){
        $http_value = 'https://student.karsu.uz/rest/v1/data/classifier-list?classifier=h_education_year';
        return  json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items[0]->options;

    }
}
