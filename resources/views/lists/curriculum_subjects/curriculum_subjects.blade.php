@extends('lists.layouts.app')
@section("content")
    <section class="curriculum_subjects">
        <div>
            <a href="{{route('curriculum_subjects_all_data', ['education_year' => $education_year,'faculty_id' => $faculty_id, 'semester' => 1, 'curriculum_semesters' => $curriculum_semesters])}}">Wait...</a>
        </div>
    </section>
@endsection
