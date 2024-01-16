<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use App\Models\Faculty;
class FacultiesController extends Controller
{
    public function faculties() {
        $faculties = Faculty::all();
        return view('lists.faculties', compact('faculties'));
    }
    public static function set_faculties() {
        $http_value = "https://student.karsu.uz/rest/v1/data/department-list?_structure_type=11";
        return json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items;
    }
    public static function get_faculties() {
        return Faculty::all();
    }
}
