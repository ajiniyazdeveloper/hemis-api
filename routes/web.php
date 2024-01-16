<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\ControlsController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\CurriculumSubjectsController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\DatabaseController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/db', [HomeController::class, 'db'])->name('db');

Route::get('/db/db_curriculum', [DatabaseController::class, 'db_curriculum'])->name('db_curriculum');
Route::get('/db/db_faculties', [DatabaseController::class, 'db_faculties'])->name('db_faculties');
Route::get('/db/db_education_years', [DatabaseController::class, 'db_education_years'])->name('db_education_years');
Route::get('/db/db_exam_types', [DatabaseController::class, 'db_exam_types'])->name('db_exam_types');

Route::get('/faculties', [FacultiesController::class, 'faculties'])->name('faculties');

Route::get('/controls', [ControlsController::class, 'education_year'])->name('education_year');
Route::get('/controls/{education_year}', [ControlsController::class, 'exam_type'])->name('exam_type');
Route::get('/controls/{education_year}/{exam_type}', [ControlsController::class, 'all_controls'])->name('all_controls');

Route::get('/curriculum', [CurriculumController::class, 'curriculum'])->name('curriculum');

Route::get('/curriculum_subjects', [CurriculumSubjectsController::class, 'education_year'])->name('subject_education_year');
Route::get('/curriculum_subjects/{education_year}', [CurriculumSubjectsController::class, 'curriculum_faculties'])->name('curriculum_faculties');
Route::get('/curriculum_subjects/{education_year}/{faculty_id}', [CurriculumSubjectsController::class, 'curriculum_semesters'])->name('curriculum_semesters');
Route::get('/curriculum_subjects/{education_year}/{faculty_id}/{semester}', [CurriculumSubjectsController::class, 'curriculum_subjects'])->name('curriculum_subjects');
Route::get('/curriculum_subjects/{education_year}/{faculty_id}/{semester}/[curriculum_semesters]', [CurriculumSubjectsController::class, 'curriculum_subjects_all_data'])->name('curriculum_subjects_all_data');

Route::get('/group_faculties', [GroupController::class, 'group_faculties'])->name('group_faculties');
Route::get('/group_faculties/{faculty_id}', [GroupController::class, 'group'])->name('group_faculty');
