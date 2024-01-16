@extends('lists.layouts.app')
@section("content")
    <section class="exam_type">
        <div>
            <ul>
                @foreach($exam_types as $exam_type)
                    <li><a href="{{route('all_controls', ['exam_type' => $exam_type->toArray()['ExamTypeCode'], 'education_year' => $education_year,])}}"> {{$exam_type->toArray()['ExamTypeName']}} </a></li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
