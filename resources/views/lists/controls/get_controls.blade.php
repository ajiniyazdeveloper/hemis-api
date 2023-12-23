@extends('lists.layouts.app')
@section("content")
    <div>
        <table>
            <thead>
                <tr class="mb-5">
                    <td>T/N</td>
                    <td>Pa'n</td>
                    <td>Semester</td>
                    <td>Gruppa</td>
                    <td>Fakultet</td>
                    <td>Imtixan tu'ri</td>
                    <td>Qaydnoma</td>
                    <td>Oqitiwshi</td>
                    <td>Auditoriya</td>
                    <td>Sabaq waqti</td>
                    <td>Imtixan Sa'nesi</td>
                </tr>
            </thead>
            <tbody>
                <?php  $i = 1; ?>
                @foreach($controls as $control)
                    <tr class="border-separate border border-slate-500">
                        <td> {{$i++}} </td>
                        <td> {{$control->subject->name}} </td>
                        <td> {{$control->semester->name}} </td>
                        <td> {{$control->group->name}} </td>
                        <td> {{$control->department->name}} </td>
                        <td> {{$control->examType->name}} </td>
                        <td> {{$control->finalExamType->name}} </td>
                        <td> {{$control->employee->name}} </td>
                        <td> {{$control->auditorium->name}} </td>
                        <td> {{$control->lessonPair->start_time}} : {{$control->lessonPair->end_time}}</td>
                        <td> {{ date("d.m.Y", $control->examDate)}} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
