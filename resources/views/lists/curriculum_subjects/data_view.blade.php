@extends('lists.layouts.app')
@section("content")
    <section class="curriculum">
        <div>
            <table>
                <tr>
                    <Td>T/N</Td>
                    <Td>Curriculum_name</Td>
                    <Td>totalCount</Td>

                </tr>

                <?php
                    $i = 1;
                ?>
                @foreach($all_datas as $all_data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$all_data[0]}}</td>
                        <td>{{$all_data[1]}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection
