@extends('lists.layouts.app')
@section("content")
    <section class="group_faculties">
        <div>
            <table>
                <tr>
                    <Td>T/N</Td>
                    <Td>Curriculum</Td>
                    <Td>Group Count</Td>
                </tr>

                <?php
                    $i = 1;
                ?>
                @foreach($all_groups as $all_group)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$all_group[0]}}</td>
                        <td>{{$all_group[1]}}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </section>
@endsection
