@extends('lists.layouts.app')
@section("content")
    <div class="success">
        @if(Session::has('message'))
            <span>{{Session::get('message')}}</span>
        @endif
    </div>
    <ul>
        <li><a href="{{route('db_curriculum')}}">DB Curriculum</a> </li>
        <li><a href="{{route('db_faculties')}}">DB Faculties</a> </li>
        <li><a href="{{route('db_education_years')}}">DB Education Years</a> </li>
        <li><a href="{{route('db_exam_types')}}">DB Exam Types</a> </li>
    </ul>
@endsection
