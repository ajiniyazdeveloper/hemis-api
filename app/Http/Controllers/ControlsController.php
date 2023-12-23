<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EducationYearsController;
class ControlsController extends Controller
{
    public function education_year(){
        $education_years = EducationYearsController::get_education_years();
        return view('lists.controls.education_year', compact('education_years'));
    }

    public function exam_type($education_year){
        $http_value = 'https://student.karsu.uz/rest/v1/data/classifier-list?classifier=h_exam_type';
        $exam_types = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items[0]->options;
        return view('lists.controls.exam_type', compact('exam_types','education_year'));
    }

    public function all_controls($education_year, $exam_type)
    {
        $http_value = "https://student.karsu.uz/rest/v1/data/exam-list?page=1&limit=200&_exam_type=".(string)$exam_type."&_education_year=".(string)$education_year;
        $controls_count = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->pagination->pageCount;
        $controls = $this->controls_all_data($controls_count,$exam_type,$education_year);
        return view('lists.controls.get_controls', compact('controls'));
    }
    public function  controls_all_data($page_count, $exam_type, $education_year): array
    {
        $controls_all_data = [];
        for ($i = 1; $i < $page_count + 1; $i++ ){
            $http_value = "https://student.karsu.uz/rest/v1/data/exam-list?page=".(string)$i."&limit=200&_exam_type=".(string)$exam_type."&_education_year=".(string)$education_year;
            $controls = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items;
            $controls_all_data = array_merge($controls_all_data,$controls);
        }
        return $controls_all_data;
    }
}
