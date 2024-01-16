<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamType;
class ExamTypesController extends Controller
{
    public static function get_exam_types(){
        return ExamType::all();
    }
}
