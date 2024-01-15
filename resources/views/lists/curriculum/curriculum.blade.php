@extends('lists.layouts.app')
@section("content")
    <section class="curriculum">
        <div>
            <table>
                <tr>
                    <Td>T/N</Td>
                    <Td>Curriculum</Td>
                    <Td>Faculty</Td>
                    <Td>Education Year</Td>
                    <Td>Specialty</Td>
                    <Td>Education Type</Td>
                    <Td>Education Form</Td>
                </tr>

            <?php
                $i = 1;
            ?>
                @foreach($curriculums as $curriculum)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$curriculum->toArray()['curriculumName']}}</td>
                        <td>{{$curriculum->toArray()['facultyName']}}</td>
                        <td>{{$curriculum->toArray()['educationYearName']}}</td>
                        <td>{{$curriculum->toArray()['specialtyCode']." : ".$curriculum->toArray()['specialtyName']}}</td>
                        <td>{{$curriculum->toArray()['educationTypeName']}}</td>
                        <td>{{$curriculum->toArray()['educationFormName']}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection
