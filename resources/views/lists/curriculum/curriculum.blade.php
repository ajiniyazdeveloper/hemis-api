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
                    <Td>Education Period</Td>
                </tr>

            <?php
                $i = 1;
            ?>
                @foreach($curriculums as $curriculum)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$curriculum->name}}</td>
                        <td>{{$curriculum->faculty_name}}</td>
                        <td>{{$curriculum->educationYear->name}}</td>
                        <td>{{$curriculum->specialty->code." : ".$curriculum->specialty->name}}</td>
                        <td>{{$curriculum->educationType->name}}</td>
                        <td>{{$curriculum->educationForm->name}}</td>
                        <td>{{$curriculum->education_period."-yil"}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection
