<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\IndexController;
class GroupController extends Controller
{
    public function group(){
        $curriculums = CurriculumController::get_curriculum_data();
        $all_groups = [];
        foreach ($curriculums as $curriculum) {
            $http_value = "https://student.karsu.uz/rest/v1/data/group-list?page=1&limit=30&_curriculum=".$curriculum->id;
            $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)));
            if (!isset($data->data->pagination)){
                foreach ($data as $val ) {
                    dd($data, $curriculum);
                    $val->curriculum_name = $curriculum->name;
                }
            }
        }
    }
}
