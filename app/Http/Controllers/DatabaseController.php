<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\FacultiesController;
use App\Models\Curriculum;
class DatabaseController extends Controller
{
    public function db_curriculum (){
        Curriculum::truncate();
        $faculties = FacultiesController::get_faculties();
        $data = CurriculumController::curriculums_all_data($faculties);
        foreach ($data as $val){
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
}
