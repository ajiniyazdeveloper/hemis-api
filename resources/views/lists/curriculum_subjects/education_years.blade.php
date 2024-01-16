@extends('lists.layouts.app')
@section("content")
    <section class="curriculum_subjects_ed_years">
                <ul>
                    @foreach($education_years as $education_year)
                        <li><a href="{{route('curriculum_faculties', ['education_year' => $education_year->toArray()['EducationYearCode']])}}"> {{$education_year->toArray()['EducationYearName']}}</a></li>
                    @endforeach
                </ul>
    </section>
@endsection
