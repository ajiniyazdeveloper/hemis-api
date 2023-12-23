<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\ControlsController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\CurriculumSubjectsController;
use App\Http\Controllers\GroupController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/faculties', [FacultiesController::class, 'faculties'])->name('faculties');

Route::get('/controls', [ControlsController::class, 'education_year'])->name('education_year');
Route::get('/controls/{education_year}', [ControlsController::class, 'exam_type'])->name('exam_type');
Route::get('/controls/{education_year}/{exam_type}', [ControlsController::class, 'all_controls'])->name('all_controls');

Route::get('/curriculum', [CurriculumController::class, 'curriculum'])->name('curriculum');

Route::get('/curriculum_subjects', [CurriculumSubjectsController::class, 'education_year'])->name('subject_education_year');
Route::get('/curriculum_subjects/{education_year}', [CurriculumSubjectsController::class, 'curriculum_faculties'])->name('curriculum_faculties');
Route::get('/curriculum_subjects/{education_year}/{faculty_id}', [CurriculumSubjectsController::class, 'curriculum_semesters'])->name('curriculum_semesters');
Route::get('/curriculum_subjects/{education_year}/{faculty_id}/{semester}/[curriculums]', [CurriculumSubjectsController::class, 'curriculum_subjects'])->name('curriculum_subjects');
Route::get('/curriculum_subjects/{education_year}/{faculty_id}/{semester}/[curriculums]/[curriculum_semesters]', [CurriculumSubjectsController::class, 'curriculum_subjects_all_data'])->name('curriculum_subjects_all_data');

Route::get('/group', [GroupController::class, 'group'])->name('group');
