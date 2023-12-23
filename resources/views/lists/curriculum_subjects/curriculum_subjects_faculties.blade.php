@extends('lists.layouts.app')
@section("content")
    <section class="curriculum_subjects_faculties">
        <div>
                <?php
                    $i = 1;
                ?>
                @foreach($faculties as $faculty)
                    <ol class="border-separate border border-slate-500">
                        <li>
                            <a href="{{route("curriculum_semesters", ['education_year'=>$education_year,'faculty_id' => $faculty->id])}}">{{$faculty->name}}</a>
                        </li>
                    </ol>
                @endforeach


        </div>
    </section>
@endsection
