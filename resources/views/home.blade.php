@extends('lists.layouts.app')
@section("content")
    <ul>
        <li><a href="{{route('db')}}">Database Create</a></li>
    </ul>
    <ul>
        <li><a href="{{route('faculties')}}">Faculties</a> </li>
        <li><a href="{{route('education_year')}}">Controls</a> </li>
        <li><a href="{{route('curriculum')}}">Curriculum</a> </li>
        <li><a href="{{route('subject_education_year')}}">Curriculum-Subjects</a> </li>
        <li><a href="{{route('group_faculties')}}">Group</a> </li>
    </ul>
@endsection
