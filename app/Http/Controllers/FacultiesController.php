<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
class FacultiesController extends Controller
{
    public function faculties() {
        $faculties = $this->get_faculties();
        return view('lists.faculties', compact('faculties'));
    }
    public static function get_faculties() {
        $http_value = "https://student.karsu.uz/rest/v1/data/department-list?_structure_type=11";
        return json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items;
    }
}
