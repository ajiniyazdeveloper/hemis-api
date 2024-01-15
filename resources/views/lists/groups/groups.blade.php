@extends('lists.layouts.app')
@section("content")
    <section class="group_faculties">
        <div>
            <table>
                <tr>
                    <Td>T/N</Td>
                    <Td>Group</Td>
                    <Td>Curriculum</Td>
                </tr>

                <?php
                    $i = 1;
                ?>
                @foreach($all_groups as $all_group)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$all_group->name}}</td>
                        <td>{{$all_group->curriculum}}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </section>
@endsection
