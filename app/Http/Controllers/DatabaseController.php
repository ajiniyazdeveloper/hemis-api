<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\FacultiesController;
use App\Models\Curriculum;
use App\Models\Faculty;
use App\Models\EducationYear;
use App\Models\ExamType;
class DatabaseController extends Controller
{
    public function db_curriculum()
    {
        Curriculum::truncate();
        $faculties = FacultiesController::set_faculties();
        $data = CurriculumController::curriculums_all_data($faculties);
        foreach ($data as $val) {
            $curriculums = new Curriculum();
            $curriculums->curriculumId = $val->id;
            $curriculums->curriculumName = $val->name;
            $curriculums->specialtyId = $val->specialty->id;
            $curriculums->specialtyCode = $val->specialty->code;
            $curriculums->specialtyName = $val->specialty->name;
            $curriculums->educationYearCode = $val->educationYear->code;
            $curriculums->educationYearName = $val->educationYear->name;
            $curriculums->educationYearCurrent = $val->educationYear->current;
            $curriculums->educationTypeCode = $val->educationType->code;
            $curriculums->educationTypeName = $val->educationType->name;
            $curriculums->educationFormCode = $val->educationForm->code;
            $curriculums->educationFormName = $val->educationForm->name;
            $curriculums->facultyName = $val->facultyName;
            $curriculums->facultyId = $val->facultyId;
            $curriculums->save();
        }
        return redirect()->back()->with('message', 'Curriculums data successfully created');
    }

    public function db_faculties()
    {
        Faculty::truncate();
        $data = FacultiesController::set_faculties();
        foreach ($data as $val) {
            $faculty = new Faculty();
            $faculty->facultyId = $val->id;
            $faculty->facultyName = $val->name;
            $faculty->save();
        }
        return redirect()->back()->with('message', 'Faculties data successfully created');
    }

    public function db_education_years()
    {
        Curriculum::truncate();
        $http_value = 'https://student.karsu.uz/rest/v1/data/classifier-list?classifier=h_education_year';
        $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items[0]->options;
        foreach ($data as $val) {
            $education_year = new EducationYear();
            $education_year->EducationYearCode = $val->code;
            $education_year->EducationYearName = $val->name;
            $education_year->save();
        }
        return redirect()->back()->with('message', 'Education years data successfully created');
    }

    public function db_exam_types()
    {
        ExamType::truncate();
        $http_value = 'https://student.karsu.uz/rest/v1/data/classifier-list?classifier=h_exam_type';
        $data = json_decode(curl_exec(IndexController::auth_bearer($http_value)))->data->items[0]->options;
        foreach ($data as $val) {
            $exam_type = new ExamType();
            $exam_type->ExamTypeCode = $val->code;
            $exam_type->ExamTypeName = $val->name;
            $exam_type->save();
        }
        return redirect()->back()->with('message', 'Exam types data successfully created');
    }
}
