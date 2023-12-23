<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FacultiesController;
use Illuminate\Support\Arr;

class CurriculumController extends Controller
{
    public static function get_curriculum($faculty_id){
        $curriculums_all_data = [];
        $http_value = "https://student.karsu.uz/rest/v1/data/curriculum-list?page=1&limit=200&_department=" . $faculty_id;
        for ($i = 1; $i < json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->pagination->pageCount + 1; $i++) {
            $http_value = "https://student.karsu.uz/rest/v1/data/curriculum-list?page=".(string)$i."&limit=200&_department=" . $faculty_id;
            $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items;
            foreach ($data as $val){
                $curriculums_all_data[] = [$val->id, $val->name];
            }
        }
        return $curriculums_all_data;
    }
    public function curriculum()
    {
        $curriculums = $this->curriculums_all_data(FacultiesController::get_faculties());
        return view('lists.curriculum.curriculum', compact('curriculums'));
    }

    public static function curriculums_all_data($faculties): array
    {
        $curriculums_all_data_fac = [];
        foreach ($faculties as $faculty) {
            $curriculums_all_data = [];
            $http_value = "https://student.karsu.uz/rest/v1/data/curriculum-list?page=1&limit=200&_department=" . (string)$faculty->id;
            for ($i = 1; $i < json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->pagination->pageCount + 1; $i++) {
                $http_value = "https://student.karsu.uz/rest/v1/data/curriculum-list?page=".(string)$i."&limit=200&_department=" . (string)$faculty->id;
                $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items;
                $curriculums_all_data = array_merge($curriculums_all_data, $data);
            }
            foreach ($curriculums_all_data as $val) {
                $val->faculty_name = $faculty->name;
                $curriculums_all_data_fac[] = $val;
            }
        }
        return $curriculums_all_data_fac;
    }
    public static function get_curriculum_data(){
        $curriculums_all_data = [];
        $http_value = "https://student.karsu.uz/rest/v1/data/curriculum-list?page=1&limit=200";
        for ($i = 1; $i < json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->pagination->pageCount + 1; $i++) {
            $http_value = "https://student.karsu.uz/rest/v1/data/curriculum-list?page=".(string)$i."&limit=200";
            $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items;
            $curriculums_all_data = array_merge($curriculums_all_data, $data);
        }
        return $curriculums_all_data;
    }
}
