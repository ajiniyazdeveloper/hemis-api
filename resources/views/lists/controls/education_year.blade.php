@extends('lists.layouts.app')
@section('content')
    <div class="education_year">
        <ul>
            @foreach($education_years as $education_year)
                <li><a href="{{route('exam_type', ['education_year' => $education_year->toArray()['EducationYearCode']])}}"> {{$education_year->toArray()['EducationYearName']}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
