<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationYear;
class EducationYearsController extends Controller
{

    public static function get_education_years(){
        return EducationYear::all();
    }
}
