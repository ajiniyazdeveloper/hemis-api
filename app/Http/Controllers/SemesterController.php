<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;

class SemesterController extends Controller
{
    public static function get_semester_inthe_year($curriculums, $education_year, $semester){
        $all_data_semester = [];
        foreach ($curriculums as $curriculum){
            $http_value = "https://student.karsu.uz/rest/v1/data/semester-list?page=1&_curriculum=".$curriculum->toArray()['curriculumId']."&_education_year=".$education_year;
            $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)));
            if ($data->data->items){
                $all_data_semester[] = [$data->data->items[$semester]->code, $curriculum->toArray()['curriculumName'], $data->data->items[$semester]->_curriculum];
            }
        }
        return $all_data_semester;

    }
}
