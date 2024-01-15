<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\EducationYearsController;
use App\Http\Controllers\SemesterController;
class CurriculumSubjectsController extends Controller
{
    public function education_year()
    {
        $education_years = EducationYearsController::get_education_years();
        return view('lists.curriculum_subjects.education_years', compact('education_years'));
    }
    public function curriculum_faculties($education_year)
    {
        $faculties = FacultiesController::get_faculties();
        return view('lists.curriculum_subjects.curriculum_subjects_faculties', compact('education_year','faculties'));
    }
    public function curriculum_semesters($education_year, $faculty_id)
    {
        return view('lists.curriculum_subjects.semesters', compact('education_year', 'faculty_id'));
    }

    public function curriculum_subjects($education_year,  $faculty_id, $semester)
    {
        $curriculums = CurriculumController::get_curriculum($faculty_id);
        $curriculum_semesters = SemesterController::get_semester_inthe_year($curriculums, $education_year, $semester);
        return view('lists.curriculum_subjects.curriculum_subjects', compact('education_year', 'faculty_id', 'semester' , 'curriculum_semesters'));
    }
    public function curriculum_subjects_all_data($education_year,  $faculty_id, $semester ,  Request $curriculum_semesters){
        $all_datas = [];
        foreach ($curriculum_semesters->query->parameters['curriculum_semesters'] as $curriculum_semester) {
            $http_value = "https://student.karsu.uz/rest/v1/data/subject-list?page=1&limit=30&_curriculum=" . $curriculum_semester[2]."&_exam_finish=11&_semester=" . $curriculum_semester[0];
            $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items;
            foreach ($data as $val){
                $val->curriculum_name = $curriculum_semester[1];
                $all_datas[] = $val;
            }
        }
        return view('lists.curriculum_subjects.data_view', compact('all_datas'));
    }
}
