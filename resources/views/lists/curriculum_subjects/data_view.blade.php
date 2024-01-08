@extends('lists.layouts.app')
@section("content")
    <section class="curriculum">
        <div>
            <table>
                <tr>
                    <Td>T/N</Td>
                    <Td>Curriculum_name</Td>
                    <Td>Subject_name</Td>
                    <Td>RatingGrade</Td>

                </tr>

                <?php
                    $i = 1;
                ?>
                @foreach($all_datas as $all_data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$all_data->curriculum_name}}</td>
                        <td>{{$all_data->subject->name}}</td>
                        <td>{{$all_data->ratingGrade->name}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection
