<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\EducationYearsController;
use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\ExamTypesController;
class ControlsController extends Controller
{
    public function education_year(){
        $education_years = EducationYearsController::get_education_years();
        return view('lists.controls.education_year', compact('education_years'));
    }

    public function exam_type($education_year){

        $exam_types = ExamTypesController::get_exam_types();
        return view('lists.controls.exam_type', compact('exam_types','education_year'));
    }

    public function all_controls($education_year, $exam_type)
    {
        $controls_all_data = [];
        $http_value = "https://student.karsu.uz/rest/v1/data/exam-list?page=1&limit=200&_exam_type=".$exam_type."&_education_year=".$education_year;
        $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)));
        if(isset($data->data->pagination));{
            $controls_count = $data->data->pagination->pageCount;
        }
        if ($controls_count != 0){
            for ($i = 1; $i < $controls_count + 1; $i++ ){
                $http_value = "https://student.karsu.uz/rest/v1/data/exam-list?page=".$i."&limit=200&_exam_type=".$exam_type."&_education_year=".$education_year;
                $controls = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items;
                $controls_all_data = array_merge($controls_all_data, $controls);
            }
        }

        $controls = $controls_all_data;
        return view('lists.controls.get_controls', compact('controls'));
    }

}
