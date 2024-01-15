@extends('lists.layouts.app')
@section("content")
    <section class="curriculum_semesters">
        <a href="{{route("curriculum_subjects", ['education_year' => $education_year,'faculty_id' => $faculty_id, 'semester' => 0, ])}}">ODD semester</a><br>
        <a href="{{route("curriculum_subjects", ['education_year' => $education_year,'faculty_id' => $faculty_id, 'semester' => 1, ])}}">EVEN semester</a>
    </section>
@endsection
