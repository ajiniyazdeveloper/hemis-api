<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FacultiesController;
class GroupController extends Controller
{
    public function group_faculties(){
        $faculties = FacultiesController::get_faculties();
        return view('lists.groups.faculties', compact('faculties'));
    }
    public function group($faculty_id){
        $curriculums = CurriculumController::get_curriculum($faculty_id);
        $all_groups = [];
        foreach ($curriculums as $curriculum) {
            $http_value = "https://student.karsu.uz/rest/v1/data/group-list?page=1&limit=30&_curriculum=".$curriculum[0];
            $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)));
            $all_groups[] = [$curriculum[1], $data->data->pagination->totalCount];
        }
        return view('lists.groups.groups', compact('all_groups'));
    }
}
