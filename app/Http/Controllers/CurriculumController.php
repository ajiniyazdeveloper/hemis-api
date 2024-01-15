<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FacultiesController;
use Illuminate\Support\Arr;
use App\Models\Curriculum;


class CurriculumController extends Controller
{
    public static function get_curriculum($faculty_id){
        return Curriculum::where('facultyId', $faculty_id)->get();
    }
    public function curriculum()
    {
        $curriculums = Curriculum::all();
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
                $val->facultyName = $faculty->name;
                $val->facultyId = $faculty->id;
                $curriculums_all_data_fac[] = $val;
            }
        }
        return $curriculums_all_data_fac;
    }
}
